<?php

$serverName = 'localhost';
$dBUserName = 'root';
$dBPassword = '';
$dBName = 'resume_db';
 

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);
 
// Check connection
if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
