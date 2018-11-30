<?php 
use CMSCore\User;
//Class Autoloader
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/vendor/autoload.php";
require($path);

$event_name = $_POST['name'];
$event_desc = $_POST['desc'];
$event_start = $_POST['start'];
$event_end = $_POST['end'];
$event_price = $_POST['price'];
$event_instructor = $_POST['instructor'];

//echo $cus_email;

$user = new User();
$response = $user->createUser($cus_name,$cus_surname,$cus_email,$cus_password,$cus_username);
echo $response[0];
$_SESSION['status'] = 'UserCreationSuccess';
header("Location:"."../index.php");
exit();

?>