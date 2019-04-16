<?php


		$gelenbilgi=$_GET['bilgi']; //mesaj gönderme formuna girilen içerik 

		$yazilcakdosya = "metin.txt";

		$dosya = fopen ($yazilcakdosya, 'w') or die ("Dosya açılamıyor");


		$yazdirilcakbilgi = "$gelenbilgi";   

		fwrite ($dosya, $yazdirilcakbilgi) ;

		fclose ($dosya);

		?>

