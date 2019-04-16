<?php
include "../database/baglan.php";
$ISBN=$_GET['ISBN'];


$query= $db->query("DELETE FROM ebook where ISBN='$ISBN' ", PDO::FETCH_ASSOC);


$query =$db->query("DELETE FROM ebook_sayfa_resim where ISBN='$ISBN' ", PDO::FETCH_ASSOC);
$query =$db->query("DELETE FROM ebook_sayfa_metin where ISBN='$ISBN' ", PDO::FETCH_ASSOC);

$pages="icerikYukleme/dosyalar/".$ISBN."/pages";
$pagesText="icerikYukleme/dosyalar/".$ISBN."/pagesText";
$pdfs="icerikYukleme/dosyalar/".$ISBN."/pdfs";
$ISBNk="icerikYukleme/dosyalar/".$ISBN;

$klasor=array($pages,$pdfs,$pagesText,$ISBNk);

for($i=0; $i<4; $i++)
{
	
	if (substr($klasor[$i], strlen($klasor[$i])-1, 1)!= '/')
		$klasor[$i] .= '/';
//echo $dir; //silinen klasörün adı
	if ($handle = opendir($klasor[$i])) {
		while ($obj = readdir($handle)) {
			if ($obj!= '.' && $obj!= '..') {
				if (is_dir($klasor[$i].$obj)) {
					if (!($klasor[$i].$obj))
						return false;
				} elseif (is_file($klasor[$i].$obj)) {
					if (!unlink($klasor[$i].$obj))
						return false;
				}
			}
		}
		closedir($handle);
		if (!@rmdir($klasor[$i]))

			$i++;
	}
	


}?>
<script> alert("SİLME BAŞARILI !");</script>
<meta http-equiv="refresh" content="0.2;url=kitaplistele.php?durum=ok&ISBN=<?php echo $ISBN ?>"> 









