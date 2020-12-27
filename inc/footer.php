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

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Оформление заказа</h4>
      <form action="/order.php" method="POST">
        <input type="text" placeholder="Name" name="user_name" required="">
        <input type="email" placeholder="Email" name="user_email" required=" ">
        <input type="tel" placeholder="Phone" name="user_phone" required=" ">
        <!--
        <input type="date" placeholder="Date" class="datepicker">
        <input type="text" placeholder="Time"> -->
        <!-- <textarea name="" id="" cols="30" rows="10" placeholder="Additional Message"></textarea> -->
        <input type="hidden" class='hidden_products' name="products" value="">
        
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Отправить</a>
      <button type="submit" class="button">Заказать</button>
      </form>
    </div>
  </div>
      <script src="/js/materialize.min.js"></script>
      <script src="/js/slick.min.js"></script>
      <script src="/js/owl.carousel.min.js"></script>
      <script src="/js/custom.js"></script>
      <script src="/js/cart.js"></script>
      <script type="text/javascript">
        $(function() {
          Cart.initJQuery();
          Cart.on('added', function(argumentsObject) {
            // вывод инфы о добавлении товара
            Materialize.toast("Вы добавили в корзину " + argumentsObject.item.quantity + " товар(ов).", 2000)
         });

         $(".hidden_products").attr("value", JSON.stringify(Cart.items));

        });
        
      </script>
      </body>
</html>