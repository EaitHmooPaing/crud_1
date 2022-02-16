<?php

$studentId = $_GET['student-id'];
$conn = mysqli_connect("localhost", "root", "", "student");
$sql = "SELECT * FROM student WHERE id=$studentId";
$result = mysqli_query($conn,$sql);

$student = mysqli_fetch_assoc($result); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data </title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <p>
                            name - <?php echo $student['name'] ?>
                            <br>
                            Date of Birth - <?php echo $student['bd']?>
                            <br>
                            name - <?php echo $student['email'] ?>
                            <br>
                        </p>
                        <a href="index.php" class="btn btn-primary">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

