<?php

$students = array("Ramu", "Dhamu", "Shamu", "Monu", "Sonu");

$students_associative = array(
    "Student1" => "Ramu",
    "Student2" => "Dhamu",
    "Student3" => "Shamu",
    "Student4" => "Monu",
    "Student5" => "Sonu"
);

echo "Original Associative Array:\n";
print_r($students_associative);
echo "<br><br>";

asort($students_associative);
echo "\nSorted in Ascending Order:\n";
print_r($students_associative);
echo "<br><br>";

arsort($students_associative);
echo "\nSorted in Descending Order:\n";
print_r($students_associative);
?>