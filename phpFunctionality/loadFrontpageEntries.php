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

        $sqlFetch = "SELECT `Title`,`Teaser` FROM `post` WHERE `setFrontpage`=1";
        if($result = mysqli_query($link, $sqlFetch))
        {
            $rows_cnt = mysqli_num_rows($result);
            $i=0;
            if($rows_cnt == 3)
            {
                while($i < $rows_cnt)
                {
                    if($row = mysqli_fetch_row($result))
                    {
                        $postTitle[$i] = $row[0];
                        $postTeaser[$i] = $row[1];
                    }
                    $i++;
                }
            }
            else
            {   //redirects to page that handles / displays error
                 header("Location:errHandle.html");
            }
        }
        mysqli_free_result($result);
        mysqli_close($link);
?>