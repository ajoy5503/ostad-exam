<?php
function calculateResult($marks) {
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid.\n";
            return;
        }
        if ($mark < 33) {
            echo "The student has failed.\n";
            return;
        }
    }


    $totalMarks = array_sum($marks);
    $averageMarks = $totalMarks / count($marks);


    switch (true) {
        case ($averageMarks >= 80):
            $grade = 'A+';
            break;
        case ($averageMarks >= 70):
            $grade = 'A';
            break;
        case ($averageMarks >= 60):
            $grade = 'A-';
            break;
        case ($averageMarks >= 50):
            $grade = 'B';
            break;
        case ($averageMarks >= 40):
            $grade = 'C';
            break;
        case ($averageMarks >= 33):
            $grade = 'D';
            break;
        default:
            $grade = 'F'; 
            break;
    }

    echo "Total Marks: $totalMarks\n";
    echo "Average Marks: " . number_format($averageMarks, 2) . "\n";
    echo "Grade: $grade\n";
}

$marks = [70, 82, 65, 90, 55]; 
calculateResult($marks);