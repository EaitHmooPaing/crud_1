<?php

$conn = mysqli_connect("localhost", "root", "", "student");


$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$bd = $_POST['bd'];


$sql = "UPDATE student SET name ='$name',bd='$bd',email='$email' WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    header('Location:index.php');
}
   