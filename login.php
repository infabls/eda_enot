<?php require 'inc/header.php'; ?>
	<!-- login-->
	<div class="login app-pages app-section">
		<div class="container">
			<div class="pages-title">
				<h3>Login</h3>
			</div>
			<form action="login.html#">
				<input type="email" placeholder="Email">
				<input type="password" placeholder="password">
				<div><a href="login.html" class="forgot">Forgot Password?</a></div>
				<div class="chebox">
					<input type="checkbox" id="checkbox" />
  					<label for="checkbox">Remember me</label>
				</div>
				<button class="button">Login</button>
				<div class="create-account">Not Registered? <a href="login.html">Create an account</a></div>
			</form>
			<div class="or">
				<h5>OR</h5>
				<button class="button facebook">Login with Facebook</button>
				<button class="button twitter">Login with Twitter</button>
				<button class="button google">Login with Google+</button>
			</div>
		</div>
	</div>
	<!-- end login -->
<?php require 'inc/footer.php'; ?>