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
</head>

<style>
<!--

-->
#form1 {
     display:none;
}



</style>





<content>
<div class="wrapper">
<?php
//include 'classes/Calendar.php';

$calendar = new Calendar();

echo $calendar->show();
?>

<form id="form1" action='operations/createEvent.php'>
  <b>Title</b> <input type="text" name="title">
    <br><br>
  <b>Description </b><input type="text" name="description">
    <br><br>
  <b> Capacity</b>
  	</b><input type="number" name="capacity">
  <b>Preferred Color:</b>
  <select name="price">
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
</form>







</div>
</content>