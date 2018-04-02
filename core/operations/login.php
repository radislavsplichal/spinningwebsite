<?php
include '../classes/loadComponents.php';



//session_start();
if (isset($_POST["username"],$_POST["password"])){

  $userName = $_POST["username"];
  $pass = $_POST["password"];

  echo $userName." ".$pass;
  
 $user = new User;
 $user->login($userName, $pass);

}
else {

}

//exit

?>
