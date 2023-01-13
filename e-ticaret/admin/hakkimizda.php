<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SENAELİF | E-TİCARET SİTESİ</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php 
require_once("sidebar.php"); 
require_once("islem/baglanti.php");

$hakkimizda = $baglanti->prepare("SELECT * FROM hakkimizda where hakkimizda_id=?");
$hakkimizda->execute(array(1));
$hakkimizdacek = $hakkimizda->fetch(PDO::FETCH_ASSOC);

?>

<div class="wrapper">


  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">
        <div class="row">


        <div class="card card-primary col-md-12">
              <div class="card-header">
                <h3 class="card-title">Hakkımızda</h3></div>
                  <?php
                  if (@$_GET['yuklenme']=="basarili"){ ?>
                   <h6 style="color:green">Yükleme işlemi başarılı..</h6>
                <?php  
                }
                  elseif (@$_GET['yuklenme']=="basarisiz"){ ?>
                    <h6 style="color:red">Yükleme işlemi başarısız..</h6>
                <?php }
                ?>
  
              <!-- form start -->
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
            <div class="card-body">
            <div class="form-group">
            <input type="hidden" name="eskiresim" value="<?php echo $hakkimizdacek['hakkimizda_resim'] ?>">
            <label for="exampleInputText">Güncel Resim : </label>
            <img style="width: 150px;" src="resimler/hakkimizda_resim/<?php echo $hakkimizdacek['hakkimizda_resim']; ?>" >    <!-- ekranda güncel resmimin görünmesini sağlıyorum -->
          </div>
          <div class="form-group">
            <label for="exampleInputText">Resim</label>
            <input type="file" name="hakkimizda_resim" class="form-control">
          </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hakkımızda Başlığı </label>
                    <input type="text" name="hakkimizda_baslik" value="<?php echo $hakkimizdacek['hakkimizda_baslik'] ?>" class="form-control" placeholder="Hakkımızda başlığını giriniz..">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Hakkımızda Detay </label>
                    <textarea class="ckeditor" id="editor1" name="hakkimizda_detay"<?php echo $hakkimizdacek['hakkimizda_detay'] ?>></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputText">Vizyonumuz </label>
                    <input type="text" name="hakkimizda_vizyon" value="<?php echo $hakkimizdacek['hakkimizda_vizyon'] ?>" class="form-control" placeholder="Vizyon bilgisi giriniz..">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputText">Misyonumuz </label>
                    <input type="text" name="hakkimizda_misyon" value="<?php echo $hakkimizdacek['hakkimizda_misyon'] ?>" class="form-control" placeholder="Misyon bilgisi giriniz..">
                  </div>
        
            </div>

                <div class="card-footer">
                  <button type="submit" name="hakkimizdakaydet" class="btn btn-success">Kaydet</button>
                </div>
              </form>
            </div>
        </div>
      </div>
      <div class="row">


</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
</body>
</html>