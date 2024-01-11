<?php

require_once __DIR__ . '/vendor/autoload.php';

$dbConnection = new MongoDB\Client;
$myDB = $dbConnection->ToDo;
$myCollection = $myDB->user;

$name = $_POST['inputName'];
$email = $_POST['inputEmail'];
$password = $_POST['inputPassword'];

$userDocument = 
    [
        'name' => $name,
        'email' => $email,
        'password' => $password,
    ];

    $myCollection->insertOne($userDocument);
    header("Location: ../profile.html");
?>