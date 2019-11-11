<?php
    require "header.php"; 
?>

    <main>
		<?php
    		if(isset($_SESSION['userId'])){
    			echo '<p class = "login-status"> You are logged in! </p>'; 
    		}
    		else {
    			echo '<p> You are logged out!</p>'; 
    		}
    	?>
        
    </main>

    <?php
        require "footer.php";
    ?>