<?php require 'inc/header.php'; ?>
	<!-- product cart -->
	<div class="product-cart app-pages app-section">
		<div class="container">
			<div class="pages-title">
				<h3>Корзина</h3>
				<button></button>
			</div>
			<div class="entry">
				<div class="cart-title">
					<div class="row">
						<div class="col s4">
							<img src="img/food2.png" alt="">
						</div>
						<div class="col s7">
							<h6>Food Title</h6>
						</div>
						<div class="col s1">
							<a href="shopping-cart.php"><i class="fa fa-remove"></i></a>
						</div>
					</div>
					<div class="row">
						<div class="col s4">
							<h6>Quantity</h6>
						</div>
						<div class="col s8">
							<input type="number" value="1">
						</div>
					</div>
					<div class="row">
						<div class="col s4">
							<h6>Price</h6>
						</div>
						<div class="col s8">
							<h6>$14</h6>
							<button 
							    type='button' 
							    class='cart-add' 
							    data-id='123456' 
							    data-label='Water based marker' 
							    data-price='499'
							    data-image='/img/drink2.png'
							>
  Add to cart
</button>
						</div>
					</div>
				</div>
				<div class="cart-title s-title">
					<div class="row">
						<div class="col s4">
							<img src="img/drink2.png" alt="">
						</div>
						<div class="col s7">
							<h6>Drink Title</h6>
						</div>
						<div class="col s1">
							<a href="shopping-cart.php"><i class="fa fa-remove"></i></a>
						</div>
					</div>
					<div class="row">
						<div class="col s4">
							<h6>Quantity</h6>
						</div>
						<div class="col s8">
							<input type="number" value="1">
						</div>
					</div>
					<div class="row">
						<div class="col s4">
							<h6>Price</h6>
						</div>
						<div class="col s8">
							<h6>$10</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="cart-total">
				<div class="row">
					<div class="col s8">
						<h6>Food Title</h6>
					</div>
					<div class="col s4">
						<h6>$14.00</h6>
					</div>
					<div class="col s8">
						<h6>Drink Title</h6>
					</div>
					<div class="col s4">
						<h6>$10.00</h6>
					</div>
					<div class="col s8">
						<h5>Total</h5>
					</div>
					<div class="col s4">
						<h5>$24.00</h5>
					</div>
					<button class="button"><a href="/reservation.php">Process to Reservation</a></button>
				</div>
			</div>
		</div>
	</div>
	<p>Cart: <span class='cart-items-count'>0</span> item<span class='cart-items-count-plural'>s</span></p>
<table class='cart-table'>
  <thead>
    <tr>
      <th>Image</th>
      <th>Product</th>
      <th>quantity</th>
      <th></th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody class='cart-line-items'>
  </tbody>
  <tfoot>
    <tr>
      <td colspan='4'>Subtotal</td>
      <td class='cart-subtotal'></td>
    </tr>
  </tfoot>
</table>
<p class='cart-is-empty'>Your cart is empty.</p>
<button onclick="Cart.empty()">Clear</button>
	<!-- end product cart -->
	
<?php require 'inc/footer.php'; ?>