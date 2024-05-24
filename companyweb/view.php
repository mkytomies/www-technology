<?php
require_once "config.php";

$id = $_GET["id"];
$query = "select * from employees where Id = $id";
$op = mysqli_query($conn, $query);

if($employee = mysqli_fetch_assoc($op)) {
    $name = $employee["Name"];
    $email = $employee["Email"];
}
else {
    header("Location: list.php");
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>View</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h1>View Employee</h1>
                </div>

                <div class="mb-3">
                    <label><strong>Name</strong></label>
                    <label><?php echo $name ?></label>
                </div>

                <div class="mb-3">
                    <label><strong>Email</strong></label>
                    <label><?php echo $email ?></label>
                </div>

                <a href="list.php" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</body>
</html>