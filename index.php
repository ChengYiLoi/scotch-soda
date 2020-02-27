<?php 
$countries = ['Canada','China','Denmark','Finland','France','Greece'];
$languages = ['English','Nederlands','Francais'];
$womenClothing = ['New in', 'Jeans', "All Women's Clothing",'Skirts','Dresses','Jumpsuits','Tops & T-shirts','Jackets & Coats','Blouses','Blazers & waistcoats','Knitwear','Shorts','Sweatshirts','Lingeries & Socks','Trousers & Chinos'];
$menClothing = ['New In','Jeans',"All Men's Clothing",'Jackets & Coats','T-shirts & Polos','Blazers & Waistcoats','Shirts','Chinos','Knitwear','Shorts','Sweatshirts','BoxerShorts & Socks','Trousers'];
$girlClothing = ['New In','Jeans',"All Girls' Clothing",'Trousers & Leggings','Jackets & Coats','Jumpsuits','Tops & T-Shirts','Blouses & Shirts','Dresses','Blazers','Skirts','Shorts','Sweats','Underwear','Knitwear'];
$boyClothing = ['New In','Jackets & Coats',"All Boys' Clothing",'Shirts','T-Shirts & Polos','Suits','Jeans','Blazers & Waistcoats','Trousers & Chinos','Shorts','Sweats','Boxershorts','Knitwear'];
$adultFA = ['Footwear','Accessories','Fragrance & More'];
$childA = ['All accessories','Scarves','Hats & Caps','Belts','Bags'];
$adultHL = ['Online exclusive','Amsterdams Blauw','Basics','Denim Fit Guide'];
$childHL = ['Online exclusive','Amsterdams Blauw','Denim Fit Guide'];
?>
       
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="myStyle.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Scotch & Soda | The Offical Online Store</title>
</head>
<body>
  <div class="container-fluid region">
    <div class="regionInfo">
      <a href="#">Stores</a>
      <div class="btn-group dropdown">
        <button type="toggle" data-toggle="dropdown">English | SG <img src="images/singapore.svg" alt=""></button>
        <div class="dropdown-menu dropdown-menu-right" >
          <form action="">
            <h2>Select country <br> & language</h2>
            <br><br>
            <h3>Country</h3><br>
            <select style='width: 450px; height: 50px;' name="" id="">
              <?php 
              foreach($countries as $country){
                echo "<option>$country</option>";
              }
              
    
              ?>
            </select>
            <br><br>
            <h3>Language<h3><br>
            <select style='width: 450px; height: 50px;' name="" id="">
              <?php 
              foreach($languages as $language){
                echo "<option>$language</option>";
              }
              
    
              ?>
            </select>
            <br><br>
            <input value="Continue" type='submit'style='width: 450px; height: 50px; background-color: black; color: white;'>
            <br><br>
            <p style='font-size: 20px;'>Your shopping bag will be emptied when you change <br> your country</p>
          </form>
         
        </div>
      </div>
    </div>
  </div>
  
 
