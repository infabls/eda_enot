<?php require 'inc/header.php'; ?>
	<!-- reservation -->
	<div class="reservation app-pages app-section">
		<div class="container">
			<div class="pages-title">
				<h3>Оформление заказа</h3>
			</div>
			<div class="order">
				<h5 class="title">Ваш Заказ</h5>
				<div class="row">
					<div class="col s8">
						<h6>Food Title</h6>
					</div>
					<div class="col s4 text-right">
						<h6>$14.00</h6>
					</div>
					<div class="col s8">
						<h6>Drink Title</h6>
					</div>
					<div class="col s4 text-right">
						<h6>$16.00</h6>
					</div>
					<div class="col s8">
						<h5><span>Total</span></h5>
					</div>
					<div class="col s4 text-right">
						<h5><span>$30.00</span></h5>
					</div>
					<button class="button">View Shopping Cart</button>
				</div>
			</div>
			<form action="/order.php" method="POST">
				<input type="text" placeholder="Name" name="user_name">
				<input type="email" placeholder="Email" name="user_email">
				<input type="tel" placeholder="Phone" name="user_phone">
				<!--
				<input type="date" placeholder="Date" class="datepicker">
				<input type="text" placeholder="Time"> -->
				<!-- <textarea name="" id="" cols="30" rows="10" placeholder="Additional Message"></textarea> -->
				<input type="hidden" class='hidden_products' name="products" value="">
				<button type="submit" class="button">Заказать</button>
			</form>
		</div>
	</div>
	<!-- end reservation -->
	<?php require 'inc/footer.php'; ?>
	<script src="js/cart.js"></script>
	<script type="text/javascript">
	  $(function() {
	    Cart.initJQuery();
	    Cart.on('added', function(argumentsObject) {
		  alert("You've added " + argumentsObject.item.quantity + " item(s).");
		});
		$(".hidden_products").attr("value", JSON.stringify(Cart.items));

	  });
	  
	</script>
