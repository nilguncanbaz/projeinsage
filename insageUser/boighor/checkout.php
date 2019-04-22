<!doctype html>
<html class="no-js" lang="tr">
<?php include 'indexHead.html' ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		
		<!-- Header -->
		<?php include 'indexHeader.php' ?>
		<!-- //Header -->
		
		<br> <br>
		<!-- Start Checkout Area -->
		<section class="wn__checkout__area section-padding--lg bg__white">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="wn_checkout_wrap">
							<div class="checkout_info">
								<span>Zaten üye misiniz ?</span>
								<a class="showlogin" href="#">Giriş yapmak için buraya tıklayın</a>
							</div>
							<div class="checkout_login">
								<form class="wn__checkout__form" action="#">
									<p>Daha önce bizimle alışveriş yaptıysanız, lütfen bilgilerinizi aşağıdaki kutulara girin. Eğer yeni bir müşteriyseniz, lütfen Fatura bölümüne geçin.</p>

									<div class="input__box">
										<label>Email Adresi <span>*</span></label>
										<input type="text">
									</div>

									<div class="input__box">
										<label>Parola <span>*</span></label>
										<input type="password">
									</div>
									<div class="form__btn">
										<button>GİRİŞ</button>
										<label class="label-for-checkbox">
											<input id="rememberme" name="rememberme" value="forever" type="checkbox">
											<span>Beni Hatırla</span>
										</label>
										<a href="#">Şifreni mi Unuttun ?</a>
									</div>
								</form>
							</div>
							<div class="checkout_info">
								<span>Kuponunuz var mı? </span>
								<a class="showcoupon" href="#">Kodunuzu girmek için buraya tıklayın</a>
							</div>
							<div class="checkout_coupon">
								<form action="#">
									<div class="form__coupon">
										<input type="text" placeholder="Kupon kodu">
										<button>Kodu Uygula</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="customer_details">
							<h3>Fatura Detayları</h3>
							<div class="customar__field">
								<div class="margin_between">
									<div class="input_box space_between">
										<label>Ad <span></span></label>
										<input type="text">
									</div>
									<div class="input_box space_between">
										<label>Soyad <span></span></label>
										<input type="text">
									</div>
								</div>

								<div class="input_box">
									<label>Ülke<span></span></label>
									<select class="select__option">
										<option>Bir ülke seçin</option>
										<option>Türkiye</option>
										<option>Kazakistan</option>
									</select>
								</div>
								<div class="input_box">
									<label>Açık Adres <span>*</span></label>
									<input type="text" placeholder="Açık Adres">
								</div>

								<div class="input_box">
									<label>Şehir<span>*</span></label>
									<select class="select__option">
										<option>Bir şehir seçin</option>
										<option>sivas</option>
										<option>Amasya</option>
										<option>Trabzon</option>
										<option>İstanbul</option>
									</select>
								</div>
								<div class="input_box">
									<label>İlçe<span>*</span></label>
									<select class="select__option">
										<option>Bir ilçe seçin</option>
										<option>Zara</option>
										<option>Vakfıkebir</option>
										<option>Yıldızeli</option>
										<option>Beykoz</option>
									</select>
								</div>
								<div class="margin_between">
									<div class="input_box space_between">
										<label>Telefon <span>*</span></label>
										<input type="text">
									</div>

									<div class="input_box space_between">
										<label>Email adresi <span>*</span></label>
										<input type="email">
									</div>
								</div>
							</div>
							<div class="create__account">
								<div class="wn__accountbox">
									<input class="input-checkbox" name="createaccount" value="1" type="checkbox">
									<span>Hesap Oluştur ?</span>
								</div>
								<div class="account__field">
									<form action="#">
										<label>Hesap Şifresi <span>*</span></label>
										<input type="text" placeholder="Parola">
									</form>
								</div>
							</div>
						</div>
						<div class="customer_details mt--20">
							<div class="differt__address">
								<input name="ship_to_different_address" value="1" type="checkbox">
								<span>Farklı bir adrese gönderilsin mi?</span>
							</div>
							<div class="customar__field differt__form mt--40">
								<div class="margin_between">
									<div class="input_box space_between">
										<label>Ad <span></span></label>
										<input type="text">
									</div>
									<div class="input_box space_between">
										<label>Soyad <span></span></label>
										<input type="text">
									</div>
								</div>

								<div class="input_box">
									<label>Ülke<span>*</span></label>
									<select class="select__option">
										<option>Bir ülke seçin</option>
										<option>Türkiye</option>
										<option>Kazakistan</option>
									</select>
								</div>
								<div class="input_box">
									<label>Adres <span>*</span></label>
									<input type="text" placeholder="Açık Adres">
								</div>

								<div class="input_box">
									<label>Şehir<span>*</span></label>
									<select class="select__option"> 
										<option>Sivas</option>
										<option>Amasya</option>
										<option>Trabzon</option>
										<option>İstanbul</option>
									</select>
								</div>
								<div class="input_box">
									<label>İlçe<span>*</span></label>
									<select class="select__option">
										<option>Bir ilçe seçin</option>
										<option>Zara</option>
										<option>Vakfıkebir</option>
										<option>Yıldızeli</option>
										<option>Beykoz</option>
									</select>
								</div>
								
								<div class="margin_between">
									<div class="input_box space_between">
										<label>Telefon <span>*</span></label>
										<input type="text">
									</div>
									<div class="input_box space_between">
										<label>Email adresi <span>*</span></label>
										<input type="email">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
						<div class="wn__order__box">
							<h3 class="onder__title">ŞİPARİŞİNİZ</h3>
							<ul class="order__total">
								<li>Kitap Adı</li>
								<li>Toplam</li>
							</ul>
							<ul class="order_product">
								<li>Nutuk × 1<span>48.00</span></li>
								<li>Sefiller × 1<span>48.00</span></li>
							</ul>
							<ul class="shipping__method">
								<li>Sepet Toplam <span>48.00</span></li>

							</ul>
							<ul class="total__amount">
								<li>Genel Toplam <span>223.00</span></li>
							</ul>
						</div>
						<div id="accordion" class="checkout_accordion mt--30" role="tablist">
							<div class="payment">
								<div class="che__header" role="tab" id="headingOne">
									<a class="collapsed checkout__title" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										<span>Kredi Kartı</span>
									</a>
								</div>
								<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="payment-body">Kart bilgilerini giriniz</div>
									<form role="form">
										<div class="form-group">
											<label for="username">Kart Üzerindeki Ad Soyad</label>
											<input type="text" class="form-control" name="username" placeholder="" required="">
										</div> <!-- form-group.// -->

										<div class="form-group">
											<label for="cardNumber">Kart Numarası</label>
											<div class="input-group">
												<input type="text" class="form-control" name="cardNumber" placeholder="">
												<div class="input-group-append">
													<span class="input-group-text text-muted">
														<i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>   
														<i class="fab fa-cc-mastercard"></i> 
													</span>
												</div>
											</div>
										</div> <!-- form-group.// -->

										<div class="row">
											<div class="col-sm-8">
												<div class="form-group">
													<label><span class="hidden-xs">Son Kullanma Tarihi </span> </label>
													<div class="input-group">
														<input type="number" class="form-control" placeholder="MM" name="">
														<input type="number" class="form-control" placeholder="YY" name="">
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
													<input type="number" class="form-control" required="">
												</div> <!-- form-group.// -->
											</div>
										</div> <!-- row.// -->
										<button class="subscribe btn btn-primary btn-block" type="button"> Onayla  </button>
									</form>
								</div>
							</div>
							<div class="payment">
								<div class="che__header" role="tab" id="headingTwo">
									<a class="checkout__title" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
										<span>Havale / Eft</span>
									</a>
								</div>
								<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
									<div class="payment-body">	
										<p>Banka Detayları</p>
										<dl class="param">
											<dt>BANK: </dt>
											<dd> HALK BANKASI</dd>
										</dl>
										<dl class="param">
											<dt>HESAP NUMARASI: </dt>
											<dd> 12345678912345</dd>
										</dl>
										<dl class="param">
											<dt>IBAN: </dt>
											<dd> 123456789</dd>
										</dl>
										<p><strong>Not:</strong> Havale hesabımıza ulaştığında size siparişinizin onaylandığını belirtilen bir e-posta gönderilir. </p></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- End Checkout Area -->
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