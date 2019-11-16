<?php

if(isset($_POST['add-event']))
{
    require 'dbh.inc.php';
    $EventTitle  = $_POST['etitle'];
    $Location  = $_POST['loc'];
    $Date = $_POST['date'];
    $Time  = $_POST['time'];
    $RSO  = $_POST['rso'];

    if(empty($username) || empty($username)|| empty($username)|| empty($username))
    {

        header("Location: ..../signup.php? error = emptyfields&uid=".$username);
        exit();
    }
    else
    {

        // checks if the username already exists
        $sql = "SELECT uidUsers FROM users WHERE uidUsers = ?" ;
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0)
            {
                header("Location: ../signup.php?error=Usertaken".$email);
                exit();
            }
            else
            {
            $sql = "INSERT INTO users (uidUsers,emailUsers,typeUser,pwdUsers) VALUES (?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql))
            {
                header("Location: ../signup.php?error=sqlerror");
                exit();
            }
            else
            {
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt, "ssss", $username, $email,$usertype,$hashedPwd);
                mysqli_stmt_execute($stmt);
                header("Location: ../signup.php?signup = success");
                exit();
            }


            }
        }
        

    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else
{
    header("Location: ../signup.php");
    exit();

}