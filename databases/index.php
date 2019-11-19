<?php
    require "header.php"; 
?>

    <main>
        <!-- <div class = "wrapper"> -->
            <section class= "section-default">

                <?php
                    if(isset($_SESSION['userId']))
                    {
                        if($_SESSION['usertype'] == 'SuperAdmin'){
                            echo
                            '<div class = "wrapper">
                                  
                                   <p> You are logged in! </p> 
                                   <a href = test2.php><button>View Events</button></a><br><br>
                                   <a href = CreateEvents.php><button> Create Events</button></a><br><br>
                                   <a href = addRSO.php><button>Add RSO</button></a><br><br>
								   <a href = Uni.php><button>Add Universityy</button></a><br><br>

                            </div>
                            ';
                        }
                        else if($_SESSION['usertype'] == 'RSO'){
                            echo
                            '<div class = "wrapper">
                                  
                                   <p> You are logged in! </p> 
                                   <a href = test2.php><button>View Events</button></a><br><br>
                                   <a href = CreateEvents.php><button> Create Events</button></a><br><br>
                            </div>
                            ';
                        }
                        else {
                            echo 
                                '
                                <div class = "wrapper">
                                    
                                <p> You are logged in! </p> 
                                    <a href = test2.php><button>View Events</button></a><br><br>
                                    <a href = joinRSO.php><button>Join RSO</button></a><br><br>

                                </div>'; 
                        }
                    }
                ?>
            </section>
        <!-- </div> -->
    </main>

    <?php
        require "footer.php";
    ?>
