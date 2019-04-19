<?php

if (isset($_POST['bilgi']) & isset($_REQUEST['ISBN'])) {
    $content = $_POST['content']; //mesaj gönderme formuna girilen içerik7
    $ISBN=$_REQUEST['ISBN'];
    $sayfaNo=$_POST['sayfaNo'];


    $yazilcakdosya = $sayfaNo.".txt";

    $dosya = fopen("../../ebook/icerikYukleme/dosyalar/".$ISBN."/pagesText/".$yazilcakdosya, 'w') or die("Dosya açılamıyor");

    fwrite($dosya, $content);

    fclose($dosya);
?>
	<script> alert("KAYIT BAŞARILI !");</script>
	<meta http-equiv="refresh" content="0.2;url=../kitapyukleme.php?ISBN=<?php echo $ISBN ?>">

<?php 
}
?>