<?php

    include_once($_SERVER["DOCUMENT_ROOT"] . "/walkies/src/classes/Database.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . "/walkies/src/classes/User.php");

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User();
    $user->Register($fname, $lname, $username, $password);