<div class="main-wrapper sticky-top">
  <nav class="nav">
    <div onclick="navSlide()" class="nav-toggle">Menu</div>
    <div class="brand">
      <a href="#"><img src="./images/brand.svg" alt=""></a>  
    </div>
    <div id="sideNav" class="nav-hidden">
      <div class="links">
        <a id="women" href="#">Women</a>
        <a id="men" href="#">Men</a>
        <a id="girl" href="#">Girls</a>
        <a id="boy" href="#">Boys</a>
        <a id="story" href="#">Stories</a>
        <div class="linksCategory">
          <div id="womenContent" class="linksContent">
            <div class="content">
              <p>Clothing</p>
              <div class="contentLinks">
                <?php 
                foreach($womenClothing as $type){
                  echo "<a href = '#'>$type</a>";
                }
                ?>
              </div>
            </div>
            <div class="content">
              <p>Footwear & Accessories</p>
              <div class="contentLinks">
                <?php
                foreach($adultFA as $type){
                  echo "<a href = '#'>$type</a>";
                }
                ?>
              </div>
            </div>

            <div class="content">
              <p>Highlights</p>
              <div class="contentLinks">
                <?php
                foreach($adultHL as $type){
                  echo "<a href = '#'>$type</a>";
                }
                ?>
              </div>
            </div>
            <div class="content">
              <a href="#"><img src="images/second.jpg" alt=""></a> 
              <a href="#">New beginnings</a>
              
            </div>
          </div>
          <div id="menContent" class="linksContent">
            <div class="content">
              <p>Clothing</p>
              <div class="contentLinks">
                <?php 
                foreach($menClothing as $type){
                  echo "<a href = '#'>$type</a>";
                }
                ?>
              </div>
            </div>
            <div class="content">
              <p>Footwear & Accessories</p>
              <div class="contentLinks">
                <?php
                foreach($adultFA as $type){
                  echo "<a href = '#'>$type</a>";
                }
                ?>
              </div>
            </div>

            <div class="content">
              <p>Highlights</p>
              <div class="contentLinks">
                <?php
                foreach($adultHL as $type){
                  echo "<a href = '#'>$type</a>";
                }
                ?>
              </div>
            </div>
            <div class="content">
              <a href="#"><img src="images/first_modal.jpg" alt=""></a> 
              <a href="#">New beginnings</a>
            </div>
          </div>
          <div id="girlContent" class="linksContent">
            <div class="content">
              <p>Clothing</p>
              <div class="contentLinks">
                <?php 
                foreach($girlClothing as $type){
                  echo "<a href = '#'>$type</a>";
                }
                ?>
              </div>
            </div>
            <div class="content">
              <p>Footwear & Accessories</p>
              <div class="contentLinks">
                <?php
                foreach($childA as $type){
                  echo "<a href = '#'>$type</a>";
                }
                ?>
              </div>
            </div>

            <div class="content">
              <p>Highlights</p>
              <div class="contentLinks">
                <?php
                foreach($childHL as $type){
                  echo "<a href = '#'>$type</a>";
                }
                ?>
              </div>
            </div>
            <div class="content">
              <a href="#"><img src="images/third.jpg" alt=""></a> 
              <a href="#">New beginnings</a>
            </div>
          </div>
          <div id="boyContent" class="linksContent">
            <div class="content">
              <p>Clothing</p>
              <div class="contentLinks">
                <?php 
                foreach($boyClothing as $type){
                  echo "<a href = '#'>$type</a>";
                }
                ?>
              </div>
            </div>
            <div class="content">
              <p>Footwear & Accessories</p>
              <div class="contentLinks">
                <?php
                foreach($childA as $type){
                  echo "<a href = '#'>$type</a>";
                }
                ?>
              </div>
            </div>

            <div class="content">
              <p>Highlights</p>
              <div class="contentLinks">
                <?php
                foreach($childHL as $type){
                  echo "<a href = '#'>$type</a>";
                }
                ?>
              </div>
            </div>
            <div class="content">
              <a href="#"><img src="images/fourth.jpg" alt=""></a> 
              <a href="#">New beginnings</a>
            </div>
          </div>
          <div id="storyContent" class="linksContent">
            <div class="content">
              <p>Stories</p>
              <div class="contentLinks">
                <a href="#"><img src="images/first_modal.jpg" alt=""></a>
                <a href="#"><img src="images/second.jpg" alt=""></a>
                <a href="#"><img src="images/third.jpg" alt=""></a>
              </div>
              <div class="contentLinks">
                <a href="#">New beginnings</a>
                <a href="#">New beginnings</a>
                <a href="#">New seasons blues</a>
              </div>
            </div>
            <div class="content">
              <p>Instagram</p>
              <div class="contentLinks">
                <a href="#"><img src="images/instagram.png" alt=""></a>
              </div>
              <div class="contentLinks">
                <a href="#">New beginnings</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="nav-logo">
        <a href="#"><img src="./images/user.svg" alt=""><span>My account</span></a>
        <a href="#"><img src="./images/heart.svg" alt=""><span>Shopping bag</span></a>
        <a href="#"><img src="./images/basket.svg" alt=""><span>Wishlist</span></a>
        <a href="#"><img src="./images/search.svg" alt=""><span id="search">Search</span></a>
      </div>
    </div>

