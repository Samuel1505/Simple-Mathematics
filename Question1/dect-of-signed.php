<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $number = (float) $_POST['number'];

    // Check if the number is positive, negative, or zero
    if ($number > 0) {
        echo "The number $number is positive.";
    } elseif ($number < 0) {
        echo "The number $number is negative.";
    } else {
        echo "The number $number is zero.";
    }
} else {
  
    echo '<form method="post" action="">
            <label for="number">Enter a number:</label>
            <input type="number" id="number" name="number" step="any" required>
            <br><br>
            <input type="submit" value="Check Sign">
          </form>';
}
?>
