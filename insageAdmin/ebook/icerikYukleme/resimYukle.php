
<?php 
include "../database/baglan.php";
session_start(); 

	$boyut=1000000;//max dosya boyutu

	$tipler=array("image/png","image/jpeg","image/gif","image/pjpeg");//desteklenen dosya türleri

	$ds=@count($_FILES["resim"]["name"]);//gönderilen dosya sayısı
	if(($ds>5) and ($ds<1)){//eğer en az 1 veya en çok 5 değilse işlem yapma

		die('<div class="i_ana" style="border:1px solid red;">  Yükleme miktarını aşıyorsunuz. </div>');

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

			if(!empty($_FILES["resim"]["name"][$i])){//boş kontrolü

			if(in_array($_FILES["resim"]["type"][$i],$tipler)){//tip kontrolü

				$isim=substr(md5(rand(0,999999999999)),0,10);//rasgele isim
				$uzanti=substr($_FILES["resim"]["name"][$i],-4,4);//uzantıyı alma

				if($uzanti==".gif" or $uzanti==".jpg" or $uzanti==".png"){//uzantı kontrolü

					if($_FILES["resim"]["size"][$i]>$boyut){//dosya boyutu kontrolü

						echo '<div class="i_ana" style="border:1px solid red;">  Boyutu 1 mb tan çok. </div>';
						continue;

					}else{
						
						$ID=$_POST['ID'];
						$dizin="dosyalar/".$ID."/".$isim.$uzanti;//hiç bir sorun yoksa dosyayı upload et
						echo $dizin;

						if(move_uploaded_file($_FILES["resim"]["tmp_name"][$i],$dizin)){

							
							$query= $db->query("UPDATE ebook SET path='$dizin' WHERE ID='$ID' ", PDO::FETCH_ASSOC);
							?>
							<script> alert("YÜKLEME BAŞARILI !");</script>
							<meta http-equiv="refresh" content="0.2;url=../kitapicerigiekle.php">  
							<?php   
						}

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

		}

	}

?>