<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ATN Shop</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="distribution" content="global">
  <meta name="revisit-after" content="2 Days">
  <meta name="robots" content="ALL">
  <meta name="rating" content="8 YEARS">
  <meta name="Language" content="en-us">
  <meta name="GOOGLEBOT" content="NOARCHIVE">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
  <link rel="shortcut icon" href="images/favicon.png">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

<body>
    <!-- =====  HEADER START  ===== -->
    <header id="header">
        <a href="ConnectToDB.php">Connect to database</a>
        <a href="InsertData.php">Insert to database</a>
        <a href="DeleteData.php">Delete in database</a>
        <a href="UpdateData.php">Update database</a>
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="header-top-left">
                <div class="contact"><a href="#">Call now !</a> <span class="hidden-xs hidden-sm hidden-md">+84 987-654-321</span></div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-8">
              <ul class="header-top-right text-right">
                <li class="account"><a href="login.html">My Account</a></li>
                <li class="language dropdown"> <span class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Language <span class="caret"></span> </span>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">English</a></li>
                    <li><a href="#">French</a></li>
                    <li><a href="#">Vietnamese</a></li>
                  </ul>
                </li>
                <li class="currency dropdown"> <span class="dropdown-toggle" id="dropdownMenu12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Currency <span class="caret"></span> </span>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu12">
                    <li><a href="#">€ Euro</a></li>
                    <li><a href="#">VND</a></li>
                    <li><a href="#">$ US Dollar</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="main-search mt_40">
                <input id="search-input" name="search" value="" placeholder="Search" class="form-control input-lg" autocomplete="off" type="text">
                <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
              </span> </div>
            </div>
            <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="index.html"> <img alt="ATN" src="images/logo.png"> </a> </div>
            <div class="col-xs-6 col-sm-4 shopcart">
              <div id="cart" class="btn-group btn-block mtb_40">
                <button type="button" class="btn" data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true"><span id="shippingcart">Shopping cart</span><span id="cart-total">items (0)</span> </button>
              </div>
              <div id="cart-dropdown" class="cart-menu collapse">
                <ul>
                  <li>
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <td class="text-center"><a href="#"><img src="images/product/70x84.jpg" alt="iPod Classic" title="iPod Classic"></a></td>
                          <td class="text-left product-name"><a href="#">Toys</a> <span class="text-left price">$20.00</span>
                            <input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
                          </td>
                          <td class="text-center"><a class="close-cart"><i class="fa fa-times-circle"></i></a></td>
                        </tr>
                        <tr>
                          <td class="text-center"><a href="#"><img src="images/product/70x84.jpg" alt="iPod Classic" title="iPod Classic"></a></td>
                          <td class="text-left product-name"><a href="#">Toys</a> <span class="text-left price">$20.00</span>
                            <input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
                          </td>
                          <td class="text-center"><a class="close-cart"><i class="fa fa-times-circle"></i></a></td>
                        </tr>
                      </tbody>
                    </table>
                  </li>
                  <li>
                    <table class="table">
                      <tbody>
                        <tr>
                          <td class="text-right"><strong>Sub-Total</strong></td>
                          <td class="text-right">$2,100.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                          <td class="text-right">$2.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>VAT (20%)</strong></td>
                          <td class="text-right">$20.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>Total</strong></td>
                          <td class="text-right">$2,122.00</td>
                        </tr>
                      </tbody>
                    </table>
                  </li>
                  <li>
                    <form action="cart_page.html">
                      <input class="btn pull-left mt_10" value="View cart" type="submit">
                    </form>
                    <form action="checkout_page.html">
                      <input class="btn pull-right mt_10" value="Checkout" type="submit">
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <nav class="navbar">
            <p>Menu</p>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="i-bar"><i class="fa fa-bars"></i></span></button>
            <div class="collapse navbar-collapse js-navbar-collapse">
              <ul id="menu" class="nav navbar-nav">
                <li> <a href="index.html">Home</a></li>
                <li> <a href="category_page.html">Children(2-4 years old)</a></li>
                <li> <a href="category_page.html">Children(4-5 years old)</a></li>
                <li class="dropdown mega-dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Collection </a>
                  <ul class="dropdown-menu mega-dropdown-menu row">
                    <li class="col-md-3">
                      <ul>
                        <li class="dropdown-header">Children(2-4 years old)</li>
                        <li><a href="#">Unique Features</a></li>
                        <li><a href="#">Image Responsive</a></li>
                        <li><a href="#">Auto Carousel</a></li>
                        <li><a href="#">Newsletter Form</a></li>
                        <li><a href="#">Four columns</a></li>
                        <li><a href="#">Four columns</a></li>
                        <li><a href="#">Good Typography</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3">
                      <ul>
                        <li class="dropdown-header">Children(4-5 years old)</li>
                        <li><a href="#">Unique Features</a></li>
                        <li><a href="#">Image Responsive</a></li>
                        <li><a href="#">Four columns</a></li>
                        <li><a href="#">Auto Carousel</a></li>
                        <li><a href="#">Newsletter Form</a></li>
                        <li><a href="#">Four columns</a></li>
                        <li><a href="#">Good Typography</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3">
                      <ul>
                        <li class="dropdown-header">Children(5-10 years old)</li>
                        <li><a href="#">Unique Features</a></li>
                        <li><a href="#">Four columns</a></li>
                        <li><a href="#">Image Responsive</a></li>
                        <li><a href="#">Auto Carousel</a></li>
                        <li><a href="#">Newsletter Form</a></li>
                        <li><a href="#">Four columns</a></li>
                        <li><a href="#">Good Typography</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3">
                      <ul>
                        <li id="myCarousel" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="item active"> <a href="#"><img src="images/menu-banner1.jpg" class="img-responsive" alt="Banner1"></a></div>
                            <!-- End Item -->
                            <div class="item"> <a href="#"><img src="images/menu-banner2.jpg" class="img-responsive" alt="Banner1"></a></div>
                            <!-- End Item -->
                            <div class="item"> <a href="#"><img src="images/menu-banner3.jpg" class="img-responsive" alt="Banner1"></a></div>
                            <!-- End Item -->
                          </div>
                          <!-- End Carousel Inner -->
                        </li>
                        <!-- /.carousel -->
                      </ul>
                    </li>
                  </ul>
                </li>
                <li> <a href="blog_page.html">Blog</a></li>
                <li> <a href="about.html">About us</a></li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages </a>
                  <ul class="dropdown-menu">
                    <li> <a href="contact_us.html">Contact us</a></li>
                    <li> <a href="cart_page.html">Cart</a></li>
                    <li> <a href="checkout_page.html">Checkout</a></li>
                    <li> <a href="product_detail_page.html">Product Detail Page</a></li>
                    <li> <a href="single_blog.html">Single Post</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- /.nav-collapse -->
          </nav>
        </div>
      </div>
    </header>
    <!-- =====  HEADER END  ===== -->
    <!-- =====  BANNER STRAT  ===== -->
    <div class="container banner mt_20">
      <div class="main-banner owl-carousel">
        <div class="item"><a href="#"><img src="images/main_banner1.jpg" alt="Main Banner" class="img-responsive" /></a></div>
        <div class="item"><a href="#"><img src="images/main_banner2.jpg" alt="Main Banner" class="img-responsive" /></a></div>
      </div>
    </div>
    <!-- =====  BANNER END  ===== -->
    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
      <!-- =====  SUB BANNER  STRAT ===== -->
      <div class="row">
        <div class="cms_banner mt_10">
          <div class="col-xs-4 mt_10">
            <div id="subbanner1" class="sub-hover">
              <div class="sub-img"><a href="#"><img src="images/sub1.jpg" alt="Sub Banner1" class="img-responsive"></a></div>
              <div class="bannertext text-center">
                <button class="btn mb_10 cms_btn">View product</button>
                <h2></h2>
                <p class="mt_10"></p>
              </div>
            </div>
            <div id="subbanner2" class="sub-hover mt_20">
              <div class="sub-img"><a href="#"><img src="images/sub2.jpg" alt="Sub Banner2" class="img-responsive"></a></div>
              <div class="bannertext text-center">
                <button class="btn mb_10 cms_btn">View product</button>
                <h2></h2>
                <p class="mt_10"></p>
              </div>
            </div>
          </div>
          <div class="col-xs-4 mt_10">
            <div id="subbanner3" class="sub-hover">
              <div class="sub-img"> <a href="#"><img src="images/sub3.jpg" alt="Sub Banner3" class="img-responsive"></a></div>
            </div>
          </div>
          <div class="col-xs-4 mt_10">
            <div id="subbanner4" class="sub-hover">
              <div class="sub-img"><a href="#"><img src="images/sub4.jpg" alt="Sub Banner4" class="img-responsive"></a></div>
              <div class="bannertext text-center">
                <button class="btn mb_10 cms_btn">View product</button>
                <h2></h2>
                <p class="mt_10"></p>
              </div>
            </div>
            <div id="subbanner5" class="sub-hover mt_20">
              <div class="sub-img"><a href="#"><img src="images/sub5.jpg" alt="Sub Banner5" class="img-responsive"></a></div>
              <div class="bannertext text-center">
                <button class="btn mb_10 cms_btn">View product</button>
                <h2></h2>
                <p class="mt_10"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- =====  SUB BANNER END  ===== -->
      <div class="row ">
        <div class="col-sm-12 mtb_10">
          <!-- =====  PRODUCT TAB  ===== -->
          <!-- =====  PRODUCT TAB  END ===== -->
          <!-- =====  SUB BANNER  STRAT ===== -->
          <div class="row">
            <div class="cms_banner mt_50">
              <div class="col-sm-12 mt_10">
                <div id="subbanner3" class="sub-hover">
                  <div class="sub-img"> <a href="#"><img src="images/sub6.jpg" alt="Sub Banner3" class="img-responsive"></a></div>
                </div>
              </div>
            </div>
          </div>
          <!-- =====  SUB BANNER END  ===== -->
          <!-- =====  PRODUCT TAB  ===== -->
    <!-- =====  CONTAINER END  ===== -->
    <!-- =====  FOOTER START  ===== -->
    <div class="footer pt_60">
      <div class="container">
        <div class="row">
          <div class="footer-top pb_60 mb_30">
            <div class="col-xs-12 col-sm-6">
              <div class="footer-logo"> <a href="index.html"> <img src="images/footer-logo.png" alt="ATN Shop"> </a> </div>
              <div class="footer-desc">Welcome to ATN shop</div>
            </div>
            <!-- =====  testimonial  ===== -->
            <!-- =====  testimonial end ===== -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 footer-block">
            <h6 class="footer-title ptb_20">Information</h6>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Delivery Information</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="contact.html">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-block">
            <h6 class="footer-title ptb_20">Services</h6>
            <ul>
              <li><a href="#">Returns</a></li>
              <li><a href="#">Site Map</a></li>
              <li><a href="#">Wish List</a></li>
              <li><a href="#">My Account</a></li>
              <li><a href="#">Order History</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-block">
            <h6 class="footer-title ptb_20">Extras</h6>
            <ul>
              <li><a href="#">Brands</a></li>
              <li><a href="#">Gift Certificates</a></li>
              <li><a href="#">Affiliates</a></li>
              <li><a href="#">Specials</a></li>
              <li><a href="#">Newsletter</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-block">
            <h6 class="footer-title ptb_20">Contacts</h6>
            <ul>
              <li>Warehouse & Offices, 12345 Street name, California USA</li>
              <li>(+123) 456 789
                <br> (+024) 666 888</li>
              <li>Contact@yourcompany.com</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-bottom mt_60 ptb_20">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="social_icon">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="copyright-part text-center">Hoang Huy</div>
            </div>
            <div class="col-sm-4">
              <div class="payment-icon text-right">
                <ul>
                  <li><i class="fa fa-cc-paypal "></i></li>
                  <li><i class="fa fa-cc-visa"></i></li>
                  <li><i class="fa fa-cc-discover"></i></li>
                  <li><i class="fa fa-cc-mastercard"></i></li>
                  <li><i class="fa fa-cc-amex"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =====  FOOTER END  ===== -->
  </div>
  <a id="scrollup"></a>
  <script src="js/jQuery_v3.1.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/jquery.firstVisitPopup.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>