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
<title>Reservation System 1.0</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="/vendor/jquery.min.js"></script>
<script type="text/javascript" src="calendar_behaviour.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>

<style>
<!--

-->



</style>





<content>
<div class="wrapper">
<?php
//include 'classes/Calendar.php';

$calendar = new Calendar();

echo $calendar->show();
?>

		<form id="newEvent" action="operations/createEvent.php"> 
		
		<b>Lesson Name</b> <input type="text" name="LessonName"> <br>
		
		  <b> Capacity</b>
		  	<input type="number" name="capacity">
		  <b>Price</b>
		  <select name="price">
		    <!-- To be added from the database -->
		    <option value="90">90</option> 
		    <option value="150">150</option>
		  </select>
		    <br><br>
		  <b>Comment:</b>
		    <br>
		  <textarea name="comment">
		    Enter your comment here
		  </textarea>
		    <br><br>
		  <button type="button" id="submit">Submit</button>
		</form>







</div>
</content>