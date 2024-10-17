<?php
function determine_grade($score) {
    if ($score >= 0 && $score <= 100) {
        if ($score >= 90) {
            return "A";
        } elseif ($score >= 80) {
            return "B";
        } elseif ($score >= 70) {
            return "C";
        } elseif ($score >= 60) {
            return "D";
        } else {
            return "F";
        }
    } else {
        return "Invalid score";
    }
}

$score = 85;
$grade = determine_grade($score);
echo "Score: $score, Grade: $grade\n";
?>