</nav>
</div>
<div class="container-fluid dynamic-info-section">
  <div class="info-wrapper">
    <p id="dynamic-text">Check your shipping cost <a href="#">here</a></p>
  </div>
</div>

<div class="main-img">
  <img src="images/sale.jpg" alt="">
  <div id="img-links" class="container">
    <a class="shop-links" href="#">Shop women</a>
    <a class="shop-links" href="#">Shop men</a>
    <a class="shop-links" href="#">Shop girls</a>
    <a class="shop-links" href="#">Shop boys</a>
    </div>
    
</div>

<div class="container-fluid responsive-section">
  <div class="container shop-responsive">
    <a class="shop-links"  href="#">Shop women</a>
    <a class="shop-links" href="#">Shop men</a>
    <a class="shop-links" href="#">Shop girls</a>
    <a class="shop-links" href="#">Shop boys</a>
  </div>
</div>

<div class="container-fluid second-wrapper">
  <div><img src="images/female.jpg" alt=""></div>
  <div><img src="images/male.jpg" alt=""></div>
  
</div>

<div class="container festive-section">
  <h1>The Festive Shop</h1>
  <p>Party out with the new creative class, who bring the unexpected to festive dressing.</p>
</div>

<div class="festive-links">
  <a class="shop-links" href="#">Shop women</a>
  <a class="shop-links" href="#">Shop men</a>
  <a class="shop-links" href="#">Shop girls</a>
  <a class="shop-links" href="#">Shop boys</a>
</div>

<div class="category-wrapper">

  <div class="fashion-category">
    <img src="images/pants.jpg" alt="">
    <h1>Pants</h1>
    <div class="festive-links">
      <a class="shop-links" href="#">Shop women</a>
      <a class="shop-links" href="#">Shop girls</a>
    </div>
  </div>

  <div class="fashion-category">
    <img src="images/jackets.jpg" alt="">
    <h1>Jackets</h1>
    <div class="festive-links">
      <a class="shop-links" href="#">Shop men</a>
      <a class="shop-links" href="#">Shop boys</a>
    </div>
  </div>

</div>

<div class="category-wrapper">

  <div class="fashion-category">
    <img src="images/shirt.jpg" alt="">
    <h1>Shirt</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat magni, quasi esse tenetur suscipit eaque, tempor</p>
    <div class="festive-links single-link">
      <a class="shop-links" href="#">Shop now</a>
    </div>
  </div>

  <div class="fashion-category">
    <img src="images/sunglasses.jpg" alt="">
    <h1>Sunglasses</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum illo ut officia eum doloribus maiores aut officiis</p>
    <div class="festive-links single-link">
      <a class="shop-links" href="#">Shop now</a>
    </div>
  </div>

</div>

<div class="category-wrapper">

  <div class="fashion-category">
    <img src="images/outfit.jpg" alt="">
    <h1>Outfit</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat magni, quasi esse tenetur suscipit eaque, tempor</p>
    <div class="festive-links single-link">
      <a class="shop-links" href="#">Shop now</a>
    </div>
  </div>

  <div class="fashion-category">
    <img src="images/scarf.jpg" alt="">
    <h1>Scarf</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum illo ut officia eum doloribus maiores aut officiis</p>
    <div class="festive-links single-link">
      <a class="shop-links" href="#">Shop now</a>
    </div>
  </div>

</div>

