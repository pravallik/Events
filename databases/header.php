<?php 
 session_start()
?> 

<!DOCTYPE html> 
<html>
    <head>
        <meta charset = "utf-8">
        <link rel = "styleSheet" href = "style.css">
    </head>

    <body>
            <header> 
            <nav class = "nav-header-main">
            <!-- <ul>
                <li><a href = "index.php" >Home</a></li>
                <li><a href = "#" >Portfolio</a></li>
                <li><a href = "#" >About me</a></li>
                <li><a href = "#" >Contact</a></li>
            </ul> -->
            </nav>
            <div class = "heading">
                <h6>College events </h6>;
            </div>
                <!-- <div class = "login-box"> -->
                    <?php 
                        if(isset($_SESSION['userId']))
                        {
                            echo '<div class = "wrappe">
                             <form action = "includes/logout.inc.php" method = "post">
                                <button type = "submit" name = "logout-submit">Logout</button>
                                </form> </div>';
                    
                        }
                        else
                        {
                            echo '<div class = "login-box">
                             <form action = "includes/login.inc.php" method = "post">
                                    Username: <input type = "text" name = "mailuid" placeholder = "Username/Email ..."><br>
                                    <br>
                                    Password: <input type = "password" name = "pwd" placeholder = "Password ..."><br><br>
                                    <button type = "submit" name = "login-submit">Login</button>
                                </form> 
                                New user? <a href = "signup.php">Signup </a>
                            </div>';
                        }
                    ?>
            
                <!-- </div> -->
        </header>
     </body>
</html>