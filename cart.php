<?php include 'inc/header.php';?>

	<section id="banner-contact">
	</section>
	<div class="container">
		<div class="row">
			<div class="col-12 page-title">
				<h1>cart items</h1>
			</div>
		</div>
	</div>

	<section id="cart-details">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-items">
						<table class="table table-borderless">
							<thead>
							    <tr class="table-header">
							      	<th scope="col">product</th>
							      	<th scope="col"></th>
							      	<th scope="col">qty</th>
							      	<th scope="col">total</th>
							      	<th scope="col"></th>
							    </tr>
							</thead>
							<tbody>
							    <tr>
							      	<th scope="row" style="display: flex;">
							      		<img src="img/macbookpro.png" width="130px" height="75px">
							      		<div class="product-brief">
							      			<span class="device-name">Apple 15" MackbookAir (Mid 2015)</span>
							      			<small>Shipping 4-5 working days</small>
							      		</div>
							      	</th>
							      	<th><p>$300</p></th>
							      	<th><input type="number" value="1"></th>
							      	<th><p>$300</p></th>
							      	<td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
							    </tr>
							    <tr>
							      	<th scope="row" style="display: flex;">
							      		<img src="img/macbookpro.png" width="130px" height="75px">
							      		<div class="product-brief">
							      			<span class="device-name">Apple 15" MackbookAir (Mid 2015)</span>
							      			<small>Shipping 4-5 working days</small>
							      		</div>
							      	</th>
							      	<th><p>$300</p></th>
							      	<th><input type="number" value="1"></th>
							      	<th><p>$300</p></th>
							      	<td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
							    </tr>
							    <tr>
							      	<th scope="row" style="display: flex;">
							      		<img src="img/macbookpro.png" width="130px" height="75px">
							      		<div class="product-brief">
							      			<span class="device-name">Apple 15" MackbookAir (Mid 2015)</span>
							      			<small>Shipping 4-5 working days</small>
							      		</div>
							      	</th>
							      	<th><p>$300</p></th>
							      	<th><input type="number" value="1"></th>
							      	<th><p>$300</p></th>
							      	<td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
							    </tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="cart-total">
						<h6>cart total</h6>
						<p>Subtotal</p> $3000 <br>
						<p class="shipping-charge">Shipping</p> Free<br> <a href="#" class="shipping-calculator">calculate shipping</a>
						<hr>
						<p>Total</p> $3000
						<div class="button-grp">
							<a href="#" class="btn cart-update-btn">update cart</a>
							<a href="checkout.php" class="btn checkout-btn">proceed to checkout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include 'inc/footer.php';?>