<?php

    include_once($_SERVER["DOCUMENT_ROOT"] . "/walkies/src/classes/Database.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/walkies/src/classes/User.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User();
    $user->Login($username, $password);