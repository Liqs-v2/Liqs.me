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

    //<<<<<<<<<<< FUNCTIONALITY >>>>>>>>>>>>>>>
    if(isset($_GET['postToEdit']))
    {
        $postToEdit = $_GET['postToEdit'];
        $sqlFetch = "SELECT * FROM `post` WHERE `Title`=\"$postToEdit\"";
        if($result = mysqli_query($link, $sqlFetch))
        {
            if($row = mysqli_fetch_row($result))
            {
                $postAuthor = $row[0];
                $postTitle = $row[1];
                $postTeaser = $row[2];
                $postContent = $row[3];
                $postImgPath = $row[4];
                $postFront = $row[5];
            }
            
            echo " <form method='post'>
                        Title: <br>
                        <input type='text' name='title' value='$postTitle'>
                        <br>
                        Teaser: <br>
                        <input type='text' name='teaser' value='$postTeaser'>
                        <br>
                        Content: <br>
                        <input type='text' name='content' value='$postContent'>
                        <br>
                        Author: <br>
                        <input type='text' name='author' value='$postAuthor'>
                        <br>
                        IMG-Path: <br>
                        <input type='text' name='img_path' value='$postImgPath'>
                        <br>
                        <!-- fix this so it sends 1 or 0 to dB-->
                        Set Post to Frontpage? <br>";
                            
                        //Check which one of the two has to be preselected
                        if($postFront != 0)
                        {
                            echo "<input type='radio' name='setFrontpage' value='yes' CHECKED> Yes
                            <input type='radio' name='setFrontpage' value='no'> No";
                        }
                        elseif($postFront == 0)
                        {
                            echo "<input type='radio' name='setFrontpage' value='yes'> Yes
                            <input type='radio' name='setFrontpage' value='no' CHECKED> No";
                        }
                        
                        //Rest of Form
                        echo "<br>
                        <input type='submit' value='Update'>
        </form>";
        }
        else
        {
            echo "There is no such entry in the database!";
        }
    }
    else
    {
        echo "No link was pressed? WTF HOW";
    }
        

        //this is to be changed
        //Add here
        if (isset($_POST['title']) && ($_POST['teaser']) && ($_POST['content']) && ($_POST['author']) && ($_POST['img_path']) && ($_POST['setFrontpage']))
        {
            //Changed to more convenient naming for iterating
            $input[0] = ($_POST['title']);
            $input[1] = ($_POST['teaser']);
            $input[2] = ($_POST['content']);
            $input[3] = ($_POST['author']);
            $input[4] = ($_POST['img_path']);
            //Change to appropriate integer value
            $input[5] = ($_POST['setFrontpage']);
            if($input[5] == "yes")
            {
                $input[5] = 1;
            }

            $sql="INSERT INTO $table(Title, Teaser, Content, Author, Img_Path, setFrontpage)
            VALUES('".$input[0]."','".$input[1]."','".$input[2]."','".$input[3]."','".$input[4]."','".$input[5]."')";//change this to alter or sm to edit rather than add

            if($stmt = mysqli_prepare($link, $sql))
            {
                mysqli_stmt_bind_param($stmt, "sssssi", $input[0],$input[1],$input[2],$input[3],$input[4],$input[5]);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
            }

            mysqli_free_result($result);
            mysqli_close($link);
            //echo "<script language='javascript'> window.close();</script>";
        }
    
?>