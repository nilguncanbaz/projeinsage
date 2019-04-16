<?php 
include '../database/baglan.php'; 



$kaldir=$db->prepare("UPDATE kullanici set onay='0' where userID=:id");
	$deneme=$kaldir->execute(array(
		'id' => $_GET['userID']
	));
if ($deneme) { ?>

	<script> alert("Engellemeyi kaldırma başarılı");</script> 
	<meta http-equiv="refresh" content="0.0;url=uyeengelleme.php?durum=ok&userID=$userID"><?php
	exit;
}
else{ ?>
	<script> alert("Engellemeyi kaldırma başarısız");</script> 
	<meta http-equiv="refresh" content="0.0;url=uyeengelleme.php?durum=no&userID=$userID"><?php
	exit;

}

