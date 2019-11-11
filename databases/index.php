<?php
    require "header.php"; 
?>

    <main>
<<<<<<< Updated upstream
		<?php
    		if(isset($_SESSION['userId'])){
    			echo '<p class = "login-status"> You are logged in! </p>'; 
    		}
    		else {
    			echo '<p> You are logged out!</p>'; 
    		}
    	?>
        
=======
        <div class = "wrapper-main">
            <section class= "section-default">

                <?php
                    if(isset($_SESSION['userId'])){
                        echo '<p class = "login-status"> You are logged in!</p>';
                    }
                    else {
                        echo '<p class ="login-status"> You are logged out!</p>';
                    }
                ?>
            </section>
        </div>
>>>>>>> Stashed changes
    </main>

    <?php
        require "footer.php";
    ?>