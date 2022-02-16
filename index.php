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

        <form action="server.php" class="mt-5" method="post">
            <div class="row align-items-end">
                <div class="col-3">
                    <label class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="col-3">
                    <label class="form-label">Date of Birth</label>
                    <input type="date" name="bd" class="form-control">
                </div>

                <div class="col-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="col">
                    <button class="btn btn-lg btn-primary">Add Student</button>
                </div>
            </div>
</form>

<hr>

<?php

$conn = mysqli_connect("localhost", "root", "", "student");

$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql); ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>
                    Actions
                </th>

                <th>Created At</th>
            </tr>
        </thead>

        <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)){ ?>

            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['bd'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td>
                    <a href="detail.php?student-id=<?php echo $row['id']; ?>" class="btn btn-primary">Detail</a>
                    <a href="edit.php?student-id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="delete.php?student-id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
                <td><?php echo $row['created_at'] ?></td>
                
            </tr>
            <?php } ?>
        </tbody>
    </table>
        </div>
    </div>

</div>
    



</body>
</html>