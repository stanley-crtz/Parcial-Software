<?php
    
    spl_autoload_register(
        function ($class) {
            require $class.'.php';
        }
    );

    define("DB_HOST", "db");
    define("DB_NAME", "parcial");
    define("DB_USER", "root");
    define("DB_PASS", "r00tadmin");
    define("BASE_URL", "http://localhost:8080/");

    $validate = new Validate;

    $userOBJ = new User;

?>