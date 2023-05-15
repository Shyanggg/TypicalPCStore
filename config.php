<?php
session_start();
$dbHost = 'localhost';
$dbName = 'typicalpcstore';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>