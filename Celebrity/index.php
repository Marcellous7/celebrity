<?php include("connect_db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Celebrity Management</title>
    <!-- page icon -->
    <link rel="icon" href="./IMAGES/page icon-dark.PNG" type="">
    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/style.css">

</head>

<body>
    <main>
        <header class="header">
            <div class="container">
                <nav class="nav">
                    <div class="nav__content">
                        <div class="logo">
                            <a href="./index.php">
                                <div class="box__logo">
                                    <div class="box__1">
                                        <div class="box__2">
                                            <div class="box__3">
                                                <div class="box__4">
                                                    <div class="box__5"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav__logo">
                                    <h1>QUICK CELEBRITY</h1>
                                    <h4>BOOKING AGENCY</h4>
                                </div>
                            </a>
                        </div>
                        <ul class="nav__list">
                            <ol class="about"><a href="./index.php">Home</a></ol>
                            <ol><a href="./CelebrityList-index.html">Celebrity List</a></ol>
                            <ol><a href="./About-index.html">About</a></ol>
                            <ol><a href="./contact-index.php">Contact</a></ol>
                        </ul>

                        <div class="nav__end">
                            <div class="nav__cta"><a class="cta" href="./book-now.html">BOOK NOW!</a></div>
                            <div class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <div class="overlay"></div>


        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero__content">
                    <h1>BOOK YOUR FAVOURITE <br> <span>CELEBRITY</span></h1>
                    <p>We are available round the globe</p>
                </div>
            </div>
        </section>


        <!-- About Section -->
        <section class="about">
            <div class="container">
                <div class="about__content">
                    <h2>About Us</h2>
                    <p>QUICK CELEBRITY BOOKING ia a full-service talent booking agency, specifically focused on the
                        needs of event professinals looking to book keynote speakers, public figures and corporate
                        entertainment fo their events. Our mission is the provide a best-in-class talent booking
                        experience from start to finish. We connect audience with innovative minds and powerful massages
                        and entertainment, regardless of the industry. Our team thrives on keeping up with the latest
                        trends and forward thinkers in order to identify and book the best keynote speakers fo every
                        client and every specific event. We love what we do, and we are passionte about helping on
                        client create the most successful event time and time again.</p>
                    <div class="aboutbtn"><a class="aboutcta" href="./About-index.html">Learn More</a></div>
                </div>
            </div>

        </section>


        <!-- Feature Section -->
        <section class="feature">
            <div class="container">
                <div class="feature__content">
                    <h2>Featured Celebrities</h2>
                    <p>This is a list of featured celebrities and public figures available for booking</p>
                    <div class="sample__celeb">
                        <a href="./jared__leto.html">
                            <div class="celebrity__1">
                                <div class="sample__celeb__overlay">
                                    <h3>JARED LETO</h3>
                                    <p>Artor/Musician</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="celebrity__2">
                                <div class="sample__celeb__overlay">
                                    <h3>BRADLEY COOPER</h3>
                                    <p>Artor</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="celebrity__3">
                                <div class="sample__celeb__overlay">
                                    <h3>JENNIFER LAWRENCE</h3>
                                    <p>Artor</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="celebrity__4">
                                <div class="sample__celeb__overlay">
                                    <h3>CHRIS TUCKER</h3>
                                    <p>Artor</p>
                                </div>
                            </div>
                        </a>


                    </div>
                </div>
            </div>
        </section>


        <!-- VIEW SECTION -->
        <section class="view">
            <video autoplay muted loop>
                <source src="./VIDEOS/2022395-hd_1920_1080_30fps.mp4" type="video/mp4">

            </video>
            <div class="container">
                <div class="view_content">
                    <h2>Book A Celeb Now!</h2>
                    <p>Are you looking to book keynote speakers, public figures and corporate entertainment for your
                        events. <br> Our mission is to provide a best-in-class talent booking experience from start to
                        finish.</p>
                    <div class="viewbtn">
                        <a class="viewcta" href="./CelebrityList-index.html">View Celebrity List</a>
                    </div>
                </div>
            </div>
        </section>



        <!-- <div class="view__content">
                   
                </div> -->


        <!-- NEWS SECTION -->
        <section class="news">
            <div class="container">
                <div class="news__content">
                    <div class="part__1">
                        <div class="logo">
                            <a href="./index.php">
                                <div class="box__logo">
                                    <div class="box__1">
                                        <div class="box__2">
                                            <div class="box__3">
                                                <div class="box__4">
                                                    <div class="box__5"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav__logo">
                                    <h1>QUICK CELEBRITY</h1>
                                    <h3>BOOKING AGENCY</h3>
                                </div>
                            </a>
                        </div>
                        <p>Our mission to provide a best_in_class <br> talent booking experience from start to <br>
                            finish.</p>
                        <div class="sociallinks">
                            <img class="faceboook" src="./IMAGES/icon-facebook.svg" alt="">
                            <img class="youtube" src="./IMAGES/icon-youtube.svg" alt="">
                            <img class="twitter" src="./IMAGES/icon-twitter.svg" alt="">
                            <img class="pinterest" src="./IMAGES/icon-pinterest.svg" alt="">
                            <img class="instagram" src="./IMAGES/icon-instagram.svg" alt="">
                        </div>
                    </div>

                <?php
                if (isset($_POST["send"])){
                    $u = $_POST["email"];
                    $signup_date = date ("Y-m-d, h:i:s");
                    $insert = "INSERT INTO newsletter VALUES ('', '$u','$signup_date')";
                    $q = mysqli_query ($conn, $insert);
                    echo "<h1 style='color:green'>Submitted</h1>";
                }
                ?>

    
                    <div class="part__2">
                        <h2>Newsletter</h2>
                        <p>Don't miss a thing! <br> Sign up to receive daily news</p>
                        <form class="news__form" action="" method="POST">
                            <input class="news__input" type="email" name="email" placeholder="Your Email Address" required>
                            <div class="newsbtn"><input class="newscta" type="submit" name="send" value="Sign Up"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>



        <!-- FOOTER SECTION -->
        <footer>
            <div class="container">
                <div class="footer__content">
                    <p>©2025. QUICK CELEBRITY BOOKING AGENCY</p>
                </div>
            </div>
        </footer>
    </main>

    <!-- translator widget BEGIN -->
    <div class="gtranslate_wrapper"></div>
    <script>window.gtranslateSettings = { "default_language": "en", "wrapper_selector": ".gtranslate_wrapper" }</script>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
    <!-- translator widget END -->

    <script src="./JS/script.js"></script>
</body>

</html>