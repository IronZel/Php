<?php
include 'settings.php';


$query = mysqli_query("create table numbers 
(uber1 int);
");
mysqli_query($link, $query);