<div class="container apparel-wrapper">
  <div class="apparel">
    <p>Women</p>
    <img src="images/blouse.svg" alt="">
    <a class="shop-links apparel-link" href="#">Blouses</a>
  </div>
  <div class="apparel">
    <p>Men</p>
    <img src="images/jeans.svg" alt="">
    <a class="shop-links apparel-link" href="#">Jeans</a>
  </div>
  <div class="apparel">
    <p>Girls</p>
    <img src="images/jacket.svg" alt="">
    <a class="shop-links apparel-link" href="#">Jackets</a>
  </div>
  <div class="apparel">
    <p>Boys</p>
    <img src="images/shirt.svg" alt="">
    <a class="shop-links apparel-link" href="#">Shirts</a>
  </div>
</div>

<div class="container apparel-wrapper online-info">
    <div class="apparel">
      <img src="images/van.svg" alt="">
      <p>Free Shipping</p>
    </div>

    <div class="apparel">
      <img src="images/basket.svg" alt="">
      <p>Most extensive range Scotch & Soda online</p>
    </div>

    <div class="apparel">
      <img src="images/card.svg" alt="">
      <p>Easy and Secure payment</p>
    </div>

    <div class="apparel">
      <img src="images/exchange.svg" alt="">
      <p>30-day return guarantee</p>
    </div>
</div>

<div id="hashtag-content" class="container">
  <h1>#ScotchOnMe</h1>
  <p>Curated authentic inspiration. Shop the beauty behind our Instagram feed with just one click.</p>
</div>
<div class="container social-wrapper">
  <a class="social-links" type="button" data-toggle="modal"  data-target="#social-modal"><span class="img-overlay"><p>@johndoe</p></span></a>
  <a class="social-links" type="button" data-toggle="modal"  data-target="#social-modal"><span class="img-overlay"><p>@Cat</p></span></a>
  <a class="social-links" type="button" data-toggle="modal"  data-target="#social-modal"><span class="img-overlay"><p>@Jill</p></span></a>
  <a class="social-links" type="button" data-toggle="modal"  data-target="#social-modal"><span class="img-overlay"><p>@Gary</p></span></a>
</div>

