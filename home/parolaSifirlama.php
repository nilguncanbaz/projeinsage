<?php
ob_start();
session_start();

include '../database/baglan.php';

if(isset($_POST["sifirla"] )){
	
//girilen mail adresini varsa veritabanından cektim
	$kullaniciSor=$db->prepare("SELECT * from kullanici where email=:email");
	$kullaniciSor->execute(array(
		'email' => $_POST['email']
	));
	$say=$kullaniciSor->rowCount();

	$kullaniciMail=$_POST['email']; //parola sıfırlama maili gönderilecek maili formdan aldım
//veritabanından kayıt sayısı 0 dönerse o email kayıtlı değildir
	if($say==0){
		?>
		<script> alert("Kayıtlı böyle bir kullanıcı yok.");</script> 
		<meta http-equiv="refresh" content="0.0;url=../index.html?durum=ok&userID=$userID"><?php
		exit;
	}
	//mail adresi kayıtlıysa
	else{

		$kullaniciCek=$kullaniciSor->fetch(PDO::FETCH_ASSOC);
		$uretilensifre=uniqid(); //kullanıcıya yeni şifre ürettim
		$sifreKaydet=md5($uretilensifre); //veritabanına yeni şifreyi güncellemek için md5 ile şifreledim

		$sifreGuncelle=$db->prepare("UPDATE kullanici SET 
			parola=:parola
			where email='$kullaniciMail'"); 

		$update=$sifreGuncelle->execute(array(
			'parola'=> $sifreKaydet
		)); //veritabanında yeni şifreyi güncelledim




		$konu="Sifre Yenileme Talebi"; //konu
		$yenisifre="Yeni şifreniz : ".$uretilensifre; //içerik 

		require("class.phpmailer.php"); //mailer sınıfı
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

		$mail->AddBCC($kullaniciMail);	//girilen mail adresine şifreyi gönderdim
		$mail->Charset="UTF-8";

		$mail->Subject=$konu;
		$mail->Body=$yenisifre;
		if($mail->Send()){ //mail gönderme başarılıysa
			?>

			<script> alert("Şifreniz mailinize gönderilmiştir.");</script> 
			<meta http-equiv="refresh" content="0.0;url=../index.html?durum=ok&userID=$userID"><?php
			exit;			
		}
		else{ //mail gönderme başarısızsa
			echo "Hata";
			echo "hata: ".$mail->ErrorInfo;
		}

	}




}
?>





