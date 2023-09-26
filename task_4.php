<?php

$studentGrades = [
   "student_1" => ["Math" => 95, "English" => 92, "Science" => 85],
   "student_2" => ["Math" => 80, "English" => 72, "Science" => 80],
   "student_3" => ["Math" => 74, "English" => 66, "Science" => 45]
];

function calculateAverageGrade($studentGrades) {
   foreach ($studentGrades as $student => $grades) {
      $total = 0;
      foreach ($grades as $subject => $grade) {
         $total += $grade;
      }
      $average = $total / count($grades);
      if ($average>=80){
        $finalGrade = "A+";
      }else if ($average>=70){
        $finalGrade = "A-";
      }else if ($average>=60){
        $finalGrade = "A";
      }else if ($average>=50){
        $finalGrade = "B";
      }else if ($average>=40){
        $finalGrade = "C";
      }else if ($average>=33){
        $finalGrade = "D";
      }else{
        $finalGrade = "F";
      }
      printf ("Average grade for %s is ( %s ). Because his avarage mark is %02.02f \n", $student, $finalGrade, $average );
   }
}

calculateAverageGrade($studentGrades);