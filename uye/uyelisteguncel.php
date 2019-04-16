<?php
include '../database/baglan.php'; 

//listelemede güncelleme işlemlerini yapar
if (isset($_POST['updateislemi'])) {

	$userID=$_POST['userID'];
	$kaydet=$db->prepare("UPDATE kullanici set 
		ad=:ad,
		soyad=:soyad,
		email=:email,
		bakiye=:bakiye,
		onay=:onay
		where userID={$_POST['userID']}
		");
	$insert=$kaydet->execute(array(
		'ad'=> $_POST['ad'],
		'soyad' => $_POST['soyad'],
		'email' => $_POST['email'],
		'bakiye' => $_POST['bakiye'],
		'onay' => $_POST['onay']
	));
	if ($insert) { ?>
		<script> alert("Güncelleme başarılı");</script> 
		<meta http-equiv="refresh" content="0.0;url=uyelisteleme.php?durum=ok&userID=$userID"><?php
			exit; //her header'dan sonra sonlandırma için exit kullanmak yararlıdır.
		}
		else{
			 ?>
		<script> alert("Güncelleme başarısız");</script> 
		<meta http-equiv="refresh" content="0.0;url=uyelisteleme.php?durum=no&userID=$userID"><?php
			exit;
		}
	}
