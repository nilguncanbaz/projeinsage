<?php 
ob_start();
session_start();
include "../database/baglan.php";

if(isset($_POST["giris"])){
	$email=htmlspecialchars($_POST['email']);
	$parola=md5($_POST['parola']); //girilen parolayı md5 ile şifreledim (veritabanında doğru arama yapabilmek için)
	$onay=1; 
	$rol=1;// sadece onaylı kullanıcıların sisteme giriş yapabilmesi için
	$kullaniciSor=$db->prepare("SELECT * from kullanici where email=:email and parola=:parola and onay=:onay and rol=:rol");
	$kullaniciSor->execute(array(
		'email' => $email,
		'parola' => $parola,
		'onay' => $onay,
		'rol' =>$rol
	)); // email, parola, onay bilgileri doğruysa sisteme giriş yapılabilsin

$say=$kullaniciSor->rowCount(); //sorgudan dönen satır sayısı


if ($say==1) {
	$_SESSION['email']=$email; //giriş yapıldıysa girilen maili session atıp sakladım
	$_SESSION['ad']=$ad;
	$_SESSION['soyad']=$soyad;
	$_SESSION['yol']=$yol;
	$_SESSION['rol']=$rol;
	

	header("Location:home.php");
	exit;

}
else{
	?>
	<script> alert("Giriş başarısız");</script> 
	<meta http-equiv="refresh" content="0.0;url=../index.html?durum=no&userID=$userID"><?php
			exit; //her header'dan sonra sonlandırma için exit kullanmak yararlıdır.
		}
	}

	?>