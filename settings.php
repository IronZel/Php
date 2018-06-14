<?php
//defined('localhost') or die('Access denied!');
$db_host		= 'localhost';
$db_user		= 'admin';
$db_pass		= '123456';
$db_database	= 'main1'; 

$link = mysqli_connect($db_host,$db_user,$db_pass);

//mysql_select_db($db_database,$link) or die("No connect".mysql_error());
?>