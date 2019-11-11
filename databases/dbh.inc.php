<?php

$servername= "localhost "; 
$dbUsername="root"; 
$dBPassword="Honey17"; 
// need to chagne dBName 
$dBName="loginsystem"; 

$conn = mysqli_connect($servername, $dbUsername, $dBPassword, $dBName ); 

if(!conn){
	die("Connection failed: ".mysqli_connect_error()); 
}