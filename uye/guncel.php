<?php

//uye guncelleme işlemlerini yaptım
include '../database/baglan.php'; 
if (isset($_POST['updateislemi'])) {

	$userID=$_POST['userID'];
	$kaydet=$db->prepare("UPDATE kullanici set 
		ad=:ad,
		soyad=:soyad,
		email=:email,
		bakiye=:bakiye
		where userID={$_POST['userID']}
		");
	$insert=$kaydet->execute(array(
		'ad'=> $_POST['ad'],
		'soyad' => $_POST['soyad'],
		'email' => $_POST['email'],
		'bakiye' => $_POST['bakiye']
	));
	if ($insert) { ?>
		<script> alert("Güncelleme başarılı");</script> 
		<meta http-equiv="refresh" content="0.0;url=uyeguncelleme.php?durum=ok&userID=$userID"><?php
			exit; //her header'dan sonra sonlandırma için exit kullanmak yararlıdır.
		}
		else{
			 ?>
		<script> alert("Güncelleme başarısız");</script> 
		<meta http-equiv="refresh" content="0.0;url=uyeguncelleme.php?durum=no&userID=$userID"><?php
			exit;
		}
	}
