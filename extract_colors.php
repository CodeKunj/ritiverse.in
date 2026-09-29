<?php
$svg = file_get_contents(__DIR__ . '/eagle_transparent.svg');
if (preg_match('/xlink:href="data:image\/png;base64,([^"]+)"/', $svg, $matches)) {
    $pngData = base64_decode($matches[1]);
    file_put_contents(__DIR__ . '/public/assets/images/logo.png', $pngData);
    copy(__DIR__ . '/eagle_transparent.svg', __DIR__ . '/public/assets/images/logo.svg');
    
    // Sample colors from the image using GD if available
    if (extension_loaded('gd')) {
        $img = imagecreatefromstring($pngData);
        $w = imagesx($img);
        $h = imagesy($img);
        
        $colorCounts = [];
        for ($x = 0; $x < $w; $x += 10) {
            for ($y = 0; $y < $h; $y += 10) {
                $rgba = imagecolorat($img, $x, $y);
                $alpha = ($rgba >> 24) & 0x7F;
                if ($alpha > 100) continue; // skip transparent
                $r = ($rgba >> 16) & 0xFF;
                $g = ($rgba >> 8) & 0xFF;
                $b = $rgba & 0xFF;
                
                // Group slightly to find dominant colors
                $hex = sprintf('#%02X%02X%02X', $r, $g, $b);
                $key = sprintf('%d,%d,%d', round($r/16)*16, round($g/16)*16, round($b/16)*16);
                if (!isset($colorCounts[$hex])) {
                    $colorCounts[$hex] = 0;
                }
                $colorCounts[$hex]++;
            }
        }
        arsort($colorCounts);
        echo "Top colors:\n";
        print_r(array_slice($colorCounts, 0, 25));
    } else {
        echo "GD not loaded\n";
    }
} else {
    echo "No PNG found in SVG\n";
}
