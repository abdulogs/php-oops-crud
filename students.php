<?php require_once "./classes/app.php"; ?>
<?php require_once "./modules/students.php"; ?>


<?php $listing = $students->delete(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>

    <?php $listing = $students->listing(); ?>

    <h1>Students</h1>

    <a href="student-create.php">Create</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Controls</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($listing) : ?>
                <?php foreach ($listing as $item) : ?>
                    <tr>
                        <td><?= $item['id']; ?></td>
                        <td><?= $item['name']; ?></td>
                        <td><?= $item['email']; ?></td>
                        <td><?= $item['phone']; ?></td>
                        <td>
                            <a href="student-details.php?id=<?= $item['id']; ?>">Details</a>
                            <a href="student-update.php?id=<?= $item['id']; ?>">Edit</a>
                            <a href="students.php?id=<?= $item['id']; ?>">Delete</a>
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