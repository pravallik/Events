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
        <form action = "includes/Login.inc.php" method = "post"></form>
            <h1>Login</h1>
            <div class = "textbox">
                <i class = "fa fa-user" arian-hidden = "true"></i>
                <input type = "text" placeholder = "Username" name = "" value = "">
            </div>
            <br>
            <div class = "textbook">
                <i class = "fa fa-lock" arian-hidden = "true"></i>
                <input type = "password" placeholder="Password" name = "" value = "">
            </div>

            <br>
            <button type = "submit" name = "Login">Login</button>
        </form> 

        Don't have an account? <a href = "signup.php">Signup </a>
        
        <form action = "includes/Logout.inc.php" method = "post"></form>
            <br>
            <button type = "submit" name = "Logout">Logout</button>
        </form> 
        </div>
</header>
     </body>
</html>