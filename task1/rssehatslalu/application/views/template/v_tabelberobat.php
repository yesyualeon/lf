<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Permintaan Berobat</title>

  <!-- Bootstrap CSS -->
  <link href="<?= base_url('assets/dashboard/') ?>css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?= base_url('assets/dashboard/') ?>css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?= base_url('assets/dashboard/') ?>css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?= base_url('assets/dashboard/') ?>css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="<?= base_url('assets/dashboard/') ?>assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="<?= base_url('assets/dashboard/') ?>assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="<?= base_url('assets/dashboard/') ?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/') ?>css/owl.carousel.css" type="text/css">
  <link href="<?= base_url('assets/dashboard/') ?>css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/') ?>css/fullcalendar.css">
  <link href="<?= base_url('assets/dashboard/') ?>css/widgets.css" rel="stylesheet">
  <link href="<?= base_url('assets/dashboard/') ?>css/style.css" rel="stylesheet">
  <link href="<?= base_url('assets/dashboard/') ?>css/style-responsive.css" rel="stylesheet" />
  <link href="<?= base_url('assets/dashboard/') ?>css/xcharts.min.css" rel=" stylesheet">
  <link href="<?= base_url('assets/dashboard/') ?>css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


  <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.php" class="logo">RS <span class="lite">Sehat Selalu</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Iskhak</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="<?= base_url('auth') ?>"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="sub-menu">
            <a class="" href="<?= base_url('template') ?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="active">
            <a href="<?= base_url('template/tabel_berobat') ?>" class="">
                          <i class="icon_table"></i>
                          <span>Tabel Berobat</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="<?= base_url('template/form_berobat') ?>" class="">
                          <i class="icon_document_alt"></i>
                          <span>Form Berobat</span>
                      </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
              <section class="panel">
                <header class="panel-heading">
                  Data Permintaan Berobat Pasien
                </header>
  
                <table class="table table-striped table-advance table-hover">
                  <tbody>
                    <tr>
                      <th><i>#</i></th>
                      <th><i class="icon_profile"></i> Nama </th>
                      <th><i class="icon_calendar"></i> NIK</th>
                      <th><i class="icon_mail_alt"></i> Keluhan</th>
                      <th><i class="icon_pin_alt"></i> Dokter</th>
                      <th><i class="icon_mobile"></i> Status</th>
                      <th><i class="icon_cogs"></i> Action</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Muhamad Iskhak</td>
                      <td>123180089</td>
                      <td>Banyak Tugas </td>
                      <td>Bapak ki Hajar Deawantara</td>
                      <td>Dalam proses</td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                          <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                          <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Muhamad Iskhak</td>
                      <td>123180089</td>
                      <td>Banyak Tugas </td>
                      <td>Bapak ki Hajar Deawantara</td>
                      <td>Dalam proses</td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                          <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                          <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                        </div>
                      </td>
                    </tr>
                    <!-- php
                      //memanggil file koneksi
                      require_once("../config/koneksi.php");
                      $cek_data_query = "SELECT * FROM pasien WHERE status = 'blum di terima' ";
                      $data = mysqli_query($conn, $cek_data_query) or die(mysqli_error($conn));
                      $no = 1;
                      //menampilkan data project
                      while ($result = mysqli_fetch_assoc($data)) 
                      ?>
                      <tr>
                        <td>< $no++ ?></td>
                        <td><$result'nama' ?></td>
                        <td><$result'nik' ?></td>
                        <td><$result'keluhan' ?></td>
                        <td><$result'dokter' ?></td>
                        <td><$result'status' ?></td>
                        <td>
                        <div class="btn-group">
                          <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                          <a class="btn btn-success" href="../config/action-pberobat.php?update=<$result'id'?>"><i class="icon_check_alt2"></i></a>
                          <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                        </div>
                      </td>
                      </tr>
                      php  ?> -->
                  </tbody>
                </table>
              </section>
            </div>
        </div>
  </section>
  <?php 
        if(isset($_GET['status'])) 
        echo
        "<script type='text/javascript'>
        alert('permintaan berobat berhasil diterima');
        </script>";
?>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="<?= base_url('assets/dashboard/') ?>js/jquery.js"></script>
  <script src="<?= base_url('assets/dashboard/') ?>js/jquery-ui-1.10.4.min.js"></script>
  <script src="<?= base_url('assets/dashboard/') ?>js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/dashboard/') ?>js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="<?= base_url('assets/dashboard/') ?>js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="<?= base_url('assets/dashboard/') ?>js/jquery.scrollTo.min.js"></script>
  <script src="<?= base_url('assets/dashboard/') ?>js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="<?= base_url('assets/dashboard/') ?>assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="<?= base_url('assets/dashboard/') ?>js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="<?= base_url('assets/dashboard/') ?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="<?= base_url('assets/dashboard/') ?>js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="<?= base_url('assets/dashboard/') ?>js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="<?= base_url('assets/dashboard/') ?>assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?= base_url('assets/dashboard/') ?>js/calendar-custom.js"></script>
    <script src="<?= base_url('assets/dashboard/') ?>js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?= base_url('assets/dashboard/') ?>js/jquery.customSelect.min.js"></script>
    <script src="<?= base_url('assets/dashboard/') ?>assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="<?= base_url('assets/dashboard/') ?>js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?= base_url('assets/dashboard/') ?>js/sparkline-chart.js"></script>
    <script src="<?= base_url('assets/dashboard/') ?>js/easy-pie-chart.js"></script>
    <script src="<?= base_url('assets/dashboard/') ?>js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= base_url('assets/dashboard/') ?>js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url('assets/dashboard/') ?>js/xcharts.min.js"></script>
    <script src="<?= base_url('assets/dashboard/') ?>js/jquery.autosize.min.js"></script>
    <script src="<?= base_url('assets/dashboard/') ?>js/jquery.placeholder.min.js"></script>
    <script src="<?= base_url('assets/dashboard/') ?>js/gdp-data.js"></script>
    <script src="<?= base_url('assets/dashboard/') ?>js/morris.min.js"></script>
    <script src="<?= base_url('assets/dashboard/') ?>js/sparklines.js"></script>
    <script src="<?= base_url('assets/dashboard/') ?>js/charts.js"></script>
    <script src="<?= base_url('assets/dashboard/') ?>js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
