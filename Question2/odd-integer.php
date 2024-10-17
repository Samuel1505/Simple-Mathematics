<?php
function display_odd_integers() {
    
    for ($i = 1; $i <= 100; $i += 2) {
        echo $i . "<br>";
    }
}

display_odd_integers();
?>
