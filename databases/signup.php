<?php
    require "header.php"; 
?>
    <main>
        <div class= "wrapper-main">
            <section class = "section-default">
                <h1>Signup</h1>
                <form class= "form-signup" action ="includes/signup.inc.php" method = "post">
                    <input type ="text" name= "mail" placeholder="Email"><br><br>
                    <input type ="text" name= "uid" placeholder="Username"><br><br>
                    <input type = "text" name = "adminstatus" placeholder = "student/admin"><br><br>
                    <input type ="text" name= "pwd" placeholder="Password"><br><br>
                    <input type ="text" name= "pwd-repeat" placeholder="Repeat Password"><br><br>
                    <button type = "submit" name =" signup-submit">Signup</button><br><br>
                </form>
            </section>
        </div>
    </main>

<?php
    require "footer.php"; 
?>