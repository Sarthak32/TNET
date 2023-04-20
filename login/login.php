<?php
$wrng_pass=false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
     $mysqli = require __DIR__ . "/database.php";

     $sql = sprintf("SELECT * FROM user
                WHERE email = '%s'",
                $mysqli->real_escape_string($_POST["email"]));

     //get the data from database 
     $result= $mysqli->query($sql);
     $user = $result->fetch_assoc();

     //checking password for the user
     if ($user) {
             if(password_verify($_POST["password"], $user["password_hash"])){

                 session_start();
                //to avoid session fixation attack
                 session_regenerate_id();
                
                 $_SESSION["user_id"] = $user["id"];  

                //opening new user based file 
                header("Location: index.php");
                exit;
             }
             else {
                 $wrng_pass=true;
             }
          }

     
 } 
 ?>

<!doctype html>
<html lang="ar" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="sign.css">
    <script src="https://kit.fontawesome.com/1375946a37.js" crossorigin="anonymous"></script>
    <title>Web</title>
  </head>
  <body>
            <div class="cont">
                <nav>
                <div class="title">
                    <a href="../main.php" style="color: black;"><img src="../pictures/logo.png"></a>
                    <a href="../main.php" style="color: black;"><h2>TNET</h2></a>
                </div>
                <div class="home">
                    <h2><form>               
                        <button formaction="../main.php">Home</button>
                        </form>

                    </h2>
                </div>
                </nav>
                      <style type="text/css">
                            .cont .title {
                                position: absolute;
                                margin-left: 1.5rem;

                            }
                            .cont .title img {
                                height: 2.2rem;
                                vertical-align: top;
                                padding-top: 0.7rem;
                            }

                            .cont .title h2 {
                                vertical-align: top;
                                font-size: 2.5rem;
                                display: inline-block;
                                padding-left: 2px;

                            }
                            .cont .home {
                                position: absolute;
                                right: 0;
                                text-align: right;
                                margin-right: 2rem;
                            }
                            .cont .home button {
                                display: inline;
                                position: relative;
                                flex: 1 1 0%;
                                border-radius: 1.7rem;
                                background: var(--dark);
                                color: var(--white);
                                font-size: 1.5rem;
                                padding: 1rem;
                            }

                            .cont button:hover {
                                background: var(--white);
                                color: var(--dark);
                                transform: scale(1.04);
                            }
                        </style>
                <form class="popup-sign" method="post" >
                    <h2>Log In</h2>
                    <div class="form-element">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter email" id="email" name="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                    </div>
                    <div class="form-element">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Password" value="" id="inside" name="password">
                        <input type="checkbox" onclick="show()">Show Password
                        <script type="text/javascript">
                            function show() {
                                            var x = document.getElementById("inside");
                                            if (x.type === "password") {
                                                x.type = "text";
                                            } else {
                                                x.type = "password";
                                            }
                                        }
                        </script>
                    </div>
                    <div class="form-element">
                        <button >Log In</button>
                    </div>
                    <?php  if($wrng_pass): ?>
                         <em><p class="text-danger text-center" style="color: red;">Incorrect password.</br>Please try again.</p></em>          
                    <?php endif; ?>
                        <div class="form-element" style="display: flex;">
                        <label>New here ?</label><a href="signup.html" id="s-login" style="text-decoration: none;
                         padding-left: 12rem; " > Sign Up</a>
                    </div>
                </form>
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
</body>
</html>
