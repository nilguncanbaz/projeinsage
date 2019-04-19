<?php
include '../database/baglan.php'; 


//listelenen üyelerde silme işlemi istenenler için yapılan işlemler
$sil=$db->prepare("DELETE from kullanici where userID=:id");
$kontrol=$sil->execute(array(
	'id' => $_GET['userID']
));

if ($kontrol) {
		 ?>
		
		<meta http-equiv="refresh" content="0.0;url=uyelisteleme.php?durum=ok&userID=$userID"><?php
			exit; //her header'dan sonra sonlandırma için exit kullanmak yararlıdır.
		}
		else{
			 ?>
		<script> alert("Silme başarısız");</script> 
		<meta http-equiv="refresh" content="0.0;url=uyelisteleme.php?durum=no&userID=$userID"><?php
			exit;
		}
	


?>