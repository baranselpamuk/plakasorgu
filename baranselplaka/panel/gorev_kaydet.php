<?php 
include 'baransel.php';

if (empty($_SESSION['user'])) {
  header('Location: index.php');
}


$aracsahibi   = @$_POST['aracsahibi'];
$aracplaka    = @$_POST['aracplaka'];
$iletisimno   = @$_POST['iletisimno'];
$aracmarka    = @$_POST['aracmarka'];
$aracmodel    = @$_POST['aracmodel'];
$modelyili    = @$_POST['modelyili'];
$AracDurumu   = @$_POST['AracDurumu'];
$KayitTarihi  = @$_POST['KayitTarihi'];
$aracsasi     = @$_POST['aracsasi'];



$arac_kaydet = mysqli_query($connn, "INSERT INTO arac_kayitlari (`w_id`, `w_sahip`,
 `w_plaka`, `w_iletisim`, `w_durumu`,
  `w_marka`, `w_model`, `w_model_yili`,
   `w_kayit_tarihi`, `w_aracsasi` ) VALUES (NULL, '$aracsahibi', '$aracplaka',
    '$iletisimno', '$AracDurumu', '$aracmarka',
     '$aracmodel', '$modelyili', '$KayitTarihi', '$aracsasi');");


if ($arac_kaydet) {
	header('Location: anasayfa.php?sonuc=1 ');
} else {
	header('Location: anasayfa.php?sonuc=2 ');
}

 ?>