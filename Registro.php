<!DOCTYPE html>
<html lang="ens">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Integrantes</title>
    <link rel="stylesheet" href="Styles/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-2">
        <a class="navbar-brand" href="#">Software Libre / Registro</a>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-center">
            <form style="width: 80%;" class="mt-5" id="form">
                <fieldset>
                    <legend>Agrega un integrante</legend>
                    <div class="form-group">
                        <label for="member" class="form-label mt-4">Integrante</label>
                        <input type="text" class="form-control" id="member" aria-describedby="member" placeholder="Jose Serpas">
                        <small id="member" class="form-text text-muted">Ingresa el nombre del integrante</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </fieldset>
            </form>
        </div>
    </div>

    <script src="JS/Register.js"></script>

</body>

</html>