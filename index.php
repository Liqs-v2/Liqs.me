<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Liqs | Home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Include my CSS-->
    <link href="index.css" rel="stylesheet">
    <link href="includes/navMainSites.css" rel="stylesheet">
    <link href="includes/footer.css" rel="stylesheet">
    <!-- Custom Font-->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <!--Glyphicons-->
    <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
    <!--Animate.css-->
    <link rel="stylesheet" href="animate.css">
</head>

<body>
    <?php include("phpFunctionality/loadFrontpageEntries.php"); ?>
    <!-- My HTML Code-->
    <div id="bgCarousel" class="carousel slide" data-interval="15000" data-ride="carousel">
        <!-- Carousel indicators (small dots) -->
        <ol class="carousel-indicators">
            <li data-target="#bgCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#bgCarousel" data-slide-to="1"></li>
            <li data-target="#bgCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">

            <!-- nav -->
            <?php $indexReloader="" ?>
            <?php $dirHelper="mainSites/" ?>
            <?php include("includes/nav.php") ?>

            <!--Items of the Slideshow-->
            <div class="active item">
                <img src="Pictures/Pic3.jpg" alt="LoL News">
                <div class="carousel-caption">
                        <div class="carouselText">
                            <h1 class="carouselHeader animated fadeInUp">
                                LoL News
                            </h1>
                            <p class="carouselTeaser animated fadeInUp">
                                y name is Tobias and I’m currently 17 years old. Most of my childhood I spent in Thf
                            </p>
                        </div>
                </div>
            </div>
            <div class="item">
                <img src="Pictures/Pic2.jpg" alt="WoW News">
                <div class="carousel-caption">
                        <div class="carouselText">
                            <h1 class="carouselHeader animated fadeInUp">
                                wow News
                            </h1>
                            <p class="carouselTeaser animated fadeInUp">
                               safdsgaslkglaöjgdsöofnla
                            </p>
                        </div>
                </div>
            </div>
            <div class="item">
                <img src="Pictures/Pic1.jpg" alt="CS News">
                <div class="carousel-caption">
                        <div class="carouselText">
                            <h1 class="carouselHeader animated fadeInUp">
                                CS News
                            </h1>
                            <p class="carouselTeaser animated fadeInUp">
                                ello
                            </p>
                        </div>
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
                        <p>My name is Tobias and I’m currently 17 years old. Most of my childhood I spent in Thalheim bei Wels, where I also attended kindergarten and elementary school. I never had much trouble with school, especially in elementary and grammar school. After finishing elementary school we moved to Breitenaich, where I spent the rest of my life so far. Currently I am attending HTL Wels’ IT department and am rather interested in Web Applications, -Design and –Development. I also have great interest in astronomy, space and physics, well anything science-y really.</p>

                    </div>
                    <div class="col-md-4">
                        <p>Web Development and Design was a very recent discovery of mine, but I was instantly hooked. As I’m attending an IT school we usually do a lot of straight up programming, which I never really liked a whole lot. I as a person like seeing instant results, or atleast being able to see the progress I make more clearly and a simply output telling me wether it works or not just isn't enough for me. So Web Development and Design was a nice change of pace, as you can instantly see your work have an impact. I am still a beginner, but I am constantly trying to improve. You can follow me, my progress and my projects on this website.</p>

                    </div>
                </div>
            </div>
        </div>
        <!-- Buttons -->
        <div class="container">
            <div id="cta-btn-position">
                <div class="row">
                    <div class="col-md-4"><a href="mainSites/gaming.php" class="btn btn-info" role="button">I <i class="fa fa-heart-o"></i> videogames!</a>
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
