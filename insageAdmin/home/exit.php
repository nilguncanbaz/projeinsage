		<?php
            session_start();

			session_destroy(); //session bitirme
			header("location:../index.html?durum=exit");
		?>