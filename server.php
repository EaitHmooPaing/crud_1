<?php 


$conn = mysqli_connect("localhost", "root", "", "student");
if(!$conn){
    die("Connection fail".mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$bd = $_POST['bd'];



$sql = "INSERT INTO student (name,bd,email) VALUES ('$name','$bd','$email')";

if(mysqli_query($conn,$sql)){
    echo "Data is inserted";
}else{
    echo mysqli_error($conn);
}

// echo "<pre>";
// print_r($_POST);