<div class="modal fade" id="social-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleControls" class="carousel" data-interval="false">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/first_modal.jpg" class="d-block" alt="...">
              <div class="item-info-wrapper">
                <div class="post-info-wrapper">
                  <div class="post-info">
                    <img src="images/guy1_modal.svg" alt="">
                    <div class="user-info">
                      <h5>JohnDoe</h5>
                      <p>18 days ago</p>
                    </div>
                  </div>
                </div>
                <div class="item-info">
                  <p>Shop the look</p>
                  <div class="product-img">
                    <img src="images/sweater.svg" alt="">
                    <div id="saleCircle">
                      <span>Sale</span>
                    </div>
                    
                  </div>
                  <p>Scotch & Soda Sweater</p>
                  <div class="product-price">
                    <p>$395</p>
                    <p>$198</p>
                  </div>               
                  <a class="buy-product-btn" href="#">Buy this product</a>
                  
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/second.jpg" class="d-block" alt="...">
              <div class="item-info-wrapper">
                <div class="post-info-wrapper">
                  <div class="post-info">
                    <img src="images/girl_modal.svg" alt="">
                    <div class="user-info">
                      <h5>Cat</h5>
                      <p>1 days ago</p>
                    </div>
                  </div>
                </div>
                <div class="item-info">
                  <p>Shop the look</p>
                  <div class="product-img">
                    <img src="images/denim-jacket.svg" alt="">
                    <div id="saleCircle">
                      <span>Sale</span>
                    </div>
                  </div>
                  <p>Scotch & Soda Denim Jacket</p>
                  <div class="product-price">
                    <p>$500</p>
                    <p>$300</p>
                  </div>               
                  <a class="buy-product-btn" href="#">Buy this product</a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/third.jpg" class="d-block" alt="...">
              <div class="item-info-wrapper">
                <div class="post-info-wrapper">
                  <div class="post-info">
                    <img src="images/girl2_modal.svg" alt="">
                    <div class="user-info">
                      <h5>Jill</h5>
                      <p>7 days ago</p>
                    </div>
                  </div>
                </div>
                <div class="item-info">
                  <p>Shop the look</p>
                  <div class="product-img">
                    <img src="images/denim-jacket.svg" alt="">
                    <div id="saleCircle">
                      <span>Sale</span>
                    </div>
                  </div>
                  <p>Scotch & Soda Denim Jacket</p>
                  <div class="product-price">
                    <p>$500</p>
                    <p>$300</p>
                  </div>               
                  <a class="buy-product-btn" href="#">Buy this product</a>
                  
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/fourth.jpg" class="d-block" alt="...">
              <div class="item-info-wrapper">
                <div class="post-info-wrapper">
                  <div class="post-info">
                    <img src="images/guy2_modal.svg" alt="">
                    <div class="user-info">
                      <h5>Gary</h5>
                      <p>1 days ago</p>
                    </div>
                  </div>
                </div>
                <div class="item-info">
                  <p>Shop the look</p>
                  <div class="product-img">
                    <img src="images/sunglasses.svg" alt="">
                    <div id="saleCircle">
                      <span>Sale</span>
                    </div>
                  </div>
                  <p>Scotch & Soda Sunglasses</p>
                  <div class="product-price">
                    <p>$150</p>
                    <p>$80</p>
                  </div>               
                  <a class="buy-product-btn" href="#">Buy this product</a>
                  
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon slide-arrow-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon slide-arrow-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<button class="shop-links apparel-link" style="margin: 30px auto; padding: 10px 60px; ">See all</button>
<h3 style="color: gray; text-decoration-line: underline;">Currently Trending</h3>
<div class="container trending-wrapper">
  <a href="#">Women's Dresses</a>
  <a href="#">Mens Shirts</a>
  <a href="#">Mens Jackets</a>
  <a href="#">Polo T Shirts</a>

  <a href="#">Womens Fashion</a>
  <a href="#">Blazers for Women</a>
  <a href="#">Womens Footwear</a>
  <a href="#">Chinos for Women</a>

  <a href="#">Blouses for Women</a>
  <a href="#">Mens Sweaters</a>
  <a href="#">Mens BoxerShorts</a>
  <a href="#">Mens Footwear</a>

</div>

<div class="container signup-section">
  <h2>We share beautiful news</h2>
  <hr>
  <p>Sign up now for 10% discount on first order. The promo code will be sent to the email address entered.
    <br>Customise my news:</p>
    <div class="customer-btn-wrapper">
      <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="women" name="example1">
        <label class="custom-control-label" for="women">Women</label>
      </div>
      <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="men" name="example1">
        <label class="custom-control-label" for="men">Men</label>
      </div>
      <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="girls" name="example1">
        <label class="custom-control-label" for="girls">Girls</label>
      </div>
      <div class="custom-control custom-checkbox mb-3">
        <input type="checkbox" class="custom-control-input" id="boys" name="example1">
        <label class="custom-control-label" for="boys">Boys</label>
      </div>
    </div>
    <div class="signup-wrapper">
      <input class="form-control" type="email" placeholder="Your email address">
      <button class="btn btn-success">Sign up now</button>
    </div>
</div>
<br>
<div class="container-fluid back-top">
  <a href="#"><span>&Hat;</span> <br> Back to top</a>
  
</div>
<div class="container-fluid credit-card-section">
  <img src="images/mastercard.svg" alt="">
  <img src="images/visa.svg" alt="">
  <img src="images/paypal.svg" alt="">
</div>

<div class="container social-media-section">
  <div class="social-media-icons">
    <a class="social-icon" href="#">
      <svg version="1.1" id="facebook" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    width="546.773px" height="546.773px" viewBox="0 0 546.773 546.773" style="enable-background:new 0 0 546.773 546.773;"
    xml:space="preserve">
