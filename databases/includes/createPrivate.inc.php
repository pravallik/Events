<?php

if(isset($_POST['add-privateevent']))
{
    require 'dbh.inc.php';
    $EventTitle  = $_POST['etitle'];
    $Location  = $_POST['loc'];
    // $Date = $_POST['dateEvents'];
    $RSO  = $_POST['rso'];
    $Summary = $_POST['disc'];
    $university = $_POST['Uni'];

    if(empty($EventTitle) || empty($Location)|| empty($RSO))
    {

        header("Location: ..../CreateEvents.php? error = emptyfields&uid=".$EventTitle);
        exit();
    }
    else
    {

        // checks if the username already exists
        $sqlPrivates = "SELECT uidPrivates FROM privates WHERE uidPrivates = ?" ;
        $stmtPrivates = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmtPrivates,$sqlPrivates))
        {
            header("Location: ../CreateEvents.php?errorfirst=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmtPrivates, "s", $EventTitle);
            mysqli_stmt_execute($stmtPrivates);
            mysqli_stmt_store_result($stmtPrivates);
            $resultCheckPrivates = mysqli_stmt_num_rows($stmtPrivates);
            if($resultCheckPrivates > 0)
            {
                header("Location: ../CreateEvents.php?error=EventNameAlreadyExists".$EventTitle);
                exit();
            }
            else
            {
            $sqlPrivates = "INSERT INTO privates (uidPrivates,placePrivates,OidPrivates,summaryPrivates, UniPrivates) VALUES (?,?,?,?,?)";
            $stmtPrivates = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmtPrivates, $sqlPrivates))
            {
                header("Location: ../CreateEvents.php?errorsecond=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmtPrivates, "sssss", $EventTitle, $Location,$RSO,$Summary,$university);
                mysqli_stmt_execute($stmtPrivates);
                header("Location: ../CreateEvents.php?signup = success");
                exit();
            }


            }
        }
        

    }

    mysqli_stmt_close($stmtPrivates);
    mysqli_close($conn);
}
else
{
    header("Location: ../CreateEvents.php");
    exit();

}