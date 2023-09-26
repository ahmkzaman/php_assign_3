<?php
//Task 4: Multidimensional Array
function calculateAverageGrades($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        $total = 0;
        foreach ($grades as $grade) {
            $total += $grade;
        }

        $average = $total / count($grades);
        echo "Average grade for $student: $average.\n";
    }
}

$studentGrades = array(
    'Student1' => array('Math' => 85, 'English' => 92, 'Science' => 60),
    'Student2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student3' => array('Math' => 75, 'English' => 80, 'Science' => 73)
);

calculateAverageGrades($studentGrades);
