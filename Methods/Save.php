<?php

require '../Database.php';

$db = new Database();
$con = $db->connect();

$correcto = false;
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = $con->prepare("INSERT INTO users (fullName, email, password) VALUES (:full, :email, :pass)");
$resultado = $query->execute(array('full' => $fullName, 'email' => $email, 'pass' => $password));

if ($resultado) {
    $correcto = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Integrantes</title>
    <link rel="stylesheet" href="../Styles/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-2">
        <a class="navbar-brand" href="#">Software Libre / Registro</a>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-center">
            <?php if ($correcto) { ?>
                <button type="button" class="btn btn-primary" id="return">Regresar</button>
            <?php } else { ?>
                <h2>Error en el servidor</h2>
            <?php }  ?>
        </div>
    </div>

    <script src="../JS/Save.js"></script>

</body>

</html>