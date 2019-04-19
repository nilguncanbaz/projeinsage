<!DOCTYPE html>
<html lang="en">
<?php include "head.html";?>

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
								<h1 class="main-title float-left">Kayıtlı Kitapları Listeleme</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Kitap</li>
									<li class="breadcrumb-item active">Kitap Listeleme</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="row">

						<div class="col-xs-22 col-sm-22 col-md-22 col-lg-11 col-xl-11">						
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
													<th>YAYIN TARİHİ</th>

													<th>KİTABIN DİLİ</th>
													<th>HARİCİ ADRES</th>
													<th>İŞLEM</th>



												</tr>
											</thead>										
											<tbody>

												<?php 
												$query= $db->query("SELECT * FROM ebook where tip='pages'", PDO::FETCH_ASSOC);
												if($query->rowCount()){
													foreach ($query as $row) {


														echo "<tr>" ;
														echo"<td>".$row['ISBN']."</td>";
														echo"<td>".$row['category']."</td>";
														echo"<td>".$row['bookName']."</td>";
														echo"<td>".$row['publisherName']."</td>";
														echo"<td>".$row['publishDate']."</td>";

														echo"<td>".$row['lang']."</td>";
														echo"<td>".$row['external']."</td>";
														echo"<td>"?>
														<a href="kitapsil.php?ISBN=<?php echo $row['ISBN'] ?>" onClick="return confirm('Bu kayıdı silmek istediğinize emin misiniz?')"><button class="btn btn-danger" type="submit" name="sil"><i class="fa fa-times"></i></button></a> <br> 
														<a href="kitapguncelle.php?ISBN=<?php echo $row['ISBN']?>"><button class="btn btn-primary" type="submit" name="guncelle"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
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
			<?php include"footer.html";?>						


		</div>
		<?php include"script.html";?>

		<!-- END Java Script for this page -->

	</body>
	</html>
