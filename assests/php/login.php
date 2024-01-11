<?php

require_once __DIR__ . '/vendor/autoload.php';

$dbConnection = new MongoDB\Client;
$myDB = $dbConnection->ToDo;
$myCollection = $myDB->user;


$name = $_POST['loginName']; 
$password = $_POST['loginPassword']; 



$data = array(
    "name" => $name,
    "password" => $password
);

// Fetch user from MongoDB Users Collection
$fetch = $myCollection->findOne($data);


if($fetch){

    header("Location: ../profile.html");
}
?>