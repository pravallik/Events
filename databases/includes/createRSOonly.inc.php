<?php

if(isset($_POST['add-rsoevent']))
{
    require 'dbh.inc.php';
    $EventTitle  = $_POST['etitle'];
    $Location  = $_POST['loc'];
    // $Date = $_POST['dateEvents'];
    $RSO  = $_POST['rso'];
    $Summary = $_POST['disc'];

    if(empty($EventTitle) || empty($Location)|| empty($RSO))
    {

        header("Location: ..../CreateEvents.php? error = emptyfields&uid=".$EventTitle);
        exit();
    }
    else
    {

        // checks if the username already exists
        $sqlRSO  = "SELECT uidRSO FROM rsoOnly WHERE uidRSO  = ?" ;
        $stmtRSO  = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmtRSO ,$sqlRSO ))
        {
            header("Location: ../CreateEvents.php?errorfirst=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmtRSO , "s", $EventTitle);
            mysqli_stmt_execute($stmtRSO );
            mysqli_stmt_store_result($stmtRSO );
            $resultCheckRSO  = mysqli_stmt_num_rows($stmtRSO );
            if($resultCheckRSO  > 0)
            {
                header("Location: ../CreateEvents.php?error=EventNameAlreadyExists".$EventTitle);
                exit();
            }
            else
            {
            $sqlRSO  = "INSERT INTO rsoOnly (uidRSO ,placeRSO ,OidRSO ,summaryRSO ) VALUES (?,?,?,?)";
            $stmtRSO  = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmtRSO , $sqlRSO ))
            {
                header("Location: ../CreateEvents.php?errorsecond=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmtRSO , "ssss", $EventTitle, $Location,$RSO,$Summary);
                mysqli_stmt_execute($stmtRSO );
                header("Location: ../CreateEvents.php?signup = success");
                exit();
            }


            }
        }
        

    }

    mysqli_stmt_close($stmtRSO );
    mysqli_close($conn);
}
else
{
    header("Location: ../CreateEvents.php");
    exit();

}