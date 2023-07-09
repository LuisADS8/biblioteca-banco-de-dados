<?php

$host = "localhost";
$dbname = "biblioteca_bd";
$user = "root";
$pass = "";
$port = 3306;

$conn = new PDO("mysql:host=$host;port=$port;dbname=".$dbname, $user, $pass);

