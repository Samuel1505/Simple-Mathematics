<?php
function countdown($start) {
    for ($i = $start; $i >= 0; $i--) {
        echo $i . "<br>";
    }
}

countdown(10);
?>
