<?php require_once "./classes/app.php"; ?>
<?php require_once "./modules/students.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student details</title>
</head>

<body>
    <?php $student = $students->single(); ?>


    <h1>Student details</h1>
    <a href="students.php">Go back</a>
    <table>
        <tr>
            <td>ID</td>
            <td><?= $student["id"]; ?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><?= $student["name"]; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $student["email"]; ?></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><?= $student["phone"]; ?></td>
        </tr>
    </table>

</body>

</html>