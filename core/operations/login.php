<?php
use CMSCore\User;
//Class Autoloader
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/vendor/autoload.php";
require($path);
/*
$testArray = get_declared_classes();
foreach ($testArray as $value) {
    echo $value.'</br>';
}*/
//echo $hash = password_hash("Admin1660", PASSWORD_BCRYPT);


//session_start();
if (isset($_POST["username"],$_POST["password"])){

  $userName = $_POST["username"];
  $pass = $_POST["password"];

  echo $userName." ".$pass;
  
 $user = new User;
 $user->login($userName, $pass);

}
else {
 echo "Internal Server Error. Please contact the Administrator.";
}

//exit

?>
