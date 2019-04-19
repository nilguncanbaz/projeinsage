
<?php 
include "../database/baglan.php";
session_start(); 

$ISBN=$_REQUEST['ISBN'];
$sayfaSor=$db->prepare("SELECT * from ebook where ISBN=:ISBN");
$sayfaSor->execute(array(
	'ISBN' => $_REQUEST['ISBN'],
	
));
$sayfaCek=$sayfaSor->fetch(PDO::FETCH_ASSOC);

$sayfasayisi=$sayfaCek['pageSize'];




	$boyut=1000000;//max dosya boyutu

	$tipler=array("image/png","image/jpeg","image/gif","image/pjpeg");//desteklenen dosya türleri

	$ds=@count($_FILES["resim"]["name"])-1;//gönderilen dosya sayısı

	
	if(($ds!=$sayfasayisi)){//Sayfa Sayısı kadar dosya seçme
		

		?>
			<script> alert("Kitaptaki Sayfa Sayısı Kadar Dosya Seçiniz !");</script>
			<meta http-equiv="refresh" content="0.2;url=../kitapyukleme.php?ISBN=<?php echo $ISBN ?>">  
		<?php 

/*

		if(isset($_SESSION["sure"])){

			$sure=time()-60;

			if($_SESSION["sure"]>$sure){

				die('<div class="i_ana" style="border:1px solid red;">  1 Dakikada 1 yükleme yapabilirsiniz. </div>');

			}else{

				$_SESSION["sure"]=time();

			}

		}else{

			$_SESSION["sure"]=time();

		}

*/
//Yukarıdaki kısım yüklemeye süre koymak için. /* */ leri silip aktif edebilirsiniz.1 dakikada 1 kere resim yükletmek için.

	}else{



		for($i=0;$i<$ds;$i++){//hiçbir sorun yoksa for ile tek tek resimleri alıyoruz.

			$idSor=$db->query("SELECT * from ebook_sayfa_resim WHERE ISBN='$ISBN'", PDO::FETCH_ASSOC);
			$idSor->execute();



			while ($idCek=$idSor->fetch(PDO::FETCH_ASSOC)) { 



			if(!empty($_FILES["resim"]["name"][$i])){//boş kontrolü

			if(in_array($_FILES["resim"]["type"][$i],$tipler)){//tip kontrolü

				$isim=$_FILES["resim"]["name"][$i];//rasgele isim
				$uzanti=substr($_FILES["resim"]["name"][$i],-4,4);//uzantıyı alma

				if($uzanti==".gif" or $uzanti==".jpg" or $uzanti==".png" or $uzanti==".jpeg"){//uzantı kontrolü

					if($_FILES["resim"]["size"][$i]>$boyut){//dosya boyutu kontrolü

						echo '<div class="i_ana" style="border:1px solid red;">  Boyutu 1 mb tan çok. </div>';
						continue;

					}else{


						$pk=$idCek['pk'];
						
						$dizin="dosyalar/".$ISBN."/pages/".$isim;//hiç bir sorun yoksa dosyayı upload et
						$yol="../ebook/icerikYukleme/dosyalar/".$ISBN."/pages/".$isim; 

						if(move_uploaded_file($_FILES["resim"]["tmp_name"][$i],$dizin)){
							include "load.php";
							$query=$db->query("UPDATE ebook_sayfa_resim SET yol='$yol' WHERE pk='$pk'", PDO::FETCH_ASSOC);
							?>

							<meta http-equiv="refresh" content="0.2;url=../kitapyukleme.php?durum=ok&ISBN=<?php echo $ISBN ?>">
							<?php	
							
						}
						$i++;
					}

				}else{

					?>
					<script> alert(" SADECE .gif - .png - .jpg UZANTILI DOSYA YÜKLEYEBİLİRSİNİZ !");</script>
					<meta http-equiv="refresh" content="0.2;url=../kitapicerigiekle.php">  
					<?php 
					continue;

				}

			}else{
				?>
				<script> alert("SADECE .gif - .png - .jpg UZANTILI DOSYA YÜKLEYEBİLİRSİNİZ.");</script>
				<meta http-equiv="refresh" content="0.2;url=../kitapicerigiekle.php">  
				<?php 
				continue;

			}

		}else{

			?>
			<script> alert("LÜTFEN DOSYA SEÇİNİZ !");</script>
			<meta http-equiv="refresh" content="0.2;url=../kitapicerigiekle.php">  
			<?php 

			continue;

		}
	} break;



	}//for bitiş
}


?>