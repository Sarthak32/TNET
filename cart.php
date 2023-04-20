<?php 
 ?>
<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/1375946a37.js" crossorigin="anonymous" async></script>
    <link rel="stylesheet" type="text/css" href="cartstyle.css">
    <script type="text/javascript" src="bill.js" async></script>
    <title></title>
</head>
<body> 
    <div class="contain">
        <div class="content">
        <nav>
            <div class="title">
                    <a href="login/index.php" style="color: black;"><img src="pictures/logo.png"></a>
                    <a href="login/index.php" style="color: black;">
                        <h2>TNET</h2>
                    </a>
                </div>
            <div class="title3">
                <form>
                <button class="cartnum" formaction="cart.php"><i class="fa fa-cart-plus" style="color:grey;"></i>Cart <span>0</span></button>
                <button id="home" formaction="login/index.php">Home</button>
                </form>

            </div>
        </nav>
    </div>
    <div class="title2">
                <h2>Cart</h2>
    </div>
    <div class="main-content">
        <div class="card">
            <div class="row">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row">
                            <div class="col"><h4><b>Shopping Cart</b></h4></div>
                            
                        </div>
                    </div> 
            <div class="All-cart-items">

            </div>   
                    <div class="back-to-shop"><a href="main.html">&leftarrow;</a><span class="text-muted"><a href="main.html" style="text-decoration:none;">Back to shop
                    </a></span></div>
                </div>
                <div class="bill col-md-4 bill">
                    <div style="text-align:center"><h5><b>Bill</b></h5></div>
                    <hr>
                    <div class="divide row" style="display: flex;">
                        <div class="col" style="align-items: center; text-align: center;">Item</div>
                        <div class="col text-right" style="text-align:center;">Price</div>
                    </div>
                    <form>
                        <div class="All-bill-items">
                        </div>
                    </form>
                    <div class="end row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="end-head col">TOTAL PRICE</div>
                        <div class="total-price col text-right" style="text-align:center"> $0.00</div>
                    </div>
                    <button class="purchase-btn" id="purchase">PURCHASE</button>
                </div>
            </div>
          </div>
  
        </div>
    </div>
    <div class="space">
        
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