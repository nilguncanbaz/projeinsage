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
													<h1 class="main-title float-left">Yayınevi Kayıt</h1>
													<ol class="breadcrumb float-right">
														<li class="breadcrumb-item">Kitap</li>
														<li class="breadcrumb-item active">Yayınevi Kayıt</li>
													</ol>
													<div class="clearfix"></div>
											</div>
									</div>
						</div>
				<div class="row">
					<div class="col-xs-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">						
						<div class="card mb-2">
							<div class="card-header">
								<h3><i class="fa fa-hand-pointer-o"></i> YAYINEVİ KAYIT</h3>
							</div>
							<div class="card-body">
								<form method="post" class="demo-form" action="yayinevikaydet.php">
									 <div class="form-section">
										<label for="text">Yayınevi Kısa Adı:</label>
										<input type="text" class="form-control" name="kisaad" required="">	
										
										<label for="text">Yayınevi Adı: </label>
										<input type="text" class="form-control" name="ad" required="">
										
										
										<label for="text">Yetkili Adı: </label>
										<input type="text" class="form-control" name="yetkiliad" required="">
										
										<label for="text">Adres:</label>
										<input type="text" class="form-control" name="adres" required="">
										
										<label for="text">Web Adresi:</label>
										<input type="text" class="form-control" name="webadres" required="">
									 </div> <br/>
									 <input type="submit" name="kaydet" class="btn btn-primary pull-right">
								</form>						
							</div>														
						</div><!-- end card-->					
                    </div>
						<div class="col-xs-16 col-sm-16 col-md-16 col-lg-8 col-xl-8">						
							<div class="card mb-5">
								<div class="card-header">
									<h3><i class="fa fa-table"></i> KAYITLI YAYINEVLERİ</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
									<table id="example1" class="table table-bordered table-hover display">
										<thead>
											<tr>
												<th>ID</th>
												<th>KISA AD<y/th>
												<th>YAYINEVİ ADI</th>
												<th>YETKİLİ ADI</th>
												<th>ADRES</th>
												<th>WEB ADRESİ</th>
												<th>İŞLEM</th>
												
											</tr>
										</thead>										
										<tbody>
											<?php 
												$query= $db->query("SELECT * FROM yayinevleri", PDO::FETCH_ASSOC);
													if($query->rowCount()){
														foreach ($query as $row) {
													
																														
																echo "<tr>" ;
																echo"<td>".$row['id']."</td>";
																echo"<td>".$row['kisaAd']."</td>";
																echo"<td>".$row['ad']."</td>";
																echo"<td>".$row['yetkili']."</td>";
																echo"<td>".$row['adres']."</td>";
																echo"<td>".$row['web']."</td>";
																echo"<td align='center'>"?>
																<a href="yayinevisil.php?id=<?php echo $row['id'] ?>" onClick="return confirm('Bu kayıdı silmek istediğinize emin misiniz?')"><button class="btn btn-danger" type="submit" name="sil"><i class="fa fa-times"></i></button></a>
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
