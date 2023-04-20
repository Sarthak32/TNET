<?php 
/*
This file contains database configuration assuming ypu are running mysql using user "root" and password "" 
*/
define('DB_server', 'localhost');
define('DB_Username', 'root');
define('DB_password', '');
define('DB_Name', 'login');

$conn=mysql_connect(DB_server,DB_Username,DB_password,DB_Name);

if ($conn==false ){
	dir('Error:Cannot Connect to server');
}

 ?>
