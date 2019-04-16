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
								<h1 class="main-title float-left">Kitap Güncelle</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Kitap</li>
									<li class="breadcrumb-item active">Kitap Güncelle</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					
					<div class="row">




						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">						
							<div class="card mb-8">
								<div class="card-header">
									<h3><i class="fa fa-hand-pointer-o"></i> KİTAP KAYDI GÜNCELLE</h3>
								</div>
								
								<div class="card-body">
									<?php
									$kullaniciSor=$db->prepare("SELECT * from ebook where ISBN=:ISBN");
									$kullaniciSor->execute(array(
										'ISBN' => $_REQUEST['ISBN']
									));
									$kullaniciCek=$kullaniciSor->fetch(PDO::FETCH_ASSOC);


									?>

									<form method="post" class="demo-form" action="guncelle.php?ISBN=<?php echo $_REQUEST['ISBN'] ?>&pageSize=<?php echo $kullaniciCek['pageSize'] ?>&yol=<?php echo $kullaniciCek['yol'] ?>&tip=<?php echo $kullaniciCek['tip'] ?>">
										<div class="form-section">
											<label for="text">Kitap Id:</label>
											<input type="text" class="form-control" name="id" required="" value="<?php echo $kullaniciCek['id'] ?>" disabled>		
											<label for="text">Kategori Adı:</label>
											<select class="form-control" name="category">
												<?php
												$kategoriSor=$db->prepare("SELECT * from kategori"); 
												$kategoriSor->execute();

												while ($kategoriCek=$kategoriSor->fetch(PDO::FETCH_ASSOC)) { ?>
													<option value="<?php echo $kategoriCek['kategoriAdı']?>"><?php echo $kategoriCek['kategoriAdı']?></option>
													<?php
												}?>
												<option selected value="<?php echo $kullaniciCek['category'] ?>"><?php echo $kullaniciCek['category'] ?></option>

											}

										</select>
										<a href="kategorikayit.php">Yeni Kategori Ekle</a><br>

										<label for="text">Kitap Adı:</label>
										<input type="text" class="form-control" name="bookName" required="" value="<?php echo $kullaniciCek['bookName'] ?>">
										<label for="text">Yayınevi Adı:</label>
										<select class="form-control" name="publisherName" value="">
											<?php
											$yayineviSor=$db->prepare("SELECT * from yayinevleri"); 
											$yayineviSor->execute();

											while ($yayineviCek=$yayineviSor->fetch(PDO::FETCH_ASSOC)) { ?>
												<option value="<?php echo $yayineviCek['ad']?>" ><?php echo $yayineviCek['ad']?></option>
											<?php } ?>
											<option selected value="<?php echo $kullaniciCek['publisherName'] ?>"><?php echo $kullaniciCek['publisherName'] ?></option>

										</select>
										<label for="text">Yayın Tarih:</label>
										<input type="date" class="form-control" name="publishDate" required="" value="<?php echo $kullaniciCek['publishDate'] ?>">
										
										<label for="text">Kitabın Dili:</label>
										<select class="form-control" name="lang" value="">



											<?php
											$dilSor=$db->prepare("SELECT * from ebook"); 
											$dilSor->execute();

											while ($dilCek=$dilSor->fetch(PDO::FETCH_ASSOC)) { ?>
												<option value=" <?php echo $dilCek['lang']?>" ><?php echo $dilCek['lang']?>
											</option> 
										<?php } ?>
										


										<option selected value="<?php echo $kullaniciCek['lang'] ?>"><?php echo $kullaniciCek['lang'] ?></option>
									</select>
									<label for="text">Harici Adres:</label>
									<input type="text" class="form-control" name="external" value="<?php echo $kullaniciCek['external'] ?>">

								</div> <br/>
								<input type="hidden" value="<?php echo $kullaniciCek['id'] ?>" name="id">



								<button type="submit" name="guncelle" class="btn btn-success">Güncelle</button>

							</form>						
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
