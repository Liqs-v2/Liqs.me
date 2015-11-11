<?php 
	
	if (isset($_POST['password'])
	{
		$password = ($_POST["password"]);
		
		include("open.inc.php");
		$table="masterPass";
		$sql="INSERT INTO $table() VALUES('".$password."')";
		mysql_query($sql, $link);
		echo "<script language='javascript'> window.close();</script>";
	}
	else
	{
		echo "Fill that formular!";
	}

?> 