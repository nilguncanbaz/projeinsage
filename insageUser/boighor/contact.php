<!doctype html>
<html class="no-js" lang="zxx">
<?php include "indexHead.html" ?>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<?php include "indexHeader.html" ?>
		
		
		<br> <br> <br>

		<section class="wn_contact_area bg--white pt--80 pb--80">
			
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-12">
						<div class="contact-form-wrap">
							<h2 class="contact__title">İLETİŞİM FORMU</h2>
							<p>Bizimle iletişime geçmek için aşağıdaki formu doldurabilirsiniz. </p>
							<form id="contact-form" action="#" method="post">
								<div class="single-contact-form space-between">
									<input type="text" name="ad" placeholder="Ad giriniz">
									<input type="text" name="soyad" placeholder="Soyad giriniz">
								</div>
								<div class="single-contact-form space-between">
									<input type="email" name="email" placeholder="Email giriniz">
								</div>
								<div class="single-contact-form">
									<input type="text" name="konu" placeholder="Konu giriniz">
								</div>
								<div class="single-contact-form message">
									<input type="text-area" name="mesaj" placeholder="Mesaj giriniz" >
								</div>
								<div class="contact-btn">
									<button type="submit">Gönder</button>
								</div>
							</form>
						</div> 
						<div class="form-output">
							<p class="form-messege">
							</div>
						</div>
						<div class="col-lg-4 col-12 md-mt-40 sm-mt-40">
							<div class="wn__address">
								<h2 class="contact__title">İLETİŞİM BİLGİLERİ</h2>
								<p> </p>
								<div class="wn__addres__wreapper">

									<div class="single__address">
										<i class="icon-location-pin icons"></i>
										<div class="content">
											<span>Adres:</span>
											<p>Cumhuriyet Teknokent Yenişehir Mahallesi Kardeşler Caddesi No: 7/2, 212 nolu Ofis, Sivas, TÜRKİYE</p>
										</div>
									</div>

									<div class="single__address">
										<i class="icon-phone icons"></i>
										<div class="content">
											<span>Telefon</span>
											<p>+90(533) 716 7945</p>
										</div>
									</div>

									<div class="single__address">
										<i class="icon-envelope icons"></i>
										<div class="content">
											<span>E-posta</span>
											<p><a href="bilgi@hirasyazilim.com">bilgi@hirasyazilim.com</a></p>
										</div>
									</div>

									<div class="single__address">
										<i class="icon-globe icons"></i>
										<div class="content">
											<span>Web Sitesi:</span>
											<p><a href="http://www.hirasyazilim.com" target="_blank">www.hirasyazilim.com</a></p>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="google__map pb--80">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d49114.28877673683!2d37.053411!3d39.702729!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfaf0ee8844c659ce!2zSGlyYXMgWWF6xLFsxLFtIEXEn2l0aW0gdmUgRGFuxLHFn21hbmzEsWs!5e0!3m2!1str!2str!4v1555505105307!5m2!1str!2str" frameborder="0" style="border:0; width: 100%; height: 500px;" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Contact Area -->
			<!-- Footer Area -->
			<?php include "indexFooter.html" ?>
			<!-- //Footer Area -->

		</div>
		<!-- //Main wrapper -->

		<!-- JS Files -->
		<script src="js/vendor/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/plugins.js"></script>
		<!-- Google Map js -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
		<script>
	        // When the window has finished loading create our google map below
	        google.maps.event.addDomListener(window, 'load', init);

	        function init() {
	            // Basic options for a simple Google Map
	            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
	            var mapOptions = {
	                // How zoomed in you want the map to start at (always required)
	                zoom: 12,

	                scrollwheel: false,

	                // The latitude and longitude to center the map (always required)
	                center: new google.maps.LatLng(23.7286, 90.3854), // New York

	                // How you would like to style the map. 
	                // This is where you would paste any style found on Snazzy Maps.
	                styles:
	                [

	                {
	                	"featureType": "administrative",
	                	"elementType": "labels.text.fill",
	                	"stylers": [
	                	{
	                		"color": "#444444"
	                	}
	                	]
	                },
	                {
	                	"featureType": "landscape",
	                	"elementType": "all",
	                	"stylers": [
	                	{
	                		"color": "#f2f2f2"
	                	}
	                	]
	                },
	                {
	                	"featureType": "poi",
	                	"elementType": "all",
	                	"stylers": [
	                	{
	                		"visibility": "off"
	                	}
	                	]
	                },
	                {
	                	"featureType": "road",
	                	"elementType": "all",
	                	"stylers": [
	                	{
	                		"saturation": -100
	                	},
	                	{
	                		"lightness": 45
	                	}
	                	]
	                },
	                {
	                	"featureType": "road.highway",
	                	"elementType": "all",
	                	"stylers": [
	                	{
	                		"visibility": "simplified"
	                	}
	                	]
	                },
	                {
	                	"featureType": "road.arterial",
	                	"elementType": "labels.icon",
	                	"stylers": [
	                	{
	                		"visibility": "off"
	                	}
	                	]
	                },
	                {
	                	"featureType": "transit",
	                	"elementType": "all",
	                	"stylers": [
	                	{
	                		"visibility": "off"
	                	}
	                	]
	                },
	                {
	                	"featureType": "transit.station.bus",
	                	"elementType": "labels.icon",
	                	"stylers": [
	                	{
	                		"saturation": "-16"
	                	}
	                	]
	                },
	                {
	                	"featureType": "water",
	                	"elementType": "all",
	                	"stylers": [
	                	{
	                		"color": "#04b7ff"
	                	},
	                	{
	                		"visibility": "on"
	                	}
	                	]
	                }
	                ]
	            };

	            // Get the HTML DOM element that will contain your map 
	            // We are using a div with id="map" seen below in the <body>
	            var mapElement = document.getElementById('googleMap');

	            // Create the Google Map using our element and options defined above
	            var map = new google.maps.Map(mapElement, mapOptions);

	            // Let's also add a marker while we're at it
	            var marker = new google.maps.Marker({
	            	position: new google.maps.LatLng(23.7286, 90.3854),
	            	map: map,
	            	title: 'Dcare!',
	            	icon: 'images/icons/map.png',
	            	animation:google.maps.Animation.BOUNCE

	            });
	        }
	    </script>

	    <script src="js/active.js"></script>

	</body>
	</html>