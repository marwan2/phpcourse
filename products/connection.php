<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mystore";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_error()) {
	die ('Errro connecting to database, ' . mysqli_connect_error());
}