<g>
  <g>
    <path d="M382.1,0h-56.953c-43.574,0-74.872,10.343-93.893,31.022c-19.027,20.686-28.532,51.151-28.532,91.408v38.373
      c0,10.141-8.219,18.36-18.36,18.36H164.68c-10.141,0-18.36,8.219-18.36,18.36v57.503c0,10.141,8.219,18.36,18.36,18.36h19.682
      c10.141,0,18.36,8.219,18.36,18.36v236.666c0,10.141,8.219,18.36,18.36,18.36h76.414c10.141,0,18.36-8.22,18.36-18.36V291.747
      c0-10.142,8.22-18.36,18.36-18.36h38.592c10.142,0,19.224-8.176,20.289-18.256l6.095-57.712
      c1.065-10.085-6.291-18.256-16.433-18.256h-48.549c-10.141,0-18.36-8.219-18.36-18.36v-28.752c0-7.075,0.331-12.552,0.997-16.426
      c0.661-3.868,2.154-7.681,4.48-11.445c2.319-3.757,6.083-6.358,11.279-7.797c5.195-1.438,12.111-2.16,20.734-2.16h28.752
      c10.141,0,18.359-8.219,18.359-18.36V18.36C400.459,8.219,392.24,0,382.1,0z"/>
  </g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
      </svg>
    </a>
    <a class="social-icon" href="#">
      <svg version="1.1" id="instagram" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    width="169.063px" height="169.063px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;"
    xml:space="preserve">
<g>
  <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
    c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
    c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
    c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
  <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
    C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
    c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
  <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
    c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
    C135.661,29.421,132.821,28.251,129.921,28.251z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
      </svg>
    </a>
    <a class="social-icon" href="#">
      <svg version="1.1" id="pinterest" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    viewBox="0 0 511.977 511.977" style="enable-background:new 0 0 511.977 511.977;" xml:space="preserve">
<g>
  <g>
    <path d="M262.948,0C122.628,0,48.004,89.92,48.004,187.968c0,45.472,25.408,102.176,66.08,120.16
      c6.176,2.784,9.536,1.6,10.912-4.128c1.216-4.352,6.56-25.312,9.152-35.2c0.8-3.168,0.384-5.92-2.176-8.896
      c-13.504-15.616-24.224-44.064-24.224-70.752c0-68.384,54.368-134.784,146.88-134.784c80,0,135.968,51.968,135.968,126.304
      c0,84-44.448,142.112-102.208,142.112c-31.968,0-55.776-25.088-48.224-56.128c9.12-36.96,27.008-76.704,27.008-103.36
      c0-23.904-13.504-43.68-41.088-43.68c-32.544,0-58.944,32.224-58.944,75.488c0,27.488,9.728,46.048,9.728,46.048
      S144.676,371.2,138.692,395.488c-10.112,41.12,1.376,107.712,2.368,113.44c0.608,3.168,4.16,4.16,6.144,1.568
      c3.168-4.16,42.08-59.68,52.992-99.808c3.968-14.624,20.256-73.92,20.256-73.92c10.72,19.36,41.664,35.584,74.624,35.584
      c98.048,0,168.896-86.176,168.896-193.12C463.62,76.704,375.876,0,262.948,0z"/>
  </g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
      </svg>
    </a>
    <a class="social-icon" href="#">
      <svg version="1.1" id="linkedin" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    width="438.536px" height="438.535px" viewBox="0 0 438.536 438.535" style="enable-background:new 0 0 438.536 438.535;"
    xml:space="preserve">
