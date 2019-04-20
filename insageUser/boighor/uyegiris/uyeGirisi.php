<!doctype html>
<html lang="tr">
<?php include "accountHead.html"; ?>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<?php include "accountHeader.php";?>
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Üye Girişi</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="../index.php">inSAGE</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">Üye Girişi</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<!-- Start My Account Area -->
		<section class="my_account_area pt--80 pb--55 bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="my__account__wrapper">
							<h3 class="account__title">Giriş Yap</h3>
							<form action="#">
								<div class="account__form">
									<div class="input__box">
										<label>Kullanıcı Adı yada E-posta <span>*</span></label>
										<input type="text">
									</div>
									<div class="input__box">
										<label>Parola<span>*</span></label>
										<input type="text">
									</div>
									<div class="form__btn">
										<button>Giriş</button>
										<label class="label-for-checkbox">
											<input id="rememberme" class="input-checkbox" name="rememberme" value="forever" type="checkbox">
											<span>Beni Hatırla</span>
										</label>
									</div>
									<a class="forget_pass" href="#">Parolanızı mı unuttunuz?</a>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="my__account__wrapper">
							<h3 class="account__title">Kayıt Ol</h3>
							<form action="#" method="post">
								<div class="account__form">
									<div class="input__box">
										<label>E-posta <span>*</span></label>
										<input type="email">
									</div>
									<div class="input__box">
										<label>Parola<span>*</span></label>
										<input type="password">
									</div>
									<div class="form__btn">
										<button>Kayıt Ol</button>
										
									</div><br>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End My Account Area -->
		<!-- Footer Area -->
		<?php include "accountFooter.html"?>
		<!-- //Footer Area -->
		
	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="../js/vendor/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/plugins.js"></script>
	<script src="../js/active.js"></script>
	
</body>
</html>