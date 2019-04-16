<!DOCTYPE html>
<html lang="en">
<?php include "head.html";?>

<body class="adminbody">

	<div id="main">
		<?php 
		include "headbar.php";
		include "sidebar.html";
		include "database/baglan.php";
		?>




		<div class="content-page">

			<!-- Start content -->
			<div class="content">

				<div class="container-fluid" >
					<div class="row">
						<div class="col-xl-12">
							<div class="breadcrumb-holder">
								<h1 class="main-title float-left">Kitap Özet Kaydı</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Kitap</li>
									<li class="breadcrumb-item active">KitapÖzet Kaydı</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>


					<div class="row" >

						<div class="col-xs-20 col-sm-20 col-md-20 col-lg-10 col-xl-10" >						
							<div class="card mb-10">
								<div class="card-header">
									<h3><i class="fa fa-comment"></i> Tüm Kullanıcı Yorumları</h3>
								</div>
								<div class="card-body" >

									<div class="table-responsive">
										<table id="example1" class="table table-bordered table-hover display" >
											<thead>
												<tr>
													<th>Yorum ID</th>
													<th>Yorum Yapılan Kitap</th>
													<th style="width:350px">Yorum Sahibi</th>
													<th style="width:120px">İşlemler</th>
												</tr>
											</thead>

											<tbody>
												
												<?php
												$Sor=$db->prepare("SELECT * from yorumlar"); 
												$Sor->execute();



												while ($Cek=$Sor->fetch(PDO::FETCH_ASSOC)) { 
													$idkullanici=$Cek['kullanici_id'];
													$idkitap=$Cek['kitap_id'];

													$Sorkullanici=$db->prepare("SELECT * from kullanici where userID='$idkullanici'");
													$Sorkullanici->execute();
													$Sorkitap=$db->prepare("SELECT * from ebook where id='$idkitap'");
													$Sorkitap->execute();
													while($Cekkullanici=$Sorkullanici->fetch(PDO::FETCH_ASSOC)){

														while($Cekkitap=$Sorkitap->fetch(PDO::FETCH_ASSOC)){

															?>
															<tr>
																<td><?php echo $Cek['id'] ?></td>

																<td><?php echo $Cekkitap['bookName'] ?></td>
																<td><?php echo $Cekkullanici['ad']." ".$Cekkullanici['soyad'] ?></td>
																<td style="text-align: center"><a href="kitapOzetKaydiDetay.php?yorumID=<?php echo $Cek['id']?>"><button class="btn btn-primary btn-sm" type="submit" name="goruntule"><i class="fa fa-search" aria-hidden="true"></i></button></a>
																	<a href="yorumSil.php?yorumID=<?php echo $Cek['id']?>" onClick="return confirm('Bu kayıdı silmek istediğinize emin misiniz?')" > <button class="btn btn-danger btn-sm" type="submit" name="sil"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a></td>


																</tr>
															<?php } 
														}
													}?>

												</tbody>
											</table>
										</div>

									</div> 
								</div>


							</div>							
							<?php include"footer.html";?>						


						</div> </div></div></div>
						<?php include"script.html";?>

						<!-- END Java Script for this page -->

					</body>
					</html>
