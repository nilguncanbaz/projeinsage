<?php
include '../database/baglan.php'; 

//kullanıcı onay bilgisini "engellendi" olarak güncelleme işlemleri 
$engel=$db->prepare("UPDATE kullanici set onay='engellendi' where userID=:id");
$kontrol=$engel->execute(array(
	'id' => $_GET['userID']
));

if ($kontrol) { ?>

	<script> alert("Engelleme başarılı");</script> 
	<meta http-equiv="refresh" content="0.0;url=uyeengelleme.php?durum=ok&userID=$userID"><?php
	exit;
}
else{ ?>
	<script> alert("Engelleme başarısız");</script> 
	<meta http-equiv="refresh" content="0.0;url=uyeengelleme.php?durum=no&userID=$userID"><?php
	exit;

}

                     
	

?>
