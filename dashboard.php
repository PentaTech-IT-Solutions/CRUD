<?php
session_start();
$dbName = 'test';
$dbConn = new mysqli('localhost', 'root', '', 'test');
if($dbConn->connect_error){
    die('error connecting');
}

$query1 = "SELECT * FROM $dbName.members";
$result1 = $dbConn->query($query1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
<h1>Members</h1>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Occupation</th>
        <th>Image</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php
        while($row = $result1->fetch_assoc())
        {
        ?>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td><?php echo $row['occupation'];?></td>
        <td><img src="./images/<?php echo $row['image'];?>" width="100px" alt="picture"></td>
    </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</body>
</html>
