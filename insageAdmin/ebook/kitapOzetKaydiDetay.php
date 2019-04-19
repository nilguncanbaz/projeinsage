<!DOCTYPE html>
<html lang="en">
<?php include "head.html";?>

<body class="adminbody">

	<div id="main">
		<?php 
		$yorumID=$_REQUEST['yorumID'];
		include "headbar.php";
		include "sidebar.html";
		include "database/baglan.php";
		?>
		<div class="content-page">

			<!-- Start content -->
			<div class="content">

				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12">
							<div class="breadcrumb-holder">
								<h1 class="main-title float-left">Kitap Özet Kaydı</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Kitap</li>
									<li class="breadcrumb-item active">Kitap Özet Kaydı</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">						

							<div class="card mb-3">

								<div class="card-header">
									<h3><i class="fa fa-user"></i> Yorum Detayı</h3>								
								</div>

								<div class="card-body">

									<div class="row">	
										<div class="col-lg-9 col-xl-9">
											<?php
											$Sor=$db->prepare("SELECT * from yorumlar"); 
											$Sor->execute();
											


											while ($Cek=$Sor->fetch(PDO::FETCH_ASSOC)) {
												if($yorumID==$Cek['id']){
													$idkullanici=$Cek['kullanici_id'];
													$idkitap=$Cek['kitap_id'];
													$Sorkullanici=$db->prepare("SELECT * from kullanici where userID='$idkullanici'");
													$Sorkullanici->execute();
													$Sorkitap=$db->prepare("SELECT * from ebook where id='$idkitap'");
													$Sorkitap->execute();
													while($Cekkullanici=$Sorkullanici->fetch(PDO::FETCH_ASSOC)){

														while($Cekkitap=$Sorkitap->fetch(PDO::FETCH_ASSOC)){?>

															<h4>Kitap Adı:<?php echo $Cekkitap['bookName']?></h4>
															<div class="lead"><?php echo $Cek['icerik']?><br/><br/></div>



														</div>


														<div class="col-lg-3 col-xl-3 border-left">
															<b>Yorum Sahibi</b>:<?php echo $Cekkullanici['ad']." ".$Cekkullanici['soyad'] ?><br />

															<b>E-posta</b>:<?php echo $Cekkullanici['email']?><br />
															<b>Yorum Tarihi </b>:<?php echo $Cek['tarih']?><br />

														</div>
													</div>	


												</div>	




												<?php
											}
										}
									}
								}
								?>
								<!-- end card-body -->								
								
							</div>
							 <a role="button" href="kitapOzetKaydi.php" class="btn btn-primary"><span class="btn-label"><i class="fa fa-arrow-left"></i></span>Geri Dön</a>	
							<!-- end card -->					

						</div>
						<!-- end col -->	

					</div>























				</div>


			</div>							
			<?php include"footer.html";?>						


		</div>
		<?php include"script.html";?>

		<!-- END Java Script for this page -->

	</body>
	</html>
