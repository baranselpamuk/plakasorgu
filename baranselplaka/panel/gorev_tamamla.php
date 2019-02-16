<?php 
include 'baransel.php';

if (empty($_SESSION['user'])) {
  header('Location: index.php');
}


$id = @$_GET['id'];
$tamamlandi_date = date('Y-m-d H:i:sa');
$sonuc_ne = "Bitti";


$gorevi_tamamla = mysqli_query($connn, "UPDATE tum_gorevler SET `grv_bitis_tarih` = '$tamamlandi_date', `grv_sonuc` = '$sonuc_ne' WHERE `tum_gorevler`.`grv_id` = '$id';");


if ($gorevi_tamamla) {
	header('Location: gorevler.php?sonuc=1 ');
} else {
	header('Location: gorevler.php?sonuc=2 ');
}

 ?>