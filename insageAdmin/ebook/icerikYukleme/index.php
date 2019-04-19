<!DOCTYPE HTML>

<html lang="en-US">

<head>

	<meta charset="UTF-8">

	<title>Çoklu Resim Yükleme</title>

	<link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace&subset=latin,latin-ext' rel='stylesheet' type='text/css'> 

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

	<script type="text/javascript" src="yukle.js"></script>

	<link rel="stylesheet" href="yukle.css"/>

</head>

<body>
		<div class="ana" id="i">

			<div class="arti">+</div>

			<!--  Target vermeyi unutmaayın.Veriyi ajaxla yollar sonuçları belirlediğimiz iframeye yollar. -->

			<form action="yukle.php" method="post" enctype="multipart/form-data" id="yukle" target="iframe">

				<div class="iler">

					<div class="i_ana">	<input type="file" name="resim[]" multiple="multiple"/><div class="eksi">-</div></div>

				</div>

				<input type="submit" class="buton" value="Yükle" />

			</form>

		</div>
		<div class="ana" id="i" name="sonuc">

		</div>
	
	<iframe src="" frameborder="0" id="iframe" name="iframe"></iframe>

</body>

</html>