<?php
$host = 'localhost';
$user = 'root';
$db = 'evangelical';
$password = '';

if(mysql_connect($host,$user,$password)){
	//echo"my database is working";
	mysql_select_db($db);
}


?>