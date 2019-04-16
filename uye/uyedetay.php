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
								<h1 class="main-title float-left">Üye Detay İşlemi</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Menü</li>
									<li class="breadcrumb-item active">Üye Detaylı Listeleme</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- end row -->




					<div class="row">

						<div class="col-xs-22 col-sm-22 col-md-22 col-lg-12 col-xl-12">						
							<div class="card mb-10">
								<div class="card-header">
									<h3><i class="fa fa-table"></i> Üye Detay İşlemi</h3>
								</div>

								<div class="card-body">
									
									<div class="table-responsive">
										<table id="example1" class="table table-bordered table-hover display">
											<thead>
												<tr>
													<th>ID</th>
													<th>Ad</th>
													<th>Soyad</th>
													<th>Bakiye</th>
													<th>Onay</th>
													<th>İşlem</th>

												</tr>
											</thead>

											<tbody>
												<?php
											$kullaniciSor=$db->prepare("SELECT * from kullanici "); //kullanici tablousundaki tüm kişileri getirir
											$kullaniciSor->execute();



											while ($kullaniciCek=$kullaniciSor->fetch(PDO::FETCH_ASSOC)) { ?>
												<tr>
													<!--Kullanıcıların tüm bilgilerinin çekillmesi -->
													<td><?php echo $kullaniciCek['userID'] ?></td>
													<td><?php echo $kullaniciCek['ad'] ?></td>
													<td><?php echo $kullaniciCek['soyad'] ?></td>
													<td>
														
														
														<?php 
														//bakiye bilgisine göre renklendirme işlemleri

														if ($kullaniciCek['bakiye'] > 700) {?>


															<p class="font-600 m-b-5"><span class="text-primary pull-right"><b><?php echo $kullaniciCek['bakiye'] ?></b></span></p>
															<div class="progress">
																<div class="progress-bar progress-bar-striped progress-xs bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="95"></div>
															</div>


															<!-- end 4 -->
														<?php } elseif ( ($kullaniciCek['bakiye'])  >= 500 and ( $kullaniciCek['bakiye'] ) <700 ){ ?> 

															<p class="font-600 m-b-5"><span class="text-warning pull-right"><b><?php echo $kullaniciCek['bakiye'] ?></b></span></p>
															<div class="progress">
																<div class="progress-bar progress-bar-striped progress-xs bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="68"></div>
															</div>
															<!-- end 3 -->
														<?php } elseif (( $kullaniciCek['bakiye'] ) >= 300 and ( $kullaniciCek['bakiye'] ) <500) { ?> 

															<p class="font-600 m-b-5"><span class="text-success pull-right"><b><?php echo $kullaniciCek['bakiye'] ?></b></span></p>
															<div class="progress">
																<div class="progress-bar progress-bar-striped progress-xs bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
															</div>
															<!-- end 2 -->
														<?php } else if (( $kullaniciCek['bakiye'] ) >= 50 and ( $kullaniciCek['bakiye'] ) <300)  { ?> 
															<p class="font-600 m-b-5"><span class="text-secondary pull-right"><b><?php echo $kullaniciCek['bakiye'] ?></b></span></p>
															<div class="progress">
																<div class="progress-bar progress-bar-striped progress-xs bg-secondary" role="progressbar" style="width: 15%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
															</div>
														<?php }
														 else { ?>
														 	<p class="font-600 m-b-5"><span class="text-danger pull-right"><b><?php echo $kullaniciCek['bakiye'] ?></b></span></p>
															<div class="progress">
																<div class="progress-bar progress-bar-striped progress-xs bg-danger" role="progressbar" style="width: 4%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
															</div>
														 
														 <?php } ?>


													</td>
													<td><?php 
													//onay değerine göre (1,0,engel) bilgilendirme
													switch ($kullaniciCek['onay']) {
														case '1':
														echo "onaylandı";
														break;
														case '0':
														echo "onaylanmadı";
														break;
														default:
														echo "engellendi";

													} ?></td>

													<td align="center">
														<a href="uyedetayigoster.php?userID=<?php echo $kullaniciCek['userID'] ?>"><button class="btn btn-primary " type="submit" name="detay" >Detay</button></a>
														
														<!-- Üyeye Mesaj Gönderme Formuna Gider -->
											  
														<a href="uyeMesaj.php?userID=<?php echo $kullaniciCek['userID'] ?>"><img src="https://img.icons8.com/bubbles/50/000000/new-post.png"></a>

													</td>



												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>

							</div>														
						</div><!-- end card-->					
					</div>



				</div>








			</div>
			<!-- END content -->

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