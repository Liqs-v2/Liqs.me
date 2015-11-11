<?php
 // Verbindunsparameter hier eintragen:

	 $server="localhost"; // MYSQL-Server
	 $user="root"; // MYSQL-Nutzer
	 $pass="§f4K_H8|>€r-M$|3_eS^F%"; // MYSQL-Passwort
	 $dbase="liqsme_news"; // Standard-Datenbank

	 $link=@mysql_connect($server,$user,$pass);
		 if ($link)
		 {
			mysql_select_db($dbase,$link);
		 }
		else
		 {
			die("Verbindung zum MYSQL-Serverfehlgeschlagen</body></html>");
		 }
?> 