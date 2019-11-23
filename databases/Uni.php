

<!DOCTYPE html>
<html>
<head>
<link rel = "styleSheet" href = "styleAddUni.css">
    

</head>

<body>
<div class = "uniStyle">
	<p> Create University Profile? </p>
	
	 <h1> Add University </h1>
	<form class= "form-uni" action ="includes/Uni.inc.php" method = "post">
   
   
	<input type = "text" name = "University" placeholder = "University name ..."> <br><br>
    <input type = "text" name = "Loc" placeholder = "Location ..."><br><br>
	<input type = "text" name = "Description" placeholder = "Description ..."> <br><br>
    <input type = "text" name = "Numberofstudents" placeholder = "#of students ..."><br><br>
    <button type = "create" name = "Create-submit">Create</button><br><br>
   
	</form> 
    <a href = index.php><button>Go back to Home Page</button></a>
</div>	 
    
</body>

</html>