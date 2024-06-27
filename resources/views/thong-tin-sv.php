<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Thông Tin Sinh Viên</h1>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Interest</th>
            <th>Major</th>
            <th>Age</th>
            <th>Address</th>
        </thead>
        <tbody>
            <?php foreach ($sv as $value): ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['interest'] ?></td>
                    <td><?= $value['major'] ?></td>
                    <td><?= $value['age'] ?></td>
                    <td><?= $value['address'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>