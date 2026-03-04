<?php
// Simple script to convert PNG to WebP
$pngPath = 'public/images/things access logo.png';
$webpPath = 'public/images/things access logo.webp';

if (file_exists($pngPath)) {
    $image = imagecreatefrompng($pngPath);
    if ($image !== false) {
        imagewebp($image, $webpPath, 80); // 80% quality
        imagedestroy($image);
        echo "Converted to WebP successfully.\n";
    } else {
        echo "Failed to load PNG image.\n";
    }
} else {
    echo "PNG file not found.\n";
}
?>
