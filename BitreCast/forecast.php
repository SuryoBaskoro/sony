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
      margin-top: -146px;
      border-left: 2px solid grey;
      height: 700px;
      width: 2px;
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
      padding-right: 13px;
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
      margin-top: -50px;
      padding-right: 0px;
      margin-left: 173px;
      margin-right: 0;
      color: #f9f9f9;
      background-color: #f5962a;
      border-radius: 50px 50px;
    }

    .navbar p {
      font-size: 12px;
      line-height: 17px;
      text-align: right;
      margin-top: -45px;
      margin-right: 40px;
      color: #f9f9f9;
    }

    .navbar ul {
      list-style-type: none;
      padding: 0px;
      margin-bottom: -1px;
      overflow: hidden;

    }

    .navbar-button {
      margin-left: 834.5px;
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
      margin-right: 100px;
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
      padding: 10px 10px 10px 10px;
      border-radius: 5px;
    }

    body {
      font-family: century gothic;
      margin: 0;
      height: 5cm;
      background-color: #141414;
    }

    .container {
      margin: 65px 0px 0px 0px;
      padding: 170px;
      position: absolute;
      width: 1348px;
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
  </style>
  <style>
    .filterDiv {
      float: left;
      /* background-color: #2196F3;
      color: #ffffff;
      width: 100px;
      line-height: 100px;
      text-align: center;
      margin: 2px; */
      display: none;
    }

    .show {
      display: block;
    }

    .container {
      margin-top: 20px;
      overflow: hidden;
    }

    /* Style the buttons */
    .btn {
      border: none;
      outline: none;
      padding: 12px 16px;
      background-color: #f1f1f1;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #ddd;
    }

    .btn.active {
      background-color: #666;
      color: white;
    }
  </style>
  <style>
    .loader {
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid blue;
      border-bottom: 16px solid blue;
      width: 120px;
      height: 120px;
      -webkit-animation: spin 2s linear infinite;
      animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
      0% {
        -webkit-transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
      }
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }
  </style>


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
      <li><a href="#Market">MARKET</a></li>
      <li><a href="https://news.bitcoin.com/">NEWS</a></li>
      <ul><button type="button" class="Kurs" data-toggle="dropdown">IDR
          <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">IDR (ID Rupiah)</a></li>
          <li><a href="#">USD (US Dollar)</a></li>
        </ul>
        </li>
        <p>Halo, user<i href="#" class='fas fa-user-circle' style='font-size:30px'></i></p>
        </li>
  </div>
</head>

<body>
  <div class="container">
    <div class="vertikal">
    </div>
    <!-- picture -->
    <img src="/MASTER/img/BTC.png" width=20%>
    <h1>Bitcoin</h1>
    <h3>Bitcoin adalah aset digital kripto pertama yang<br>
      diciptakan di dalam teknologi blockchain</h3>
    <h2>Harga Saat Ini :<br><br>
      Kapitalisasi Pasar :<br><br>
      Volume 24 Jam :</h2>
  </div>
  <div class="chart">
    <script src="https://widgets.coingecko.com/coingecko-coin-compare-chart-widget.js"></script>
    <coingecko-coin-compare-chart-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="idr" locale="en"></coingecko-coin-compare-chart-widget>

  </div>

  <div class="hold-transition sidebar-mini">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Sampel Database</h3>
              </div>
              <!-- /.card-header -->
              <div class="table">
                <div id="myBtnContainer">
                  <button class="btn" onclick="filterSelection('forecast1')">Forecast 1</button>
                  <button class="btn" onclick="filterSelection('forecast2')">Forecast 2</button>
                  <!-- <button class="btn" onclick="filterSelection('forecast2')">Forecast 2</button> -->
                  <!-- <button class="btn" onclick="filterSelection('forecast2')">Forecast 2</button> -->
                </div>
                <div class="filterDiv forecast1">
                  <div id="overlay">
                    <div class="loader"></div>
                  </div>
                  <form action="" method="post">
                    <table id="Table" class="table table-bordered table-striped">
                      <div class="tbl-header">
                        <table cellpadding="0" cellspacing="0" border="0">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Periode</th>
                              <th class="Cap">Kapitalisasi Pasar</th>
                              <th class="Vol">Volume Transaksi</th>
                              <th class="Sat">Satuan</th>
                              <th class="Har">Harga</th>
                              <th class="Sir">Sirkulasi Beredar</th>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- differencing -->
                            <?php
                            include "koneksi.php";
                            $a1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 1");
                            $b1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 2");
                            $c1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 3");
                            $d1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 4");
                            $e1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 5");
                            $f1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 6");
                            $g1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 7");
                            $h1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 8");
                            $i1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 9");
                            $j1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 10");
                            $k1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 11");
                            $l1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 12");
                            $m1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 13");
                            $n1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 14");
                            $o1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 15");
                            $p1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 16");
                            $q1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 17");
                            $r1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 18");
                            $s1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 19");
                            $t1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 20");
                            $u1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 21");
                            $v1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 22");
                            $w1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 23");
                            $x1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 24");
                            $y1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 25");
                            $z1 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 26");
                            $a2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 27");
                            $b2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 28");
                            $c2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 29");
                            $d2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 30");
                            $e2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 31");
                            $f2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 32");
                            $g2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 33");
                            $h2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 34");
                            $i2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 35");
                            $j2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 36");
                            $k2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 37");
                            $l2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 38");
                            $m2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 39");
                            $n2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 40");
                            $o2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 41");
                            $p2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 42");
                            $q2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 43");
                            $r2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 44");
                            $s2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 45");
                            $t2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 46");
                            $u2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 47");
                            $v2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 48");
                            $w2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 49");
                            $x2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 50");
                            $y2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 51");
                            $z2 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 52");
                            $a3 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 53");
                            $b3 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 54");
                            $c3 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 55");
                            $d3 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 56");
                            $e3 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 57");
                            $f3 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 58");
                            $g3 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 59");
                            $h3 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 60");
                            $i3 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 61");
                            $j3 = mysqli_query($conn, "SELECT Kapitalisasi_Pasar FROM sampel_data where id_data = 62");
                            $a = mysqli_fetch_array($a1);
                            $b = mysqli_fetch_array($b1);
                            $c = mysqli_fetch_array($c1);
                            $d = mysqli_fetch_array($d1);
                            $e = mysqli_fetch_array($e1);
                            $f = mysqli_fetch_array($f1);
                            $g = mysqli_fetch_array($g1);
                            $h = mysqli_fetch_array($h1);
                            $i = mysqli_fetch_array($i1);
                            $j = mysqli_fetch_array($j1);
                            $k = mysqli_fetch_array($k1);
                            $l = mysqli_fetch_array($l1);
                            $m = mysqli_fetch_array($m1);
                            $n = mysqli_fetch_array($n1);
                            $o = mysqli_fetch_array($o1);
                            $p = mysqli_fetch_array($p1);
                            $q = mysqli_fetch_array($q1);
                            $r = mysqli_fetch_array($r1);
                            $s = mysqli_fetch_array($s1);
                            $t = mysqli_fetch_array($t1);
                            $u = mysqli_fetch_array($u1);
                            $v = mysqli_fetch_array($v1);
                            $w = mysqli_fetch_array($w1);
                            $x = mysqli_fetch_array($x1);
                            $y = mysqli_fetch_array($y1);
                            $z = mysqli_fetch_array($z1);
                            $a4 = mysqli_fetch_array($a2);
                            $b4 = mysqli_fetch_array($b2);
                            $c4 = mysqli_fetch_array($c2);
                            $d4 = mysqli_fetch_array($d2);
                            $e4 = mysqli_fetch_array($e2);
                            $f4 = mysqli_fetch_array($f2);
                            $g4 = mysqli_fetch_array($g2);
                            $h4 = mysqli_fetch_array($h2);
                            $i4 = mysqli_fetch_array($i2);
                            $j4 = mysqli_fetch_array($j2);
                            $k4 = mysqli_fetch_array($k2);
                            $l4 = mysqli_fetch_array($l2);
                            $m4 = mysqli_fetch_array($m2);
                            $n4 = mysqli_fetch_array($n2);
                            $o4 = mysqli_fetch_array($o2);
                            $p4 = mysqli_fetch_array($p2);
                            $q4 = mysqli_fetch_array($q2);
                            $r4 = mysqli_fetch_array($r2);
                            $s4 = mysqli_fetch_array($s2);
                            $t4 = mysqli_fetch_array($t2);
                            $u4 = mysqli_fetch_array($u2);
                            $v4 = mysqli_fetch_array($v2);
                            $w4 = mysqli_fetch_array($w2);
                            $x4 = mysqli_fetch_array($x2);
                            $y4 = mysqli_fetch_array($y2);
                            $z4 = mysqli_fetch_array($z2);
                            $a5 = mysqli_fetch_array($a3);
                            $b5 = mysqli_fetch_array($b3);
                            $c5 = mysqli_fetch_array($c3);
                            $d5 = mysqli_fetch_array($d3);
                            $e5 = mysqli_fetch_array($e3);
                            $f5 = mysqli_fetch_array($f3);
                            $g5 = mysqli_fetch_array($g3);
                            $h5 = mysqli_fetch_array($h3);
                            $i5 = mysqli_fetch_array($i3);
                            $j5 = mysqli_fetch_array($j3);
                            // x
                            $diff1 = $b['Kapitalisasi_Pasar'] - $a['Kapitalisasi_Pasar'];
                            $diff2 = $c['Kapitalisasi_Pasar'] - $b['Kapitalisasi_Pasar'];
                            $diff3 = $d['Kapitalisasi_Pasar'] - $c['Kapitalisasi_Pasar'];
                            $diff4 = $e['Kapitalisasi_Pasar'] - $d['Kapitalisasi_Pasar'];
                            $diff5 = $f['Kapitalisasi_Pasar'] - $e['Kapitalisasi_Pasar'];
                            $diff6 = $g['Kapitalisasi_Pasar'] - $f['Kapitalisasi_Pasar'];
                            $diff7 = $h['Kapitalisasi_Pasar'] - $g['Kapitalisasi_Pasar'];
                            $diff8 = $i['Kapitalisasi_Pasar'] - $h['Kapitalisasi_Pasar'];
                            $diff9 = $j['Kapitalisasi_Pasar'] - $i['Kapitalisasi_Pasar'];
                            $diff10 = $k['Kapitalisasi_Pasar'] - $j['Kapitalisasi_Pasar'];
                            $diff11 = $l['Kapitalisasi_Pasar'] - $k['Kapitalisasi_Pasar'];
                            $diff12 = $m['Kapitalisasi_Pasar'] - $l['Kapitalisasi_Pasar'];
                            $diff13 = $n['Kapitalisasi_Pasar'] - $m['Kapitalisasi_Pasar'];
                            $diff14 = $o['Kapitalisasi_Pasar'] - $n['Kapitalisasi_Pasar'];
                            $diff15 = $p['Kapitalisasi_Pasar'] - $o['Kapitalisasi_Pasar'];
                            $diff16 = $q['Kapitalisasi_Pasar'] - $p['Kapitalisasi_Pasar'];
                            $diff17 = $r['Kapitalisasi_Pasar'] - $q['Kapitalisasi_Pasar'];
                            $diff18 = $s['Kapitalisasi_Pasar'] - $r['Kapitalisasi_Pasar'];
                            $diff19 = $t['Kapitalisasi_Pasar'] - $s['Kapitalisasi_Pasar'];
                            $diff20 = $u['Kapitalisasi_Pasar'] - $t['Kapitalisasi_Pasar'];
                            $diff21 = $v['Kapitalisasi_Pasar'] - $u['Kapitalisasi_Pasar'];
                            $diff22 = $w['Kapitalisasi_Pasar'] - $v['Kapitalisasi_Pasar'];
                            $diff23 = $x['Kapitalisasi_Pasar'] - $w['Kapitalisasi_Pasar'];
                            $diff24 = $y['Kapitalisasi_Pasar'] - $x['Kapitalisasi_Pasar'];
                            $diff25 = $z['Kapitalisasi_Pasar'] - $y['Kapitalisasi_Pasar'];
                            $diff26 = $a4['Kapitalisasi_Pasar'] - $z['Kapitalisasi_Pasar'];
                            $diff27 = $b4['Kapitalisasi_Pasar'] - $a4['Kapitalisasi_Pasar'];
                            $diff28 = $c4['Kapitalisasi_Pasar'] - $b4['Kapitalisasi_Pasar'];
                            $diff29 = $d4['Kapitalisasi_Pasar'] - $c4['Kapitalisasi_Pasar'];
                            $diff30 = $e4['Kapitalisasi_Pasar'] - $d4['Kapitalisasi_Pasar'];
                            $diff31 = $f4['Kapitalisasi_Pasar'] - $e4['Kapitalisasi_Pasar'];
                            $diff32 = $g4['Kapitalisasi_Pasar'] - $f4['Kapitalisasi_Pasar'];
                            $diff33 = $h4['Kapitalisasi_Pasar'] - $g4['Kapitalisasi_Pasar'];
                            $diff34 = $i4['Kapitalisasi_Pasar'] - $h4['Kapitalisasi_Pasar'];
                            $diff35 = $j4['Kapitalisasi_Pasar'] - $i4['Kapitalisasi_Pasar'];
                            $diff36 = $k4['Kapitalisasi_Pasar'] - $j4['Kapitalisasi_Pasar'];
                            $diff37 = $l4['Kapitalisasi_Pasar'] - $k4['Kapitalisasi_Pasar'];
                            $diff38 = $m4['Kapitalisasi_Pasar'] - $l4['Kapitalisasi_Pasar'];
                            $diff39 = $n4['Kapitalisasi_Pasar'] - $m4['Kapitalisasi_Pasar'];
                            $diff40 = $o4['Kapitalisasi_Pasar'] - $n4['Kapitalisasi_Pasar'];
                            $diff41 = $p4['Kapitalisasi_Pasar'] - $o4['Kapitalisasi_Pasar'];
                            $diff42 = $q4['Kapitalisasi_Pasar'] - $p4['Kapitalisasi_Pasar'];
                            $diff43 = $r4['Kapitalisasi_Pasar'] - $q4['Kapitalisasi_Pasar'];
                            $diff44 = $s4['Kapitalisasi_Pasar'] - $r4['Kapitalisasi_Pasar'];
                            $diff45 = $t4['Kapitalisasi_Pasar'] - $s4['Kapitalisasi_Pasar'];
                            $diff46 = $u4['Kapitalisasi_Pasar'] - $t4['Kapitalisasi_Pasar'];
                            $diff47 = $v4['Kapitalisasi_Pasar'] - $u4['Kapitalisasi_Pasar'];
                            $diff48 = $w4['Kapitalisasi_Pasar'] - $v4['Kapitalisasi_Pasar'];
                            $diff49 = $x4['Kapitalisasi_Pasar'] - $w4['Kapitalisasi_Pasar'];
                            $diff50 = $y4['Kapitalisasi_Pasar'] - $x4['Kapitalisasi_Pasar'];
                            $diff51 = $z4['Kapitalisasi_Pasar'] - $y4['Kapitalisasi_Pasar'];
                            $diff52 = $a5['Kapitalisasi_Pasar'] - $z4['Kapitalisasi_Pasar'];
                            $diff53 = $b5['Kapitalisasi_Pasar'] - $a5['Kapitalisasi_Pasar'];
                            $diff54 = $c5['Kapitalisasi_Pasar'] - $b5['Kapitalisasi_Pasar'];
                            $diff55 = $d5['Kapitalisasi_Pasar'] - $c5['Kapitalisasi_Pasar'];
                            $diff56 = $e5['Kapitalisasi_Pasar'] - $d5['Kapitalisasi_Pasar'];
                            $diff57 = $f5['Kapitalisasi_Pasar'] - $e5['Kapitalisasi_Pasar'];
                            $diff58 = $g5['Kapitalisasi_Pasar'] - $f5['Kapitalisasi_Pasar'];
                            $diff59 = $h5['Kapitalisasi_Pasar'] - $g5['Kapitalisasi_Pasar'];
                            $diff60 = $i5['Kapitalisasi_Pasar'] - $h5['Kapitalisasi_Pasar'];
                            $diff61 = $j5['Kapitalisasi_Pasar'] - $i5['Kapitalisasi_Pasar'];
                            // $diff62 = $k5['Kapitalisasi_Pasar'] - $j5['Kapitalisasi_Pasar'];

                            $jumlahdiff = $diff1 + $diff2 + $diff3 + $diff4 + $diff5 + $diff6 + $diff7 + $diff8 + $diff9 + $diff10 + $diff11 + $diff12 + $diff13 + $diff14 + $diff15 + $diff16 + $diff17 + $diff18 + $diff19 + $diff20 + $diff21 + $diff22 + $diff23 + $diff24 + $diff25 + $diff26 + $diff27 + $diff28 + $diff29 + $diff30 + $diff31 + $diff32 + $diff33 + $diff34 + $diff35 + $diff36 + $diff37 + $diff38 + $diff39 + $diff40 + $diff41 + $diff42 + $diff43 + $diff44 + $diff45 + $diff46 + $diff47 + $diff48 + $diff49 + $diff50 + $diff51 + $diff52 + $diff53 + $diff54 + $diff55 + $diff56 + $diff57 + $diff58 + $diff59 + $diff60;
                            // lag 1 y
                            $lag1 = $diff2;
                            $lag2 = $diff3;
                            $lag3 = $diff4;
                            $lag4 = $diff5;
                            $lag5 = $diff6;
                            $lag6 = $diff7;
                            $lag7 = $diff8;
                            $lag8 = $diff9;
                            $lag9 = $diff10;
                            $lag10 = $diff11;
                            $lag11 = $diff12;
                            $lag12 = $diff13;
                            $lag13 = $diff14;
                            $lag14 = $diff15;
                            $lag15 = $diff16;
                            $lag16 = $diff17;
                            $lag17 = $diff18;
                            $lag18 = $diff19;
                            $lag19 = $diff20;
                            $lag20 = $diff21;
                            $lag21 = $diff22;
                            $lag22 = $diff23;
                            $lag23 = $diff24;
                            $lag24 = $diff25;
                            $lag25 = $diff26;
                            $lag26 = $diff27;
                            $lag27 = $diff28;
                            $lag28 = $diff29;
                            $lag29 = $diff30;
                            $lag30 = $diff31;
                            $lag31 = $diff32;
                            $lag32 = $diff33;
                            $lag33 = $diff34;
                            $lag34 = $diff35;
                            $lag35 = $diff36;
                            $lag36 = $diff37;
                            $lag37 = $diff38;
                            $lag38 = $diff39;
                            $lag39 = $diff40;
                            $lag40 = $diff41;
                            $lag41 = $diff42;
                            $lag42 = $diff43;
                            $lag43 = $diff44;
                            $lag44 = $diff45;
                            $lag45 = $diff46;
                            $lag46 = $diff47;
                            $lag47 = $diff48;
                            $lag48 = $diff49;
                            $lag49 = $diff50;
                            $lag50 = $diff51;
                            $lag51 = $diff52;
                            $lag52 = $diff53;
                            $lag53 = $diff54;
                            $lag54 = $diff55;
                            $lag55 = $diff56;
                            $lag56 = $diff57;
                            $lag57 = $diff58;
                            $lag58 = $diff59;
                            $lag59 = $diff60;
                            $lag60 = $diff61;
                            // $lag61 = $diff62;

                            $jumlahlag1 = $lag1 + $lag2 + $lag3 + $lag4 + $lag5 + $lag6 + $lag7 + $lag8 + $lag9 + $lag10 + $lag11 + $lag12 + $lag13 + $lag14 + $lag15 + $lag16 + $lag17 + $lag18 + $lag19 + $lag20 + $lag21 + $lag22 + $lag23 + $lag24 + $lag25 + $lag26 + $lag27 + $lag28 + $lag29 + $lag30 + $lag31 + $lag32 + $lag33 + $lag34 + $lag35 + $lag36 + $lag37 + $lag38 + $lag39 + $lag40 + $lag41 + $lag42 + $lag43 + $lag44 + $lag45 + $lag46 + $lag47 + $lag48 + $lag49 + $lag50 + $lag51 + $lag52 + $lag53 + $lag54 + $lag55 + $lag56 + $lag57 + $lag58 + $lag59 + $lag60;
                            // correlation
                            // $y1 = (($a['Kapitalisasi_Pasar'] + $b['Kapitalisasi_Pasar'] + $c['Kapitalisasi_Pasar'] + $d['Kapitalisasi_Pasar'] + $e['Kapitalisasi_Pasar'] + $f['Kapitalisasi_Pasar'] + $g['Kapitalisasi_Pasar'] + $h['Kapitalisasi_Pasar'] + $i['Kapitalisasi_Pasar'] + $j['Kapitalisasi_Pasar'] + $k['Kapitalisasi_Pasar'] + $l['Kapitalisasi_Pasar'] + $m['Kapitalisasi_Pasar'] + $n['Kapitalisasi_Pasar'] + $o['Kapitalisasi_Pasar'] + $p['Kapitalisasi_Pasar'] + $q['Kapitalisasi_Pasar'] + $r['Kapitalisasi_Pasar'] + $s['Kapitalisasi_Pasar'] + $t['Kapitalisasi_Pasar'] + $u['Kapitalisasi_Pasar'] + $v['Kapitalisasi_Pasar'] + $w['Kapitalisasi_Pasar'] + $x['Kapitalisasi_Pasar'] + $y['Kapitalisasi_Pasar'] + $z['Kapitalisasi_Pasar'] + $a2['Kapitalisasi_Pasar'] + $b2['Kapitalisasi_Pasar'] + $c2['Kapitalisasi_Pasar'] + $d2['Kapitalisasi_Pasar'] + $e2['Kapitalisasi_Pasar'] + $f2['Kapitalisasi_Pasar'] + $g2['Kapitalisasi_Pasar'] + $h2['Kapitalisasi_Pasar'] + $i2['Kapitalisasi_Pasar'] + $j2['Kapitalisasi_Pasar'] + $k2['Kapitalisasi_Pasar'] + $l2['Kapitalisasi_Pasar'] + $m2['Kapitalisasi_Pasar'] + $n2['Kapitalisasi_Pasar'] + $o2['Kapitalisasi_Pasar'] + $p2['Kapitalisasi_Pasar'] + $q2['Kapitalisasi_Pasar'] + $r2['Kapitalisasi_Pasar'] + $s2['Kapitalisasi_Pasar'] + $t2['Kapitalisasi_Pasar'] + $u2['Kapitalisasi_Pasar'] + $v2['Kapitalisasi_Pasar'] + $w2['Kapitalisasi_Pasar'] + $x2['Kapitalisasi_Pasar'] + $y2['Kapitalisasi_Pasar'] + $z2['Kapitalisasi_Pasar'] + $a3['Kapitalisasi_Pasar'] + $b3['Kapitalisasi_Pasar'] + $c3['Kapitalisasi_Pasar'] + $d3['Kapitalisasi_Pasar'] + $e3['Kapitalisasi_Pasar'] + $f3['Kapitalisasi_Pasar'] + $g3['Kapitalisasi_Pasar'] + $h3['Kapitalisasi_Pasar'] + $i3['Kapitalisasi_Pasar'] + $j3['Kapitalisasi_Pasar'])) / 12;
                            // // mentahan r correlation
                            // $cra1 = $a['Kapitalisasi_Pasar'] - $y1;
                            // $cra2 = $b['Kapitalisasi_Pasar'] - $y1;
                            // $cra3 = $c['Kapitalisasi_Pasar'] - $y1;
                            // $cra4 = $d['Kapitalisasi_Pasar'] - $y1;
                            // $cra5 = $e['Kapitalisasi_Pasar'] - $y1;
                            // $cra6 = $f['Kapitalisasi_Pasar'] - $y1;
                            // $cra7 = $g['Kapitalisasi_Pasar'] - $y1;
                            // $cra8 = $h['Kapitalisasi_Pasar'] - $y1;
                            // $cra9 = $i['Kapitalisasi_Pasar'] - $y1;
                            // $cra10 = $j['Kapitalisasi_Pasar'] - $y1;
                            // $cra11 = $k['Kapitalisasi_Pasar'] - $y1;
                            // $cra12 = $l['Kapitalisasi_Pasar'] - $y1;
                            // $cra13 = $m['Kapitalisasi_Pasar'] - $y1;
                            // $cra14 = $n['Kapitalisasi_Pasar'] - $y1;
                            // $cra15 = $n['Kapitalisasi_Pasar'] - $y1;
                            // $cra16 = $o['Kapitalisasi_Pasar'] - $y1;
                            // $cra17 = $p['Kapitalisasi_Pasar'] - $y1;
                            // $cra18 = $q['Kapitalisasi_Pasar'] - $y1;
                            // $cra19 = $r['Kapitalisasi_Pasar'] - $y1;
                            // $cra20 = $s['Kapitalisasi_Pasar'] - $y1;
                            // $cra21 = $t['Kapitalisasi_Pasar'] - $y1;
                            // $cra22 = $u['Kapitalisasi_Pasar'] - $y1;
                            // $cra23 = $v['Kapitalisasi_Pasar'] - $y1;
                            // $cra24 = $w['Kapitalisasi_Pasar'] - $y1;
                            // $cra25 = $x['Kapitalisasi_Pasar'] - $y1;
                            // $cra26 = $y['Kapitalisasi_Pasar'] - $y1;
                            // $cra27 = $z['Kapitalisasi_Pasar'] - $y1;
                            // $cra28 = $a2['Kapitalisasi_Pasar'] - $y1;
                            // $cra29 = $b2['Kapitalisasi_Pasar'] - $y1;
                            // $cra30 = $c2['Kapitalisasi_Pasar'] - $y1;
                            // $cra31 = $d2['Kapitalisasi_Pasar'] - $y1;
                            // $cra32 = $e2['Kapitalisasi_Pasar'] - $y1;
                            // $cra33 = $f2['Kapitalisasi_Pasar'] - $y1;
                            // $cra34 = $g2['Kapitalisasi_Pasar'] - $y1;
                            // $cra35 = $h2['Kapitalisasi_Pasar'] - $y1;
                            // $cra36 = $i2['Kapitalisasi_Pasar'] - $y1;
                            // $cra37 = $j2['Kapitalisasi_Pasar'] - $y1;
                            // $cra38 = $k2['Kapitalisasi_Pasar'] - $y1;
                            // $cra39 = $l2['Kapitalisasi_Pasar'] - $y1;
                            // $cra40 = $m2['Kapitalisasi_Pasar'] - $y1;
                            // $cra41 = $n2['Kapitalisasi_Pasar'] - $y1;
                            // $cra42 = $o2['Kapitalisasi_Pasar'] - $y1;
                            // $cra43 = $q2['Kapitalisasi_Pasar'] - $y1;
                            // $cra44 = $r2['Kapitalisasi_Pasar'] - $y1;
                            // $cra45 = $s2['Kapitalisasi_Pasar'] - $y1;
                            // $cra46 = $t2['Kapitalisasi_Pasar'] - $y1;
                            // $cra47 = $u2['Kapitalisasi_Pasar'] - $y1;
                            // $cra48 = $v2['Kapitalisasi_Pasar'] - $y1;
                            // $cra49 = $x2['Kapitalisasi_Pasar'] - $y1;
                            // $cra50 = $y2['Kapitalisasi_Pasar'] - $y1;
                            // $cra51 = $z2['Kapitalisasi_Pasar'] - $y1;
                            // $cra52 = $a3['Kapitalisasi_Pasar'] - $y1;
                            // $cra53 = $b3['Kapitalisasi_Pasar'] - $y1;
                            // $cra54 = $c3['Kapitalisasi_Pasar'] - $y1;
                            // $cra55 = $d3['Kapitalisasi_Pasar'] - $y1;
                            // $cra56 = $e3['Kapitalisasi_Pasar'] - $y1;
                            // $cra57 = $f3['Kapitalisasi_Pasar'] - $y1;
                            // $cra58 = $g3['Kapitalisasi_Pasar'] - $y1;
                            // $cra59 = $h3['Kapitalisasi_Pasar'] - $y1;
                            // $cra60 = $i3['Kapitalisasi_Pasar'] - $y1;
                            // $cra61 = $j3['Kapitalisasi_Pasar'] - $y1;
                            // // $cra13 = $m - $y1;
                            // $cr1 = $cra1 * $cra1;
                            // $cr2 = $cra2 * $cra2;
                            // $cr3 = $cra3 * $cra3;
                            // $cr4 = $cra4 * $cra4;
                            // $cr5 = $cra5 * $cra5;
                            // $cr6 = $cra6 * $cra6;
                            // $cr7 = $cra7 * $cra7;
                            // $cr8 = $cra8 * $cra8;
                            // $cr9 = $cra9 * $cra9;
                            // $cr10 = $cra10 * $cra10;
                            // $cr11 = $cra11 * $cra11;
                            // $cr12 = $cra12 * $cra12;
                            // $cr13 = $cra13 * $cra13;
                            // $cr14 = $cra14 * $cra14;
                            // $cr15 = $cra15 * $cra15;
                            // $cr16 = $cra16 * $cra16;
                            // $cr17 = $cra17 * $cra17;
                            // $cr18 = $cra18 * $cra18;
                            // $cr19 = $cra19 * $cra19;
                            // $cr20 = $cra20 * $cra20;
                            // $cr21 = $cra21 * $cra21;
                            // $cr22 = $cra22 * $cra22;
                            // $cr23 = $cra23 * $cra23;
                            // $cr24 = $cra24 * $cra24;
                            // $cr25 = $cra25 * $cra25;
                            // $cr26 = $cra26 * $cra26;
                            // $cr27 = $cra27 * $cra27;
                            // $cr28 = $cra28 * $cra28;
                            // $cr29 = $cra29 * $cra29;
                            // $cr30 = $cra30 * $cra30;
                            // $cr31 = $cra31 * $cra31;
                            // $cr32 = $cra32 * $cra32;
                            // $cr33 = $cra33 * $cra33;
                            // $cr34 = $cra34 * $cra34;
                            // $cr35 = $cra35 * $cra35;
                            // $cr36 = $cra36 * $cra36;
                            // $cr37 = $cra37 * $cra37;
                            // $cr38 = $cra38 * $cra38;
                            // $cr39 = $cra39 * $cra39;
                            // $cr40 = $cra40 * $cra40;
                            // $cr41 = $cra41 * $cra41;
                            // $cr42 = $cra42 * $cra42;
                            // $cr43 = $cra43 * $cra43;
                            // $cr44 = $cra44 * $cra44;
                            // $cr45 = $cra45 * $cra45;
                            // $cr46 = $cra46 * $cra46;
                            // $cr47 = $cra47 * $cra47;
                            // $cr48 = $cra48 * $cra48;
                            // $cr49 = $cra49 * $cra49;
                            // $cr50 = $cra50 * $cra50;
                            // $cr51 = $cra51 * $cra51;
                            // $cr52 = $cra52 * $cra52;
                            // $cr53 = $cra53 * $cra53;
                            // $cr54 = $cra54 * $cra54;
                            // $cr55 = $cra55 * $cra55;
                            // $cr56 = $cra56 * $cra56;
                            // $cr57 = $cra57 * $cra57;
                            // $cr58 = $cra58 * $cra58;
                            // $cr59 = $cra59 * $cra59;
                            // $cr60 = $cra60 * $cra60;
                            // $cr61 = $cra61 * $cra61;
                            // // R dalam 1 tahun start
                            // // mencari r1
                            // $r1 = (($cra1 * $cra2 * $cra3 * $cra4 * $cra5 * $cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12)) / (($cra1 * $cr2 * $cr3 * $cr4 * $cr5 * $cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12));
                            // // mencari r2
                            // $r2 = (($cra2 * $cra3 * $cra4 * $cra5 * $cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12)) / (($cr2 * $cr3 * $cr4 * $cr5 * $cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12));
                            // // mencari r3
                            // $r3 = (($cra3 * $cra4 * $cra5 * $cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12)) / (($cr3 * $cr4 * $cr5 * $cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12));
                            // // mencari r4
                            // $r4 = (($cra4 * $cra5 * $cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12)) / (($cr4 * $cr5 * $cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12));
                            // // mencari r5
                            // $r5 = (($cra5 * $cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12)) / (($cr5 * $cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12));
                            // // mencari r6
                            // $r6 = (($cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12)) / (($cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12));
                            // // mencari r7
                            // $r7 = (($cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12)) / (($cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12));
                            // // mencari r8
                            // $r8 = (($cra8 * $cra9 * $cra10 * $cra11 * $cra12)) / (($cr8 * $cr9 * $cr10 * $cr11 * $cr12));
                            // // mencari r9
                            // $r9 = (($cra9 * $cra10 * $cra11 * $cra12)) / (($cr9 * $cr10 * $cr11 * $cr12));
                            // // mencari r10
                            // $r10 = (($cra10 * $cra11 * $cra12)) / (($cr10 * $cr11 * $cr12));
                            // // mencari r11
                            // $r11 = (($cra11 * $cra12)) / (($cr11 * $cr12));
                            // // mencari r12
                            // $r12 = $cra12 / $cr12;
                            // // end
                            // // R dalam 2 tahun start
                            // // mencari r1
                            // $r14 = (($cra1 * $cra2 * $cra3 * $cra4 * $cra5 * $cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cra1 * $cr2 * $cr3 * $cr4 * $cr5 * $cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r2
                            // $r15 = (($cra2 * $cra3 * $cra4 * $cra5 * $cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr2 * $cr3 * $cr4 * $cr5 * $cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r3
                            // $r16 = (($cra3 * $cra4 * $cra5 * $cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr3 * $cr4 * $cr5 * $cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r4
                            // $r17 = (($cra4 * $cra5 * $cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr4 * $cr5 * $cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r5
                            // $r18 = (($cra5 * $cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr5 * $cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r6
                            // $r19 = (($cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r7
                            // $r20 = (($cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r8
                            // $r21 = (($cra8 * $cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr8 * $cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r9
                            // $r22 = (($cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r10
                            // $r23 = (($cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r11
                            // $r24 = (($cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r25
                            // $r25 = (($cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r26
                            // $r26 = (($cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r27
                            // $r27 = (($cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r26
                            // $r28 = (($cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r26
                            // $r29 = (($cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r26
                            // $r30 = (($cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r26
                            // $r31 = (($cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r26
                            // $r32 = (($cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r26
                            // $r33 = (($cra20 * $cra21 * $cra22 * $cra23 * $cra24)) / (($cr20 * $cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r26
                            // $r34 = (($cra21 * $cra22 * $cra23 * $cra24)) / (($cr21 * $cr22 * $cr23 * $cr24));
                            // // mencari r26
                            // $r35 = (($cra22 * $cra23 * $cra24)) / (($cr22 * $cr23 * $cr24));
                            // // mencari r26
                            // $r36 = (($cra23 * $cra24)) / (($cr23 * $cr24));
                            // // mencari r26
                            // $r37 = $cra24 / $cr24;
                            // // end
                            // // R dalam 3 tahun
                            // // mencari r1
                            // $r14 = (($cra1 * $cra2 * $cra3 * $cra4 * $cra5 * $cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cra1 * $cr2 * $cr3 * $cr4 * $cr5 * $cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r2
                            // $r15 = (($cra2 * $cra3 * $cra4 * $cra5 * $cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr2 * $cr3 * $cr4 * $cr5 * $cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r3
                            // $r16 = (($cra3 * $cra4 * $cra5 * $cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr3 * $cr4 * $cr5 * $cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r4
                            // $r17 = (($cra4 * $cra5 * $cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr4 * $cr5 * $cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r5
                            // $r18 = (($cra5 * $cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr5 * $cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r6
                            // $r19 = (($cra6 * $cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr6 * $cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r7
                            // $r20 = (($cra7 * $cra8 * $cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr7 * $cr8 * $cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r8
                            // $r21 = (($cra8 * $cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr8 * $cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r9
                            // $r22 = (($cra9 * $cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr9 * $cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r10
                            // $r23 = (($cra10 * $cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr10 * $cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r11
                            // $r24 = (($cra11 * $cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr11 * $cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r25
                            // $r25 = (($cra12 * $cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr12 * $cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r26 = (($cra13 * $cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr13 * $cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r27
                            // $r27 = (($cra14 * $cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr14 * $cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r28 = (($cra15 * $cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr15 * $cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r29 = (($cra16 * $cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr16 * $cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r30 = (($cra17 * $cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr17 * $cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r31 = (($cra18 * $cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr18 * $cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r32 = (($cra19 * $cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr19 * $cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r33 = (($cra20 * $cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr20 * $cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r34 = (($cra21 * $cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr21 * $cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r35 = (($cra22 * $cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr22 * $cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r36 = (($cra23 * $cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr23 * $cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r37 = (($cra24 * $cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr24 * $cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r38 = (($cra25 * $cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr25 * $cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r39 = (($cra26 * $cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr26 * $cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r40 = (($cra27 * $cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr27 * $cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r41 = (($cra28 * $cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr28 * $cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r42 = (($cra29 * $cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr29 * $cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r43 = (($cra30 * $cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr30 * $cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r44 = (($cra31 * $cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr31 * $cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r45 = (($cra32 * $cra33 * $cra34 * $cra35 * $cra36)) / (($cr32 * $cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r46 = (($cra33 * $cra34 * $cra35 * $cra36)) / (($cr33 * $cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r47 = (($cra34 * $cra35 * $cra36)) / (($cr34 * $cr35 * $cr36));
                            // // mencari r26
                            // $r48 = (($cra35 * $cra36)) / (($cr35 * $cr36));
                            // // mencari r26
                            // $r49 = $cra36 / $cr36;
                            // // end
                            // // R dalam 4 tahun
                            // x.y
                            $xy1 = $diff1 * $lag1;
                            $xy2 = $diff2 * $lag2;
                            $xy3 = $diff3 * $lag3;
                            $xy4 = $diff4 * $lag4;
                            $xy5 = $diff5 * $lag5;
                            $xy6 = $diff6 * $lag6;
                            $xy7 = $diff7 * $lag7;
                            $xy8 = $diff8 * $lag8;
                            $xy9 = $diff9 * $lag9;
                            $xy10 = $diff10 * $lag10;
                            $xy11 = $diff11 * $lag11;
                            $xy12 = $diff12 * $lag12;
                            $xy13 = $diff13 * $lag13;
                            $xy14 = $diff14 * $lag14;
                            $xy15 = $diff15 * $lag15;
                            $xy16 = $diff16 * $lag16;
                            $xy17 = $diff17 * $lag17;
                            $xy18 = $diff18 * $lag18;
                            $xy19 = $diff19 * $lag19;
                            $xy20 = $diff20 * $lag20;
                            $xy21 = $diff21 * $lag21;
                            $xy22 = $diff22 * $lag22;
                            $xy23  = $diff23  * $lag23;
                            $xy24  = $diff24  * $lag24;
                            $xy25  = $diff25  * $lag25;
                            $xy26 = $diff26 * $lag26;
                            $xy27  = $diff27  * $lag27;
                            $xy28  = $diff28  * $lag28;
                            $xy29 = $diff29 * $lag29;
                            $xy30  = $diff30  * $lag30;
                            $xy31  = $diff31  * $lag31;
                            $xy32  = $diff32  * $lag32;
                            $xy33  = $diff33  * $lag33;
                            $xy34  = $diff34  * $lag34;
                            $xy35  = $diff35  * $lag35;
                            $xy36  = $diff36  * $lag36;
                            $xy37  = $diff37  * $lag37;
                            $xy38  = $diff38  * $lag38;
                            $xy39  = $diff39  * $lag39;
                            $xy40  = $diff40  * $lag40;
                            $xy41  = $diff41  * $lag41;
                            $xy42  = $diff42  * $lag42;
                            $xy43  = $diff43  * $lag43;
                            $xy44  = $diff44  * $lag44;
                            $xy45  = $diff45  * $lag45;
                            $xy46  = $diff46  * $lag46;
                            $xy47  = $diff47  * $lag47;
                            $xy48  = $diff48  * $lag48;
                            $xy49  = $diff49  * $lag49;
                            $xy50  = $diff50  * $lag50;
                            $xy51  = $diff51  * $lag51;
                            $xy52  = $diff52  * $lag52;
                            $xy53  = $diff53  * $lag53;
                            $xy54  = $diff54  * $lag54;
                            $xy55  = $diff55  * $lag55;
                            $xy56  = $diff56  * $lag56;
                            $xy57  = $diff57  * $lag57;
                            $xy58  = $diff58  * $lag58;
                            $xy59  = $diff59  * $lag59;
                            $xy60  = $diff60  * $lag60;

                            $jumlahxy = $xy1 + $xy2 + $xy3 + $xy4 + $xy5 + $xy6 + $xy7 + $xy8 + $xy9 + $xy10 + $xy11 + $xy12 + $xy13  + $xy14 +  $xy15 +  $xy16 +  $xy17  + $xy18 +  $xy19  + $xy20 +  $xy21 +  $xy22 +  $xy23 +  $xy24 +  $xy25 +  $xy26 +  $xy27  + $xy28 +  $xy29 +  $xy30 +  $xy31 +  $xy32 +  $xy33 +  $xy34 +  $xy35 +  $xy36 +  $xy37 +  $xy38 +  $xy39 +  $xy40 +  $xy41 +  $xy42 +  $xy43 +  $xy44 +  $xy45 +  $xy46 +  $xy47 +  $xy48 +  $xy49 +  $xy50 +  $xy51 +  $xy52 +  $xy53 +  $xy54 +  $xy55 +  $xy56 +  $xy57 +  $xy58 +  $xy59 +  $xy60;
                            // x.x
                            $xx1 = $diff1 * $diff1;
                            $xx2 = $diff2 * $diff2;
                            $xx3 = $diff3 * $diff3;
                            $xx4 = $diff4 * $diff4;
                            $xx5 = $diff5 * $diff5;
                            $xx6 = $diff6 * $diff6;
                            $xx7 = $diff7 * $diff7;
                            $xx8 = $diff8 * $diff8;
                            $xx9 = $diff9 * $diff9;
                            $xx10 = $diff10 * $diff10;
                            $xx11 = $diff11 * $diff11;
                            $xx12  = $diff12  * $diff12;
                            $xx13  = $diff13  * $diff13;
                            $xx14  = $diff14  * $diff14;
                            $xx15  = $diff15  * $diff15;
                            $xx16  = $diff16  * $diff16;
                            $xx17  = $diff17  * $diff17;
                            $xx18  = $diff18  * $diff18;
                            $xx19  = $diff19  * $diff19;
                            $xx20  = $diff20  * $diff20;
                            $xx21  = $diff21  * $diff21;
                            $xx22  = $diff22  * $diff22;
                            $xx23  = $diff23  * $diff23;
                            $xx24  = $diff24  * $diff24;
                            $xx25  = $diff25  * $diff25;
                            $xx26  = $diff26  * $diff26;
                            $xx27  = $diff27  * $diff27;
                            $xx28  = $diff28  * $diff28;
                            $xx29  = $diff29  * $diff29;
                            $xx30  = $diff30  * $diff30;
                            $xx31  = $diff31  * $diff31;
                            $xx32  = $diff32  * $diff32;
                            $xx33  = $diff33  * $diff33;
                            $xx34  = $diff34  * $diff34;
                            $xx35  = $diff35  * $diff35;
                            $xx36  = $diff36  * $diff36;
                            $xx37  = $diff37  * $diff37;
                            $xx38  = $diff38  * $diff38;
                            $xx39  = $diff39  * $diff39;
                            $xx40  = $diff40  * $diff40;
                            $xx41  = $diff41  * $diff41;
                            $xx42  = $diff42  * $diff42;
                            $xx43  = $diff43  * $diff43;
                            $xx44  = $diff44  * $diff44;
                            $xx45  = $diff45  * $diff45;
                            $xx46  = $diff46  * $diff46;
                            $xx47  = $diff47  * $diff47;
                            $xx48  = $diff48  * $diff48;
                            $xx49  = $diff49  * $diff49;
                            $xx50  = $diff50  * $diff50;
                            $xx51  = $diff51  * $diff51;
                            $xx52  = $diff52  * $diff52;
                            $xx53  = $diff53  * $diff53;
                            $xx54  = $diff54  * $diff54;
                            $xx55  = $diff55  * $diff55;
                            $xx56  = $diff56  * $diff56;
                            $xx57  = $diff57  * $diff57;
                            $xx58  = $diff58  * $diff58;
                            $xx59  = $diff59  * $diff59;
                            $xx60  = $diff60  * $diff60;

                            $jumlahxx = $xx1 + $xx2 + $xx3 + $xx4 + $xx5 + $xx6 + $xx7 + $xx8 + $xx9 + $xx10 + $xx11 + $xx12  + $xx13 +  $xx14 +  $xx15  + $xx16  + $xx17 +  $xx18 +  $xx19 +  $xx20 +  $xx21 +  $xx22 +  $xx23 +  $xx24 +  $xx25 +  $xx26 +  $xx27 +  $xx28  + $xx29  + $xx30  + $xx31 +  $xx32 +  $xx33  + $xx34  + $xx35  + $xx36  + $xx37 +  $xx38 +  $xx39 +  $xx40 +  $xx41 +  $xx42 +  $xx43 +  $xx44  + $xx45  + $xx46  + $xx47 +  $xx48 +  $xx49 +  $xx50 +  $xx51 +  $xx52 +  $xx53 +  $xx54 +  $xx55 +  $xx56 +  $xx57 +  $xx58  + $xx59  + $xx60;
                            // y.y
                            $yy1 = $lag1 * $lag1;
                            $yy2 = $lag2 * $lag2;
                            $yy3 = $lag3 * $lag3;
                            $yy4 = $lag4 * $lag4;
                            $yy5 = $lag5 * $lag5;
                            $yy6 = $lag6 * $lag6;
                            $yy7 = $lag7 * $lag7;
                            $yy8 = $lag8 * $lag8;
                            $yy9 = $lag9 * $lag9;
                            $yy10 = $lag10 * $lag10;
                            $yy11 = $lag11 * $lag11;
                            $yy12   = $lag12  * $lag12;
                            $yy13   = $lag13  * $lag13;
                            $yy14   = $lag14  * $lag14;
                            $yy15   = $lag15  * $lag15;
                            $yy16   = $lag16  * $lag16;
                            $yy17   = $lag17  * $lag17;
                            $yy18   = $lag18  * $lag18;
                            $yy19   = $lag19  * $lag19;
                            $yy20   = $lag20  * $lag20;
                            $yy21   = $lag21  * $lag21;
                            $yy22   = $lag22  * $lag22;
                            $yy23   = $lag23  * $lag23;
                            $yy24   = $lag24  * $lag24;
                            $yy25   = $lag25  * $lag25;
                            $yy26   = $lag26  * $lag26;
                            $yy27   = $lag27  * $lag27;
                            $yy28   = $lag28  * $lag28;
                            $yy29   = $lag29  * $lag29;
                            $yy30   = $lag30  * $lag30;
                            $yy31   = $lag31  * $lag31;
                            $yy32   = $lag32  * $lag32;
                            $yy33   = $lag33  * $lag33;
                            $yy34   = $lag34  * $lag34;
                            $yy35   = $lag35  * $lag35;
                            $yy36   = $lag36  * $lag36;
                            $yy37   = $lag37  * $lag37;
                            $yy38   = $lag38  * $lag38;
                            $yy39   = $lag39  * $lag39;
                            $yy40   = $lag40  * $lag40;
                            $yy41   = $lag41  * $lag41;
                            $yy42   = $lag42  * $lag42;
                            $yy43   = $lag43  * $lag43;
                            $yy44   = $lag44  * $lag44;
                            $yy45   = $lag45  * $lag45;
                            $yy46   = $lag46  * $lag46;
                            $yy47   = $lag47  * $lag47;
                            $yy48   = $lag48  * $lag48;
                            $yy49   = $lag49  * $lag49;
                            $yy50   = $lag50  * $lag50;
                            $yy51   = $lag51  * $lag51;
                            $yy52   = $lag52  * $lag52;
                            $yy53   = $lag53  * $lag53;
                            $yy54   = $lag54  * $lag54;
                            $yy55   = $lag55  * $lag55;
                            $yy56   = $lag56  * $lag56;
                            $yy57   = $lag57  * $lag57;
                            $yy58   = $lag58  * $lag58;
                            $yy59   = $lag59  * $lag59;
                            $yy60   = $lag60  * $lag60;


                            $jumlahyy = $yy1 + $yy2 + $yy3 + $yy4 + $yy5 + $yy6 + $yy7 + $yy8 + $yy9 + $yy10 + $yy11 + $yy12 +  $yy13 +  $yy14  + $yy15  + $yy16  + $yy17  + $yy18  + $yy19  + $yy20 +  $yy21  + $yy22 +  $yy23 +  $yy24 +  $yy25  + $yy26  + $yy27  + $yy28 +  $yy29  + $yy30  + $yy31 +  $yy32 +  $yy33 +  $yy34 +  $yy35  + $yy36  + $yy37  + $yy38  + $yy39 +  $yy40 +  $yy41  + $yy42 +  $yy43 +  $yy44 +  $yy45 +  $yy46 +  $yy47 +  $yy48  + $yy49 +  $yy50  + $yy51  + $yy52 +  $yy53 +  $yy54 +  $yy55 +  $yy56 +  $yy57 +  $yy58 +  $yy59 +  $yy60;
                            // rumus korelasi
                            $kuadratx = $jumlahdiff * $jumlahdiff;
                            $kuadraty = $jumlahlag1 * $jumlahlag1;
                            $rxy1 = 60 * $jumlahxy - $jumlahdiff * $jumlahlag1;
                            $rxy2 = sqrt(((60 * $jumlahxx) - $kuadratx) * (60 * $jumlahyy - $kuadraty));
                            $jumlrxy = $rxy1 / $rxy2;
                            // dyt
                            $dyt1 = $jumlrxy * $diff1;
                            $dyt2 = $jumlrxy * $diff2;
                            $dyt3 = $jumlrxy * $diff3;
                            $dyt4 = $jumlrxy * $diff4;
                            $dyt5 = $jumlrxy * $diff5;
                            $dyt6 = $jumlrxy * $diff6;
                            $dyt7 = $jumlrxy * $diff7;
                            $dyt8 = $jumlrxy * $diff8;
                            $dyt9 = $jumlrxy * $diff9;
                            $dyt10 = $jumlrxy * $diff10;
                            $dyt11 = $jumlrxy * $diff11;
                            // $dyt1 = $jumlrxy * $diff1;
                            echo $jumlrxy;
                            ?>
                            <div class="tbl-content">
                              <table cellpadding="0" cellspacing="0" border="0">

                                <tr>
                                  <td>1</td>
                                  <td>2017-01-31</td>
                                  <!-- <td class="Cap"><input type="text" name="" value="<?php $dyt1 = $jumlrxy * $diff1;
                                                                                          echo $dyt1 ?>" readonly></td> -->
                                  <td class="Cap"><?php $final = $dyt1 + $b['Kapitalisasi_Pasar'];
                                                  echo $final ?></td>
                                  <!-- <td class="Vol"><?php echo $tampil["Volume_Transaksi"]; ?></td>
                                  <td class="Sat"><?php echo $tampil["Satuan"]; ?></td>
                                  <td class="Har"><?php echo $tampil["Harga"]; ?></td>
                                  <td class="Sir"><?php echo $tampil["Sirkulasi_Beredar"]; ?></td> -->
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                </tr>

                          </tbody>
                          <tfoot>
                          </tfoot>
                        </table>
                      </div>
                    </table>
                  </form>
                </div>
                <div class="filterDiv forecast2">
                  <table id="Table" class="table table-bordered table-striped">
                    <div class="tbl-header">
                      <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Periode</th>
                            <th class="Cap">Kapitalisasi Pasar</th>
                            <th class="Vol">Volume Transaksi</th>
                            <th class="Sat">Satuan</th>
                            <th class="Har">Harga</th>
                            <th class="Sir">Sirkulasi Beredar</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          include 'koneksi.php';
                          $query = $conn->query("SELECT * FROM sampel_data limit 24");
                          foreach ($query as $tampil) {
                          ?>
                            <div class="tbl-content">
                              <table cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td><?php echo $tampil["id_data"]; ?></td>
                                  <td><?php echo $tampil["Periode"]; ?></td>
                                  <td class="Cap"><?php echo $tampil["Kapitalisasi_Pasar"]; ?></td>
                                  <td class="Vol"><?php echo $tampil["Volume_Transaksi"]; ?></td>
                                  <td class="Sat"><?php echo $tampil["Satuan"]; ?></td>
                                  <td class="Har"><?php echo $tampil["Harga"]; ?></td>
                                  <td class="Sir"><?php echo $tampil["Sirkulasi_Beredar"]; ?></td>
                                </tr>
                              <?php } ?>
                        </tbody>
                        <tfoot>
                        </tfoot>
                      </table>
                    </div>
                  </table>
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
  <script>
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
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>
  <script>
    var overlay = document.getElementById("overlay"); /* untuk mengambil elemen berdasarkan id yang ada id html */

    window.addEventListener('load', function() {
      overlay.style.display = 'none';
    })
  </script>
</body>

</html>
</div>