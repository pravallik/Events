<?php
if(isset($_POST['Create-submit']))
{
    require 'dbh.inc.php';
    $uniname  = $_POST['University'];
    $loc  = $_POST['Loc'];
    $desc = $_POST['Description'];
    $numb  = $_POST['Numberofstudents'];

    if(empty($uniname) || empty($uniname)|| empty($uniname)|| empty($uniname))
    {

        header("Location: ..../Uni.php? error = emptyfields&uid=".$uniname);
        exit();
    }
    
    else
    {
		
        // checks if the University already exists
        $sqlq = "SELECT nameUni FROM universities WHERE nameUni = ?" ;
        $stmtq = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmtq,$sqlq))
        {
            header("Location: ../Uni.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmtq, "s", $uniname);
            mysqli_stmt_execute($stmtq);
            mysqli_stmt_store_result($stmtq);
            $resultCheck = mysqli_stmt_num_rows($stmtq);
            if($resultCheck > 0)
            {
                header("Location: ../Uni.php?error=Unitaken".$uniname);
                exit();
            }
            else
            {
            $sqlq = "INSERT INTO universities (nameUni,locUni,descUni,numStu) VALUES (?,?,?,?)";
            $stmtq = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmtq, $sqlq))
				{
					header("Location: ../Uni.php?error=sqlerrore");
					exit();
				}
				else
				{
				   
					mysqli_stmt_bind_param($stmtq, "ssss", $uniname, $loc,$desc,$numb);
					mysqli_stmt_execute($stmtq);
					header("Location: ../Uni.php?= success");
					exit();
				}


           // }
        }
        

    }
}
    mysqli_stmt_close($stmtq);
    mysqli_close($conn);
}
else
{
    header("Location: ../Uni.php");
    exit();

}