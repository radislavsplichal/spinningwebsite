<?php

use CMSCore\User;
//Class Autoloader
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/vendor/autoload.php";
require($path);

$cus_name = $_POST['name'];
$cus_surname = $_POST['surname'];
$cus_username = $_POST['username'];
$cus_password = $_POST['password'];
$cus_email = $_POST['email'];

//echo $cus_email;

$user = new User();
$response = $user->createUser($cus_name,$cus_surname,$cus_email,$cus_password,$cus_username);
echo $response[0];
$_SESSION['status'] = 'UserCreationSuccess';
header("Location:"."../index.php");
exit();

?>