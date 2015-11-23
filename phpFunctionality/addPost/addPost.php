<html>

<head>
    <title>Add Post-Form</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>

<body>

	<h1>Liqs.me - Add Post</h1>

    <!-- ADD POST -->
        <form method="post" action="processingNewPost.php">
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
</body>

</html>