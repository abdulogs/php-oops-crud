<?php require_once "./classes/app.php"; ?>
<?php require_once "./modules/classes.php"; ?>


<?php $listing = $classes->delete(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classes</title>
</head>

<body>

    <?php $listing = $classes->listing(); ?>

    <h1>classes</h1>

    <a href="class-create.php">Create</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Controls</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($listing) : ?>
                <?php foreach ($listing as $item) : ?>
                    <tr>
                        <td><?= $item['id']; ?></td>
                        <td><?= $item['name']; ?></td>
                        <td><?= utils::is_active($item['is_active']); ?></td>
                        <td>
                            <a href="class-details.php?id=<?= $item['id']; ?>">Details</a>
                            <a href="class-update.php?id=<?= $item['id']; ?>">Edit</a>
                            <a href="classes.php?id=<?= $item['id']; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="4">No records exists</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>

</html>