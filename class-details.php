<?php require_once "./classes/app.php"; ?>
<?php require_once "./modules/classes.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class details</title>
</head>

<body>
    <?php $class = $classes->single(); ?>


    <h1>class details</h1>
    <a href="classes.php">Go back</a>
    <table>
        <tr>
            <td>ID</td>
            <td><?= $class["id"]; ?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><?= $class["name"]; ?></td>
        </tr>
    </table>

</body>

</html>