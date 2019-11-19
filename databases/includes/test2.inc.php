<?php

if($_POST['view-submit'])
{

		$uni = $_POST['Uni'];

		$sqlprivate = "SELECT * FROM privates;"; 
		$sqlUsers = "SELECT * FROM users;"; 
		$sqlpr= mysqli_query($conn, $sqlprivate); 
		$sqlus= mysqli_query($conn, $sqlUsers); 
		$resultCheckingprivate  = mysqli_num_rows($sqlpr); 
		$resultCheckingUsers  = mysqli_num_rows($sqlus); 
		if($resultCheckingprivate > 0){
			while ($rowPrivate = mysqli_fetch_assoc($sqlpr) && $rowUsers = mysqli_fetch_assoc($sqlus))
			{
				// $rowUsers['University'] == "UCF" && 
				if($rowPrivate['UniPrivates'] = $uni)
				{
					echo 'Event Title: '; 
					echo $rowPrivate['uidPrivates'] . "<br>";
					echo 'Location : ' ; 
					echo $rowPrivate['placePrivates'] . "<br>";
					echo 'RSO: ' ; 
					echo $rowPrivate['OidPrivates'] . "<br>";
					echo 'Comment: ' ; 
					echo $rowPrivate['summaryPrivates'] . "<br>";
					echo '<p> --------------------------------------------- </p> '; 
				}
				
			}
		}
}