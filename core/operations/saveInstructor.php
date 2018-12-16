<?php
use CMSCore\Instructor;
//Class Autoloader
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/vendor/autoload.php";
require($path);

$instructor = new Instructor();

echo ($_POST['name']);
echo ($_POST['surname']);
echo ($_POST['bio']);

$instructor->name = $_POST['name'];
$instructor->surname = $_POST['surname'];
$instructor->bio = $_POST['bio'];

echo $instructorFormResult = $instructor->saveInstructor();
?>