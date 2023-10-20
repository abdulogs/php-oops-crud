<?php require_once "./classes/app.php"; ?>
<?php require_once "./modules/classes.php"; ?>


<?php $classes->update(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class update</title>
</head>

<body>

    <?php $class = $classes->single(); ?>
    <h1>class update</h1>

    <form method="post">
        <div>
            <label for="">Name</label>
            <input type="hidden" name="id" value="<?= $class['id'] ?>">
            <input type="text" name="name" value="<?= $class['name'] ?>">
        </div>
        <div>
            <label for="">Is active</label>
            <select name="is_active" id="">
                <option value="">Select</option>
                <?php utils::is_active($class['is_active'], "select"); ?>
            </select>
        </div>
        <button type="submit">Update</button>
    </form>

</body>

</html>