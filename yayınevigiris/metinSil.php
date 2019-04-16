<?php
include "../database/baglan.php";
$ISBN=$_REQUEST['ISBN'];
$sayfaNo=$_REQUEST['sayfaNo'];
$pk=$_REQUEST['pk'];
$klasorYol=$_REQUEST['yol'];

$yol="../ebook/icerikYukleme/dosyalar/".$ISBN."/pagesText/".$sayfaNo.".txt";
unlink($yol);
$yazilcakdosya = $sayfaNo.".txt";
$dosya = fopen("../ebook/icerikYukleme/dosyalar/".$ISBN."/pagesText/".$yazilcakdosya, 'w') or die("Dosya açılamıyor");
fclose($dosya);

?>
<script> alert("İÇERİK SİLİNDİ !");</script>
<meta http-equiv="refresh" content="0.2;url=kitapyukleme.php?ISBN=<?php echo $ISBN ?>"> 



