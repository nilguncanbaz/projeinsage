<?php 

		include "database/baglan.php";
	  	if(isset($_POST["kaydet"])){
			$kisaAd =$_POST["kisaad"];
			$ad =$_POST["ad"];
			$yetkili =$_POST["yetkiliad"];
			$adres =$_POST["adres"];
			$web =$_POST["webadres"];
			

			
				$query=$db->query("INSERT INTO yayinevleri VALUES (NULL,'$kisaAd','$ad','$yetkili','$adres','$web')", PDO::FETCH_ASSOC);
				if($query->rowCount()){?>
				
								<script> alert("KAYIT BAŞARILI !");</script>
								<meta http-equiv="refresh" content="0.2;url=yayinevikayit.php">  
<?php   
		
					
				}
			
			
		
		}

	?>