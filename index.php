<?php

require "Database.php";

$db = new Database();

$conn = $db->connect();

$command = $conn->prepare("SELECT * FROM users");
$command->execute();
$result = $command->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Test Connect</h2>

    <?php
        foreach ($result as $row) {
    ?>
            <h3><?php echo $row['fullName']; ?></h3>
    <?php 
        } 
    ?>
</body>

</html>