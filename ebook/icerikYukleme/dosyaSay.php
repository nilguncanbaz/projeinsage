
<?php 
function sayibul($klasor) {

    $dizi = array(); // dizi oluştur

    $open = opendir($klasor); // klasör aç
        while($q=readdir($open)) {
            if ($q != "." && $q != "..") {

                $dizi[] = $q;

            }
        }
    $sayi = count($dizi); // dosya sayısı
    closedir($open);  // klasörü kapat 
    return $sayi; // sayıyı çıktı olarak al

} 
?>

