<!DOCTYPE html>
<html>
<head>

    <h1> Welcome Inside </h1>

<?php 
	require 'includes/dbh.inc.php'; 
?>

</head>

<body>
	
    
	<?php 
	$sqlview= "SELECT * FROM events;"; 
	$sqlev= mysqli_query($conn, $sqlview); 
	$resultChecking =mysqli_num_rows($sqlev); 
	if($resultChecking > 0){
		while ($row = mysqli_fetch_assoc($sqlev)){
			echo 'Event Title: ' ; 
			echo $row['uidEvents'] . "<br>";
			echo 'Location : ' ; 
			echo $row['placeEvents'] . "<br>";
			echo 'RSO: ' ; 
			echo $row['OidEvents'] . "<br>";
			echo 'Comment: ' ; 
			echo $row['summaryEvents'] . "<br>";
			echo '<p> --------------------------------------------- </p> '; 
			
		}
	}
	?>
    <a href = index.php><button>Go back to Home Page</button></a>

    
</body>

</html>