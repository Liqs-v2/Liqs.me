<?php
//Simple Select all entries with printing out all parameters here, then add Change + Delete after them. Change takes you to a new page specific to that post (Addpost form, but filled w/info).
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

    $sqlPrint = "SELECT Title FROM $table";
    if($resultPrint = mysqli_query($link, $sqlPrint))
    {
        while($row = mysqli_fetch_row($resultPrint))
        {
            echo "$row[0]<br>";    
        }
    }
    
    mysqli_close($link);
?>