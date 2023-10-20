<?php require_once "./classes/app.php"; ?>
<?php require_once "./modules/students.php"; ?>


<?php $students->update(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student update</title>
</head>

<body>

    <?php $student = $students->single(); ?>
    <h1>Student update</h1>

    <form method="post">
        <div>
            <label for="">Name</label>
            <input type="hidden" name="id" value="<?= $student['id'] ?>">
            <input type="text" name="name" value="<?= $student['name'] ?>">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email" value="<?= $student['email'] ?>">
        </div>
        <div>
            <label for="">Phone</label>
            <input type="text" name="phone" value="<?= $student['phone'] ?>">
        </div>
        <button type="submit">Update</button>
    </form>

</body>

</html>