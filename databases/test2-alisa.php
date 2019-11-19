<?php 
 session_start()
?> 

<!DOCTYPE html>
<html>
<head>

    <h1> Welcome Inside </h1>

<?php 
	require 'includes/dbh.inc.php'; 
?>

</head>

<body>
	
    <h1> Public Events </h1>
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
	 <h1> Your University Events </h1>
	<?php 
	
	$sqlprivate= "SELECT * FROM privates;"; 
	$sqlp= mysqli_query($conn, $sqlprivate); 
	$resultC =mysqli_num_rows($sqlp); 
	if($resultC > 0){
		while ($row = mysqli_fetch_assoc($sqlp)){
			if ($_SESSION['UNI']==$row['UniPrivates']){
				echo 'Event Title: ' ; 
				echo $row['uidPrivates'] . "<br>";
				echo 'Location : ' ; 
				echo $row['placePrivates'] . "<br>";
				echo 'RSO: ' ; 
				echo $row['OidPrivates'] . "<br>";
				echo 'Comment: ' ; 
				echo $row['summaryPrivates'] . "<br>";
				echo '<p> --------------------------------------------- </p> '; 
			}
		}
	}	
	?>
	
	 <h1> RSO Events </h1>
	 <?php 
	

	$sqljoin= "SELECT * FROM joinrso;"; 
	$sqlJ= mysqli_query($conn, $sqljoin); 
	$resultQ =mysqli_num_rows($sqlJ); 
	if($resultQ>0){
		while ($row = mysqli_fetch_assoc($sqlJ)){
			
			if($_SESSION['userUID']==$row['jUsers']){
				$rsoe= $row['jRSO'];
				$sqlrsoss= "SELECT * FROM rsoonly;"; 
				$sqlR= mysqli_query($conn, $sqlrsoss); 
				$resultY =mysqli_num_rows($sqlR); 
			if($resultY > 0){
				while ($row = mysqli_fetch_assoc($sqlR)){
					$o= $row['OidRSO']; 
					if ($rsoe==$row['OidRSO']){
						echo 'Event Title: ' ; 
						echo $row['uidRSO'] . "<br>";
						echo 'Location : ' ; 
						echo $row['placeRSO'] . "<br>";
						echo 'RSO: ' ; 
						echo $row['OidRSO'] . "<br>";
						echo 'Comment: ' ; 
						echo $row['summaryRSO'] . "<br>";
						echo '<p> --------------------------------------------- </p> '; 
					}
				}
			}
			}
		}
	}
	?>
	
    <a href = index.php><button>Go back to Home Page</button></a>

    
</body>

</html>