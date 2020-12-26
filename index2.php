<?php require 'inc/header.php'; ?>
      <div class="slider-slick app-pages">
         <div class="slider-entry">
            <img src="img/slider1.jpg" alt="">
            <div class="overlay"></div>
            <div class="caption">
               <div class="container">
                  <h2>Delicious Food & Drink</h2>
                  <p>Find your need now</p>
                  <a class="button" href="index.html">Shop Now</a>
               </div>
            </div>
         </div>
         <div class="slider-entry">
            <div class="overlay"></div>
            <img src="img/slider2.jpg" alt="">
            <div class="caption">
               <div class="container">
                  <h2>Cafe & Restaurant</h2>
                  <p>Find your need now</p>
                  <a class="button" href="index.html">Shop Now</a>
               </div>
            </div>
         </div>
         <div class="slider-entry">
            <div class="overlay"></div>
            <img src="img/slider3.jpg" alt="">
            <div class="caption">
               <div class="container">
                  <h2>Delicious & Tasteful</h2>
                  <p>Find your need now</p>
                  <a class="button" href="index.html">Shop Now</a>
               </div>
            </div>
         </div>
      </div>
      <div class="menu app-section">
         <div class="container">
            <div class="app-title">
               <h4>Наше меню</h4>
               <ul class="line">
                  <li><i class="fa fa-snowflake-o"></i></li>
                  <li class="line-center"><i class="fa fa-snowflake-o"></i></li>
                  <li><i class="fa fa-snowflake-o"></i></li>
               </ul>
            </div>
            <div class="content">
               <ul class="tabs">
                  <li class="tab"><a href="index.html#t1">Пиццы</a></li>
                  <li class="tab"><a href="index.html#t2">Суши</a></li>
                  <li class="tab"><a href="index.html#t3">Бургеры</a></li>
                  <li class="tab"><a href="index.html#t4">Напитки</a></li>
                  <li class="tab"><a href="index.html#t5">Все товары</a></li>
               </ul>
               <div id="t1">
                  <div class="row">
                     <?php 
                     $file="inc/categories.csv";
                     $csv= file_get_contents($file);
                     $array = array_map("str_getcsv", explode("\n", $csv));
                     require 'inc/csvphp.php'; 
                        display_products('pizza', $array);
                     ?>

                  </div>
               </div>
               <div id="t2">
                  <div class="row">
                        <?php display_products('sushi', $array); ?>
                     
                  </div>

               </div>
               <div id="t3">
                     <div class="row">
                        <?php display_products('food', $array); ?>
                     </div>
                  </div>
               </div>
               <div id="t4">
                     <div class="row">
                        <?php display_products('drink', $array); ?>
                     </div>
               </div>
               <div id="t5">
                     <div class="row">
                        <?php display_all($array); ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="open-hours app-section">
         <div class="container">
            <div class="app-title">
               <h4>График работы</h4>
               <ul class="line">
                  <li><i class="fa fa-snowflake-o"></i></li>
                  <li class="line-center"><i class="fa fa-snowflake-o"></i></li>
                  <li><i class="fa fa-snowflake-o"></i></li>
               </ul>
            </div>
            <div class="entry">
               <h5>Monday - Saturday</h5>
               <h6>07.00 AM - 12.00 PM</h6>
               <div class="dividing"></div>
               <h5>Sunday</h5>
               <h6>Open 24 Hours</h6>
            </div>
         </div>
      </div>
      <div class="offers">
         <div class="app-title">
            <h4>Наши преимущества</h4>
         </div>
         <div class="container">
            <div class="row">
               <div class="col s6">
                  <div class="entry">
                     <i class="fa fa-cutlery"></i>
                     <h5>Master Chef</h5>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  </div>
               </div>
               <div class="col s6">
                  <div class="entry">
                     <i class="fa fa-list"></i>
                     <h5>Many Menu</h5>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col s6">
                  <div class="entry">
                     <i class="fa fa-birthday-cake"></i>
                     <h5>Food Cake</h5>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  </div>
               </div>
               <div class="col s6">
                  <div class="entry">
                     <i class="fa fa-glass"></i>
                     <h5>Juice Drink</h5>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="testimonial app-section app-bg-dark">
         <div class="container">
            <div class="app-title">
               <h4>Отзывы</h4>
               <ul class="line">
                  <li><i class="fa fa-snowflake-o"></i></li>
                  <li class="line-center"><i class="fa fa-snowflake-o"></i></li>
                  <li><i class="fa fa-snowflake-o"></i></li>
               </ul>
            </div>
            <div id="testimonial" class="owl-carousel owl-theme">
               <div class="item">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo inventore, numquam assumenda nihil totam sunt, ipsum nemo distinctio ipsa voluptates magni enim? Totam, distinctio iure similique consequuntur quae neque nesciunt.</p>
                  <img src="img/testimonial1.png" alt="">
                  <h6>John Doe</h6>
                  <strong>Web Developer</strong>
               </div>
               <div class="item">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo inventore, numquam assumenda nihil totam sunt, ipsum nemo distinctio ipsa voluptates magni enim? Totam, distinctio iure similique consequuntur quae neque nesciunt.</p>
                  <img src="img/testimonial2.png" alt="">
                  <h6>John Doe</h6>
                  <strong>Web Developer</strong>
               </div>
               <div class="item">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo inventore, numquam assumenda nihil totam sunt, ipsum nemo distinctio ipsa voluptates magni enim? Totam, distinctio iure similique consequuntur quae neque nesciunt.</p>
                  <img src="img/testimonial3.png" alt="">
                  <h6>John Doe</h6>
                  <strong>Web Developer</strong>
               </div>
            </div>
         </div>
      </div>


<?php require 'inc/footer.php'; ?>