<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Image Change</title>
    <link rel = "stylesheet" href = "style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    

<!-- Christmas Sale Banner -->
<div id="christmas-banner">
    <span class="blinking-text">🎄 Christmas Sale! Enjoy up to 50% off on select items! 🎄</span>
  </div>

  <!-- Left Side Snowflakes -->
  <div class="snowflake left">❄️</div>
  <div class="snowflake left">❄️</div>
  <div class="snowflake left">❄️</div>
  <div class="snowflake left">❄️</div>
  <div class="snowflake left">❄️</div>
  
  <!-- Right Side Snowflakes -->
  <div class="snowflake right">❄️</div>
  <div class="snowflake right">❄️</div>
  <div class="snowflake right">❄️</div>
  <div class="snowflake right">❄️</div>
  <div class="snowflake right">❄️</div>

  <section id="header">
    <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
    <div>
      <ul id="navbar">
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="Product.php" class="dropbtn">Product</a>
          <ul class="dropdown-content">
            <li><a href="Product1.php">Tumbler</a></li>
            <li><a href="Product2.php">Mug</a></li>
            <li><a href="Product3.php">Bottle</a></li>
          </ul>
        </li>
        <li><a href="Blog.php">Blog</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="Contact.php">Contact</a></li>
      </ul>
    </div>
  </section>

    <div class = "main-wrapper">
        <div class = "container">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                        <img src = "images/w1.png" alt = "watch">
                    </div>
                    <div class = "hover-container">
                        <div><img src = "img/prod48.png"></div>
                        <div><img src = "img/prod49.png"></div>
                        <div><img src = "img/prod50.png"></div>
                        <div><img src = "img/prod51.png"></div>
                       
                    </div>
                </div>
                <div class = "product-div-right">
                    <span class = "product-name">SUNWILL Insulated Coffee Mug</span>
                    <span class = "product-price">₱1,468.00</span>
                    <div class = "product-rating">
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star-half-alt"></i></span>
                        <span>(350 ratings)</span>
                    </div>
                    <p class = "product-description">Introducing the REDUCE 14 oz Coldee Tumbler with Handle for Kids –
                         the perfect solution to keep your little ones' drinks both deliciously cold and completely spill-proof. 
                         This insulated stainless steel mug boasts a leakproof design, making it ideal for hot and cold drinks on the go.
                          The included lid and spill-proof straw ensure that there's no mess, while the double-wall construction keeps beverages 
                          cold for up to 18 hours. Whether you're camping or engaged in outdoor activities, this stainless steel travel mug is the 
                          best insulated tumbler for all your adventures. Say goodbye to leaks and lukewarm drinks with the REDUCE 14 oz Coldee Tumbler
                           with Handle for Kids.</p>
                    <div class = "btn-groups">
                        <button type = "button" class = "add-cart-btn"><i class = "fas fa-shopping-cart"></i>add to cart</button>
                        <button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>buy now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src = "script.js"></script>
</body>
</html>