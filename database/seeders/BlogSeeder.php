<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    public function run()
    {
        // Create categories if they don't exist
        $categories = [
            ['name' => 'IoT', 'slug' => 'iot', 'description' => 'Internet of Things solutions and technologies'],
            ['name' => 'Software Development', 'slug' => 'software', 'description' => 'Modern software development practices'],
            ['name' => 'Industry Insights', 'slug' => 'insights', 'description' => 'Deep dives into industry trends'],
            ['name' => 'Mobile', 'slug' => 'mobile', 'description' => 'Mobile app development and security'],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }

        // Create tags if they don't exist
        $tags = [
            ['name' => 'Edge Computing', 'slug' => 'edge-computing'],
            ['name' => 'Microservices', 'slug' => 'microservices'],
            ['name' => 'UX Design', 'slug' => 'ux-design'],
            ['name' => 'Biometric Security', 'slug' => 'biometric-security'],
            ['name' => 'LoRaWAN', 'slug' => 'lorawan'],
            ['name' => 'Digital Transformation', 'slug' => 'digital-transformation'],
            ['name' => 'Manufacturing', 'slug' => 'manufacturing'],
            ['name' => 'Enterprise Software', 'slug' => 'enterprise-software'],
        ];

        foreach ($tags as $tag) {
            Tag::firstOrCreate(
                ['slug' => $tag['slug']],
                $tag
            );
        }

        // Get the first user as author, or create one if none exists
        $author = User::first();
        if (!$author) {
            $author = User::factory()->create([
                'name' => 'ThingsAccess Author',
                'email' => 'author@thingsaccess.com',
            ]);
        }

        // Create sample posts
        $posts = [
            [
                'title' => 'The Future of Edge Computing in Manufacturing',
                'slug' => 'future-edge-computing-manufacturing',
                'excerpt' => 'How processing data closer to the source is reducing latency and revolutionizing the factory floor.',
                'content' => '<p>Edge computing represents a paradigm shift in how we process and analyze data in industrial environments. By moving computation closer to the data source, we eliminate latency issues and enable real-time decision making.</p>

<h2>The Edge Computing Advantage</h2>
<p>In traditional cloud computing models, data from IoT sensors travels to centralized data centers for processing. This introduces latency that can be critical in manufacturing environments where split-second decisions can impact product quality and operational efficiency.</p>

<p>Edge computing addresses this by processing data locally, at the "edge" of the network. This approach offers several key benefits:</p>

<ul>
<li><strong>Reduced Latency:</strong> Data processing happens in milliseconds rather than seconds</li>
<li><strong>Bandwidth Optimization:</strong> Only relevant insights are sent to the cloud</li>
<li><strong>Improved Reliability:</strong> Operations continue even with intermittent connectivity</li>
<li><strong>Enhanced Security:</strong> Sensitive data can be processed locally</li>
</ul>

<h2>Real-World Applications</h2>
<p>Manufacturing facilities are already seeing the benefits of edge computing in various applications:</p>

<h3>Predictive Maintenance</h3>
<p>Sensors on production equipment continuously monitor vibration, temperature, and other parameters. Edge devices analyze this data in real-time to predict equipment failures before they occur, minimizing downtime and maintenance costs.</p>

<h3>Quality Control</h3>
<p>Computer vision systems at the edge inspect products as they move down the production line, identifying defects instantly and triggering automated corrections.</p>

<h2>Implementation Considerations</h2>
<p>Successful edge computing deployment requires careful planning:</p>

<ol>
<li><strong>Hardware Selection:</strong> Choose edge devices that match your computational needs</li>
<li><strong>Network Architecture:</strong> Design for reliable connectivity between edge and cloud</li>
<li><strong>Data Strategy:</strong> Determine what data to process locally vs. send to the cloud</li>
<li><strong>Security Framework:</strong> Implement robust security measures for distributed systems</li>
</ol>

<h2>The Road Ahead</h2>
<p>As 5G networks become more widespread and edge computing hardware becomes more powerful and affordable, we can expect to see even more sophisticated applications. The manufacturing industry is just beginning to scratch the surface of what\'s possible with edge computing.</p>',
                'status' => 'published',
                'published_at' => now()->subDays(5),
                'author_id' => $author->id,
                'category_id' => 1, // IoT
                'meta_title' => 'The Future of Edge Computing in Manufacturing',
                'meta_description' => 'Discover how edge computing is revolutionizing manufacturing with reduced latency and real-time decision making.',
            ],
            [
                'title' => 'Scaling Microservices for Enterprise',
                'slug' => 'scaling-microservices-enterprise',
                'excerpt' => 'Best practices for maintaining reliability and consistency while scaling your service architecture globally.',
                'content' => '<p>Microservices architecture has become the gold standard for building scalable enterprise applications. However, scaling microservices effectively requires a deep understanding of distributed systems principles and careful architectural decisions.</p>

<h2>The Scaling Challenge</h2>
<p>Unlike monolithic applications where scaling means adding more servers, microservices introduce complexity in several areas:</p>

<ul>
<li><strong>Service Discovery:</strong> How do services find each other dynamically?</li>
<li><strong>Load Balancing:</strong> How do we distribute traffic across multiple instances?</li>
<li><strong>Data Consistency:</strong> How do we maintain data integrity across services?</li>
<li><strong>Monitoring:</strong> How do we track performance across hundreds of services?</li>
</ul>

<h2>Essential Scaling Patterns</h2>
<p>Several proven patterns help manage microservices scaling:</p>

<h3>API Gateway Pattern</h3>
<p>An API gateway serves as a single entry point for all client requests, handling cross-cutting concerns like authentication, rate limiting, and request routing.</p>

<h3>Service Mesh</h3>
<p>Service meshes like Istio provide infrastructure for service-to-service communication, including load balancing, circuit breaking, and observability.</p>

<h3>Database per Service</h3>
<p>Each microservice maintains its own database, ensuring loose coupling and independent scaling of data layers.</p>

<h2>Monitoring and Observability</h2>
<p>Effective monitoring is crucial for scaled microservices:</p>

<ul>
<li><strong>Distributed Tracing:</strong> Track requests across service boundaries</li>
<li><strong>Metrics Collection:</strong> Monitor performance and error rates</li>
<li><strong>Log Aggregation:</strong> Centralize logs from all services</li>
<li><strong>Health Checks:</strong> Ensure service availability</li>
</ul>

<h2>Organizational Considerations</h2>
<p>Scaling microservices isn\'t just technical—it requires organizational changes:</p>

<ol>
<li><strong>Team Structure:</strong> Organize teams around business capabilities</li>
<li><strong>DevOps Culture:</strong> Foster collaboration between development and operations</li>
<li><strong>Automation:</strong> Implement CI/CD pipelines for rapid deployment</li>
<li><strong>Documentation:</strong> Maintain comprehensive API documentation</li>
</ol>',
                'status' => 'published',
                'published_at' => now()->subDays(12),
                'author_id' => $author->id,
                'category_id' => 2, // Software Development
                'meta_title' => 'Scaling Microservices for Enterprise Applications',
                'meta_description' => 'Learn best practices for scaling microservices architecture in enterprise environments.',
            ],
            [
                'title' => 'Designing for the Industrial Internet',
                'slug' => 'designing-industrial-internet',
                'excerpt' => 'Key UX principles for complex industrial control systems and data-rich dashboards.',
                'content' => '<p>The Industrial Internet of Things (IIoT) presents unique challenges for user experience design. Unlike consumer applications, industrial interfaces must serve expert users who need to monitor complex systems and make critical decisions under pressure.</p>

<h2>Understanding Industrial Users</h2>
<p>Industrial operators, engineers, and managers have different needs than consumer users:</p>

<ul>
<li><strong>Expertise Level:</strong> Deep domain knowledge requires sophisticated interfaces</li>
<li><strong>Critical Operations:</strong> Interfaces support mission-critical processes</li>
<li><strong>Data Density:</strong> Must display large amounts of technical data</li>
<li><strong>Environmental Factors:</strong> Often used in challenging conditions</li>
</ul>

<h2>Core UX Principles</h2>
<p>Effective industrial UX design follows several key principles:</p>

<h3>Progressive Disclosure</h3>
<p>Present information hierarchically, allowing users to drill down from high-level overviews to detailed data as needed.</p>

<h3>Contextual Actions</h3>
<p>Actions should be available where and when users need them, reducing cognitive load during critical operations.</p>

<h3>Visual Hierarchy</h3>
<p>Use clear visual hierarchies to help users quickly identify the most important information and potential issues.</p>

<h2>Dashboard Design Patterns</h2>
<p>Industrial dashboards benefit from specific design patterns:</p>

<h3>Status Overview Cards</h3>
<p>Compact cards showing key metrics and status indicators for different system components.</p>

<h3>Trend Visualization</h3>
<p>Time-series charts and trend lines help identify patterns and anomalies in operational data.</p>

<h3>Alert Management</h3>
<p>Clear alert systems with appropriate prioritization and escalation mechanisms.</p>

<h2>Accessibility and Safety</h2>
<p>Industrial interfaces must consider safety and accessibility:</p>

<ul>
<li><strong>Color Coding:</strong> Use color-blind friendly palettes</li>
<li><strong>Font Sizes:</strong> Ensure readability in various lighting conditions</li>
<li><strong>Touch Targets:</strong> Design for gloved hands and imprecise input</li>
<li><strong>Emergency Controls:</strong> Make critical controls easily accessible</li>
</ul>

<h2>Future Directions</h2>
<p>As IIoT systems become more sophisticated, UX design will need to evolve:</p>

<ol>
<li><strong>AI Assistance:</strong> Intelligent interfaces that anticipate user needs</li>
<li><strong>Augmented Reality:</strong> AR overlays for equipment maintenance</li>
<li><strong>Voice Interfaces:</strong> Hands-free operation in hazardous environments</li>
<li><strong>Personalization:</strong> Adaptive interfaces based on user roles and preferences</li>
</ol>',
                'status' => 'published',
                'published_at' => now()->subDays(18),
                'author_id' => $author->id,
                'category_id' => 3, // Industry Insights
                'read_time' => 6,
                'meta_title' => 'Designing User Experiences for the Industrial Internet',
                'meta_description' => 'Explore UX principles and design patterns for industrial control systems and IIoT applications.',
            ],
        ];

        foreach ($posts as $postData) {
            $post = Post::create($postData);

            // Attach random tags
            $tagIds = Tag::inRandomOrder()->take(rand(2, 4))->pluck('id');
            $post->tags()->attach($tagIds);
        }

        // Create a sample comment
        $firstPost = Post::first();
        Comment::create([
            'post_id' => $firstPost->id,
            'author_name' => 'John Smith',
            'author_email' => 'john@example.com',
            'content' => 'Great article! I\'ve been implementing edge computing in our manufacturing facility and have seen significant improvements in our OEE metrics.',
            'approved' => true,
        ]);
    }
}