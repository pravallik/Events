<?php

if(isset($_POST['add-RSO']))
{
    require 'dbh.inc.php';
    $UniversityTitle  = $_POST['Utitle'];
    $LocationRSO  = $_POST['locRSO'];
    // $Date = $_POST['dateEvents'];
    $RSOName  = $_POST['addRso'];
    $SummaryRSO = $_POST['discRSO'];

    if(empty($UniversityTitle) || empty($LocationRSO)|| empty($RSOName))
    {

        header("Location: ..../addRSO.php? error = emptyfields&uid=".$UniversityTitle);
        exit();
    }
    else
    {

        // checks if the username already exists
        $sqlRSO = "SELECT uidRSO FROM rsos WHERE uidRSO = ?" ;
        $stmtRSO = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmtRSO,$sqlRSO))
        {
            header("Location: ../addRSO.php?errorfirst=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmtRSO, "s", $UniversityTitle);
            mysqli_stmt_execute($stmtRSO);
            mysqli_stmt_store_result($stmtRSO);
            $resultCheckRSO = mysqli_stmt_num_rows($stmtRSO);
            if($resultCheckRSO> 0)
            {
                header("Location: ../addRSO.php?error=EventNameAlreadyExists".$UniversityTitle);
                exit();
            }
            else
            {
            $sqlRSO = "INSERT INTO rsos (uidRSO,placeRSO,nameRSO,summaryRSO) VALUES (?,?,?,?)";
            $stmtRSO = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmtRSO, $sqlRSO))
            {
                header("Location: ../addRSO.php?errorsecond=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmtRSO, "ssss", $UniversityTitle, $LocationRSO,$RSOName,$SummaryRSO);
                mysqli_stmt_execute($stmtRSO);
                header("Location: ../addRSO.php?signup = success");
                exit();
            }


            }
        }
        

    }

    mysqli_stmt_close($stmtRSO);
    mysqli_close($conn);
}
else
{
    header("Location: ../addRSO.php");
    exit();

}