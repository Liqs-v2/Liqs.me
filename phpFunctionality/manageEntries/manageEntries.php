<?php
//Simple Select all entries with printing out all parameters here, then add Change + Delete after them. Change takes you to a new page specific to that post (Addpost form, but filled w/info).

    //Establish connection to database
    $table="post";
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
        //Since I need a table-y format anyway, might aswell use a table
        echo "<form action='processDeleteEntries.php' method='post'>
             <table>";
        echo "<tr>
                <td>Title</td>
                <td>Delete</td>
                <td>placeholder</td>
             </tr>";
        //Row is a SINGLE ROW -> 1 data-entity ------ row[0] is the SPAN of THAT ENTITY
        while($row = mysqli_fetch_row($resultPrint))
        {
            echo "<tr>
                    <td>$row[0]</td>
                    <td><input type='checkbox' name='markedForDeath[]' value='$row[0]' class='manageEntryForm'></td>
                    <td>placeholder</td>
                 </tr>";
        }
        echo "</table>";
        echo "<input type='submit' value='Delete'>
             </form>";
    }

    mysqli_close($link);
?>