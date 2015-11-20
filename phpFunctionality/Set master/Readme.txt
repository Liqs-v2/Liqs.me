Aus diesem ordner in den ordner 1. nach oben befördern (phpFunctionality) um ein passwort hinzuzufügen, löschen via SQL in phpmyadmin

<button class="subNavButton" type="button" value="setMasterPW" onclick="window.open('/Liqs.me/mainSites/phpFunctionality/setMasterPW.php', '_blank', 'width=777', 'height=500')">Set Master</button>

button wieder unter anderen button in News kopieren


PHP CODE



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