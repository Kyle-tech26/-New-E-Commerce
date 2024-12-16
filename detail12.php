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
                        <div><img src = "img/prod52.png"></div>
                        <div><img src = "img/prod53.png"></div>
                        <div><img src = "img/prod54.png"></div>
                        <div><img src = "img/prod55.png"></div>
                       
                    </div>
                </div>
                <div class = "product-div-right">
                    <span class = "product-name">Thermos Stainless Steel Mug</span>
                    <span class = "product-price">₱1,437.50</span>
                    <div class = "product-rating">
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star-half-alt"></i></span>
                        <span>(350 ratings)</span>
                    </div>
                    <p class = "product-description">When you need your coffee hot or your water cold, look no further than the Thermos 16 oz.
                         Icon Stainless Steel Travel Mug. From the Thermos vacuum insulation technology, to the Dura-Seal 360 drink lid that 
                         is leakproof when closed, to the GripTec non-slip base, this tumbler is truly iconic. 
                         The Icon Series is a celebration of what has made Thermos thrive for over a century: meticulous design,
                          thoughtful engineering, and a relentless desire to make people's days easier.
                           Make every sip worth savoring with this durable stainless steel mug. Get hot,
                            fresh-tasting coffee or cool, hydrating water at every sip, no matter where your day takes you.</p>
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