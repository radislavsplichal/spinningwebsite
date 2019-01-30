<?php
use CMSCore\Instructor;
//Class Autoloader
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/vendor/autoload.php";
require($path);

$ins = new Instructor();

$sql= 'Select * from INSTRUCTORS;';
$resultArray = $ins->readObject($sql);
echo json_encode($result_array);




?>
