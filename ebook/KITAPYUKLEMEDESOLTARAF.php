	<div class="col-lg-2 col-xl-2 border-left">

									<?php
									$kullaniciSor=$db->prepare("SELECT * from ebook where ISBN=:ISBN");
									$kullaniciSor->execute(array(
										'ISBN' => $_GET['ISBN']
									));
									$kullaniciCek=$kullaniciSor->fetch(PDO::FETCH_ASSOC);


									?>

									<h6>ISBN: <?php echo $kullaniciCek['ISBN']; ?></h6>
									<h6>Kitap Adı: <?php echo $kullaniciCek['bookName']; ?></h6>
									<h6>Sayfa Sayısı: <?php echo $kullaniciCek['pageSize']; ?></h6>


								</div>