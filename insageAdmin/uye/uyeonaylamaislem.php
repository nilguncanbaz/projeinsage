<?php
include '../database/baglan.php'; 

//uye onaylama işlemleri
$onay=$db->prepare("UPDATE kullanici set onay='1' where userID=:id");
$kontrol=$onay->execute(array(
	'id' => $_GET['userID']
));

	if ($kontrol) { ?>

		<script> alert("Onaylama başarılı");</script> 
		<meta http-equiv="refresh" content="0.0;url=uyeonaylama.php?durum=ok&userID=$userID"><?php
		exit;
	}
	else{ ?>
		<script> alert("Onaylama başarılı");</script> 
		<meta http-equiv="refresh" content="0.0;url=uyeonaylama.php?durum=no&userID=$userID"><?php
		exit;

	}

?>
