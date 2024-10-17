<?php
function calculate_average($num1, $num2, $num3, $num4, $num5) {
    // Calculate the sum of the five numbers
    $sum = $num1 + $num2 + $num3 + $num4 + $num5;
    
    $average = $sum / 5;

    return $average;
}

$num1 = 10;
$num2 = 20;
$num3 = 30;
$num4 = 40;
$num5 = 50;
$average = calculate_average($num1, $num2, $num3, $num4, $num5);
echo "The average of the numbers $num1, $num2, $num3, $num4, and $num5 is: $average\n";
?>
