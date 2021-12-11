<?php

require "Database.php";

$db = new Database();

$conn = $db->connect();

$command = $conn->prepare("SELECT * FROM users");
$command->execute();
$result = $command->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial Software</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/morph/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Parcial - Software Libre</a>
    </nav>

    <div class="container mt-2">
        <div class="d-flex justify-content-between">
            <h1>Integrantes:</h1>
            <button type="button" class="btn btn-secondary" id="button">Agregar Miembro</button>
        </div>
        <div class="container">
            <div class="d-flex flex-wrap" id="members">

                <?php
                foreach ($result as $row) {
                ?>
                    <div class="alert alert-dismissible alert-primary m-2">
                        <?php echo $row['fullName']; ?>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
    <script src="/Home/index.js"></script>
</body>

</html>