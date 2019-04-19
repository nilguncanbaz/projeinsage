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

				<div class="container-fluid" >
					<div class="row">
						<div class="col-xl-12">
							<div class="breadcrumb-holder">
								<h1 class="main-title float-left">Kitap Görüntüleme</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Kitap</li>
									<li class="breadcrumb-item active">Kitap Görüntüleme</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>


					<div class="row" >

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8" >						
						<div class="card mb-10">
							<div class="card-header">
								<h3><i class="fa fa-book"></i> Kitap Görüntüleme</h3>
							</div>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" >	
									<div class="card-body" >

										<div class="table-responsive">
											<table id="example1" class="table table-bordered table-hover display" >
												<thead>
													<tr>
														<th>ISBN</th>
														<th>Kategori Adı</th>
														<th>Kitap Adı</th>
														<th>İşlem</th>
													</tr>
												</thead>

												<tbody>
													<?php
											$kitapSor=$db->prepare("SELECT * from ebook where tip='pages'"); //kullanici tablousundaki tüm sütunları seçtik
											$kitapSor->execute();

											while ($kitapCek=$kitapSor->fetch(PDO::FETCH_ASSOC)) { ?>
												<tr>
													<td><?php echo $kitapCek['ISBN'] ?></td>
													<td><?php echo $kitapCek['category'] ?></td>
													<td><?php echo $kitapCek['bookName'] ?></td>
													<td><a href="kitapgoruntuleislem.php?ISBN=<?php echo $kitapCek['ISBN']?>"><button class="btn btn-success" type="submit" name="goruntule"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
													</td>

												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>

							</div> </div></div>
						</div>


					</div>							
					<?php include"footer.html";?>						


				</div> </div></div></div>
				<?php include"script.html";?>

				<!-- END Java Script for this page -->

			</body>
			</html>
