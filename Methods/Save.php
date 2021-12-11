<?php

require '../Database.php';

$db = new Database();
$con = $db->connect();

$correcto = false;
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$password = $_POST['password'];

echo $fullName;
echo $email;
echo $password;


// $query = $con->prepare("INSERT INTO users (fullName, email, password) VALUES (:fullName, :email, :password)");
// $resultado = $query->execute(array('fullName' => $$fullName, 'email' => $email, 'password' => $password));

// if ($resultado) {
//     $correcto = true;
// }
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Integrantes</title>
    <link rel="stylesheet" href="Styles/bootstrap.min.css">
</head>

<body class="py-3">
    <main class="container">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <?php if ($correcto) { ?>
                        <h3>Registro guardado</h3>
                    <?php } else { ?>
                        <h3>Error al guardar</h3>
                    <?php }  ?>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a class="btn btn-primary" href="/">Regresar</a>
                </div>
            </div>
        </div>
    </main>

</body>

</html> -->