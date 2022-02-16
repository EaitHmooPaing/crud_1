<?php

$conn = mysqli_connect("localhost", "root", "", "student");

$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql);

echo "<pre>";
if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
     echo $row['name']. "...".$row['bd']."...".$row['email']."<br>";
    }
}