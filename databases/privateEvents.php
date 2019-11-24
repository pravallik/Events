<?php
    require "CreateEvents.php"; 
	require 'includes/dbh.inc.php'; 
?>
    <main>
        <div class= "createEventsBody">
            <section class = "section-default-public">
                <h1>Private Event </h1>
                <form class= "form-createPrivate" action ="includes/createPrivate.inc.php" method = "post">
                    Event Title:<br><input type ="text" name= "etitle" placeholder=""><br><br>
                    Location:<br><input type ="text" name= "loc" placeholder=""><br><br>
                    Date :<br><input type = "datetime-local" name = "datePrivate" placeholder = ""><br><br>
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
                    Phone Number: <br><input type = "text" name = "privateNum" placeholder = ""><br><br>
                    Comments :<br><input style = "width: 400px;" type ="text" name= "disc" placeholder=""><br><br>
                    University: <br><input type ="text" name= "Uni" placeholder=""><br><br>
                   <button type = "submit" name ="add-privateevent">Add Private Event</button><br><br>
                   <a href="http://localhost/databases/index.php">Home</a><br><br>
                </form>
            </section>
        </div>
    </main>

<?php
    require "footer.php"; 
?>