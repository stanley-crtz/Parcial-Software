<?php

    include "init.php";

    $db = Database::instance();

    $db->prepare("SELECT * FROM 'Users'");

?>