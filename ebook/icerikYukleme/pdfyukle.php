<?php
include "../database/baglan.php";
session_start(); 

$ISBN=$_REQUEST['ISBN'];
$tip="pdfs";

$sor=$db->prepare("SELECT * from ebook where ISBN=:ISBN and tip=:tip");
$sor->execute(array(
	'ISBN' => $_REQUEST['ISBN'],
	'tip' =>$tip
	
));
$cek=$sor->fetch(PDO::FETCH_ASSOC);

$id=$cek['id'];
				//$isim=$_FILES["file"]["tmp_name"];//rasgele isim
$yol = "dosyalar/".$ISBN."/pdfs/";
$yol = $yol.basename($_FILES['file']['name']);
$ok=1;
$file_type=$_FILES['file']['type'];



				if ($file_type=="application/pdf") {

					if(move_uploaded_file($_FILES["file"]["tmp_name"],$yol)){

						$query=$db->query("UPDATE ebook SET yol='$yol' WHERE id='$id'", PDO::FETCH_ASSOC); ?>
						<script> alert("Yükleme Başarılı");</script>
						<meta http-equiv="refresh" content="0.2;url=../kitapyukleme.php?ISBN=<?php echo $ISBN ?>"> 
						<?php
					}
				}
				else { ?>
					<script> alert("Yalnızca PDF uzantılı dosya yükleyebilirsiniz");</script>
					<meta http-equiv="refresh" content="0.2;url=../kitapyukleme.php?ISBN=<?php echo $ISBN ?>"> 

				<?php	}
			 ?>
		
