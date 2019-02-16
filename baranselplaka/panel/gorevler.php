<?php 
include 'baransel.php';
$kayit_sonucu = @$_GET['sonuc'];

if (empty($_SESSION['user'])) {
  header('Location: index.php');
}

    function kisalt($metin, $uzunluk){
        $metin = substr($metin, 0, $uzunluk)."...";
        $metin_son = strrchr($metin, " ");
        $metin = str_replace($metin_son," ...", $metin);
        return $metin;
    }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title><?php echo $title ?></title>
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a href="anasayfa.php" class="logo">Baransel Bilişim</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a href="#" data-toggle="offcanvas" class="sidebar-toggle"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">

              <!-- User Menu-->
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img src="images/user.png" alt="User Image" class="img-circle"></div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['user']; ?></p>
              <p class="designation">Yönetici Hesabı</p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li><a href="anasayfa.php"><i class="fa fa-home"></i><span>AnaSayfa</span></a></li>
            <li class="active"><a href="gorevler.php"><i class="fa fa-cogs"></i><span>Araçlar</span></a></li>
            <li><a href="index.php"><i class="fa fa-sign-out"></i><span>Çıkış</span></a></li>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-cogs"></i> Araçlar Listesi</h1>
          </div>

<?php 

  if ($kayit_sonucu == "2") {
    echo $hatali_sonuc;
  } elseif ($kayit_sonucu == "1") {
    echo $basarili_sonuc;
  }else{
    echo "";
  }

?>

          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Araçlar</a></li>
            </ul>
          </div>
        </div>
  <!-- Tablo Başlangıç -->
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table id="sampleTable" class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th width='60'>İŞLEM</th>
                      <th>Sahip</th>
                      <th>Plaka</th>
                      <th>İletişim</th>
                      <th>Durumu</th>
                      <th>Şasi No</th>
                      <th>Marka</th>
                      <th>Model</th>
                      <th>M. Yılı</th>
                      <th>Kayıt Tarihi</th>
                   </tr>
                  </thead>
                  <tbody>
                    
<?php 
$tumunu_cek = mysqli_query($connn, "SELECT * FROM arac_kayitlari");
while ($tumunu_ayrs = mysqli_fetch_array($tumunu_cek, MYSQLI_ASSOC)) {

  echo '<tr>
    <td>'.$tumunu_ayrs['w_id'].'</td>
    <td style="width:50px;">
      <a href="gorev_sil.php?id='.$tumunu_ayrs['w_id'].'"><span class="label label-danger">Sil</span></a>  
      <a href="gorev_duzenle.php?id='.$tumunu_ayrs['w_id'].'"><span class="label label-info">Düzenle</span></a> 
    </td>';

  echo '<td>'.$tumunu_ayrs['w_sahip'].'</td>';
  echo '<td>'.$tumunu_ayrs['w_plaka'].'</td>';
  echo '<td>'.$tumunu_ayrs['w_iletisim'].'</td>';
  echo '<td>';

if ($tumunu_ayrs['w_durumu']=='Çalıntı') {
  echo '<font color="red"><b>'.$tumunu_ayrs['w_durumu'].'</b></font>';
} else if ($tumunu_ayrs['w_durumu']=='Bulundu') {
  echo '<font color="#2b9b06">'.$tumunu_ayrs['w_durumu'].'</font>';
} else {
  echo $tumunu_ayrs['w_durumu'];
}


  echo '</td>';
  echo '<td>'.$tumunu_ayrs['w_aracsasi'].'</td>';
  echo '<td>'.$tumunu_ayrs['w_marka'].'</td>';
  echo '<td>'.$tumunu_ayrs['w_model'].'</td>';
  echo '<td>'.$tumunu_ayrs['w_model_yili'].'</td>';
  echo '<td>'.$tumunu_ayrs['w_kayit_tarihi'].'</td>

  </tr>';

}

 ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
    $('#sampleTable').DataTable({
      order: [ [0, 'desc'] ]
    });

    </script>
  <!-- Tablo Bitiş -->
<script>
  $(window).load(function() {
      $( "#cevap" ).hide( 5000 );
  });
</script>

  </body>
</html>