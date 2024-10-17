<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the number from the POST request
    $number = (int) $_POST['number'];

    // Check if the number is even or odd
    if ($number % 2 == 0) {
        echo "The number $number is even.";
    } else {
        echo "The number $number is odd.";
    }
} else {
    // Form for user input (output HTML directly within PHP)
    echo '<form method="post" action="">
            <label for="number">Enter a number:</label>
            <input type="number" id="number" name="number" required>
            <br><br>
            <input type="submit" value="Check Parity">
          </form>';
}
?>
