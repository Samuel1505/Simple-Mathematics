<?php
function display_odd_numbers($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 != 0) {
            echo $i . "<br>";
        }
    }
}

display_odd_numbers(1, 20);
?>
