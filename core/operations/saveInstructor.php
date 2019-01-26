<?php
use CMSCore\Instructor;
//Class Autoloader
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/vendor/autoload.php";
require($path);

$instructor = new Instructor($_POST['name'],$_POST['surname'],$_POST['bio']);

echo ($_POST['name']);
echo ($_POST['surname']);
echo ($_POST['bio']);

$instructorFormResult = $instructor->saveInstructor();
print_r($instructorFormResult);
?>