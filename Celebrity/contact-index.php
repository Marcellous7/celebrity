<?php include("connect_db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Celebrity Management</title>
    <!-- page icon -->
    <link rel="icon" href="./IMAGES/page icon-dark.PNG" type="">
    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/contact-style.css">
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
                            <ol><a href="./index.php">Home</a></ol>
                            <ol><a href="./CelebrityList-index.html">Celebrity List</a></ol>
                            <ol><a href="./About-index.html">About</a></ol>
                            <ol class="contact"><a href="./contact-index.html">Contact</a></ol>
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

        <div class="overlay">
            <img src="./image/icon-facebook.svg" alt="">
        </div>


        <!-- CONTACT SECTION -->
        <section class="contact__section">
            <div class="container">
                <div class="contact__content">
                    <h1>COMPANY EMAIL</h1>
                    <p>marcellous.benizi@gmail.com</p>
                    <div class="contact__email">
                        <h2>SEND US A MESSAGE</h2>


                       

                        <form class="contact__massage" action="" method="POST">
                            <div class="column">
                                <label>Name:</label><br>
                                <input type="text" name="name" required>
                            </div>
                            <div class="column">
                                <label>Email:</label><br>
                                <input type="email" name="email" required>
                            </div>
                            <div class="column">
                                <label>Phone:</label><br>
                                <input type="number" name="phone">
                            </div>
                            <div class="column">
                                <label>Message:</label><br>
                                <!-- <input type="text" name="message"> -->
                                <textarea type="text" name="message" ></textarea>
                            </div>

                            <div class="sendbtn"><input class="sendcta" type="submit" name="send" ></div>
                        </form>
                    </div>
                    <?php
                        if (isset($_POST["send"])){
                            $n = $_POST["name"];
                            $e = $_POST["email"];
                            $p = $_POST["phone"];
                            $m = $_POST["message"];
                            $date_message = date ("Y-m-d, h:i:s");
                           
                            $insert = "INSERT INTO contact VALUES ('', '$n', '$e', '$p', '$m', '$date_message')";
                            $q = mysqli_query ($conn, $insert);
                            echo "<h1 style='color:green'>Submitted</h1>";
                        }
                    ?>
                </div>
            </div>
        </section>

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
                    <p>©2025. GLOBAL MGT BOOKING</p>
                </div>
            </div>
        </footer>

        <!-- SPACE SECTION -->
        <section class="space"></section>
    </main>

    <!-- translator widget BEGIN -->
    <div class="gtranslate_wrapper"></div>
    <script>window.gtranslateSettings = { "default_language": "en", "wrapper_selector": ".gtranslate_wrapper" }</script>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
    <!-- translator widget END -->

    <script src="./JS/script.js"></script>
</body>

</html>