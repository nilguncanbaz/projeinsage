<!DOCTYPE html>
<html lang="en">
<?php include "head.html";
include "../ebook/icerikYukleme/dosyaSay.php";?>

<body class="adminbody">
	
	<div id="main">
		<?php 

		include "headbar.php";
		include "sidebar.html";
		include "../database/baglan.php";


		?>

		<div class="content-page">

			<!-- Start content -->
			<div class="content">

				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12">
							<div class="breadcrumb-holder">
								<h1 class="main-title float-left">Kitap İçeriği Ekleme</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Kitap</li>
									<li class="breadcrumb-item active">Kitap İçeriği Ekleme</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="row">

						<div class="col-xs-24 col-sm-24 col-md-24 col-lg-12 col-xl-12">						
							<div class="card mb-6">
								<div class="card-header">
									<h3><i class="fa fa-table"></i> KAYITLI KİTAPLAR</h3>

								</div>

								<div class="card-body">
									<div class="table-responsive">
										<table id="example1" class="table table-bordered table-hover display">
											<thead>
												<tr>
													<th>ISBN</th>
													<th>KATEGORİ</th>
													<th>KİTAP ADI</th>
													<th>YAYINEVİ ADI</th>
													<th>SAYFA SAYISI</th>
													<th>İŞLEM</th>												
												</tr>
											</thead>										
											<tbody>

												<?php 

												$query= $db->query("SELECT * FROM ebook where tip='pages'", PDO::FETCH_ASSOC);
												if($query->rowCount()){
													foreach ($query as $row) {
														echo"<tr>" ;
														echo"<td>".$row['ISBN']."</td>";
														echo"<td>".$row['category']."</td>";
														echo"<td>".$row['bookName']."</td>";
														echo"<td>".$row['publisherName']."</td>";
														echo"<td>".$row['pageSize']." SAYFA </td>";
														echo"<td align='center'>" ?>
														<form action="kitapyukleme.php?ISBN=<?php echo $row['ISBN']?>" method="post" enctype="multipart/form-data" id="yukle">


															<button class="btn btn-primary" type="submit" name="yukle"><i class="fa fa-upload float-right text-black">  Kitap İçeriği Yükle</i></button>
															
														</form>

														<?php 
														echo"</td>";
														echo "</tr>";

														

													}
												}


												?>	

											</tbody>
										</table>
									</div>


								</div>														
							</div><!-- end card-->

						</div>



					</div>


				</div>


			</div>							
			<?php include"footer.html"; ?>						


		</div>
		<?php include"script.html";  ?>

		<!-- END Java Script for this page -->

	</body>
	</html>
