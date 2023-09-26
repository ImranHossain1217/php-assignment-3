<?php
// Task 4: Multidimensional Array

$studentGrades = [
    ["Math" => 85, "English" => 90, "Science" => 78],
    ["Math" => 92, "English" => 88, "Science" => 95],
    ["Math" => 78, "English" => 85, "Science" => 90],
];
function gradeAverage($studentGrades)
{
    foreach ($studentGrades as $grade) {
        $total = array_sum($grade);
        $average = $total / count($grade);

        echo "Average Grade: {$average} <br>";
    }
}
gradeAverage($studentGrades);

?>