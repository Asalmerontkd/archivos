<?php
	header('Content-Type: text/html; charset=UTF-8');
	$hostname='localhost';
	$database='archivos';
	$user='root';
	$pass='toor';

	$conn= mysql_pconnect($hostname, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database);
?>