<?php

$studentId = $_GET['student-id'];
$conn = mysqli_connect("localhost", "root", "", "student");
$sql = "Delete FROM student WHERE id=$studentId";
$result = mysqli_query($conn,$sql);


header("Location:index.php");