<!DOCTYPE html>
<html lang="en">
<?php 
include "head.html";
include "headbar.php";
ob_start();
?>

<body class="adminbody">

	<div id="main">
		<?php include "sidebar.html";?>
		<div class="content-page">	
			<!-- Start content -->
			<div class="content">

				<div class="container-fluid">
					
					<div class="row">
						<div class="col-xl-12">
							<div class="breadcrumb-holder">
								<h1 class="main-title float-left">Menü</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Anasayfa</li>
									<li class="breadcrumb-item active">Menü</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- end row -->
						
					<div class="alert" role="alert" style="background-color: white">
						<h4 class="alert-heading">Kullandığın Kadar Öde Ebook!</h4>
						<div class="row">
								<div class="card-body">
									<div class="card" style="width: 100%;">
										<div class="card-body"><img class="rounded float-left"  src="../img/ebooks.jpg" style="width: 40%;">&emsp;
											<h4 class="card-title">Projemiz Hakkında</h4>
											<p class="card-text" style="text-indent:50px;">Projemizin amacı, elektronik kaynakların (e-books) ücret karşılığı ve modern bir ücretlendirme yaklaşımı ile akademisyenlere sunumuna imkân sağlayan web tabanlı bir sistem tasarlamaktır. Günümüzün “indir ve bütün haklarına sahip ol” yaklaşımı hem elektronik kaynakların sahibi için hem de elektronik kaynakları kullanacaklar için doğru bir yaklaşım olmaktan uzaktır. Dosya indirme sistemleri sayesinde yayın hakları ciddi şekilde zarara uğramakta iken ücret karşılığı yayın hizmeti alındığında da yayının ihtiyaç duyulmayan kısımları için de ücret ödeme durumu ortaya çıkmaktadır. Dolayısıyla temel problemleri yukarıda anılan mevcut duruma bir çözüm bulabilmek için bugüne kadar eksikliği hissedilmiş bir kaynak paylaşım sistemi ortaya konacaktır.</p>
										</div>
									</div>
								</div> 
						</div>              
					</div> 
					
				</div>							
			</div>							


			<footer class="footer">
				<span class="text-right">
					Copyright <a target="_blank" href="#">Tüm hakları Hiras Yazılıma saklıdır.</a>
				</span>

			</footer>

		</div>
	</div>
	<!-- END main -->

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
	<!-- END Java Script for this page -->

</body>
</html>