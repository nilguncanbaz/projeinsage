<!doctype html>
<html class="no-js" lang="zxx">
<?php include 'indexHead.html'; ?>
<body>
	

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		
		<!-- Header -->
		<?php include 'indexHeader.html' ?>
		<!-- //Header -->
		<br> <br>

		<!-- cart-main-area start -->
		<div class="cart-main-area section-padding--lg bg--white">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 ol-lg-12">
						<form action="#">               
							<div class="table-content wnro__table table-responsive">
								<table>
									<thead>
										<tr class="title-top">
											<th class="product-thumbnail">RESİM</th>
											<th class="product-name">KİTAP</th>
											<th class="product-price">FİYAT</th>
											<th class="product-quantity">ADET</th>
											<th class="product-subtotal">TOPLAM</th>
											<th class="product-remove">KALDIR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="product-thumbnail"><a href="#"><img src="images/product/sm-3/1.jpg" alt="product img"></a></td>
											<td class="product-name"><a href="#">Bilimsel Araştırma</a></td>
											<td class="product-price"><span class="amount">165.00</span></td>
											<td class="product-quantity"><input type="number" value="1"></td>
											<td class="product-subtotal">165.00</td>
											<td class="product-remove"><a href="#">X</a></td>
										</tr>
										<tr>
											<td class="product-thumbnail"><a href="#"><img src="images/product/sm-3/2.jpg" alt="product img"></a></td>
											<td class="product-name"><a href="#">Deneysel Araştırma</a></td>
											<td class="product-price"><span class="amount">50.00</span></td>
											<td class="product-quantity"><input type="number" value="1"></td>
											<td class="product-subtotal">50.00</td>
											<td class="product-remove"><a href="#">X</a></td>
										</tr>

									</tbody>
								</table>
							</div>
						</form> 
						
						<div class="cartbox__btn">

							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="İndirim Kodu"  aria-describedby="basic-addon2">
								<div class="input-group-append">
									<button class="btn btn-outline-success" type="button">Uygula</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 offset-lg-6">
						<div class="cartbox__total__area">
							<div class="cartbox-total d-flex justify-content-between">
								<ul class="cart__total__list">
									<li>Sepet Toplam</li>
								</ul>
								<ul class="cart__total__tk">
									<li>70</li>
								</ul>
							</div>
							<div class="cart__total__amount">
								<span>Genel Toplam</span>
								<span>140</span>

							</div>
							<div class="addtocart-btn" style="float: right;">
								<a href="checkout.php">Ödemeye Git</a>
							</div>

						</div>
					</div>
				</div>
			</div>  
		</div>
		<!-- cart-main-area end -->
		<!-- Footer Area -->
		<?php include 'indexFooter.html' ?>
		<!-- //Footer Area -->

	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
	
</body>
</html>