<?php
function cuboid_volume($length, $width, $height) {
    // Calculate the volume of the cuboid
    $volume = $length * $width * $height;
    
    // Return the calculated volume
    return $volume;
}

// Example usage:
$length = 10;
$width = 5;
$height = 8;
$volume = cuboid_volume($length, $width, $height);
echo "The volume of a cuboid with length $length, width $width, and height $height is: $volume\n";
?>
