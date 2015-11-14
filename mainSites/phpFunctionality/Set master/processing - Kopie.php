<?php 
	
	if (isset($_POST['password']))
	{
		include("open.inc.php");
		$table="masterpass";
		$password = ($_POST["password"]);
		  
        $sql="INSERT INTO $table(masterPass) VALUES('".$password."')";
        mysql_query($sql, $link);
		echo "<script language='javascript'> window.close();</script>";
	}
	else
	{
		echo "Fill that formular!";
	}

?> 