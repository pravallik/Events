<?php

$servername= "localhost"; 
$dbUsername="root"; 
$dBPassword="Honey17"; 
// need to chagne dBName 
$dBName="collegeevent"; 

$conn = mysqli_connect($servername, $dbUsername, $dBPassword, $dBName ); 

if(!$conn){
	die("Connection failed: ".mysqli_connect_error()); 
}