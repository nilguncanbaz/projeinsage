
<?php 
include "../database/baglan.php";
session_start(); 

$sayfaNo=$_REQUEST['sayfaNo'];
$ISBN=$_REQUEST['ISBN'];






	$boyut=1000000;//max dosya boyutu

	$tipler=array("image/png","image/jpeg","image/gif","image/pjpeg");//desteklenen dosya türleri

	$ds=@count($_FILES["resim"]["name"]);//gönderilen dosya sayısı
	
	if($ds!=1){//Sayfa Sayısı kadar dosya seçme
		

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



	//hiçbir sorun yoksa for ile tek tek resimleri alıyoruz.





			if(!empty($_FILES["resim"]["name"])){//boş kontrolü

			if(in_array($_FILES["resim"]["type"],$tipler)){//tip kontrolü

				$isim=$_FILES["resim"]["name"];//rasgele isim
				$uzanti=substr($_FILES["resim"]["name"],-4,4);//uzantıyı alma

				if($uzanti==".gif" or $uzanti==".jpg" or $uzanti==".png" or $uzanti==".jpeg"){//uzantı kontrolü

					if($_FILES["resim"]["size"]>$boyut){//dosya boyutu kontrolü

						echo '<div class="i_ana" style="border:1px solid red;">  Boyutu 1 mb tan çok. </div>';
						

					}else{

						
						$dizin="dosyalar/".$ISBN."/pages/".$isim;//hiç bir sorun yoksa dosyayı upload et
						$yol="icerikYukleme/dosyalar/".$ISBN."/pages/".$isim; 

						if(move_uploaded_file($_FILES["resim"]["tmp_name"],$dizin)){
							include "load.php";
							$query=$db->query("UPDATE ebook_sayfa_resim SET yol='$yol' WHERE sayfaNo='$sayfaNo'", PDO::FETCH_ASSOC);
							?>
							<script> alert(" Sayfa başarıyla güncellendi");</script>


							<meta http-equiv="refresh" content="0.2;url=../kitapyukleme.php?durum=ok&ISBN=<?php echo $ISBN ?>">
							<?php	
							
						}
					}

				}else{

					?>
					<script> alert(" SADECE .gif - .png - .jpg UZANTILI DOSYA YÜKLEYEBİLİRSİNİZ !");</script>
					<meta http-equiv="refresh" content="0.2;url=../kitapicerigiekle.php?durum=no&ISBN=<?php echo $ISBN ?>">  
					<?php 
					

				}

			}else{
				?>
				<script> alert("SADECE .gif - .png - .jpg UZANTILI DOSYA YÜKLEYEBİLİRSİNİZ.");</script>
				<meta http-equiv="refresh" content="0.2;url=../kitapicerigiekle.php?durum=no&ISBN=<?php echo $ISBN ?>">  
				<?php 
				
			}

		}else{

			?>
			<script> alert("LÜTFEN DOSYA SEÇİNİZ !");</script>
			<meta http-equiv="refresh" content="0.2;url=../kitapicerigiekle.php?durum=no&ISBN=<?php echo $ISBN ?>">  
			<?php 

			

		}
	}







	?>