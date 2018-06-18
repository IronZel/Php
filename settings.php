<?php
//defined('localhost') or die('Access denied!');
$db_host		= 'localhost';
$db_user		= 'admin';
$db_pass		= '123456';
$db_database	= 'w92888fj_admin'; 

$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
	
if(!$connect)
	echo ('Нет подключения к БД');
?>