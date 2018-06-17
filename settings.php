<?php
//defined('localhost') or die('Access denied!');
$db_host		= 'localhost';
$db_user		= 'admin';
$db_pass		= '123456';
$db_database	= 'main1'; 

$connect = mysqli_connect(localhost, admin, 123456, main1);
	
if(!$connect)
	echo ('Нет подключения к БД');
?>