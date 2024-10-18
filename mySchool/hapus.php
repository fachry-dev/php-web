<?php

require 'function.php';

$nisn = $_GET['nisn'];
$query = "DELETE FROM students WHERE nisn=$nisn";
$query2 = "DELETE FROM students_subjects WHERE nisn=$nisn";
mysqli_query($connection, $query2);
mysqli_query($connection, $query);
header("Location: index.php");
