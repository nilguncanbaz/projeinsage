<?php
include "../database/baglan.php";
$id=$_GET['yorumID'];

$query= $db->query("DELETE FROM yorumlar where id='$id' ", PDO::FETCH_ASSOC);

?>
<script> alert("KAYIT SİLİNDİ !");</script>
<meta http-equiv="refresh" content="0.2;url=kitapOzetKaydi.php">  
