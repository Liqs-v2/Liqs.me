<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Liqs | Home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Include my CSS-->
    <link href="index.css" rel="stylesheet">
    <link href="includes/navMainSites.css" rel="stylesheet">
    <link href="includes/footer.css" rel="stylesheet">
    <!-- Custom Font-->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <!--Glyphicons-->
    <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
</head>

<body>

    <!-- My HTML Code-->
    <div id="bgCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
        <!-- Carousel indicators (small dots) -->
        <ol class="carousel-indicators">
            <li data-target="#bgCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#bgCarousel" data-slide-to="1"></li>
            <li data-target="#bgCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">

            <!-- nav -->
            <?php $dirHelper="mainSites/" ?>
            <?php include("includes/nav.php") ?>

            <!--Items of the Slideshow-->
            <div class="active item">
                <img src="Pictures/Pic3.jpg" alt="LoL News">
                <div class="carousel-caption">
                    <h3>LoL News</h3>
                </div>
            </div>
            <div class="item">
                <img src="Pictures/Pic2.jpg" alt="WoW News">
                <div class="carousel-caption">
                    <h3>WoW News</h3>
                </div>
            </div>
            <div class="item">
                <img src="Pictures/Pic1.jpg" alt="CS News">
                <div class="carousel-caption">
                    <h3>CS News</h3>
                </div>
            </div>
        </div>
    </div>

    <div id="introContent">
        <div id="introContentDark"></div>
        <div id="introContentHead">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">Gaming</div>
                    <div class="col-md-4">About</div>
                    <div class="col-md-4">Web Design</div>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="intoContentText">
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            Gaming has always been a very big part of my life. At first I was playing games very casually, but shortly after discovering League of Legends eSports had secured itself a special spot in my heart. My mindset regarding Gaming was also heavily influenced by eSports, as I turned from a very casual player, to an extremely competitive player. During my time playing videogames I have also already had some personal achievements, like joining a Top 100 Guild in World of Warcraft and climbing from 800 Elo to approximately 1750 Elo in the second season of League of Legends, after a friend bet I wouldn’t be able to get to 1600 Elo.</p>

                    </div>
                    <div class="col-md-4">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>

                    </div>
                    <div class="col-md-4">
                        <p>Web Development and Design was a very recent discovery of mine, but I was instantly hooked. As I’m attending an IT school we usually do a lot of straight up programming, which I never really liked a whole lot, since I couldn’t get myself motivated out of a line of text stating that the program works. So Web Development and Design was a nice change of pace, as you can instantly see your work have an impact. I am still a beginner, but I am constantly trying to improve. You can follow me, my progress and my projects on this website.</p>

                    </div>
                </div>
            </div>
        </div>
        <!-- Buttons -->
        <div class="container">
            <div id="cta-btn-position">
                <div class="row">
                    <div class="col-md-4"><a href="mainSites/gaming.php" class="btn btn-info" role="button">I &#60;3 videogames!</a>
                    </div>
                    <div class="col-md-4"> <a href="mainSites/about.php" class="btn btn-info" role="button">I wanna know more!</a>
                    </div>
                    <div class="col-md-4"><a href="mainSites/web.php" class="btn btn-info" role="button">Show me your work!</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--footer-->
    <?php $dirHelper="footerLinks/" ?>
    <?php include( "includes/footer.php"); ?>
    <!--END My HTML Code-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
