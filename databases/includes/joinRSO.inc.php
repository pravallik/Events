<?php

session_start()
?>
<?php
if(isset($_POST['JoinRSO']))
{
    require 'dbh.inc.php';
    $RSOTitle  = $_POST['jorso'];
	
    $user  =$_SESSION['userUID'];
	echo $user; 
	header("Location: ..../joinRSO.php? error = empty=erjkejrkejrke");
   
    if(empty($RSOTitle))
    {

       header("Location: ..../joinRSO.php? error = empty=");
       exit();
    }
    else
    {

        // checks if the username already exists
        //$sqlrso = "SELECT uidEvents FROM events WHERE uidEvents = ?" ;
        //$stmtrso = mysqli_stmt_init($conn);
        //if(!mysqli_stmt_prepare($stmtrso,$sqlrso))
        //{
        //    header("Location: ../joinRSO.php?errorfirst=sqlerror");
        //    exit();
        //}
        //else
        //{
           // mysqli_stmt_bind_param($stmtrso, "s", $user);
            //mysqli_stmt_store_result($stmtrso);
           // mysqli_stmt_execute($stmtrso);
            
            $sqlrso = "INSERT INTO joinrso (jUsers,jRSO) VALUES (?,?)";
            $stmtrso = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmtrso, $sqlrso))
            {
                header("Location: ../joinRSO.php?errorsecond=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmtrso, "ss", $user, $RSOTitle);
                mysqli_stmt_execute($stmtrso);
                header("Location: ../joinRSO.php?signup = success");
                exit();
            }


            
       // }
        

    }

    mysqli_stmt_close($stmtrso);
    mysqli_close($conn);
}
else
{
    header("Location: ../joinRSO.php");
    exit();

}