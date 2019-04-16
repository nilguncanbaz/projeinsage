<?php
include "database/baglan.php";
$id=$_GET['id'];

$query= $db->query("DELETE FROM yayinevleri where id='$id' ", PDO::FETCH_ASSOC);
?>
<script> alert("KAYIT SİLİNDİ !");</script>
<meta http-equiv="refresh" content="0.2;url=yayinevikayit.php">  
