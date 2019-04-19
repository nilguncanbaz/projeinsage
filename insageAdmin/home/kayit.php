<?php

include "../database/baglan.php";

if(isset($_POST["kayit"])){

	  	 	$ad=htmlspecialchars($_POST['ad']); //htmlspecialchars ile yetkisiz sql'leri veya yazılımlarının girilmesini engeller
	  	 	$soyad=htmlspecialchars($_POST['soyad']);
	  	 	$email=htmlspecialchars($_POST['email']);
	  	 	$parola=htmlspecialchars($_POST['parola']);
	  	 	$bakiye=$_POST['bakiye'];
	  	 	$onay=$_POST['onay'];
	  	 	$rol=$_POST['rol'];

	  	 	$kullaniciSor=$db->prepare("SELECT * from kullanici where email=:email");
	  	 	$kullaniciSor->execute(array(
	  	 		'email' => $email));

$say=$kullaniciSor->rowCount(); //dönen satır sayısını belirtir

if ($say==0) {
	
	$parola=md5($parola); //parolayı md5 fonksiyonu ile şifreledik

   //kullanıcı kaydını oluşturdum
	$kullaniciKaydet=$db->prepare("INSERT INTO kullanici SET
		ad=:ad,
		soyad=:soyad,
		email=:email,
		parola=:parola,
		bakiye=:bakiye,
		onay=:onay,
		rol=:rol
		");
	$insert=$kullaniciKaydet->execute(array(
		'ad' => $ad,
		'soyad' => $soyad,
		'email' => $email,
		'parola' => $parola,
		'bakiye' => $bakiye,
		'onay' => $onay,
		'rol' =>$rol
	));
	if ($insert) {
		?> 
		<script> alert("Kayıt başarılı");</script> 
		<meta http-equiv="refresh" content="0.2;url=../index.html">
		<?php
	}
	else{
		?> 
		<script> alert("Kayıt başarısız");</script> 
		<meta http-equiv="refresh" content="0.2;url=register.html">
		<?php

	}


}
else{
	?> 
	<script> alert("Kullanıcı kayıtlarda var.");</script> 
	<meta http-equiv="refresh" content="0.2;url=register.html">
	<?php
}


}

?>