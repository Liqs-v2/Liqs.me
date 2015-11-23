<html>

<head>
    <title>Add Post-Form</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>

<body>

	<h1>Liqs.me - Add Post</h1>
    
   <a class="link" data-link="first">Add Post</a>
    <a class="link" data-link="second" href="?editDelPosts" name="editDelPosts">Edit post</a>

    <!-- ADD POST -->
    <div class="form_manage" data-link="first">
        <form method="post" action="processing.php">
            Title: <br>
            <input type="text" name="title">
            <br>
            Teaser: <br>
            <input type="text" name="teaser">
            <br>
            Content: <br>
            <input type="text" name="content">
            <br>
            Author: <br>
            <input type="text" name="author">
            <br>
            IMG-Path: <br>
            <input type="text" name="img_path">
            <br>
            <!-- fix this so it sends 1 or 0 to dB-->
            Set Post to Frontpage? <br>
            <input type="radio" name="setFrontpage" value="yes"> Yes
            <input type="radio" name="setFrontpage" value="no"> No
            <br>
            <input type="submit" value="send">
        </form>
    </div>
    
     <!-- EDIT/DELETE POSTS -->
     <div class="form_manage" data-link="second">
             
     </div>

    <script type="text/javascript"> 
        $('.form_manage').hide();  
        $('.form_manage[data-link=first]').show();  

        $('.link').click(function() {
        $('.form_manage').hide();       
        $('.form_manage[data-link=' + $(this).data('link') + ']').fadeIn({
            width: '200px'
        }, 300);
    });
    </script>
</body>

</html>