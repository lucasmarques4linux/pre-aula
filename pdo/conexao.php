<?php 

$dbname	= "dexterescola";
$host	= "localhost";
$user 	= "lucas";
$pass	= "123";
$dsn 	= "pgsql: host={$host};dbname={$dbname}";

$con = new PDO($dsn,$user,$pass);

$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);