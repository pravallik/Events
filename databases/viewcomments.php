<html>
<head>

	
	
<link rel = "styleSheet" href = "styleCreateEvents.css">	

<?php 
	require 'includes/dbh.inc.php'; 
?>

</head>

<body>
<div class= "createEventsBody">
<h1> COMMENTS </h1>
	<?php 
	$sqlview= "SELECT * FROM comments;"; 
	$sqlev= mysqli_query($conn, $sqlview); 
	$resultChecking =mysqli_num_rows($sqlev); 
	if($resultChecking > 0){
		while ($row = mysqli_fetch_assoc($sqlev)){
			echo 'Event: '; 
			echo $row['uidEvents'] . "<br>";
			echo 'Comment: '; 
			echo $row['c'] . "<br>";
			echo '<p> --------------------------------------------- </p> '; 			
		}
	}	
	?>

	<a href = test2.php><button>Go back to Home Page</button></a>
	