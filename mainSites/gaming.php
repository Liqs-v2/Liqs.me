<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gaming</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Include my CSS-->
    <link href="../includes/footer.css" rel="stylesheet">
    <link href="../includes/navMainSites.css" rel="stylesheet">
    <link href="mainCss/gaming.css" rel="stylesheet">
      
    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
      
    <!--Glyphicons-->
    <link rel="stylesheet" href="../font-awesome-4.3.0/css/font-awesome.min.css">
      
    <!--Favicon-->
    <?php   $dirHelper ="../";
            include("../favIco/setup.php")?>
  </head>

  <body>

      <!-- My HTML Code-->
       <!-- Workaround for the directory structor discrepancies-->
        <?php $dirHelper="" ?>
        <?php $indexReloader="../" ?>


      <!--Content-->
            <div id="mainSiteBG">
                <img src="../Pictures/eSports.jpg">
                  <?php include("../includes/nav.php") ?>
                <div id="jumboHeader">
                    <h1>Gaming</h1>
                </div>
            </div>
            <div id="darkSperator"></div>
            <div id="lightSeperator"></div>
                        <!-- Order of content
                            1. What got me into gaming, early games
                            2. First encounter with WoW and being casual
                            3.League era
                                3.2 Dropping WoW for league, competitive mindset and the bet
                                3.1 Being good in league and toxicity
                            5. Return to WoW, where I got with the new attidude (brief csgo)
                            6. My achievements and future goals or csgo here-->
                    <div id="contentBeginnings">
                        <div class="divFormatting">
                            <h1>The beginnings</h1>
                            I have always been a very competitive person. Everytime there is a ladder, a ranking or a performance-meter of some sort, I want to be on top of it, I want to have the best performance, I want to be THE best. Wether that be when playing football with my friends, a board game with my family or something as simply as hide and seek with anyone really.
                            <br><br>
                            So now, what was my first encounter with videogames like? The first videogame I ever played was a RTS called "Die Siedler III", which was given to me by the brother of my mother. I was almost instantly hooked by the game, even though I only played offline. I remember that I always used to play the Romans and only attacked my enemies once I had a huge army, because I was very scared of losing my army and the game - to a computer. Now imagine, with me being scared of losing to A.I., how fun playing online would have been - probably not very. Another reason why I didn't play online, which was also the bigger reason, was, that I simply didn't know how to.
                        </div>
                    </div>
                    <div id="contentCasual">
                        <div class="divFormatting">
                            <h1>Exploring vast, distant worlds</h1>
                        </div>
                    </div>
                    <div id="contentLoL">
                        <div class="divFormatting">
                            <h1>A change of scenery</h1>
                        </div>
                    </div>
                    <div id="contentWoW">
                        <div class="divFormatting">
                            <h1>Back to the roots</h1>
                        </div>
                    </div>
                    <div id="contentAchievements">
                        <div class="divFormatting">
                            <h1>Goals and Achievements</h1>
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
