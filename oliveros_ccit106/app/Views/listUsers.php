<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>List of users</h1> 
    <table border="1">
         <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name</th>
         </tr>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['firstName']; ?></td>
                <td><?= $user['middleName']; ?></td>
                <td><?= $user['lastName']; ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>