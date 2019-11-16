<!DOCTYPE html>
<html>
<head>

    <h1> Create Events </h1>

</head>

<body>
    <form class= "form-signup" action ="includes/CreateEvents.inc.php" method = "post">
                   Event Title:<br><input type ="text" name= "etitle" placeholder=""><br><br>
                   Location:<br><input type ="text" name= "loc" placeholder=""><br><br>
                   <!-- Date :<br><input type = "datetime-local" name = "dateEvents" placeholder = ""><br><br> -->
                   RSO:<br>  <input type="radio" name="rso" value="ACM-W"> ACMW<br>
                             <input type="radio" name="rso" value="IEE">IEE<br>
                             <input type="radio" name="rso" value="KnightHacks">KnightHacks<br><br>
                   Comments :<br><input style = "width: 400px;" type ="text" name= "disc" placeholder=""><br><br>
                   <button type = "submit" name ="add-event">Add Event</button><br><br>
                        
        </form>
    <a href = index.php><button>Go back to Home Page</button></a>

    
</body>

</html>