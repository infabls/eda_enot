<?php require 'inc/header.php'; ?>
	<!-- page 404 -->
	<div class="page-404 app-pages app-section">
		<div class="container">
	<!-- 		<h3>4<span>0</span>4</h3> -->
			<h6>Ваш заказ успешно принят!</h6>
<!-- 			<p>Мы будем Вам крайне признательны, если при заказе вы сообщите как попали на эту страницу. Это улучшит качество нашего сайта и удобство его использования для клиентов!</p> -->
			<a class="button" href="/">Вернуться на главную</a>
			<p>Вы будете переадресованы на главную через 3 секунды</p>
		    <script>
		        var timer = setTimeout(function() {
		            window.location='/'
		        }, 3000);
		    </script>
		</div>
	</div>
	<!-- end page 404 -->

<?php require 'inc/footer.php'; ?>
	<script>
		$(function() {
          Cart.initJQuery();
		Cart.empty()
		});
	</script>