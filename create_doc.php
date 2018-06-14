<?php
include 'settings.php';


$query = "create table 'numbers'"
        . "(number int);";

mysqli_query($link, $query);