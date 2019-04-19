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

				<div class="container-fluid">
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



					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">						
							<div class="card mb-3">
								<div class="card-header">
									<?php

									$kullaniciSor=$db->prepare("SELECT * from ebook where ISBN=:id");
									$kullaniciSor->execute(array(
										'id' => $_GET['ISBN']
									));
									$kullaniciCek=$kullaniciSor->fetch(PDO::FETCH_ASSOC); ?>

									<h3><i class="fa fa-image"></i> Kitap Sayfaları / <?php echo $kullaniciCek['bookName']; ?> </h3>
									

								</div>
								
								<div class="card-body">
									<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
										Sayfaları Listele
									</a>
									<div class="collapse" id="collapseExample">
										<div class="card card-body">
											<div class="row">

												<?php

												$resimSor=$db->prepare("SELECT * from ebook_sayfa_resim where ISBN=:id");
												$resimSor->execute(array(
													'id' => $_GET['ISBN']
												));


												while ($resimCek=$resimSor->fetch(PDO::FETCH_ASSOC)) { ?>

													<a data-toggle="lightbox" data-gallery="example-gallery" href="<?php echo $resimCek['yol'] ?>" class="col-sm-2">
														<img  alt="<?php echo $resimCek['sayfaNo'] ?> "  enctype="multipart/form-data" src="<?php echo $resimCek['yol'] ?>" class="img-fluid"> 
														<h4><?php echo $resimCek['sayfaNo'] ?></h4></a><br>
														
													<?php } 

													?>
												</div>
											</div>
										</div>														
									</div><!-- end card-->					
								</div>
							</div></div>
							<?php include"footer.html";?>						


						</div> </div> </div></div>
						<?php include"script.html";?>

						<!-- END Java Script for this page -->

					</body>
					<script type="text/javascript">
disableSelection(document.body) //disable text selection on entire body of page
</script>
</html>
