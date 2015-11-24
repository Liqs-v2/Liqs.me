<?php

//Establish connection to database
     $table="post";

    //Write out to database
    //MySQLi bind_param to avoid sql inject
    $link = mysqli_connect("localhost", "root", "§f4k_H8|>€r-M$|3_eS^F%", "liqs_news");

    //Check Connection
    if(mysqli_connect_errno())
    {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    //<<<<<<<< FUNCTIONALITY >>>>>>>>>
    if(isset($_POST['markedForDeath']))
    {
        $buf = $_POST['markedForDeath'];
        $numberOfElements = count($buf);
        echo "$numberOfElements<br>";
        
        for($i=0; $i < $numberOfElements ; $i++)
        {
            printf("%s\n", $buf[$i]);
            //Use PHPmyadmin to generate the PHP-SQL code x)
            $sqlDel = "DELETE FROM $table WHERE `Title`=\"$buf[$i]\"";
            if($stmt = mysqli_prepare($link,$sqlDel))
            {
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
            }
        }
        mysqli_close($link);
	//	echo "<script language='javascript'> window.close();</script>";
    }
?>