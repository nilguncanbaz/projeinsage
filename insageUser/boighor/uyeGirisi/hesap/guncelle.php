<?php

//uye guncelleme işlemlerini yaptım
include '../../database/baglan.php'; 
if (isset($_POST['guncelle'])) {

	
	$kaydet=$db->prepare("UPDATE kullanici set 
		ad=:ad,
		soyad=:soyad,
		email=:email,
        parola=:parola,
        telefon=:telefon
		
		where email={$_POST['email']}
		");
	$insert=$kaydet->execute(array(
		'ad'=> $_POST['ad'],
		'soyad' => $_POST['soyad'],
        'email' => $_POST['email'],
        'parola'=> $_POST['parola'],
        'telefon'=>$_POST['telefon']
		
	));
	if ($insert) { ?>
		<script> alert("Güncelleme başarılı");</script> 
		<meta http-equiv="refresh" content="0.0;url=bilgiler.php?durum=ok&userID=$userID"><?php
			exit; //her header'dan sonra sonlandırma için exit kullanmak yararlıdır.
		}
		else{
			 ?>
		<script> alert("Güncelleme başarısız");</script> 
		<meta http-equiv="refresh" content="0.0;url=bilgiler.php?durum=no&userID=$userID"><?php
			exit;
		}
	}
