<?php
function triangle_area($base, $height) {
    // Calculate the area of the triangle
    $area = 0.5 * $base * $height;

    return $area;
}

$base = 10;
$height = 5;
$area = triangle_area($base, $height);
echo "The area of a triangle with base $base and height $height is: $area\n";
?>
