<?php

//profil sayfasındaki bilgilerin ve fotoğrafın güncelleme işlemlerini yaptım.
session_start();
ob_start();

		include '../database/baglan.php';//baglan.php dosyasını dahil ettik
		//kullanıcı bilgileri düzenleme işlemleri 
		if (isset($_POST['kaydet'])) {

			$parola=md5($_POST['parola']);
			$userID=$_POST['userID'];
			$kaydet=$db->prepare("UPDATE kullanici set 
				email=:email,
				parola=:parola
				where userID={$_POST['userID']}
				");
			$insert=$kaydet->execute(array(

				'email' => $_POST['email'],
				'parola' => $parola
			));
			if ($insert) { ?>
				<script> alert("Güncelleme başarılı");</script> 
				<meta http-equiv="refresh" content="0.0;url=profil.php?durum=ok&userID=$userID"><?php
			exit; //her header'dan sonra sonlandırma için exit kullanmak yararlıdır.
		}
		else{
			?>
			<script> alert("Güncelleme başarısız");</script> 
			<meta http-equiv="refresh" content="0.0;url=profil.php?durum=no&userID=$userID"><?php
			exit;
		}

	}
	
	//kullanıcı fotoğrafı güncelleme işlemleri
	if(isset($_POST["dosya"])) {
		
		$dizin = 'img/'; //güncellenen fotoğrafın kaydedileceği dizin
		$yuklenecek_dosya = $dizin . basename($_FILES['dosya']['name']); //fotoğrafın kaydedileceği dizin ve fotoğraf adı
		$userID=$_POST['userID']; // hangi id'den gelen fotoğrafın guncelleneceğini çektim

		echo '<pre>';
		//dosya yüklemesi başarılıysa güncelleme sağlansın
		if (move_uploaded_file($_FILES['dosya']['tmp_name'], $yuklenecek_dosya))
		{
			

			$kaydet=$db->prepare("UPDATE kullanici set 
				yol=:yol
				where userID={$_POST['userID']}
				");
			$insert=$kaydet->execute(array(

				'yol' => $yuklenecek_dosya)); ?>
				
			<meta http-equiv="refresh" content="0.0;url=profil.php?durum=ok&userID=$userID"><?php
			exit; 


		} else {
			echo "Olası dosya yükleme saldırısı!\n";

			?>

			<script> alert("Güncelleme başarısız");</script> 
			<meta http-equiv="refresh" content="0.0;url=profil.php?durum=no&userID=$userID"><?php
			exit; 


		}

		echo 'Diğer hata ayıklama bilgileri:';


		print_r($yuklenecek_dosya);

		print "</pre>";


	}

	//profil fotoğraf silme işlemleri
	if(isset($_POST["sil"])) {

		$dizin = 'img/'; //güncellenen fotoğrafın kaydedileceği dizin
		$yuklenecek_dosya = $dizin.'admin.png'; //fotoğraf silinince yerine yüklenecek admin fotoğrafı
		$userID=$_POST['userID']; // hangi id'den gelen fotoğrafın guncelleneceğini çektim

		echo '<pre>';
		
		
			//fotoğrafı veritabanında güncelledim
		$kaydet=$db->prepare("UPDATE kullanici set 
			yol=:yol
			where userID={$_POST['userID']}
			");
		$insert=$kaydet->execute(array(

			'yol' => $yuklenecek_dosya)); ?>

			<script> alert("Fotoğrafınız silindi");</script> 
			<meta http-equiv="refresh" content="0.0;url=profil.php?durum=ok&userID=$userID"><?php
			exit; 

			//yeni fotoğrafın ekranda görünmesini sağladım
			print_r($yuklenecek_dosya);

			print "</pre>";


		}

		
		?>


