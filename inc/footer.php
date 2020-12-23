      <footer>
         <div class="container">
            <h6>Подписывайтесь на нас в соц сетях!</h6>
            <ul class="icon-social">
               <li class="facebook"><a href="index.php"><i class="fa fa-facebook"></i></a></li>
               <li class="twitter"><a href="index.php"><i class="fa fa-twitter"></i></a></li>
               <li class="google"><a href="index.php"><i class="fa fa-google"></i></a></li>
               <li class="instagram"><a href="index.php"><i class="fa fa-instagram"></i></a></li>
               <li class="rss"><a href="index.php"><i class="fa fa-rss"></i></a></li>
            </ul>
            <div class="tel-fax-mail">
               <ul>
                  <li><span>Tel:</span> 900000002</li>
                  <li><span>Вацап:</span> 0400000098</li>
                  <li><span>Email:</span> info@youremail.com</li>
               </ul>
            </div>
            <div class="ft-bottom"><span>Copyright © 2020 All Rights Reserved </span></div>
         </div>
      </footer>
      <script src="js/materialize.min.js"></script><script src="js/slick.min.js"></script><script src="js/owl.carousel.min.js"></script><script src="js/custom.js"></script>
      <script src="js/cart.js"></script>
      <script type="text/javascript">
        $(function() {
          Cart.initJQuery();
          Cart.on('added', function(argumentsObject) {
           console.log("You've added " + argumentsObject.item.quantity + " item(s).");
         });
         $(".hidden_products").attr("value", JSON.stringify(Cart.items));

        });
        
      </script>
      </body>
</html>