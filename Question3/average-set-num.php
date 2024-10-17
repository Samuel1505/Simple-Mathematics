<?php
function calculate_average(...$numbers) {
    // Calculate the sum of the numbers
    $sum = array_sum($numbers);
    
    // Calculate the average
    $average = $sum / count($numbers);
    
    // Return the average
    return $average;
}

$avg = calculate_average(10, 20, 30, 40, 50);
echo "The average is: $avg\n";
?>
