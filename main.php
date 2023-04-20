<?php

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TNET</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/1375946a37.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <header>
            <div class="content">
                <div class="title">
                    <a href="main.php" style="color: black;"><img src="pictures/logo.png"></a>
                    <a href="main.php" style="color: black;">
                        <h2>TNET</h2>
                    </a>
                </div>

                <div class="sign">
                    <h2><form>               
                        <button id="login" formaction="login/login.php">Log In</button>
                        <button id="signup" formaction="login/signup.html">Sign Up</button>
                        </form>

                    </h2>
                </div>
            </div>
        </header>
                 

        <div class="input-address">
            <div class="kind-of">
                <h1>Order food to your door</h1>
            </div>
            <div class="center">
                <input type="text" placeholder="Enter Address here" id="input-your-address">
                <label for="anonymous" class="form-label"></label>
                <select class="form-select">
                <option>Deliver Now </option>
                <option>Schedule for later</option>
     			</select>
            </div>

        </div>

    </div>
    <div class="main-content">
        <div class="start">
            <div class="first">
                <ul>
                    <a href="" style="text-decoration: none; color: black;">
                        <h3>Order at Home/Office</h3>
                        <li type="none">
                            <h4>Link</h4>
                        </li>
                    </a>
                </ul>

            </div>
            <div class="second">
                <ul>
                    <a href="" style="text-decoration: none; color: black;">
                        <h3>Dining</h3>
                        <li type="none">
                            <h4>Link</h4>
                        </li>
                    </a>
                </ul>


            </div>
            <div class="third">
                <ul>
                    <a href="" style="text-decoration: none; color: black;">
                        <h3>Take Outs</h3>
                        <li type="none">
                            <h4>Link</h4>
                        </li>
                    </a>
                </ul>

            </div>
        </div>

        <div class="new-head">
            <h3>Our MENU ....</h3>
        </div>

        <div class="content" id="types">
            <div class="cont">
                <a href="full-meal.html" style="text-decoration: none; color: black;"><img src="pictures/full-meal.jpg" height="400" width="650" alt="" />
                    <h3>Full-Meal Course</h3>
                </a>
            </div>
            <div class="cont">
                <a href="light.html" style="text-decoration: none; color: black;"><img src="pictures/light.jpg" height="400" width="650" alt="" />
                    <h3>Light-Meal</h3>
                </a>
            </div>
            <div class="cont">
                <a href="breakfast.html" style="text-decoration: none; color: black;"><img src="pictures/breakfast.jpg" height="400" width="650" alt="" />
                    <h3>Breakfast</h3>
                </a>
            </div>
            <div class="cont">
                <h2>Straight to the Points: Delivery® </h2>
                <p style="word-spacing: inherit; font-size: 21px;">
                    The TNET’s Website is now the only place you’ll earn Rewards points on every Delivery order. Plus, you can get those free rewards you earn delivered, too. Just order, relax and enjoy—we’ll bring your faves to you.* *At participating TNET's. Web registration
                    required. Must be opted into TNET's Rewards.
                </p>
            </div>
            <div class="cont">
                <a href="desserts.html" style="text-decoration: none; color: black;"><img src="pictures/desserts.jpg" height="400" width="650" alt="" />
                    <h3>Dessert</h3>
                </a>
            </div>
            <div class="cont">
                <a href="Juices.html" style="text-decoration: none; color: black;"><img src="pictures/juices.jpg" height="400" width="650" alt="" />
                    <h3>Juices</h3>
                </a>
            </div>
            <div class="cont">
                <a href="" style="text-decoration: none; color: black;"><img src="pictures/blank.jpg" height="400" width="650" alt="" />
                    <h3>Upcoming</h3>
                </a>
            </div>
            <div class="cont">
                <h2 style="text-align: center; margin-top: auto;">More items Comming Soon.....</h2>
            </div>

        </div>
    </div>

    <footer>
        <div class="end-head">
            <h2>TNET</h2>
        </div>
        <div class="end">
            <div class="abt-tnt">
                <ul>
                    <li>
                        <h4>ABOUT TNT</h4>
                    </li>
                    <li>Who We Are</li>
                    <li>Blog</li>
                    <li>Work With Us</li>
                    <li>Investor Relations</li>
                    <li>Report Fraud</li>
                    <li>Contact Us</li>
                </ul>
            </div>

            <div class="for-res">
                <ul>
                    <li>
                        <h4>FOR RESTAURANTS</h4>
                    </li>
                    <li>Partner With Us</li>
                    <li>Apps For You</li>
                    <li>
                        <h4>FOR ENTERPRISES</h4>
                    </li>
                    <li>For Work</li>
                </ul>
            </div>

            <div class="learn">
                <ul>
                    <li>
                        <h4>LEARN MORE</h4>
                    </li>
                    <li>Privacy</li>
                    <li>Security</li>
                    <li>Terms</li>
                    <li>Sitemap</li>
                </ul>
            </div>

            <div class="social">
                <ul>
                    <li>
                        <h4>SOCIAL LINKS </h4>
                    </li>
                    <li><a style="color: black;" href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a style="color: black;" href="https://twitter.com/"><i class="fa-brands fa-square-twitter"></i></a></li>
                    <li><a style="color: black;" href="https://mail.google.com/"><i class="fa-solid fa-envelope"></i></a></li>
                    <li><a style="color: black;" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>

                </ul>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="jsc.js"></script>

</body>

</html>