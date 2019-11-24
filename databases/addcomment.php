<!DOCTYPE html>
<html>
<head>

<link rel = "styleSheet" href = "styleCreateEvents.css">
    

</head>

<body>
<div class= "createEventsBody">
    <h1> Add Comment </h1>
    <a href = index.php>Home</a> <br><br>
 <form class= "formcomment" action ="includes/addcomment.inc.php" method = "post">

Event Name:<br><input type ="text" name= "Event" placeholder="eventname"><br><br>
Comment:<br><input type ="text" name= "Comment" placeholder="comment"><br><br>
<button type = "submit" name ="add-comment">Add COMMENT</button><br><br>
   </form>
</div>
    
</body>

</html>