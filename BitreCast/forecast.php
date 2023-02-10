<?php
session_start();
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <title>BitreCast</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <style type="text/css">
    img {
      margin: -1200px 0px 0px -50px;
    }

    .vertikal {
      margin-left: 276px;
      margin-top: -690px;
      border-left: 2px solid grey;
      height: 450px;
    }

    .info {
      margin-top: 537px;
    }

    input {
      position: absolute;
      margin: 1px 0px 0px 20px;
      padding-top: 4px;
      width: 12%;
    }

    .navbar {
      position: absolute;
      margin: -1px 0px 0px 0px;
      display: inline-block;
      padding-right: 5px;
      background-color: #141414;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }

    .navbar .navbar-right {
      float: left;
      color: white;
      margin-left: 10px;
      margin-right: 1px;
      text-decoration: none;
      text-align: center;
    }

    .navbar i {
      margin-top: -19px;
      margin-left: 10px;
      margin-right: 3px;
      color: #f9f9f9;
      background-color: #f5962a;
      border-radius: 50px 50px;
    }

    .navbar p {
      font-size: 16px;
      line-height: 10px;
      margin-top: -25px;
      margin-left: 120.2px;
      color: white;
      text-align: right;
    }

    .navbar ul {
      list-style-type: none;
      padding: 0px;
      margin-bottom: -1px;
      overflow: hidden;
    }

    .navbar-button {
      margin-left: 974.5px;
      margin-right: 20px;
    }

    .navbar ul li {
      float: left
    }

    .navbar li a {
      display: inline-block;
      font-size: 12px;
      color: white;
      text-align: center;
      padding: 24px 10px;
      text-decoration: none;
    }

    .navbar li a:hover {
      background-color: #242323;
    }

    .blockchain-dropdown {
      margin: 0;
      padding: 0;
      overflow: hidden;
      display: block;
    }

    .blockchain-dropdown:hover .blockchain-dropdown_V {
      display: block;
    }

    .blockchain-dropdown_V {
      margin-right: 300px;
      position: absolute;
      display: none;
      font-size: 14px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
      background-color: #f9f9f9;
      border-radius: 3px;
    }

    .blockchain-dropdown_V li a {
      font-size: 14px;
      color: black;
      padding: 9px 60px 9px 10px;
      text-decoration: none;
      text-align: left;
      display: block;
    }

    .blockchain-dropdown_V li a:hover {
      color: white;
      background-color: #f5962a;
      border-radius: 5px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .Kurs {
      font-size: 12px;
      padding-right: 10px;
      background-color: #db7500;
      color: white;
      border: 2px solid white;
      border-radius: 7px;
      margin: 21px 10px 15px 5px;
    }

    .dropdown-menu li a:hover {
      background-color: #f5962a;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      color: white;
    }

    .dropdown-menu {
      margin-right: 120px;
      position: absolute;
      margin-left: 1140px;
      margin-top: -19px;
      background-color: white;
      min-width: 100px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
      padding: 0px 10px 0px 0px;
    }

    .dropdown-menu li a {
      color: black;
      padding: 10px 20px 10px 10px;
      border-radius: 5px;
    }

    body {
      font-family: century gothic;
      margin: 0;
      height: 5cm;
      background-color: #141414;
      width: 100%;
      min-height: 10px;
    }

    .container {
      margin: 77px 0px 0px 0px;
      padding: 170px;
      position: absolute;
      width: 100%;
      height: 500px;
      min-height: 200px;
      background-color: #141414;
    }

    .chart {
      padding: 100px 30px 0px 480px;
    }

    h1 {
      font-family: segoe UI black;
      color: white;
      margin-left: -10px;
      margin-top: -490px;
      padding-bottom: 10px;
    }

    h2 {
      font-size: 18px;
      font-family: segoe UI black;
      color: white;
      margin-left: -115px;
      margin-top: -190px;
      padding-bottom: 10px;
    }

    h3 {
      font-size: 16px;
      font-family: bahnschrift light;
      color: white;
      margin-left: -115px;
      margin-top: 10px;
      margin-bottom: 230px;
      text-align: left;
    }

    /* Tables */

    table {
      width: 100%;
      table-layout: fixed;
    }

    .tbl-header {
      background-color: rgba(255, 255, 255, 0.3);
    }

    .tbl-content {
      height: 0;
      overflow-x: auto;
      margin-top: 0px;
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    th {
      padding: 20px 15px;
      text-align: left;
      font-weight: 500;
      font-size: 14px;
      color: #fff;
      text-transform: uppercase;
      background-color: #f5962a;
    }

    td {
      padding: 15px;
      text-align: left;
      vertical-align: middle;
      font-weight: 300;
      font-size: 16px;
      color: #fff;
      border-bottom: solid 1px rgba(255, 255, 255, 0.1);
    }

    .Cap,
    .Vol,
    .Sat,
    .Har,
    .Sir {
      text-align: center;
    }


    @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

    .footer {
      width: 100%;
      padding-top: 10px;
      padding-bottom: 3px;
      padding-left: 570.5px;
      padding-right: 598px;
      position: absolute;
      background-color: #f5962a;
      color: white;
      margin: 347px 0px 0px 0px;
      text-align: center;
    }

    .footer-distributed {
      background-color: #292c2f;
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
      box-sizing: border-box;
      width: 100%;
      text-align: left;
      font: bold 16px sans-serif;
      padding: 55px 50px;
      margin-top: 700px;
      margin-bottom: -350px;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
      display: inline-block;
      vertical-align: top;
    }

    /* Footer left */
    .footer-distributed .footer-left {
      width: 40%;
    }

    /* The company logo */
    .footer-distributed h3 {
      color: #ffffff;
      font: normal 36px 'Cookie', cursive;
      margin: 0;
    }

    .footer-distributed h3 span {
      color: #5383d3;
    }

    /* Footer links */
    .footer-distributed .footer-links {
      color: #ffffff;
      margin: 20px 0 12px;
      padding: 0;
    }

    .footer-distributed .footer-links a {
      display: inline-block;
      line-height: 1.8;
      text-decoration: none;
      color: inherit;
    }

    .footer-distributed .footer-company-name {
      color: #8f9296;
      font-size: 14px;
      font-weight: normal;
      margin: 0;
    }

    /* Footer Center */
    .footer-distributed .footer-center {
      width: 35%;
    }

    .footer-distributed .footer-center i {
      background-color: #33383b;
      color: #ffffff;
      font-size: 25px;
      width: 38px;
      height: 38px;
      border-radius: 50%;
      text-align: center;
      line-height: 42px;
      margin: 10px 15px;
      vertical-align: middle;
    }

    .footer-distributed .footer-center i.fa-envelope {
      font-size: 17px;
      line-height: 38px;
    }

    .footer-distributed .footer-center p {
      display: inline-block;
      color: #ffffff;
      vertical-align: middle;
      margin: 0;
    }

    .footer-distributed .footer-center p span {
      display: block;
      font-weight: normal;
      font-size: 14px;
      line-height: 2;
    }

    .footer-distributed .footer-center p a {
      color: #f5962a;
      text-decoration: none;
      ;
    }

    /* Footer Right */
    .footer-distributed .footer-right {
      width: 20%;
    }

    .footer-distributed .footer-company-about {
      line-height: 20px;
      color: #92999f;
      font-size: 13px;
      font-weight: normal;
      margin: 0;
    }

    .footer-distributed .footer-company-about span {
      display: block;
      color: #f5962a;
      font-size: 14px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .footer-distributed .footer-icons {
      margin-top: 25px;
    }

    .footer-distributed .footer-icons a {
      display: inline-block;
      width: 35px;
      height: 35px;
      cursor: pointer;
      background-color: #f5962a;
      border-radius: 2px;
      font-size: 20px;
      color: white;
      text-align: center;
      line-height: 35px;
      margin-right: 3px;
      margin-bottom: 5px;
    }

    @media (max-width: 880px) {
      .footer-distributed {
        font: bold 14px sans-serif;
      }

      .footer-distributed .footer-left,
      .footer-distributed .footer-center,
      .footer-distributed .footer-right {
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
      }

      .footer-distributed .footer-center i {
        margin-left: 0;
      }
    }

    .image-footer {
      margin-top: 0;
      margin-left: -10px;
    }

    #myBtnContainer {
      margin-left: 600px;
      margin-top: -20px;

    }

    #myBtnContainer .btn1 {
      margin-left: -50px;
      margin-right: 50px;
    }

    #myBtnContainer .btn3 {
      margin-left: 50px;
    }

    .card-title {
      margin-top: 85px;
      margin-bottom: -15px;
      margin-left: 770px;
    }
  </style>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <!-- <script>
    $(document).ready(function() {
      $("#hide").click(function() {
        $("table").hide();
      });
      $("#show").click(function() {
        $("table").show();
      });
    });
  </script> -->
  <!-- icon -->
  <link rel="icon" type="image/x-icon" href="/MASTER/img/Logo Bitre Cast.png">
  <!-- navbar -->
  <div class="navbar">
    <!-- logo_navbar -->
    <input type="image" value='Home' onClick="window.location.href='home_special.php';" src="/MASTER/img/Logo Bitre Cast2.png" width=13%>
    <ul class="navbar-button">
      <li><a href="forecast.php">FORECAST</a></li>
      <li class="blockchain-dropdown">
        <a href="#" class="dropbutton">BLOCKCHAIN</a>
        <ul class="blockchain-dropdown_V">
          <li><a href="https://blockchair.com/id/bitcoin/blocks">Blocks</a></li>
          <li><a href="https://blockchair.com/id/bitcoin/transactions">Transaction</a></li>
          <li><a href="https://blockchair.com/id/bitcoin/outputs">Output</a></li>
          <li><a href="https://blockchair.com/id/bitcoin/addresses">Address</a></li>
        </ul>
      </li>
      <li><a href="https://coinmarketcap.com/currencies/bitcoin/markets/" target="_blank">MARKET</a></li>
      <li><a href="https://news.bitcoin.com/">NEWS</a></li>
      <ul><button type="button" class="Kurs" data-toggle="dropdown">IDR
          <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">IDR (ID Rupiah)</a></li>
          <li><a href="#">USD (US Dollar)</a></li>
        </ul>
        <div class="p_i">
          <?php
          $user_id = $_SESSION['id_user'];
          $data = mysqli_query($conn, "SELECT * FROM user where id_user = $user_id");
          $muncul = mysqli_fetch_array($data);
          ?>
          <p><?php echo $muncul['Nama'] ?>
            <i href="#" class='fas fa-user-circle' style='font-size:30px'></i>
          </p>
        </div>
      </ul>


  </div>
</head>

<body>
  <div class="container">
    <!-- picture -->
    <div class="info">
      <img src="/MASTER/img/BTC.png" width="18%">
      <h1>Bitcoin</h1>
      <h3>Bitcoin adalah aset digital kripto pertama yang<br>
        diciptakan di dalam teknologi blockchain</h3>
      <h2>Harga Saat Ini :<br><br>
        Kapitalisasi Pasar :<br><br>
        Volume 24 Jam :</h2>
    </div>
    <div class="vertikal">
    </div>
    <div id="myBtnContainer" width="100%">
      <!-- <button id="hide">Hide</button>
      <button id="show">Show</button> -->
      <button class="btn btn-warning">Forecast</button>
    </div>
  </div>
  <div class="chart">
    <script src="https://widgets.coingecko.com/coingecko-coin-compare-chart-widget.js"></script>
    <coingecko-coin-compare-chart-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="idr" locale="en"></coingecko-coin-compare-chart-widget>
  </div>
  </div>

  <div class="hold-transition sidebar-mini">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="table">
                <div class="filterDiv forecast1">
                  <div id="overlay">
                    <div class="loader"></div>
                  </div>
                  <form action="" method="post">
                  </form>
                  <form action="" method="post" style="display:none;">
                    <div class="card-header">
                      <h3 class="card-title">Hasil Peramalan</h3>
                    </div>
                    <table id="Table" class="table table-bordered table-striped">
                      <div class="tbl-header">
                        <table cellpadding="0" cellspacing="0" border="0">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Indikator</th>
                              <th>Kapitalisasi Pasar</th>
                              <th>Volume Transaksi</th>
                              <th>Satuan</th>
                              <th>Harga</th>
                              <th>Sirkulasi Beredar</th>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- differencing -->
                            <?php
                            include "koneksi.php";
                            include "kapitalisasi.php";
                            include "volume.php";
                            include "harga.php";
                            include "sirkulasi.php";
                            $p = mysqli_query($conn, "SELECT * from sampel_data limit 1");
                            $o = mysqli_fetch_array($p);
                            // echo $aver;
                            ?>
                            <div class="tbl-content">
                              <table cellpadding="0" cellspacing="0" border="0">

                                <tr>
                                  <td>1</td>
                                  <td>
                                    <?php
                                    if ($jumtotvol >= $aver) {
                                    ?>
                                      <i class="fas fa-times" style="color:red"> </i> Jual
                                    <?php } else { ?>
                                      <i class="fa fa-check" style="color:green"> </i> Beli
                                    <?php } ?>
                                  </td>
                                  <td><?php echo $jumtot115 ?></td>
                                  <td><?php echo abs($jumtotvol) ?></td>
                                  <td><?php echo $o['Satuan'] ?></td>
                                  <td><?php echo $jumtothar ?></td>
                                  <td><?php $sirku = 8265688571301700 / 440369757;
                                      echo $sirku ?></td>
                                </tr>

                          </tbody>
                          <tfoot>
                          </tfoot>
                        </table>
                      </div>
                    </table>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src=".plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  </div>
  <!-- Footer -->
  <footer class="footer-distributed" data-aos="fade-up" data-aos-duration="1500">
    <div class="footer-left">
      <img class="image-footer" src="/MASTER/img/Logo Bitre Cast2.png" width=40%>
      <p class="footer-links">
        <a href="#">Home</a>·
        <a href="https://blockchair.com/id/bitcoin/blocks" target="_blank">Blocks</a>·
        <a href="https://blockchair.com/id/bitcoin/transactions" target="_blank">Transactions</a>·
        <a href="https://blockchair.com/id/bitcoin/outputs" target="_blank">Output</a>·
        <a href="https://blockchair.com/id/bitcoin/addresses" target="_blank">Address</a>·
        <a href="https://news.bitcoin.com/" target="_blank">News</a>
      </p>
      <p class="footer-company-name">Copyright© 2022 BitreCast</p>
    </div>
    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Jalan Diponegoro No. 88, DR. Soetomo,
            </br> Kec. Tegalsari, Kota Surabaya, 60264
          </span> Surabaya, Jawa Timur, Indonesia</p>
      </div>
      <div>
        <i class="fa fa-phone"></i>
        <p>+62 877 51150156</p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:support@company.com">email@BitreCast.com</a></p>
      </div>
    </div>
    <div class="footer-right">
      <p class="footer-company-about">
        <span>Tentang BitreCast</span>
        BitreCast merupakan perusahaan yang bergerak di bidang riset dan analisis teknologi aset digital cryptocurrency
      </p>
      <div class="footer-icons">
        <a href="https://web.facebook.com/sony.rezeky" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/____ynos____/" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="https://twitter.com/ynos15156615" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://www.youtube.com/channel/UC8gLaSukTOXOKyv1s2elMsg" target="_blank"><i class="fa fa-youtube"></i></a>
      </div>
    </div>
  </footer>
  <div class="footer">
    <p>Copyright © 2022 BitreCast</p>
  </div>
  <!-- Animation -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- <script>
    filterSelection("all")

    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("filterDiv");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
          element.className += " " + arr2[i];
        }
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn1");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script> -->
  <script>
    var overlay = document.getElementById("overlay"); /* untuk mengambil elemen berdasarkan id yang ada id html */

    window.addEventListener('load', function() {
      overlay.style.display = 'none';
    })
  </script>
  <script>
    $("button").click(function() {
      $("form").toggle();
    });
  </script>
</body>

</html>
</div>