<?php
    require "CreateEvents.php"; 
?>
    <main>
        <div class= "wrapper-main-public">
            <section class = "section-default-public">
                <h1>Public Event </h1>
                <form class= "form-createPublic" action ="includes/createPublic.inc.php" method = "post">
                    Event Title:<br><input type ="text" name= "etitle" placeholder=""><br><br>
                    Location:<br><input type ="text" name= "loc" placeholder=""><br><br>
                   <!-- Date :<br><input type = "datetime-local" name = "dateEvents" placeholder = ""><br><br> -->
                    RSO:<br>  <input type="radio" name="rso" value="ACM-W"> ACMW<br>
                             <input type="radio" name="rso" value="IEE">IEE<br>
                             <input type="radio" name="rso" value="KnightHacks">KnightHacks<br><br>
                    Comments :<br><input style = "width: 400px;" type ="text" name= "disc" placeholder=""><br><br>
                   <button type = "submit" name ="add-publicevent">Add Public Event</button><br><br>
                </form>
            </section>
        </div>
    </main>

<?php
    require "footer.php"; 
?>