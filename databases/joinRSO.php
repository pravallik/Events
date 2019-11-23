<?php 
 session_start()
 ?>
 
<!DOCTYPE html>
<html>
<head>
<link rel = "styleSheet" href = "stylerso.css">
    <h1> Join RSO? </h1>

<?php  
	require 'includes/dbh.inc.php'; 
	

?>


</head>

<body>
<div class = "rsoStyle">
    <form class= "form-joinrso" action ="includes/joinRSO.inc.php" method = "post">
	<?php 

	$sqlr= "SELECT * FROM rsos;"; 
	$sqlrsp= mysqli_query($conn, $sqlr); 
	$resultChecks =mysqli_num_rows($sqlrsp);
	                
	if($resultChecks > 0){
		while ($row = mysqli_fetch_assoc($sqlrsp)){
			?>
			<input type="radio" name="jorso" value= " <?php echo $row['nameRSO']; ?> "> <?php echo $row['nameRSO'] ?> <br>
			<?php
			
			
		}
	}
	?>
	<button type = "submit" name ="JoinRSO">Join RSO!</button><br><br>
	</form>
    <a href = index.php><button>Go back to Home Page</button></a>

</div>   
</body>

</html>