<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Delicious - Cafe & Restaurant Mobile Template</title>
      <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 user-scalable=no">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="HandheldFriendly" content="True">
      <link rel="shortcut icon" href="img/favicon.png">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/materialize.min.css">
      <link rel="stylesheet" href="css/slick.css">
      <link rel="stylesheet" href="css/slick-theme.css">
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/owl.theme.css">
      <link rel="stylesheet" href="css/owl.transitions.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <div class="navbar">
         <div class="container">
            <div class="panel-control-left"><a href="index.php#" data-activates="slide-out-left" class="sidenav-control-left"><i class="fa fa-bars"></i></a></div>
            <div class="site-title">
               <a href="index.php" class="logo">
                  <h1>Delicious</h1>
               </a>
            </div>
            <div class="panel-control-right"><a href="index.php#" data-activates="slide-out-right" class="sidenav-control-right"><i class="fa fa-shopping-bag"></i><span>2</span></a></div>
         </div>
      </div>
      <div class="panel-control-left">
         <ul id="slide-out-left" class="side-nav collapsible" data-collapsible="accordion">
            <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
            <li>
               <div class="collapsible-header"><i class="fa fa-indent"></i>Categories <span><i class="fa fa-chevron-right"></i></span></div>
               <div class="collapsible-body">
                  <ul class="categories-in collapsible" data-collapsible="accordion">
                     <li><a href="categories.php">Categories Page</a></li>
                     <li>
                        <div class="collapsible-header">Sushi <span><i class="fa fa-chevron-right"></i></span></div>
                        <div class="collapsible-body">
                           <ul class="side-nav-panel">
                              <li><a href="index.php">Sushi Spicy</a></li>
                              <li><a href="index.php">Sushi Sweet</a></li>
                              <li><a href="index.php">Sushi Tasteful</a></li>
                              <li><a href="index.php">Sushi Steady</a></li>
                           </ul>
                        </div>
                     </li>
                     <li>
                        <div class="collapsible-header">Pizza <span><i class="fa fa-chevron-right"></i></span></div>
                        <div class="collapsible-body">
                           <ul class="side-nav-panel">
                              <li><a href="index.php">Pizza Spicy</a></li>
                              <li><a href="index.php">Pizza Sweet</a></li>
                              <li><a href="index.php">Pizza Tasteful</a></li>
                              <li><a href="index.php">Pizza Steady</a></li>
                           </ul>
                        </div>
                     </li>
                     <li>
                        <div class="collapsible-header">Food <span><i class="fa fa-chevron-right"></i></span></div>
                        <div class="collapsible-body">
                           <ul class="side-nav-panel">
                              <li><a href="index.php">Food Spicy</a></li>
                              <li><a href="index.php">Food Sweet</a></li>
                              <li><a href="index.php">Food Tasteful</a></li>
                              <li><a href="index.php">Food Steady</a></li>
                           </ul>
                        </div>
                     </li>
                     <li>
                        <div class="collapsible-header">Drink <span><i class="fa fa-chevron-right"></i></span></div>
                        <div class="collapsible-body">
                           <ul class="side-nav-panel">
                              <li><a href="index.php">Drink Juice</a></li>
                              <li><a href="index.php">Drink Coffe</a></li>
                              <li><a href="index.php">Drink Milk </a></li>
                           </ul>
                        </div>
                     </li>
                  </ul>
               </div>
            </li>
            <li><a href="chef.php"><i class="fa fa-cutlery"></i>Chef</a></li>
            <li><a href="menu-grid.php"><i class="fa fa-th-large"></i>Menu Grid</a></li>
            <li><a href="menu-list.php"><i class="fa fa-list"></i>Menu List</a></li>
            <li><a href="product-details.php"><i class="fa fa-shopping-basket"></i>Product Details</a></li>
            <li><a href="shopping-cart.php"><i class="fa fa-shopping-cart"></i>Shopping Cart</a></li>
            <li><a href="reservation.php"><i class="fa fa-send"></i>Reservation</a></li>
            <li>
               <div class="collapsible-header"><i class="fa fa-rss"></i>Blog <span><i class="fa fa-chevron-right"></i></span></div>
               <div class="collapsible-body">
                  <ul class="side-nav-panel">
                     <li><a href="blog.php">Blog</a></li>
                     <li><a href="blog-single.php">Blog Single</a></li>
                  </ul>
               </div>
            </li>
            <li>
               <div class="collapsible-header"><i class="fa fa-file-powerpoint-o"></i>Pages <span><i class="fa fa-chevron-right"></i></span></div>
               <div class="collapsible-body">
                  <ul class="side-nav-panel">
                     <li><a href="faq.php">Faq</a></li>
                     <li><a href="testimonial.php">Testimonial</a></li>
                     <li><a href="404.php">404 Page</a></li>
                  </ul>
               </div>
            </li>
            <li><a href="contact.php"><i class="fa fa-envelope"></i>Contact Us</a></li>
            <li><a href="login.php"><i class="fa fa-sign-in"></i>Login</a></li>
            <li><a href="register.php"><i class="fa fa-user-plus"></i>Register</a></li>
         </ul>
      </div>
      <div class="panel-control-right">
         <div id="slide-out-right" class="side-nav">
            <div class="row entry">
               <div class="col s4"><img src="img/cart1.png" alt=""></div>
               <div class="col s6">
                  <div class="desc">
                     <h6>Food Title</h6>
                     <div class="rating"><span class="active"><i class="fa fa-star"></i></span><span class="active"><i class="fa fa-star"></i></span><span class="active"><i class="fa fa-star"></i></span><span class="active"><i class="fa fa-star"></i></span><span class=""><i class="fa fa-star"></i></span></div>
                     <h6><span>$20.00</span></h6>
                  </div>
               </div>
               <div class="col s2">
                  <div class="action"><i class="fa fa-remove"></i></div>
               </div>
            </div>
            <div class="row entry">
               <div class="col s4"><img src="img/cart2.png" alt=""></div>
               <div class="col s6">
                  <div class="desc">
                     <h6>Drink Title</h6>
                     <div class="rating"><span class="active"><i class="fa fa-star"></i></span><span class="active"><i class="fa fa-star"></i></span><span class="active"><i class="fa fa-star"></i></span><span class=""><i class="fa fa-star"></i></span><span class=""><i class="fa fa-star"></i></span></div>
                     <h6><span>$10.00</span></h6>
                  </div>
               </div>
               <div class="col s2">
                  <div class="action"><i class="fa fa-remove"></i></div>
               </div>
            </div>
            <div class="row price">
               <div class="col s8">
                  <h6>Total</h6>
               </div>
               <div class="col s4">
                  <h6>$30.00</h6>
               </div>
            </div>
            <ul>
               <li><button class="button">Reservation</button></li>
               <li><button class="button">View Cart</button></li>
            </ul>
         </div>
      </div>