<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Çalıntı Motorsiklet Sorgula</title>

	<meta name="description" content="Çalıntı Motosiklet Sorgulama Platformu">
	<meta name="keywords" content="çalıntı motor, çalıntı motorsiklet sorgula, çalıntı plaka sorgula, çalıntı araç sorgula, motorsiklet plaka sorgula, araç plaka sorgula">
	<meta name="author" content="calintimotosiklet.com">
	<meta name="designer" content="webkartali.com" />
	<meta name="copyright" content="Copyright © Webkartali.Com">

	<link rel="stylesheet" type="text/css" href="css/index.css">

	<script type="text/javascript" src="panel/js/cekcek.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<!--
<script type="text/javascript">
function randomize(min, max) {
	if (!min)
		min = 0;
	if (!max)
		max = 1;
	return Math.floor(Math.random()*(max+1)+min);
}
function randomBg() {
	var bgs = new Array();
	// I took these images from a site with a similar script already only to get example images
	// I wrote this script myself
	bgs.push("yollar/webkartali1.jpg");
	bgs.push("yollar/webkartali2.jpg");
	bgs.push("yollar/webkartali3.jpg");
	bgs.push("yollar/webkartali4.jpg");
	bgs.push("yollar/webkartali5.jpg");
	document.body.style.backgroundImage = "url(" + bgs[randomize(0, bgs.length-1)] + ")";
}
</script>

 onLoad="randomBg()" style="text-align:left; center top fixed;"
-->

</head>
<body>
	
<div class="sorgula">
	<center>
		<font size="5" class="xyz"><b>Plaka Sorgula</b></font><hr>
		<input type="text" class="textbox" name="plakano" onkeyup="cek();" placeholder="örn:06AHM499" id="input" maxlength="9" style="text-transform:uppercase">
		<!-- <input type="submit" class="buton" value="Sorgula.."> -->
	</center>
</div>

<div class="sonuc" id="sonuc">
	
</div>


</body>
</html>