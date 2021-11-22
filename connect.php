<?php
$mysqli = new mysqli('localhost','root','','figure_online_store');
if($mysqli->connect_errno){
   echo $mysqli->connect_errno.": ".$mysqli->connect_error;
}
/*$password=md5($password) */
?>
