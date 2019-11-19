

<!DOCTYPE html>
<html>
<head>

    <h1> Add University </h1>

</head>

<body>
	<p> Create University Profile? </p>
	
	
	<form class= "form-uni" action ="includes/Uni.inc.php" method = "post">
	<input type = "text" name = "University" placeholder = "University name ..."> 
    <input type = "text" name = "Loc" placeholder = "Location ...">
	<input type = "text" name = "Description" placeholder = "Description ..."> 
    <input type = "text" name = "Numberofstudents" placeholder = "#of students ...">
    <button type = "create" name = "Create-submit">Create</button>
	</form> 
    <a href = index.php><button>Go back to Home Page</button></a>
	 
    
</body>

</html>