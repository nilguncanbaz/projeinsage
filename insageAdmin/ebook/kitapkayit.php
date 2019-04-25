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
								<h1 class="main-title float-left">Kitap Kayıt</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Kitap</li>
									<li class="breadcrumb-item active">Kitap Kayıt</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="row">




						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
							<div class="card mb-8">
								<div class="card-header">
									<h3><i class="fa fa-hand-pointer-o"></i> KİTAP KAYIT</h3>
								</div>

								<div class="card-body">


									<form method="post" class="demo-form" action="kitapkaydet.php">
										<div class="form-section">
											<label for="text">Kitap ISBN:</label>
											<input type="text" class="form-control" name="isbn" required="">
											<label for="text">Kategori Adı:</label>
											<select class="form-control" name="kategori">
												<?php
$query = $db->query("SELECT * FROM kategori", PDO::FETCH_ASSOC);
if ($query->rowCount()) {
    foreach ($query as $row) {

        ?>
														<option value="<?php echo $row["kategoriAdı"] ?>"><?php echo $row["kategoriAdı"] ?> </option>
														<?php

    }
}
?>
											</select>
											<a href="kategorikayit.php">Yeni Kategori Ekle</a><br>

											<label for="text">Kitap Adı:</label>
											<input type="text" class="form-control" name="kitapad" required="">
											<label for="text">Yayınevi Adı:</label>
											<select class="form-control" name="yayinevi">
												<?php
$query = $db->query("SELECT * FROM yayinevleri", PDO::FETCH_ASSOC);
if ($query->rowCount()) {
    foreach ($query as $row) {

        ?>
														<option value="<?php echo $row["ad"] ?>"><?php echo $row["ad"] ?> </option>
														<?php

    }
}
?>
											</select>
											<a href="yayinevikayit.php">Yeni Yayınevi Ekle</a><br>
											<label for="text">Yayın Tarih:</label>
											<input type="date" class="form-control" name="yayintarihi" required="">
											<label for="text">Sayfa Sayısı:</label>
											<input type="text" class="form-control" name="sayfasayisi" required="">
											<label for="text">Kitabın Dili:</label>
											<select class="form-control" name="dil">
												<option value="Türkçe">Türkçe</option>
												<option value="İngilizce">İngilizce</option>
												<option value="Almanca">Almanca</option>
												<option value="İtalyanca">İtalyanca</option>
											</select>
											<label for="text">Harici Adres:</label>
											<input type="text" class="form-control" name="hariciadres" value="http://">

										</div> <br/>
										<input type="submit" name="kaydet" value="Kaydet" class="btn btn-primary pull-right">
									</form>
								</div>
							</div><!-- end card-->
						</div>


					</div>


				</div>


			</div>
			<?php include "footer.html";?>


		</div>
		<?php include "script.html";?>

		<!-- END Java Script for this page -->

	</body>
	</html>
