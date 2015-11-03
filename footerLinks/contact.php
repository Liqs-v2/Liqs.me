<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Liqs | Contact</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

      <!-- Include my CSS-->
          <link href="../includes/footer.css" rel="stylesheet">
          <link href="../includes/nav.css" rel="stylesheet">
          <link href="contact.css" rel="stylesheet">
              <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
              <!--Glyphicons-->
              <link rel="stylesheet" href="../font-awesome-4.3.0/css/font-awesome.min.css">
  </head>

  <body>

      <!-- My HTML Code-->
        <!-- Workaround for the directory structor discrepancies-->
        <?php $dirHelper="../mainSites/" ?>
        <!--Nav-->
        <?php include("../includes/nav.php") ?>
        <!--Content-->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="content col-md-10 col-md-offset-1">
                        <h2>Contact</h2>
                        <br>
                        <div class="col-md-6">
                            <h4>You can reach out to me via:</h4>
                            <br>
                            <p>e-Mail: tobiaslindenbauer98@gmail.com<br>
                            Phone: +43 66666666666666666<br><br>

                            Twitter: @TobiLiqs<br>
                            Twitch: MrTrunsh<br>
                            YouTube: MrTrunsh258</p>
                        </div>
                        <div class="col-md-6">
                            <h4>Currently residing at:</h4><br>
                            <div class="well">
                            <p>4612 Breitenaich<br>
                            Breitenaich 85<br>
                            AUSTRIA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    	<!--footer-->
    	<?php $dirHelper="" ?>
        <?php include("../includes/footer.php"); ?>

      <!--END My HTML Code-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
