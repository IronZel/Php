<?php
//defined('localhost') or die('Access denied!');
$db_host		= 'localhost';
$db_user		= 'admin';
$db_pass		= '123456';
$db_database	= 'main1'; 

$link = mysql_connect($db_host,$db_user,$db_pass);
if (!$link) {
    die('Не удалось соединиться : ' . mysql_error());
}

// выбираем foo в качестве текущей базы данных
$db_selected = mysql_select_db($db_database, $link);
if (!$db_selected) {
    die ('Не удалось выбрать базу foo: ' . mysql_error());
}
?>