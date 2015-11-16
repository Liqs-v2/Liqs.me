<html>

<head>
    <title>Add Post-Form</title>
</head>

<body>

	<h1>Liqs.me - Add Post</h1>
	
	<form action="processing.php" method="post">
	
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
        Set Post to Frontpage? <br>
        <input type="radio" name="setFrontpage" value="yes"> Yes
        <input type="radio" name="setFrontpage" value="no"> No
        <br>
        <input type="submit" value="send">
	</form>
</body>

</html>