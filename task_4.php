<?php

/*
 * ********** Task 4: Multidimensional Array **********
 * Create a multidimensional array called $studentGrades to store the grades of three students.
 * Each student has grades for three subjects: Math, English, and Science.
 * Write a PHP function which takes "$studentGrades" as an argument
 * to calculate and print the average grade for each student.
 */

$studentGrades = [
    "David" => ["Math" => 85, "English" => 92, "Science" => 78],
    "John" => ["Math" => 88, "English" => 95, "Science" => 90],
    "Lila" => ["Math" => 75, "English" => 82, "Science" => 88]
];
function calculateAndPrintAverageGrades(array $studentGrades): void {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;
        echo "Student: $student, Average Grade: $average\n";
    }
}

calculateAndPrintAverageGrades($studentGrades);
