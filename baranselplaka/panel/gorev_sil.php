<?php 
include 'baransel.php';

if (empty($_SESSION['user'])) {
  header('Location: index.php');
}

$silinecek = @$_GET['id'];

/*
echo $GorevBasligi."<br>";
echo $GorevAciklama."<br>";
echo $GorevDurum."<br>";
echo $KayitTarihi."<br>";
*/

$geleni_sil = mysqli_query($connn, "DELETE FROM arac_kayitlari WHERE w_id =$silinecek ");


if ($gorevi_kaydet) {
	header('Location: gorevler.php ');
} else {
	header('Location: gorevler.php ');
}
 ?>