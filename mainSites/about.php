<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>About</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

      <!-- Include my CSS-->
    <link href="../includes/footer.css" rel="stylesheet">
    <link href="../includes/navMainSites.css" rel="stylesheet">
    <link href="mainCss/about.css" rel="stylesheet">
      
    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
      
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
     <img src="../Pictures/2.jpg">
        <?php include("../includes/nav.php") ?>
            <div id="jumboHeader">
                <h1>About</h1>
            </div>
        </div>
        <div id="darkSperator"></div>
        <div id="lightSeperator"></div>
        <div class="container">
            <div class="row">
                <div class="content col-md-12">
                    <div id="content">
                        <!-- facts > TLDRlife > Education > Experiences -->
                        <div id="contentFacts">
                            <h1>A few fun facts</h1>
                            I'm a chocoholic, I enjoy jogging, I have an easy time learning new languages, My favourite food is pizza, I love skiing, My favourite season is Spring, I play videogames since I was a small kid and I'm pretty good at doing that.
                        </div>
                        <hr>
                        <div id="contentEd">
                            <h1>Education</h1>
                            <!-- Get images and do left right left alignment
                                How specific do I want these to be? Probably more..?-->
                            <div class="alignEdLeft">
                                <h2>Elementary school Thalheim</h2>
                                <a  href="http://www.vsthalheim.at" target="_blank">
                                    <img class="edImgL" src="../Pictures/vsthalheim.jpg" alt="Elementary school Thalheim" width="225" height="100">
                                </a>
                                From the age of six to ten I attended the elementary school in Thalheim bei Wels, where I lived at the time. During that time I already had decent interest into technology and everything around that, although my usage of computers and such was limited to videogames and the very basics.
                            </div>
                            <hr>
                            <div class="alignEdLeft">
                                <h2 class="rightHead">Grammar school Dachsberg</h2>
                                <a  href="http://www.dachsberg.at" target="_blank">
                                    <img class="edImgR" src="../Pictures/gdachsberg.jpg" alt="Elementary school Thalheim" width="225" height="100">
                                </a>
                                I attended the grammar school in Dachsberg from 10 to 14. Between elementary and grammar school we also moved from Thalheim to Breitenaich. In those four years I also had my very first experiences with coding. 
                            </div>
                            <hr>
                            <div class="alignEdLeft">
                                <h2>HTL Wels</h2>
                                <a  href="http://www.htl-wels.at" target="_blank">
                                    <img class="edImgL" src="../Pictures/htlwels.jpg" alt="Elementary school Thalheim" width="225" height="100">
                                </a>
                                Currently I am attenting HTL Wels' IT department. A HTL is a specific form of school, which combines getting taught skills usuful in a particular branch with basic higher education. Over the course of the four years, which I have been attending now, I managed to aquire a broad spectrum of experiences. I also got in touch with creating websites, which has been by far the most fun thing so far.
                            </div>
                        </div>
                        <hr>
                    </div>
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
