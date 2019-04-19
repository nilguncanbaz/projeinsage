<?php
	  
		$server="localhost";
		$kullaniciAdi="root";
		$sifre = "";


			try{
				$db=new PDO("mysql:host=localhost;dbname=insage;charset=utf8",'root','');
			}catch(PDOException $e){

				echo $e->getMessage();
			}
	
?>