<?php
session_start();
ob_start();

		include '../database/baglan.php';//baglan.php dosyasını dahil ettik
//üye kayıt ekleme işlemleri 
		if (isset($_POST['kayit'])) {

			$parola=md5($_POST['parola']); //parolayı md5 ile şifreledik
			$kaydet=$db->prepare("INSERT into kullanici set 
				ad=:ad,
				soyad=:soyad,
				email=:email,
				parola=:parola,
				bakiye=:bakiye,
				onay=:onay,
				yol=:yol,
				rol=:rol
				");
			$insert=$kaydet->execute(array(
				'ad'=> $_POST['ad'],
				'soyad' => $_POST['soyad'],
				'email' => $_POST['email'],
				'parola' => $parola,
				'bakiye' => $_POST['bakiye'],
				'onay' => $_POST['onay'],
				'yol' => $_POST['yol'],
				'rol' => $_POST['rol']
			));
			if ($insert) {
				?> 
				<script> alert("Kayıt başarılı");</script> 
				<meta http-equiv="refresh" content="0.2;url=uyekayit.php">

				<?php

		 //her header'dan sonra sonlandırma için exit kullanmak yararlıdır.
			}
			else{
				?>
				<script> alert("Kayıt başarısız");</script> 
				<meta http-equiv="refresh" content="0.2;url=uyekayit.php">
				<?php
			}
		}

		?>