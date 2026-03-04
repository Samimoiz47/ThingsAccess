<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::with(['author', 'category', 'tags'])->published();

        if ($request->has('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        if ($request->has('tag')) {
            $query->whereHas('tags', function ($q) use ($request) {
                $q->where('slug', $request->tag);
            });
        }

        $posts = $query->latest('published_at')->paginate(10);

        $categories = Category::withCount('posts')->get();
        $tags = Tag::withCount('posts')->get();

        return view('blog.index', compact('posts', 'categories', 'tags'));
    }

    public function show($slug)
    {
        $post = Post::with(['author', 'category', 'tags', 'comments' => function ($query) {
            $query->approved()->latest();
        }])->where('slug', $slug)->published()->firstOrFail();

        // Get related posts from same category, excluding current post
        $relatedPosts = Post::with(['author', 'category'])
            ->where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->published()
            ->latest('published_at')
            ->take(3)
            ->get();

        // SEO meta
        $metaTitle = $post->meta_title ?: $post->title;
        $metaDescription = $post->meta_description ?: $post->excerpt;
        $ogTitle = $post->og_title ?: $post->title;
        $ogDescription = $post->og_description ?: $post->excerpt;
        $ogImage = $post->featured_image ?: 'images/default-og.jpg';

        return view('blog.show', compact('post', 'relatedPosts', 'metaTitle', 'metaDescription', 'ogTitle', 'ogDescription', 'ogImage'));
    }

    public function storeComment(Request $request, $slug)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'content' => 'required|string|max:2000',
        ]);

        $post = Post::where('slug', $slug)->published()->firstOrFail();

        Comment::create([
            'post_id' => $post->id,
            'author_name' => $request->name,
            'author_email' => $request->email,
            'content' => $request->content,
            'approved' => false, // Comments need approval
        ]);

        return back()->with('success', 'Your comment has been submitted and is awaiting approval.');
    }
}