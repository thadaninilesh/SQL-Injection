<?php
$user = 'root';
$pwd = '';
$host = 'localhost';
$db_name = 'ntal';

$conn = new mysqli($host, $user, $pwd);
$connection = mysql_connect($host,$user,$pwd) or die("Connection to the server failed");
$db = mysql_select_db($db_name,$connection);
?>
