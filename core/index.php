<?php

// This is the gateway for the reservation
/*
foreach (glob("classes/*.php") as $filename)
{
    include $filename;
}
*/
session_start();
//echo $_SESSION['username'];
?>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<content>
<div class="wrapper">
<?php
include 'classes/Calendar.php';

$calendar = new Calendar();

echo $calendar->show();
?>
</div>
</content>