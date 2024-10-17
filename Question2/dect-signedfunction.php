<?php
function detect_sign($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}

$number1 = 10;
$number2 = -5;
$number3 = 0;

echo "Number $number1 is " . detect_sign($number1) . "\n";
echo "Number $number2 is " . detect_sign($number2) . "\n";
echo "Number $number3 is " . detect_sign($number3) . "\n";
?>
