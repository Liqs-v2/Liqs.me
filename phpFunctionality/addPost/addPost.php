<html>
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
            <input type="password" name="masterPass" autocomplete="off">
            <br>
            <input type="submit" value="send">
        </form>
</body>

</html>