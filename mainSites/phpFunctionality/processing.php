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
        include("open.inc.php");
		$table="post";
       
        //Write out to database
        //MySQLi bind_param to avoid sql inject
        
        $sql="INSERT INTO $table(Title, Teaser, Content, Author, Img_Path) VALUES('".$input[0]."','".$input[1]."','".$input[2]."','".$input[3]."','".$input[4]."')";
        mysql_query($sql, $link);
		echo "<script language='javascript'> window.close();</script>";
	}
	else
	{
		echo "Fill that formular!";
	}

?> 