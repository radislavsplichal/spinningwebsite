<?php

include '../classes/loadComponents.php';

$cus_name = $_POST['name'];
$cus_surname = $_POST['surname'];
$cus_username = $_POST['username'];
$cus_password = $_POST['password'];
$cus_email = $_POST['email'];

echo $cus_email;

$user = new User();
// $response = $user->createUser($cus_name,$cus_surname,$cus_email,$cus_password,$cus_username);
// echo $response;

//header("Location:"."../index.php");
//exit();

?>