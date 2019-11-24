<?php

if(isset($_POST['add-comment']))
{
    require 'dbh.inc.php';
    $Eventname  = $_POST['Event'];
    $Comment  = $_POST['Comment'];
  
    
    if(empty($Eventname) )
    {

        header("Location: ..../addcomment.php? error = emptyfields&uid=".$Eventname);
        exit();
    }
    else
    {

            $sqla = "INSERT INTO comments (c, uidEvents) VALUES (?,?)";
            $stmta = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmta, $sqla))
            {
                header("Location: ../addcomment.php?errorsecond=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmta, "ss",$Comment, $Eventname);
                mysqli_stmt_execute($stmta);
                header("Location: ../addcomment.php?= success");
                exit();
            }

    }

    mysqli_stmt_close($stmta);
    mysqli_close($conn);
}
else
{
    header("Location: ../addcomment.php");
    exit();

}