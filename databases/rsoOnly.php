<?php
    require "CreateEvents.php"; 
	require 'includes/dbh.inc.php'; 
?>
    <main>
        <div class= "createEventsBody">
            <section class = "section-default-rso">
                <h1> RSO Only </h1>
                <form class= "form-createRSOOnly" action ="includes/createRSOonly.inc.php" method = "post">
                    Event Title:<br><input type ="text" name= "etitle" placeholder=""><br><br>
                    Location:<br><input type ="text" name= "loc" placeholder=""><br><br>
                    RSO:<br>  
					<?php 

					$sqlr= "SELECT * FROM rsos;"; 
					$sqlrsp= mysqli_query($conn, $sqlr); 
					$resultChecks =mysqli_num_rows($sqlrsp);
					if($resultChecks > 0){
						while ($row = mysqli_fetch_assoc($sqlrsp)){
						?>
					<input type="radio" name="rso" value="<?php echo $row['nameRSO']; ?> "> <?php echo $row['nameRSO'] ?><br>
					<?php
						}
					}
					?>
                    Comments :<br><input style = "width: 400px;" type ="text" name= "disc" placeholder=""><br><br>        
                   <button type = "submit" name ="add-rsoevent">Add RSO Event</button><br><br>
                   <a href="http://localhost/databases1/index.php">Home</a><br><br>
                </form>
            </section>
        </div>
    </main>

<?php
    require "footer.php"; 
?>