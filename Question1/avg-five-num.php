<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the five numbers from the POST request
    $num1 = (float) $_POST['num1'];
    $num2 = (float) $_POST['num2'];
    $num3 = (float) $_POST['num3'];
    $num4 = (float) $_POST['num4'];
    $num5 = (float) $_POST['num5'];

    // Calculate the sum of the five numbers
    $sum = $num1 + $num2 + $num3 + $num4 + $num5;

    // Calculate the average
    $average = $sum / 5;

    // Output the result
    echo "The average of the numbers $num1, $num2, $num3, $num4, and $num5 is: $average";
} else {

    echo '<form method="post" action="">
            <label for="num1">Number 1:</label>
            <input type="number" step="any" id="num1" name="num1" required>
            <br><br>
            <label for="num2">Number 2:</label>
            <input type="number" step="any" id="num2" name="num2" required>
            <br><br>
            <label for="num3">Number 3:</label>
            <input type="number" step="any" id="num3" name="num3" required>
            <br><br>
            <label for="num4">Number 4:</label>
            <input type="number" step="any" id="num4" name="num4" required>
            <br><br>
            <label for="num5">Number 5:</label>
            <input type="number" step="any" id="num5" name="num5" required>
            <br><br>
            <input type="submit" value="Calculate Average">
          </form>';
}
?>
