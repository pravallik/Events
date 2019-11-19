<!DOCTYPE html>
<html>
<head>

	
	
<link rel = "styleSheet" href = "styleCreateEvents.css">	

<?php 
	require 'includes/dbh.inc.php'; 
?>

</head>

<body>
<div class= "createEventsBody">
<h1> Events </h1>
	<?php 

	$sqlview= "SELECT * FROM events;"; 
	$sqlev= mysqli_query($conn, $sqlview); 
	$resultChecking =mysqli_num_rows($sqlev); 
	if($resultChecking > 0)
	{
		while ($row = mysqli_fetch_assoc($sqlev)){
		?>	<div class = "events" >
				<?php
				echo 'Event Title: ' ; 
				echo $row['uidEvents'] . "<br>";
				echo 'Location : ' ; 
				echo $row['placeEvents'] . "<br>";
				echo 'RSO: ' ; 
				echo $row['OidEvents'] . "<br>";
				echo 'Comment: ' ; 
				echo $row['summaryEvents'] . "<br>";
				echo '<p> --------------------------------------------------------------------------------- </p> ';
				?>
			</div>
			<?php
			}
			
	}
	
	// echo '<h1> Private Events </h1>';
	// echo '<form class= "form-signup" action = "includes/test2.inc.php" method="post">
	// 	<input type ="text" name= "Uni" placeholder="University"><br><br>
	// </form>
	// <a href = "test2.inc.php">View </a><br>';

	?>
    <a href = index.php><button>Go back to Home Page</button></a>

</div>  
</body>

</html>