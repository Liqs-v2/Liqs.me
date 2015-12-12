<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>News</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Include my CSS-->
    <link href="../includes/footer.css" rel="stylesheet">
    <link href="../includes/navMainSites.css" rel="stylesheet">
    <link href="mainCss/news.css" rel="stylesheet">
      
    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>

    <!--Glyphicons-->
    <link rel="stylesheet" href="../font-awesome-4.3.0/css/font-awesome.min.css">
      
    <!-- Favicon -->
    <?php   $dirHelper ="../";
            include("../favIco/setup.php")?>
  </head>

  <body>

      <!-- My HTML Code-->
       <!-- Workaround for the directory structor discrepancies-->
        <?php $dirHelper="" ?>
        <?php $indexReloader="../" ?>


      <!--Content-->
        <div id="content">
            <div id="mainSiteBG">
                <img src="../Pictures/Pic1.jpg">
                  <?php include("../includes/nav.php") ?>
                <div id="jumboHeader">
                    <h1>News</h1>
                </div>
            </div>
            <div id="darkSperator"></div>
            <div id="lightSeperator"></div>
            <div class="container">
              <!-- Articles loaded from DB here -->
                <div id="subNav">
                    <button class="subNavButton" type="button" value="addPost" onclick="window.open('/Liqs.me/phpFunctionality/addPost/addPost.php', 'width=800', 'height=500').focus()">Add Post</button>
                     <button class="subNavButton" type="button" value="managePost" onclick="window.open('/Liqs.me/phpFunctionality/manageEntries/manageEntries.php', 'width=800', 'height=500').focus()">Manage Posts</button>
                </div>
            </div>
        </div>

    	<!--footer-->
    	<?php $dirHelper="../footerLinks/" ?>
        <?php include("../includes/footer.php"); ?>
      <!--END My HTML Code-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
