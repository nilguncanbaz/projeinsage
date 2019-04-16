<!DOCTYPE html>
<html>
<?php 
include "head.html"; ?>
<body class="adminbody">


	<?php include '../database/baglan.php'; ?>

	<?php include 'headbar.php'; ?>

	<?php include 'sidebar.html'; ?>

	<div class="content-page">

		<!-- Start content -->
		<div class="content">

			<div class="container-fluid">
				


				
				<br>
				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">						
						<div class="card mb-3">
							<div class="card-header">
								<h3><i class="fa fa-user"></i>Admin Profili</h3>								
							</div>

							<div class="card-body">

								<form action="profilislem.php" method="POST" enctype="multipart/form-data">

									<div class="row">	

										<div class="col-lg-9 col-xl-9">

											<div class="row">				
												<div class="col-lg-6">
													<div class="form-group">
														<label>Ad</label>
														<input class="form-control" name="ad" type="text" value="<?php echo $kullaniciCek['ad'] ?>" required  disabled />
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label>Soyad</label>
														<input class="form-control" name="soyad" type="text" value="<?php echo $kullaniciCek['soyad'] ?>"  required  disabled />
													</div>
												</div>

											</div>

											<div class="row">				
												<div class="col-lg-6">
													<div class="form-group">
														<label>Email</label>
														<input class="form-control" name="email" type="text" value="<?php echo $kullaniciCek['email'] ?>" />
													</div>
												</div>              			                                

												<div class="col-lg-6">
													<div class="form-group">
														<label>Parola</label>
														<input class="form-control" name="parola" type="password" value="<?php echo $kullaniciCek['parola'] ?>" />
													</div>
												</div>   
											</div>
											<input type="hidden" value="<?php echo $kullaniciCek['userID'] ?>" name="userID">
											


											<div class="row">
												<div class="col-lg-12">
													<a href="profilislem.php?userID=<?php echo $kullaniciCek['userID']?>"><button class="btn btn-primary" type="submit" name="kaydet" enctype="multipart/form-data">Profili Kaydet</button></a>
												</div>
											</div>

										</div>



										<div class="col-lg-3 col-xl-3 border-left">


											

											

											<img style="width: 75%";  enctype="multipart/form-data" src="<?php echo $kullaniciCek['yol'] ?>" />
											<br />

											
											<br>
											<label>Mevcut Profil Fotoğrafı</label> 
											<a href="profilislem.php?userID=<?php echo $kullaniciCek['userID']?>"onClick="return confirm('Fotoğrafı silmek istediğinize emin misiniz?')"><button class="btn btn-danger" type="submit" name="sil"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
											<br> <br>
											<label>Yeni Fotoğraf Yükle</label> 

											<input type="file" name="dosya" class="form-control"> <br>
											<button class="btn btn-primary" type="submit" name="dosya">Fotoğraf Güncelle</button>

										</div>
									</div>								

								</form>										

							</div>	
							<!-- end card-body -->								

						</div>
						<!-- end card -->					

					</div>
					<!-- end col -->	

				</div>



			</div>
		</div>
	</div>









	<?php include '../home/footer.html'; ?>
	


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