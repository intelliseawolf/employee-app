<?php include("config.php"); ?>
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
            <!-- submit the employee id to the employee.php -->
            <form role="form" method="post" action="./employee.php" class="employee-form">
                <h2 class="mb-4">Employee</h2>
                <fieldset>
                    <?php
                        $employee_list = $mysql->query("SELECT * FROM employee");
                    ?>
                    <select class="form-select form-select-lg mb-3" name="employee_id" aria-label=".form-select-lg">
                        <?php
                            while($row = $employee_list->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></option>
                        <?php } ?>
                    </select>
                </fieldset>
                <input type="submit" name="employee" class="btn btn-lg btn-success btn-block" value="Select" />
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <?php $mysql->close(); ?>
</body>
</html>
