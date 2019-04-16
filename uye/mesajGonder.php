<?php

//üyeye mesaj gönderme işlemlerini gerçekleştirdim
ob_start();
session_start();

include '../database/baglan.php';

if(isset($_POST["mesaj"] )){
	


	$email=$_POST['email']; //mail gönderilecek mail adresi


		$konu=$_POST['konu']; //mesaj gönderme formuna girilen konu
		$icerik=$_POST['icerik']; //mesaj gönderme formuna girilen içerik 

		require("../home/class.phpmailer.php"); //mailer sınıfı
		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
		$mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
		$mail->SMTPSecure = 'tls'; // Normal bağlantı için boş bırakın veya tls yazın, güvenli bağlantı kullanmak için ssl yazın
		$mail->Host = "smtp.office365.com"; // Mail sunucusunun adresi (IP de olabilir)
		$mail->Port = 587; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
		$mail->IsHTML(true);
		$mail->SetLanguage("tr", "phpmailer/language");
		$mail->CharSet  ="utf-8";
		$mail->Username = "ayeumbilgi@cumhuriyet.edu.tr"; // Gönderici adresiniz (e-posta adresiniz)
		$mail->Password = "Selcuk.23"; // Mail adresimizin sifresi
		$mail->SetFrom("ayeumbilgi@cumhuriyet.edu.tr", "Hiras Yazılım InSAGE"); //mailde görünecek adres ad

		$mail->AddBCC($email);	//girilen mail adresine şifreyi gönderdim
		$mail->Charset="UTF-8";

		$mail->Subject=$konu;
		$mail->Body=$icerik;
		if($mail->Send()){ //mail gönderme başarılıysa
			?>

			<script> alert("Mesajınız üyeye gönderilmiştir.");</script> 
			<meta http-equiv="refresh" content="0.0;url=uyeDetay.php?durum=ok&userID=$userID"><?php
			exit;			
		}
		else{ //mail gönderme başarısızsa
			echo "Hata";
			echo "hata: ".$mail->ErrorInfo;
		}






	}
	?>





