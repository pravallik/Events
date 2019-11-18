<?php
    require "header.php"; 
?>

    <main>
        <div class = "wrapper-main">
            <section class= "section-default">

                <?php
                    if(isset($_SESSION['userId']))
                    {
                        if($_SESSION['usertype'] == 'SuperAdmin'){
                            echo
                            '
                                  
                                   <p> You are logged in! </p> 
                                   <a href = test2.php><button>View Events</button></a><br><br>
                                   <a href = CreateEvents.php><button> Create Events</button></a><br><br>
                                   <a href = addRSO.php><button>Add RSO</button></a><br><br>
                
                            ';
                        }
                        else if($_SESSION['usertype'] == 'RSO'){
                            echo
                            '
                                  
                                   <p> You are logged in! </p> 
                                   <a href = test2.php><button>View Events</button></a><br><br>
                                   <a href = CreateEvents.php><button> Create Events</button></a><br><br>
                            ';
                        }
                        else {
                            echo 
                            '
                            <p> You are logged in! </p> 
                                   <a href = test2.php><button>View Events</button></a><br><br>
                                   <a href = joinRSO.php><button>Join Event</button></a><br><br>

                            '; 
                        }


                    }
                    else {
                        echo '<p class ="login-status"> You are logged out!</p>';
                    }
                ?>
            </section>
        </div>
    </main>

    <?php
        require "footer.php";
    ?>
