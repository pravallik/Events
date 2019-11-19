<!DOCTYPE html>
<html>
<head>

<link rel = "styleSheet" href = "styleCreateEvents.css">
    

</head>

<body>
<div class= "createEventsBody">
    <h1> Add RSO </h1>
    <a href = index.php>Home</a> <br><br>

        <form class= "form-addrso" action ="includes/addRSO.inc.php" method = "post">
                    University:<br><input type ="text" name= "Utitle" placeholder="Title"><br><br>
                    Location:<br><input type ="text" name= "locRSO" placeholder="Location"><br><br>
                    RSO Name:<br>  <input type="text" name="addRso" placeholder = " Rso Name"><br><br>
                    Description:<br><input style = "width: 400px;" type ="text" name= "discRSO" placeholder=""><br><br>
                    <button type = "submit" name ="add-RSO">Add RSO</button><br><br>
                            
            </form>
</div>
    
</body>

</html>