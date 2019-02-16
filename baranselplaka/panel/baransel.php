<?php
session_start();

$connn = @mysqli_connect("localhost","root","","baranselbilisim");
@mysqli_query($connn, "SET NAMES utf8");
@mysqli_query($connn, "SET CHARACTER SET utf8");
@mysqli_query($connn, "SET COLLATION_CONNECTION='utf8_general_ci'");


// Bağlantı Kontrolü
if (mysqli_connect_errno())
  {
  echo "Mysql Data Bağlantısı Yapılamadı..: " . mysqli_connect_error();
  }

$title     = "Baransel - Plaka Sorgulama Sistemi";
$kullanici = "baransel";
$sifresi   = "1";

$hatali_sonuc = '<div class="col-lg-4" id="cevap">
 <div class="bs-component"> 	
   <div class="alert alert-dismissible alert-danger">
	 <strong>Bir Sorun Var! * İşlemi Başarısız.</strong>
   </div>
 </div>
</div>';

$basarili_sonuc ='<div class="col-lg-4" id="cevap">
  <div class="bs-component">
	  <div class="alert alert-dismissible alert-success">
	    <strong>İşlem Başarılı.</strong>
	  </div>
	</div>
 </div>';

?>