<!DOCTYPE html>
<html>
<head>

    <h1> Create Events </h1>

</head>

<body>
    <form class= "form-createevents" action ="includes/CreateEvents.inc.php" method = "post">
                  Choose the type of event?<br>
                  <a href = "publicEvents.php"> <input type="radio" name="public" value="Public"> Public</a><br><br>
                  <a href = "privateEvents.php"> <input type="radio" name="private" value="Private"> Private</a><br><br>
                  <a href = "rsoOnly.php"> <input type="radio" name="rsoOnly" value="rsoOnly"> RSO only</a><br><br>
                        
    </form>
    <a href = index.php><button>Go back to Home Page</button></a>

    
</body>

</html>