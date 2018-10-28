<?php

// This is the gateway for the reservation
use CMSCore\Calendar;
//Class Autoloader
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/vendor/autoload.php";
require($path);
session_start();
echo $_SESSION['username'];
echo $_SESSION['status'];
?>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script type="text/javascript" src="calendar_behabiour.js"></script>
<content>
<div class="wrapper">
<?php
//include 'classes/Calendar.php';

$calendar = new Calendar();

echo $calendar->show();
?>
</div>
</content>