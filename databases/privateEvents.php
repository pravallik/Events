<?php
    require "CreateEvents.php"; 
?>
    <main>
        <div class= "createEventsBody">
            <section class = "section-default-public">
                <h1>Private Event </h1>
                <form class= "form-createPrivate" action ="includes/createPrivate.inc.php" method = "post">
                    Event Title:<br><input type ="text" name= "etitle" placeholder=""><br><br>
                    Location:<br><input type ="text" name= "loc" placeholder=""><br><br>
                    RSO:<br>  <input type="radio" name="rso" value="ACM-W"> ACMW<br>
                             <input type="radio" name="rso" value="IEE">IEE<br>
                             <input type="radio" name="rso" value="KnightHacks">KnightHacks<br><br>
                    Comments :<br><input style = "width: 400px;" type ="text" name= "disc" placeholder=""><br><br>
                    University: <br><input type ="text" name= "Uni" placeholder=""><br><br>
                   <button type = "submit" name ="add-privateevent">Add Private Event</button><br><br>
                   <a href="http://localhost/databases1/index.php">Home</a><br><br>
                </form>
            </section>
        </div>
    </main>

<?php
    require "footer.php"; 
?>