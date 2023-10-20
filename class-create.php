<?php require_once "./classes/app.php"; ?>
<?php require_once "./modules/classes.php"; ?>

<?php $classes->create(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class create</title>
</head>

<body>

    <h1>class create</h1>

    <form method="post">
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Is active</label>
            <select name="is_active" id="">
                <option value="">Select</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <button type="submit">Create</button>
    </form>
</body>

</html>