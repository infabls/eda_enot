      <footer>
         <div class="container">
            <h6>Подписывайтесь на нас в соц сетях!</h6>
            <ul class="icon-social">
<!--                <li class="facebook"><a href="index.php"><i class="fa fa-facebook"></i></a></li>
               <li class="twitter"><a href="index.php"><i class="fa fa-twitter"></i></a></li>
               <li class="google"><a href="index.php"><i class="fa fa-google"></i></a></li> -->
               <li class="instagram"><a href="index.php"><i class="fa fa-instagram"></i></a></li><li class="instagram"><a href="index.php"><i class="fa fa-whatsapp"></i></a></li>
               <!-- <li class="rss"><a href="index.php"><i class="fa fa-rss"></i></a></li> -->
            </ul>
            <div class="tel-fax-mail">
               <ul>
                  <li><span>Телефон:</span> <a href="tel:+77769674545">+77769674545</a></li>
                  <li><span>WhatsApp:</span><a href="https://wa.me/77769674545">+77769674545</a></li>
               </ul>
            </div>
            <div class="ft-bottom"><span><a href="http://itarget.kz/">iTarget.kz</a>, Copyright © 2020 Все права защищены </span></div>
         </div>
      </footer>

  <!-- Modal Structure -->
  <div id="modalzer" class="modal">
    <div class="modal-content">
      <h4>Оформление заказа</h4>
      <form action="/order.php" method="POST">
        <input type="text" placeholder="Имя" name="user_name" required="">
        <input type="text" placeholder="Адрес" name="user_email" required=" ">
        <input type="tel" placeholder="Телефон" name="user_phone" required=" ">
        <input type="hidden" class='hidden_products' name="products" value="">
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Отправить</a>
      <button type="submit" class="button">Заказать</button>
    </div>
      </form>
    </div>
  </div>
      <script src="/js/materialize.min.js"></script>
      <script src="/js/slick.min.js"></script>
      <!-- <script src="/js/owl.carousel.min.js"></script> -->
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