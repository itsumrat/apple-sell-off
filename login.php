<?php include 'inc/header.php';?>

	<section id="banner-contact">
	</section>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="page-title">
					<h1>sign in</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="offset-lg-1 col-lg-5 col-md-6">
				<div class="login-area">
					<h4>Sign In</h4>
					<form>
						<div class="form-group">
						    <label for="loginEmail">Email Address*</label>
						    <input type="email" class="form-control" id="loginEmail" placeholder="Email">
						</div>
						<div class="form-group">
						    <label for="loginPassword">Password*</label>
						    <input type="password" class="form-control" id="loginPassword" placeholder="Password">
						</div>
						<button type="submit" class="btn">Sign In</button>
					</form>
				</div>
			</div>
			<div class="col-lg-5 col-md-6">
				<div class="registration-area">
					<h4>New Customer?</h4>
					<form>
						<div class="form-group">
						    <label for="loginEmail">Email Address*</label>
						    <input type="email" class="form-control" id="loginEmail" placeholder="Email">
						</div>
						<div class="form-group">
						    <label for="loginPassword">Password*</label>
						    <input type="password" class="form-control mb-3" id="loginPassword" placeholder="Password">
						    <small>Your personal data will be used to support your experience throughout this website, to manage acces to your account, and for other purposes described in our <a href="policy.php">privacy policy</a></small>
						</div>
						<button type="submit" class="btn">Register</button>
					</form>
				</div>
			</div>
			<div class="offset-lg-1 col-lg-5 col-md-6">
				<div class="ordertracking-area">
					<h4>Guest Order Tracking</h4>
					<form>
						<div class="form-group">
						    <label for="loginEmail">Order ID</label>
						    <input type="text" class="form-control" placeholder="Find in your order confirmation">
						</div>
						<div class="form-group">
						    <label for="loginPassword">Email</label>
						    <input type="email" class="form-control" placeholder="Email you used during checkout">
						</div>
						<button type="submit" class="btn">Track Order</button>
					</form>
				</div>
			</div>
		</div>
	</div>

<?php include 'inc/footer.php';?>
