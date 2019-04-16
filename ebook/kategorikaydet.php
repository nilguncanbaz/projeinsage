<?php 

		include "../database/baglan.php";
	  	if(isset($_POST["kaydet"])){
			
			$kategoriad =$_POST["ad"];
			$kategoriaciklama =$_POST["aciklama"];
			$query=$db->query("INSERT INTO kategori VALUES (null,'$kategoriad','$kategoriaciklama')", PDO::FETCH_ASSOC);
			if($query->rowCount()){?>
				<script> alert("KAYIT BAŞARILI !");</script>
				<meta http-equiv="refresh" content="0.2;url=kategorikayit.php">  
<?php      
			}
							
							
		}		
?>