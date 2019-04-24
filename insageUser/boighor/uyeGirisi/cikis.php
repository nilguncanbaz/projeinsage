        <?php
            session_start();
            session_destroy(); //session bitirme
            
			header("location:../index.php?durum=exit");
		?>