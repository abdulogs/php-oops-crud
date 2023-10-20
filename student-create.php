<?php require_once "./classes/app.php"; ?>
<?php require_once "./modules/students.php"; ?>

<?php $students->create(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student create</title>
</head>

<body>

<h1>Student create</h1>

    <form method="post">
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">Phone</label>
            <input type="text" name="phone">
        </div>
        <button type="submit">Create</button>
    </form>
</body>

</html>