<?php
function display_multiples_of_number($number, $start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        if ($i % $number == 0) {
            echo $i . "<br>";
        }
    }
}

display_multiples_of_number(5, 1, 50);
?>
