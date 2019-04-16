<?php
include "../database/baglan.php";
$ISBN=$_REQUEST['ISBN'];
$sayfaNo=$_REQUEST['sayfaNo'];
$pk=$_REQUEST['pk'];
$klasorYol=$_REQUEST['yol'];

$yol="icerikYukleme/dosyalar/$ISBN/bosSayfa.jpg";
$query=$db->query("UPDATE ebook_sayfa_resim SET yol='$yol' WHERE pk='$pk'", PDO::FETCH_ASSOC);
unlink($klasorYol);
?>
<script> alert("İÇERİK SİLİNDİ !");</script>
<meta http-equiv="refresh" content="0.2;url=kitapyukleme.php?ISBN=<?php echo $ISBN ?>">  



