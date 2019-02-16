<?php 
include 'panel/webkartali.php'; 

$kelime = $_GET['q'];
//$uzunluk=strlen($kelime);

		

		
$ara = mysqli_query($connn, "SELECT * FROM arac_kayitlari WHERE w_plaka='$kelime' ");

$varmi = count($ara);


		while ($ara_ayr2 = mysqli_fetch_array($ara, MYSQLI_ASSOC)) {

$sonuc_varmi =count($ara_ayr2);

				if ($ara_ayr2['w_plaka'] == $kelime AND $ara_ayr2['w_durumu'] == "Bulundu") {
					echo '<div class="sonuc2" id="sonuc2">
							<center>
								<font size="5" color="#00cd00"><b>ÇALINTI KAYDI YOKTUR :)</b></font><br><hr>
								<font size="5">
									<b>'.$ara_ayr2['w_sahip'].'</b><br>
									'.$ara_ayr2['w_iletisim'].'<br>
									'.$ara_ayr2['w_marka'].' - '.$ara_ayr2['w_model'].' - <b>Model Yılı :</b> '.$ara_ayr2['w_model_yili'].'<br>
								</font>
							</center>
							</div>';
				} elseif ($ara_ayr2['w_plaka'] == $kelime AND $ara_ayr2['w_durumu'] == "Çalıntı"){
					echo '<div class="sonuc1" id="sonuc1">
						<center>
								<font size="5" color="#cd2626"><b>ÇALINTI KAYITLI :(</b></font><br><hr>
								<font size="5">
									<b>'.$ara_ayr2['w_sahip'].'</b><br>
									'.$ara_ayr2['w_iletisim'].'<br>
									'.$ara_ayr2['w_marka'].' - '.$ara_ayr2['w_model'].' - <b>Model Yılı :</b> '.$ara_ayr2['w_model_yili'].'<br>
								</font>
							</center>
						</div>';
				}elseif ($ara_ayr2['w_plaka'] == $kelime AND $ara_ayr2['w_durumu'] == "Diğer"){
					echo '<div class="sonuc0" id="sonuc0">
						<center>
								<font size="5" color="#cd2626"><b>Detayı Belirtilmeyen Araç</b></font><br><hr>
								<font size="5">
									<b>'.$ara_ayr2['w_sahip'].'</b><br>
									'.$ara_ayr2['w_iletisim'].'<br>
									'.$ara_ayr2['w_marka'].' - '.$ara_ayr2['w_model'].' - <b>Model Yılı :</b> '.$ara_ayr2['w_model_yili'].'<br>
								</font>
							</center>
						</div>';	
				}


				
//while sonu
		};
	
if (@$sonuc_varmi>$varmi) {
	

} else {
	echo '<div class="sonuc0" id="sonuc0">
						<center>
								<font size="5" color="#cd2626"><b>Ayrıntı Yok</b></font><br><hr>
								<font size="5">
									Plaka Kaydı Bulunamadı..
								</font>
							</center>
						</div>';
}

/*
(
    [w_id] => 1
    [w_sahip] => Ahmet Yılmaz
    [w_plaka] => 34ASD1453
    [w_iletisim] => 0324 456 78 90
    [w_durumu] => Çalıntı
    [w_marka] => Honda
    [w_model] => Cr34
    [w_model_yili] => 2016
    [w_kayit_tarihi] => 2017-02-27 11:24:08
    [w_aracsasi] => rerewrvewr
)

________________________________

			if ($ara_ayr['w_plaka'] == $kelime) {
					echo '<div class="sonuc2" id="sonuc2">
							<center>
								<font size="5" color="#00cd00"><b>ÇALINTI KAYDI YOKTUR :)</b></font><br><hr>
								<font size="7">
									Kayıt Bulunamadı.
								</font>
							</center>
							</div>';
				} else {
					echo '<div class="sonuc1" id="sonuc1">
						<center>
								<font size="5" color="#cd2626"><b>ÇALINTI KAYITLI :(</b></font><br><hr>
								<font size="6">
									'.$ara_ayr['w_sahip'].'<br>
									'.$ara_ayr['w_iletisim'].'
								</font>
							</center>
						</div>';
				}



________________________________

*/
?>