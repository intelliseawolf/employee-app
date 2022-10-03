<?php
include("config.php");
// check if the employee id is exists
if (!empty($_POST['employee_id'])) {
    $id = $_POST['employee_id'];
    $employee = $mysql->query("SELECT * FROM employee WHERE id='$id'");

    // check if the employee is exists on the db
    if ($employee->num_rows == 1) {
        // get the first and last name
        $row = $employee->fetch_assoc();
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
    }
} else {
    header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee</title>
    <meta name="description" content="employee application">
    <meta name="author" content="77896,77907,77969">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .employee-form {
            margin-top: 10vh;
        }
    </style>
</head>
<body>

    <div id="wrapper">
        <div class="container">
            <div class="d-flex justify-content-between mt-5">
                <h2>Employee</h2>
                <a href="./back.php" type="button" class="btn btn-primary ml-auto">Back</a>
            </div>
            <div class="d-flex flex-column mt-5">
                <!-- You can show the first and last name -->
                <span><b>First Name:</b> <?php echo $first_name; ?></span>
                <span><b>Last Name:</b> <?php echo $last_name; ?></span>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <?php $mysql->close(); ?>

</body>
</html>
