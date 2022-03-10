<?php
$student=array('Swapna','Lekshmi','Sanoj','Zaira');
echo "Array is:"."<br>";
print_r($student);
echo "<br>"."Array in ascending order:"."<br>";
asort($student);
print_r($student);
arsort($student);
echo "<br>"."Array in descending order:"."<br>";
print_r($student);
?>