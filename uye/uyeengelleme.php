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
								<h1 class="main-title float-left">Üye Engelleme İşlemi</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Menü</li>
									<li class="breadcrumb-item active">Üye Engelleme</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- end row -->




					<div class="row">

						<div class="col-xs-24 col-sm-24 col-md-24 col-lg-12 col-xl-12">						
							<div class="card mb-12">
								<div class="card-header">
									<h3><i class="fa fa-table"></i> Üye Engelleme İşlemi</h3>
								</div>
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><b>Tüm Kullanıcılar</b></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><b>Engellenmiş Kullanıcılar</b></a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">	
										<div class="card-body">

											<div class="table-responsive">
												<table id="example1" class="table table-bordered table-hover display">
													<thead>
														<tr>
															<th>ID</th>
															<th>Ad</th>
															<th>Soyad</th>
															<th>Email</th>
															<th>Bakiye</th>
															<th>Onay</th>
															<th width="50">İşlem</th>

														</tr>
													</thead>

													<tbody>
														<?php
											$kullaniciSor=$db->prepare("SELECT * from kullanici where onay='0' or onay='1' "); //kullanici tablousundaki engellenmiş kullanıcıları getirir
											$kullaniciSor->execute();

											while ($kullaniciCek=$kullaniciSor->fetch(PDO::FETCH_ASSOC)) { ?>
												<tr>
													<td><?php echo $kullaniciCek['userID'] ?></td>
													<td><?php echo $kullaniciCek['ad'] ?></td>
													<td><?php echo $kullaniciCek['soyad'] ?></td>
													<td><?php echo $kullaniciCek['email'] ?></td>
													<td><?php echo $kullaniciCek['bakiye'] ?></td>
													<td><?php switch ($kullaniciCek['onay']) {
														case '0':
														echo "onaylanmadı";
														break;
														default:
														echo "onaylandı";

													} ?></td>
													
													<td align="center"><a href="uyeengellemeislemi.php?userID=<?php echo $kullaniciCek['userID'] ?>&name=engelle" onClick="return confirm('Bu üyeyi engellemek istediğinize emin misiniz?')" name="engelle" ><button class="btn btn-danger" name="engelle" type="submit" >Engelle</button></a></td>



												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>

							</div>														
						</div><!-- end card-->	
						<div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="card-body">
								<div class="table-responsive">
									<table id="example1" class="table table-bordered table-hover display">
										<thead>
											<tr>
												<th>ID</th>
												<th>Ad</th>
												<th>Soyad</th>
												<th>Email</th>
												<th>Bakiye</th>
												<th>Onay</th>
												<th width="50">İşlem</th>

											</tr>
										</thead>

										<tbody>
											<?php
											$kullaniciSor=$db->prepare("SELECT * from kullanici where onay!='0' and onay!='1'"); //kullanici tablousundaki engellenmiş kullanıcıları getirir
											$kullaniciSor->execute();

											while ($kullaniciCek=$kullaniciSor->fetch(PDO::FETCH_ASSOC)) { ?>
												<tr>
													<td><?php echo $kullaniciCek['userID'] ?></td>
													<td><?php echo $kullaniciCek['ad'] ?></td>
													<td><?php echo $kullaniciCek['soyad'] ?></td>
													<td><?php echo $kullaniciCek['email'] ?></td>
													<td><?php echo $kullaniciCek['bakiye'] ?></td>
													<td><?php switch ($kullaniciCek['onay']) {
														case '0':
														echo "onaylanmadı";
														break;
														case '1':
														echo "onaylandı";
														break;
														default:
														echo "engellendi";

													} ?></td>
												
													<td align="center"><a href="uyeEngelKaldirma.php?userID=<?php echo $kullaniciCek['userID'] ?>" onClick="return confirm('Bu üyenin engelini kaldırmak istediğinize emin misiniz?')"><button class="btn btn-danger" type="submit" name="kaldir" >Kaldır</button></a></td>



												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>

							</div>



						</div>





					</div>
				</div>
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