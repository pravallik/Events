<?php

if(isset($_POST['add-event']))
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
        $sqlevents = "SELECT uidEvents FROM events WHERE uidEvents = ?" ;
        $stmtevents = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmtevents,$sqlevents))
        {
            header("Location: ../CreateEvents.php?errorfirst=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmtevents, "s", $EventTitle);
            mysqli_stmt_execute($stmtevents);
            mysqli_stmt_store_result($stmtevents);
            $resultCheckevents = mysqli_stmt_num_rows($stmtevents);
            if($resultCheckevents > 0)
            {
                header("Location: ../CreateEvents.php?error=EventNameAlreadyExists".$EventTitle);
                exit();
            }
            else
            {
            $sqlevents = "INSERT INTO events (uidEvents,placeEvents,OidEvents,summaryEvents) VALUES (?,?,?,?)";
            $stmtevents = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmtevents, $sqlevents))
            {
                header("Location: ../CreateEvents.php?errorsecond=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmtevents, "ssss", $EventTitle, $Location,$RSO,$Summary);
                mysqli_stmt_execute($stmtevents);
                header("Location: ../CreateEvents.php?signup = success");
                exit();
            }


            }
        }
        

    }

    mysqli_stmt_close($stmtevents);
    mysqli_close($conn);
}
else
{
    header("Location: ../CreateEvents.php");
    exit();

}