<g>
  <g>
    <rect x="5.424" y="145.895" width="94.216" height="282.932"/>
    <path d="M408.842,171.739c-19.791-21.604-45.967-32.408-78.512-32.408c-11.991,0-22.891,1.475-32.695,4.427
      c-9.801,2.95-18.079,7.089-24.838,12.419c-6.755,5.33-12.135,10.278-16.129,14.844c-3.798,4.337-7.512,9.389-11.136,15.104
      v-40.232h-93.935l0.288,13.706c0.193,9.139,0.288,37.307,0.288,84.508c0,47.205-0.19,108.777-0.572,184.722h93.931V270.942
      c0-9.705,1.041-17.412,3.139-23.127c4-9.712,10.037-17.843,18.131-24.407c8.093-6.572,18.13-9.855,30.125-9.855
      c16.364,0,28.407,5.662,36.117,16.987c7.707,11.324,11.561,26.98,11.561,46.966V428.82h93.931V266.664
      C438.529,224.976,428.639,193.336,408.842,171.739z"/>
    <path d="M53.103,9.708c-15.796,0-28.595,4.619-38.4,13.848C4.899,32.787,0,44.441,0,58.529c0,13.891,4.758,25.505,14.275,34.829
      c9.514,9.325,22.078,13.99,37.685,13.99h0.571c15.99,0,28.887-4.661,38.688-13.99c9.801-9.324,14.606-20.934,14.417-34.829
      c-0.19-14.087-5.047-25.742-14.561-34.973C81.562,14.323,68.9,9.708,53.103,9.708z"/>
  </g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
      </svg>
    </a>
    <a class="social-icon" href="#">
      <svg version="1.1" id="youtube" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
<g id="XMLID_822_">
  <path id="XMLID_823_" d="M297.917,64.645c-11.19-13.302-31.85-18.728-71.306-18.728H83.386c-40.359,0-61.369,5.776-72.517,19.938
    C0,79.663,0,100.008,0,128.166v53.669c0,54.551,12.896,82.248,83.386,82.248h143.226c34.216,0,53.176-4.788,65.442-16.527
    C304.633,235.518,310,215.863,310,181.835v-53.669C310,98.471,309.159,78.006,297.917,64.645z M199.021,162.41l-65.038,33.991
    c-1.454,0.76-3.044,1.137-4.632,1.137c-1.798,0-3.592-0.484-5.181-1.446c-2.992-1.813-4.819-5.056-4.819-8.554v-67.764
    c0-3.492,1.822-6.732,4.808-8.546c2.987-1.814,6.702-1.938,9.801-0.328l65.038,33.772c3.309,1.718,5.387,5.134,5.392,8.861
    C204.394,157.263,202.325,160.684,199.021,162.41z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
      </svg>
    </a>
    <a class="social-icon" href="#">
      <svg version="1.1" id="twitter" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
  <g>
    <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
      c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
      c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
      c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
      c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
      c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
      C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
      C480.224,136.96,497.728,118.496,512,97.248z"/>
  </g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
      </svg>
    </a>

  </div>
</div>
<div class="container footer-links">
  <div class="main-links">
    <a href="#"><h5>About us</h5></a>
    <a href="#"><h5>Orders</h5></a>
    <a href="#"><h5>Help</h5></a>
    <a href="#"><h5>Contact us</h5></a>
  </div>
  <div class="main-links">
    <div class="sub-links">
      <a href="#">A bit about us</a>
      <a href="#">Social Responsibility</a>
      <a href="#">Store vacancies</a>
      <a href="#">Head office vacancies</a>
      <a href="#">Sitemap</a>
    </div>
    <div class="sub-links">
      <a href="#">Ordering</a>
      <a href="#">Delivery</a>
      <a href="#">Returning</a>
    </div>
    <div class="sub-links">
      <a href="#">Size Guide</a>
      <a href="#">FAQ</a>
    </div>
    <div class="sub-links">
      <a href="#">Call us</a>
      <a href="#">Write to us</a>
      <a href="#">Stores</a>
    </div>

  </div>

  <div class="container disclaimer">
    <a href="#">Privacy statement</a>
    <a href="#">Cookie statement</a>
    <a href="#">Cookie settings</a>
    <a href="#">Terms & Conditions</a>
    <span href="#">&copy; Scotch & Soda 2020 </span>

  </div>
</div>
</body>
<script src="jquery.js"></script>
<script src="bootstrap.bundle.js"></script>
<script src="myScript.js"></script>


</html>