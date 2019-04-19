<?php 
include "icerikYukleme/dosyaSay.php";

include "../database/baglan.php";
if(isset($_POST["kaydet"])){
	$isbn=$_POST['isbn'];
	$kategori=$_POST['kategori'];
	$kitapad=$_POST['kitapad'];
	$yayinevi=$_POST['yayinevi'];
	$yayintarihi=$_POST['yayintarihi'];
	$sayfasayisi =$_POST['sayfasayisi'];
	$dil =$_POST['dil'];	
	$dosyayolu ="dosyalar/".$isbn;
	$hariciadres =$_POST['hariciadres'];



	$query=$db->query("INSERT INTO ebook VALUES (null,'$isbn','$kitapad','$yayinevi','$yayintarihi','$kategori','$sayfasayisi','$dil','$dosyayolu/pages','$hariciadres','pages')", PDO::FETCH_ASSOC);

	mkdir("icerikYukleme/dosyalar/".$isbn); 

	if($query->rowCount()){


		mkdir("icerikYukleme/dosyalar/".$isbn."/pages"); 
	}



	$query1=$db->query("INSERT INTO ebook VALUES (null,'$isbn','$kitapad','$yayinevi','$yayintarihi','$kategori','$sayfasayisi','$dil','$dosyayolu/pdfs/','$hariciadres','pdfs')", PDO::FETCH_ASSOC);

	if($query1->rowCount()){
		mkdir("icerikYukleme/dosyalar/".$isbn."/pdfs");

	}

	$query2=$db->query("INSERT INTO ebook VALUES (null,'$isbn','$kitapad','$yayinevi','$yayintarihi','$kategori','$sayfasayisi','$dil','$dosyayolu/pagesText','$hariciadres','pagesText')", PDO::FETCH_ASSOC);

	
	if($query2->rowCount()){
		
		mkdir("icerikYukleme/dosyalar/".$isbn."/pagesText");
		
	}


	for($var=0; $var<=$sayfasayisi+1; $var++){
		if($var==0){
			$ekle=$db->query("INSERT INTO ebook_sayfa_resim VALUES (null,'$isbn','onKapak','icerikYukleme/dosyalar/onKapak.jpg')", PDO::FETCH_ASSOC);
		}else if($var==($sayfasayisi+1)){

			$ekle=$db->query("INSERT INTO ebook_sayfa_resim VALUES (null,'$isbn','arkaKapak','icerikYukleme/dosyalar/arkaKapak.jpg')", PDO::FETCH_ASSOC);

		}
		else $ekle=$db->query("INSERT INTO ebook_sayfa_resim VALUES (null,'$isbn',$var,'icerikYukleme/dosyalar/bosSayfa.jpg')", PDO::FETCH_ASSOC);


		
	}
	for($var2=1; $var2 <=$sayfasayisi ; $var2++) { 
		$ekle1 = $db->query("INSERT INTO ebook_sayfa_metin VALUES (null,'$isbn',$var2,'icerikYukleme/dosyalar/".$isbn."/pagesText/".$var2.".txt')", PDO::FETCH_ASSOC);
		$dosya = fopen("icerikYukleme/dosyalar/".$isbn."/pagesText/".$var2.".txt", 'w') or die("Dosya açılamıyor");
		

	}fclose($dosya);
	?>
	<script> alert("KAYIT BAŞARILI !");</script>
	<meta http-equiv="refresh" content="0.2;url=kitapkayit.php">  



	<?php
}


?>