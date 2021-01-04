      <footer>
       <div class="container">
        <h6>Подписывайтесь на нас в соц сетях!</h6>
        <ul class="icon-social">
               <li class="instagram">
                <a rel="nofollow" target="_blank" href="https://www.instagram.com/ddsam_ukg">
                  <i class="fa fa-instagram"></i>
                </a>
              </li><li class="instagram">
                <a rel="nofollow" target="_blank" href="https://wa.me/77769674545">
                  <i class="fa fa-whatsapp"></i>
                </a>
              </li>
             </ul>
             <div class="tel-fax-mail">
               <ul>
                <li><span>Телефон:</span> <a href="tel:+77769674545">+77769674545</a></li>
                <li><span>WhatsApp:</span><a  rel="nofollow" target="_blank" href="https://wa.me/77769674545">+77769674545</a></li>
              </ul>
            </div>
            <div class="ft-bottom"><span><a target="_blank" href="http://itarget.kz/">iTarget.kz</a>, Copyright © 2020 Все права защищены </span></div>
          </div>
        </footer>

        <!-- Modal Structure -->
        <div id="modalzer" class="modal">
          <div class="modal-content">
            <h4>Оформление заказа</h4>
            <br>
            <form action="/order.php" method="POST">
              <input type="text" placeholder="Имя" name="user_name" required="">
              <input type="text" placeholder="Адрес" name="user_email" required=" ">
              <input type="tel" placeholder="Телефон" name="user_phone" required="">
              <input type="hidden" class='hidden_products' name="products" value="">
              <p>Оплата:</p>
              <input type="radio" id="nal" name="contact" value="cash">
              <label for="nal">Наличные</label>
              <input type="radio" id="kaspi" name="contact" value="card">
              <label for="kaspi">Kaspi QR</label>
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
          $(".clickmepls").click(function (){
            $('html, body').animate({
              scrollTop: $(".appl-section").offset().top
            }, 200);
          });
          var topPos = $('#catfixneed').offset().top;
          $(window).scroll(function() { 
            var bottomPos = $('.offers').offset().top;
            var top = $(document).scrollTop();
            if (top > topPos || top < bottomPos) {
              $('#catfixneed').addClass('fixed'); 
            }
            if (top < topPos || top > bottomPos) {
              $('#catfixneed').removeClass('fixed');
            } 
          });
        });

        
      </script>
    </body>
    </html>