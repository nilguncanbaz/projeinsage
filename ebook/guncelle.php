<?php

//uye guncelleme işlemlerini yaptım
include '../database/baglan.php'; 
if (isset($_POST['guncelle'])) {
	$id=$_REQUEST['id'];

	$kaydet=$db->prepare("UPDATE ebook set
		bookName=:bookName,
		publisherName=:publisherName,
		publishDate=:publishDate,
		category=:category,
		lang=:lang,
		external=:external
		where id={$id}
		");
	$insert=$kaydet->execute(array(
		'bookName' => $_REQUEST['bookName'],
		'publisherName' => $_REQUEST['publisherName'],
		'publishDate' => $_REQUEST['publishDate'],
		'category' => $_REQUEST['category'],
		'lang' => $_REQUEST['lang'],
		'external' => $_REQUEST['external']
	));
	
	$id++;

	$kaydet=$db->prepare("UPDATE ebook set
		bookName=:bookName,
		publisherName=:publisherName,
		publishDate=:publishDate,
		category=:category,
		lang=:lang,
		external=:external
		where id={$id}
		");
	$insert=$kaydet->execute(array(
		'bookName' => $_REQUEST['bookName'],
		'publisherName' => $_REQUEST['publisherName'],
		'publishDate' => $_REQUEST['publishDate'],
		'category' => $_REQUEST['category'],
		'lang' => $_REQUEST['lang'],
		'external' => $_REQUEST['external']
	));
	$id++;

	$kaydet=$db->prepare("UPDATE ebook set
		bookName=:bookName,
		publisherName=:publisherName,
		publishDate=:publishDate,
		category=:category,
		lang=:lang,
		external=:external
		where id={$id}
		");
	$insert=$kaydet->execute(array(
		'bookName' => $_REQUEST['bookName'],
		'publisherName' => $_REQUEST['publisherName'],
		'publishDate' => $_REQUEST['publishDate'],
		'category' => $_REQUEST['category'],
		'lang' => $_REQUEST['lang'],
		'external' => $_REQUEST['external']
	));






	if ($insert) { ?>
		<script> alert("Güncelleme başarılı");</script> 
		<meta http-equiv="refresh" content="0.0;url=kitaplistele.php?durum=ok&id=$id"><?php
			exit; //her header'dan sonra sonlandırma için exit kullanmak yararlıdır.
		}
		else { ?>
			<script> alert("Güncelleme başarısız");</script> 
			<meta http-equiv="refresh" content="0.0;url=kitaplistele.php?durum=no&id=$id"><?php
			exit; //her header'dan sonra sonlandırma için exit kullanmak yararlıdır.
		}


	}





	


