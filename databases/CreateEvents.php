<!DOCTYPE html>
<html>
<head>

    <h1> Create Events </h1>

</head>

<body>

    <p> Create Event</p>
    <!-- <form class= "form-signup" action ="includes/CreateEvents.inc.php" method = "post"> -->
                   Event Title:<br><input type ="text" name= "etitle" placeholder=""><br><br>
                   Location:<br><input type ="text" name= "loc" placeholder=""><br><br>
                   Date :<br><input type = "text" name = "date" placeholder = ""><br><br>
                   Time :<br><input type ="text" name= "time" placeholder=""><br><br>
                   RSO:<br>  <input type="radio" name="rso" value="ACM-W"> ACMW<br>
                             <input type="radio" name="rso" value="IEE">IEE<br>
                             <input type="radio" name="rso" value="KnightHacks">KnightHacks<br><br>
                             <button type = "submit" name ="add-event">Add Event</button><br><br>

                   
                        
        <!-- </form> -->
    <a href = index.php><button>Go back to Home Page</button></a>

    
</body>

</html>