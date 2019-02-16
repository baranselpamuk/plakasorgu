<?php 
include 'baransel.php';


$gelen_kul = @$_POST['KullaniciAdi']; 
$gelen_pas = @$_POST['Sifre'];

if ($gelen_kul == $kullanici and $gelen_pas == $sifresi) {
	$_SESSION['user'] = $gelen_kul;
	header('Location: anasayfa.php');
}else{
	header('Location: index.php?sonuc=Kullanıcı Adı veya Şifre Hatalı :( ');
}



?>