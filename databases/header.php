<?php 
 session_start()
?> 

<!DOCTYPE html> 
<html>
    <head>
        <meta charset = "utf-8">
        <tilte>College events </tilte>
    </head>

    <body>
    <header> 
    <nav class = "nav-header-main">
    <ul>
        <li><a href = "index.php" >Home</a></li>
        <li><a href = "#" >Portfolio</a></li>
        <li><a href = "#" >About me</a></li>
        <li><a href = "#" >Contact</a></li>
    </ul>
    </nav>
        <div class = "login-box">
            <?php 
            if(isset($_SESSION['userId'])){
                echo  <form action = "includes/logout.inc.php" method = "post"></form>
                    <br>
                    <button type = "submit" name = "logout-submit">Logout</button>
                    </form>;
                    </div>
            }
            else {
                <form action = "includes/login.inc.php" method = "post">
                <h1>Login</h1>
                <div class = "textbox">
                <input type = "text" name = "mailuid" placeholder = "Username/Email ...">
                </div>
                <br>
                <div class = "textbox">
                <input type = "password" name = "pwd" placeholder = "Password ...">
                </div>

                <br>
                <button type = "submit" name = "login-submit">Login</button>
                </form> 
            }
            ?>
        Don't have an account? <a href = "signup.php">Signup </a>; 
    
    
        </div>
</header>
     </body>
</html>