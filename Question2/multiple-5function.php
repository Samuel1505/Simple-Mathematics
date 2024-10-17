<?php
function display_multiples_of_5() {
    // Display multiples of 5 between 0 and 100
    for ($i = 0; $i <= 100; $i += 5) {
        echo $i . "<br>";
    }
}

display_multiples_of_5();
?>
