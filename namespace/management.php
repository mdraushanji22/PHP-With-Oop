<?php
include("./teacher.php");
include("./student.php");

$teacher = new teacher\joinDate();
$teacher->joiningDate();

$student = new student\joinDate();
echo "<br>";
$student->admissionDate();
