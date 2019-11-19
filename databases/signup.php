<?php
    require "header.php"; 
?>
    <main>
        <div class= "wrapper-main">
            <section class = "section-default">
                <h1>Signup</h1>
                <div class= "wrapper-internal">
                    <form class= "form-signup" action ="includes/signup.inc.php" method = "post">
                        Email:<br> <input type ="text" name= "mail" placeholder="Email"><br><br>
                        Usernamee:<br> <input type ="text" name= "uid" placeholder="Username"><br><br>
                        <!-- <input type = "text" name = "adminstatus" placeholder = "student/admin"><br><br> -->
                        Type:<br>  <input type="radio" name="adminstatus" value="SuperAdmin"> SuperAdmin<br>
                                <input type="radio" name="adminstatus" value="RSO">RSO<br>
                                <input type="radio" name="adminstatus" value="Student">Student<br><br>


                        Password:<br><input type ="text" name= "pwd" placeholder="Password"><br><br>
                        Repeat Password:<br><input type ="text" name= "pwd-repeat" placeholder="Repeat Password"><br><br>
                        University:<br><input type ="text" name= "userUni" placeholder="University"><br><br>
                        <button type = "submit" name =" signup-submit">Signup</button><br><br>
                        <a href="http://localhost/databases1/">Login Again</a><br><br>
                    </form>
                </div>
            </section>
        </div>
    </main>

<?php
    require "footer.php"; 
?>