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

$idcik           = @$_POST['duzenlenecekid'];


/*
echo $GorevBasligi."<br>";
echo $GorevAciklama."<br>";
echo $GorevDurum."<br>";
echo $KayitTarihi."<br>";
*/

$arac_duzenle = mysqli_query($connn, "UPDATE arac_kayitlari SET `w_sahip` = '$aracsahibi',
 `w_plaka` = '$aracplaka', `w_iletisim` = '$iletisimno',
  `w_durumu` = '$AracDurumu', `w_marka` = '$aracmarka',
   `w_model` = '$aracmodel', `w_model_yili` = '$modelyili',
    `w_kayit_tarihi` = '$KayitTarihi',
     `w_aracsasi` = '$aracsasi' WHERE `arac_kayitlari`.`w_id` = '$idcik';");


if ($arac_duzenle) {
	header('Location: gorev_duzenle.php?id='.$idcik.'&sonuc=1 ');
} else {
	header('Location: gorev_duzenle.php?id='.$idcik.'&sonuc=2 ');
}

 ?>