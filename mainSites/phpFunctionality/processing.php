<?php 
	
	if (isset($_POST['title']) && ($_POST['teaser']) && ($_POST['content']) && ($_POST['author']) && ($_POST['img_path']) )
	{
        //Changed to more convenient naming for iterating
		$input[0] = ($_POST["title"]);
        $input[1] = ($_POST['teaser']);
        $input[2] = ($_POST['content']);
        $input[3] = ($_POST['author']);
        $input[4] = ($_POST['img_path']);
		  
        //Establish connection to database
		$table="post";
       
        //Write out to database
        //MySQLi bind_param to avoid sql inject
        $link = mysqli_connect("localhost", "root", "§f4K_H8|>€r-M$|3_eS^F%", "liqs_news");
        
        //Check Connection
        if(mysqli_connect_errno())
        {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        
        $sql="INSERT INTO $table(Title, Teaser, Content, Author, Img_Path) VALUES('".$input[0]."','".$input[1]."','".$input[2]."','".$input[3]."','".$input[4]."')";
        
        if($stmt = mysqli_prepare($link, $sql))
        {
            mysqli_stmt_bind_param($stmt, "sssss", $input[0],$input[1],$input[2],$input[3],$input[4]);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        mysqli_close($link);
		echo "<script language='javascript'> window.close();</script>";
	}
	else
	{
		echo "Fill that formular!";
	}

?> 