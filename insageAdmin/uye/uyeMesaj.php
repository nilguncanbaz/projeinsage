<!DOCTYPE html>
<html>
		<?php include 'head.html'; ?>

<body class="adminbody">
	<div id="main">


		<?php include '../database/baglan.php'; ?>

		<?php include 'headbar.php'; ?>

		<?php include 'sidebar.html'; ?>



		<div class="content-page" >

			<!-- Start content -->
			<div class="content">

				<div class="container-fluid" >


					<div class="row">
						<div class="col-xl-12">
							<div class="breadcrumb-holder">
								<h1 class="main-title float-left">Üyeye Mesaj Gönder</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Menü</li>
									<li class="breadcrumb-item active">Üye Mesaj</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- end row -->

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">						
							<div class="card mb-3">
								<div class="card-header">
									
									<h3><i class="fa fa-check-square-o"></i> Mesaj Gönder </h3>

								</div>
								<div class="card-body">
									
									<!-- Mesaj gönderilecek üyeyi getirir -->
									<?php
									$kullaniciSor=$db->prepare("SELECT * from kullanici where userID=:id");
									$kullaniciSor->execute(array(
										'id' => $_GET['userID']
									));
									$kullaniciCek=$kullaniciSor->fetch(PDO::FETCH_ASSOC);


									?>



									<form  method="POST" action="mesajGonder.php">
									 <div class="form-group">
										<img style="width: 15%;"  enctype="multipart/form-data" src="../home/<?php echo $kullaniciCek['yol'] ?>" /> 
									 	<label style="float: right;"><b>Ad Soyad: </b> <?php echo $kullaniciCek['ad']." ".$kullaniciCek['soyad']; ?></label>
										</div>
										<div class="form-group">
											<label>Email</label>
											<input type="email" class="form-control" name="email" value="<?php echo $kullaniciCek['email'] ?>" required="">
										</div>


										<div class="form-group">
											<label for="input">Konu</label>
											<input type="text" class="form-control" name="konu"  placeholder="Konu giriniz" autocomplete="off" required="">
										</div>

										<div class="form-group">
											<label for="inputAddress2">Mesajınız</label>
											<textarea required class="form-control" name="icerik" placeholder="Mesajınızı giriniz..."></textarea>
										</div>



										<button type="submit" name="mesaj" class="btn btn-primary">Mesajı Gönder</button>
									</form>

										


								</div>
								<!-- END content -->

							</div>

						</div>
					</div>
				</div>
			</div>

			<?php include '../home/footer.html'; ?>
		</div>


		<!-- END main -->


		<script src="../assets/js/jquery.scrollTo.min.js"></script>
		<script src="../assets/plugins/switchery/switchery.min.js"></script>


		<script src="../assets/plugins/parsleyjs/parsley.min.js"></script>
		<script>
			$('#form').parsley();
		</script>
		<!-- END Java Script for this page -->


		<script src="../assets/js/modernizr.min.js"></script>
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/moment.min.js"></script>

		<script src="../assets/js/popper.min.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>

		<script src="../assets/js/detect.js"></script>
		<script src="../assets/js/fastclick.js"></script>
		<script src="../assets/js/jquery.blockUI.js"></script>
		<script src="../assets/js/jquery.nicescroll.js"></script>

		<!-- App js -->
		<script src="../assets/js/pikeadmin.js"></script>

		<!-- BEGIN Java Script for this page -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

		<!-- Counter-Up-->
		<script src="../assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
		<script src="../assets/plugins/counterup/jquery.counterup.min.js"></script>			

		<script>
			$(document).ready(function() {
			// data-tables
			$('#example1').DataTable();

			// counter-up
			$('.counter').counterUp({
				delay: 10,
				time: 600
			});
		} );		
	</script>

	<script>
		var ctx1 = document.getElementById("lineChart").getContext('2d');
		var lineChart = new Chart(ctx1, {
			type: 'bar',
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				datasets: [{
					label: 'Dataset 1',
					backgroundColor: '#3EB9DC',
					data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9] 
				}, {
					label: 'Dataset 2',
					backgroundColor: '#EBEFF3',
					data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
				}]

			},
			options: {
				tooltips: {
					mode: 'index',
					intersect: false
				},
				responsive: true,
				scales: {
					xAxes: [{
						stacked: true,
					}],
					yAxes: [{
						stacked: true
					}]
				}
			}
		});


		var ctx2 = document.getElementById("pieChart").getContext('2d');
		var pieChart = new Chart(ctx2, {
			type: 'pie',
			data: {
				datasets: [{
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					label: 'Dataset 1'
				}],
				labels: [
				"Red",
				"Orange",
				"Yellow",
				"Green",
				"Blue"
				]
			},
			options: {
				responsive: true
			}

		});


		var ctx3 = document.getElementById("doughnutChart").getContext('2d');
		var doughnutChart = new Chart(ctx3, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [12, 19, 3, 5, 2, 3],
					backgroundColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					label: 'Dataset 1'
				}],
				labels: [
				"Red",
				"Orange",
				"Yellow",
				"Green",
				"Blue"
				]
			},
			options: {
				responsive: true
			}

		});
	</script>


</body>
</html>