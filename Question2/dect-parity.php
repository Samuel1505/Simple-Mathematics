<?php
function detect_parity($number) {
    
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "Odd";
    }
}

// Example usage:
$number = 15; 
$result = detect_parity($number);
echo "The number $number is $result.\n";
?>
