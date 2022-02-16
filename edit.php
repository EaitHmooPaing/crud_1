<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Test</title>
    
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">

        <!-- <?php

$studentId = $_GET['student-id'];
$conn = mysqli_connect("localhost", "root", "", "student");
$sql = "SELECT * FROM student WHERE id=$studentId";
$result = mysqli_query($conn,$sql);

$student = mysqli_fetch_assoc($result); 

print_r($student);

?> -->

        <form action="update.php" class="mt-5" method="post">
            <input type="hidden" value="<?php echo $student['id']; ?>" name="id">
            <div class="row align-items-end">
                <div class="col-3">
                    <label class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $student['name']?>">
                </div>

                <div class="col-3">
                    <label class="form-label">Date of Birth</label>
                    <input type="date" name="bd" class="form-control" value="<?php echo $student['bd']?>">
                </div>

                <div class="col-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $student['email']?>">
                </div>

                <div class="col">
                    <button class="btn btn-lg btn-primary">Update Student</button>
                </div>
            </div>
</form>

<hr>


    
        </div>
    </div>

</div>
    



</body>
</html>