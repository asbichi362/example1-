<?php 
$con = mysqli_connect('localhost','root','');
$db = mysqli_select_db($con,'survey')or die(mysqli_error());
?>