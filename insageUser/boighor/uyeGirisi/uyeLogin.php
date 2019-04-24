<?php 
ob_start();
session_start();
include "../database/baglan.php";

if(isset($_POST["giris"])){
	$email=htmlspecialchars($_POST['email']);
	$parola=md5($_POST['parola']); //girilen parolayı md5 ile şifreledim (veritabanında doğru arama yapabilmek için)
	
	$kullaniciSor=$db->prepare("SELECT * from kullanici where email=:email and parola=:parola");
	$kullaniciSor->execute(array(
		'email' => $email,
		'parola' => $parola
	)); // email, parola, onay bilgileri doğruysa sisteme giriş yapılabilsin

	$kullaniciCek=$kullaniciSor->fetch(PDO::FETCH_ASSOC); 
	$onay=$kullaniciCek['onay'];
    $rol=$kullaniciCek['rol'];
    
	if ($onay==1 && $rol==0) {

	$_SESSION['email']=$email; //giriş yapıldıysa girilen maili session atıp sakladım
	$_SESSION['ad']=$kullaniciCek['ad'];
	$_SESSION['soyad']=$soyad;
	$_SESSION['yol']=$yol;
	$_SESSION['rol']=$rol;
	
	header("Location:../index.php");
	exit;

}

else{
	?>
	<script> alert("Giriş başarısız");</script> 
	<meta http-equiv="refresh" content="0.0;url=../index.php?durum=no&userID=$userID"><?php
			exit; //her header'dan sonra sonlandırma için exit kullanmak yararlıdır.
		}
	}

	?>