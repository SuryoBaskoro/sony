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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
  <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
  <style type="text/css">
    input {
      position: absolute;
      margin: 1px 0px 0px 20px;
      padding-top: 4px;
      width: 12%;
    }

    .navbar {
      font-family: century gothic;
      position: absolute;
      margin: -1px 0px 0px 0px;
      display: inline-block;
      padding-right: 13px;
      background-color: #141414;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }

    .navbar .navbar-right {
      font-family: century gothic;
      float: left;
      color: white;
      margin-left: 77.5px;
      margin-right: 1px;
      text-decoration: none;
      text-align: center;
    }

    .navbar i {
      margin-left: 10px;
      color: #f9f9f9;
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

    .icon-dropdown {
      font-size: 12px;
      padding-right: 0px;
      background: none;
      color: white;
      border: none;
      border-radius: 7px;
      margin: 15px 0px 15px 133px;
    }

    .dropdown-menu li a:hover {
      background-color: #f5962a;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      color: white;
    }

    .dropdown-menu {
      margin-right: 100px;
      position: absolute;
      margin-left: 1400px;
      margin-top: -19px;
      background-color: white;
      min-width: 100px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-menu li a {
      color: black;
      float: center;
      padding: 10px 10px 10px 10px;
      display: block;
      border-radius: 5px;
    }

    .caret {
      margin-bottom: -43px;
      margin-left: 57px;
    }

    body {
      font-family: century gothic;
      height: 50cm;
      background-color: #141414
    }

    .container {
      margin: 65px 0px 0px 0px;
      padding: 170px;
      position: absolute;
      width: 100%;
      min-height: 200px;
      background-image: url('/MASTER/img/Home_1x.jpg');
      background-repeat: no-repeat;
      background-size: cover;
    }

    h3 {
      color: white;
      margin-left: -140px;
      font-style: black;
      font-size: 28px;
      text-shadow: black 2px 2px 8px;
      margin-top: -30px;
    }

    p {
      font-family: calibri;
      color: white;
      margin-left: -140px;
      font-style: black;
      font-size: 16px;
      text-shadow: black 2px 2px 8px;
      margin-bottom: -48px;
    }

    p1 {
      margin-left: -120px;
      text-shadow: black 2px 2px 8px;
    }

    hr {
      margin-right: 730px;
      margin-left: -140px;
      margin-top: 10px;
    }

    .headline {
      padding-top: 489px;
    }

    h1 {
      position: absolute;
      margin-top: 50px;
      margin-left: 570px;
      font-family: century gothic;
      color: white;
      text-shadow: black 2px 2px 8px;
    }

    .word-line hr {
      position: absolute;
      margin-top: 120px;
      margin-bottom: -80px;
      padding-left: 540px;
      padding-right: 600px;
      margin-right: 100px;
      margin-left: 180px;
    }

    .word-line2 hr {
      position: absolute;
      margin-top: 568px;
      margin-bottom: -80px;
      padding-left: 540px;
      padding-right: 600px;
      margin-right: 100px;
      margin-left: 200px;
    }

    .word-line3 hr {
      position: absolute;
      margin-top: 0px;
      margin-bottom: -80px;
      padding-left: 540px;
      padding-right: 600px;
      margin-right: 100px;
      margin-left: 200px;
    }

    .word-line4 hr {
      position: absolute;
      margin-top: -58px;
      margin-bottom: -80px;
      padding-left: 540px;
      padding-right: 600px;
      margin-right: 100px;
      margin-left: 200px;
    }

    p2 {
      margin-top: 100px;
      font-size: 13.5px;
      margin-left: 350px;
      position: absolute;
      color: white;
      font-family: arial;
      text-align: center;
      line-height: 17pt;
      letter-spacing: 0.5pt;
    }

    .row {
      margin-top: 100px;
      margin-right: 0px;
    }

    .card {
      background-color: #474747;
      position: absolute;
      margin-top: 160px;
      margin-left: 60px;
      padding-bottom: 70px;
      padding-left: 170px;
      padding-top: 170px;
      padding-right: 70px;
      border-radius: 20px;
      border: 1px solid white;
      box-shadow: #f5962a 0px 0px 10px 0px;
    }

    .card-title {
      font-size: 16px;
      margin-left: -140px;
      color: white;
      font-style: italic;
    }

    .card-img-top {
      width: 240px;
      margin-top: -200px;
      margin-left: -170px;
    }

    .card-text {
      color: white;
      margin-left: -140px;
      margin-right: -40px;
      text-align: justify;
      font-style: black;
      font-size: 16px;
      text-shadow: #f5962a 0px 0px 10px 0px;
    }

    .footer {
      width: 100%;
      padding-top: 10px;
      padding-bottom: 13px;
      padding-left: 693.2px;
      padding-right: 600px;
      position: absolute;
      background-color: #f5962a;
      color: white;
      margin: 347px 0px 0px 15px;
      text-align: center;
    }

    .logo-form {
      width: 35%;
      margin-top: -8px;
      margin-bottom: 5px;
    }

    .logo-form2 {
      width: 35%;
      margin-top: -8px;
      margin-bottom: 5px;
    }

    .triangle-home {
      margin-left: 997px;
      margin-top: 630px;
    }

    .triangle-home2 {
      margin-left: 15px;
      margin-top: 55px;
    }

    .kata-kata2 h1 {
      margin-top: -510px;
      margin-left: 95px;
    }

    .kata-kata2 p2 {
      margin-top: -470px;
      margin-left: 95px;
      text-align: left;
    }

    .kata-kata3 p2 {
      margin-top: -350px;
      margin-left: 95px;
      text-align: left;
    }

    .kata-kata4 p2 {
      margin-top: -230px;
      margin-left: 95px;
      text-align: left;
    }

    .kata-kata5 h1 {
      margin-top: 140px;
      margin-left: 1055px;
    }

    .kata-kata5 p2 {
      margin-top: 185px;
      margin-left: 650px;
      text-align: right;
    }

    .kata-kata6 p2 {
      margin-top: 310px;
      margin-left: 710px;
      text-align: right;
    }

    .kata-kata7 p2 {
      margin-top: 440px;
      margin-left: 710px;
      text-align: right;
    }


    .footer-distributed {
      background-color: #292c2f;
      box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
      box-sizing: border-box;
      width: 100%;
      text-align: left;
      font: bold 16px sans-serif;
      padding: 55px 50px;
      margin-top: 100px;
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
      margin-left: -10px;
    }

    #Nama {
      margin-left: -2000px;
      color: red;
      width: 80%;
    }
  </style>

  <!-- icon -->
  <link rel="icon" type="image/x-icon" href="/MASTER/img/Logo Bitre Cast.png">
  <!-- picture -->
  <div class="container">
    <h3 data-aos="fade-right" data-aos-duration="1100">Analyze The Movement of </br> Your Crypto Assets</h3>
    <hr data-aos="fade-right" data-aos-duration="1200">
    <p data-aos="fade-right" data-aos-duration="1300">Bitrecast menggunakan data historical bitcoin selama lima tahun </br> untuk membantu anda dalam memprediksi
      hingga dua </br> tahun kedepan dengan mudah. &nbsp; <strong>MULAI SEKARANG !</strong></p>
  </div>
  <!-- navbar -->
  <div class="navbar" data-aos="fade-down" data-aos-duration="1500">
    <!-- logo_navbar -->
    <input type="image" value='Home' onClick="window.location.href='home_special.php';" src="/MASTER/img/Logo Bitre Cast2.png" width=13%>
    <ul class="navbar-button">
      <li><a href="forecast.php">FORECAST</a></li>
      <li class="blockchain-dropdown">
        <a href="#" class="dropbutton">BLOCKCHAIN</a>
        <ul class="blockchain-dropdown_V">
          <li><a href="https://blockchair.com/id/bitcoin/blocks" target="_blank">Blocks</a></li>
          <li><a href="https://blockchair.com/id/bitcoin/transactions" target="_blank">Transaction</a></li>
          <li><a href="https://blockchair.com/id/bitcoin/outputs" target="_blank">Output</a></li>
          <li><a href="https://blockchair.com/id/bitcoin/addresses" target="_blank">Address</a></li>
        </ul>
      </li>
      <li><a href="https://coinmarketcap.com/currencies/bitcoin/markets/" target="_blank">MARKET</a></li>
      <li><a href="https://news.bitcoin.com/" target="_blank">NEWS</a></li>
      <ul><button type="button" class="icon-dropdown" data-toggle="dropdown">
          <?php
          $user_id = $_SESSION['id_user'];
          $data = mysqli_query($conn, "SELECT * FROM user where id_user = $user_id");
          $muncul = mysqli_fetch_array($data);
          ?>
          <p>Halo, <?php echo $muncul['Nama'] ?>
            <i href="#" class='fas fa-user-circle' style='font-size:30px'></i>
          </p>
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#Profile">Profile</a></li>
          <li><a href="#Setting">Subscribe</a></li>
          <li><a href="home.php">Log Out</a></li>
        </ul>
        </li>
  </div>
</head>

<body>
  <?php
  if (isset($_SESSION['nama']) == true) {
    echo "<script>
    $(document).ready(function() {
        swal('Succes','','succes');
    });
    </script>";
  }
  ?>
  <div class="headline">
    <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
    <coingecko-coin-price-marquee-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="idr" background-color="#f9f9f9" locale="en"></coingecko-coin-price-marquee-widget>
  </div>
  <div class="kata-kata" data-aos="fade-up" data-aos-duration="1500">
    <h1><strong>Keunggulan BitreCast<strong></h1>
    <br>
    <p2>BitreCast dapat membantu Anda untuk meminimalisir resiko dari kerugian
      investasi aset digital cryptocurrency, <br> dengan melakukan analisa prediksi selama beberapa periode kedepan
      yang meliputi Harga pasar, <br> Kapitalisasi Pasar, dan Volume Transaksi yang terjadi. Anda akan diberikan
      data Prediksi dalam bentuk <br> Grafik dan angka, Berita Terupdate dari dunia aset digital, dan Market dari
      aset digital Bitcoin.</p2>
  </div>
  <div class="word-line" data-aos="fade-up" data-aos-duration="1500">
    <hr>
  </div>
  <!--card-->
  <div class="row">
    <div class="col-sm-3">
      <div class="card" style="width: 18rem;" data-aos="flip-left" data-aos-duration="300">
        <img class="card-img-top" src="/MASTER/img/icon_card.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">CHARTS</h5>
          <p class="card-text">Data prediksi akan muncul dalam bentuk angka dan grafik sehingga Anda juga dapat
            melakukan analisa teknikal secara mandiri.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 18rem;" data-aos="flip-left" data-aos-duration="700">
        <img class="card-img-top" src="/MASTER/img/icon_card2.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">FORECAST</h5>
          <p class="card-text">Anda dapat bebas memilih periode peramalan yang akan anda lakukan dengan time frame
            bulanan hingga dua tahun kedepan.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card" style="width: 18rem;" data-aos="flip-left" data-aos-duration="1100">
        <img class="card-img-top" src="/MASTER/img/icon_card3.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">HOT NEWS</h5>
          <p class="card-text">Selain data peramalan, Anda juga mendapatkan berita terupdate tentang
            aset kripto dari kami melalui web Bitcoin.com.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 18rem;" data-aos="flip-left" data-aos-duration="1500">
        <img class="card-img-top" src="/MASTER/img/icon_card4.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">MARKET DATA</h5>
          <p class="card-text">Anda juga dapat melacak data market dari Bitcoin, sehingga Anda dapat
            mengetahui di bursa mana saja Bitcoin tersedia.</p>
        </div>
      </div>
    </div>
    <div class="word-line2" data-aos="fade-up" data-aos-duration="1500">
      <hr>
    </div>
    <img class="triangle-home" src="/MASTER/img/triangle_home.png" alt="" width=35% data-aos="fade-down" data-aos-duration="1500">
    <div class="kata-kata2">
      <h1><strong>Edukasi Investasi<strong></h1>
      <br>
      <p2>BitreCast dapat membantu Anda untuk meminimalisir resiko dari kerugian
        investasi aset digital cryptocurrency, <br> dengan melakukan analisa prediksi selama beberapa periode kedepan
        yang meliputi Harga pasar, <br> Kapitalisasi Pasar, dan Volume Transaksi yang terjadi. Anda akan diberikan
        data Prediksi dalam bentuk <br> Grafik dan angka, Berita Terupdate dari dunia aset digital, dan Market dari
        aset digital Bitcoin.</p2>
    </div>
    <div class="kata-kata3">
      <p2>BitreCast dapat membantu Anda untuk meminimalisir resiko dari kerugian
        investasi aset digital, <br> dengan melakukan analisa prediksi selama beberapa periode kedepan
        yang meliputi Harga pasar, <br> Kapitalisasi Pasar, dan Volume Transaksi yang terjadi. Anda akan diberikan
        data Prediksi dalam bentuk <br> Grafik dan angka, Berita Terupdate dari dunia aset digital, dan Market dari
        aset digital Bitcoin.</p2>
    </div>
    <div class="kata-kata4">
      <p2>BitreCast dapat membantu Anda untuk meminimalisir resiko dari kerugian
        investasi aset digital, <br> dengan melakukan analisa prediksi selama beberapa periode kedepan
        yang meliputi Harga pasar, <br> Kapitalisasi Pasar, dan Volume Transaksi yang terjadi. Anda akan diberikan
        data Prediksi dalam bentuk <br> Grafik dan angka, Berita Terupdate dari dunia aset digital, dan Market dari
        aset digital Bitcoin.</p2>
    </div>
    <div class="word-line3" data-aos="fade-up" data-aos-duration="1500">
      <hr>
    </div>
    <div class="kata-kata5">
      <h1><strong>Petunjuk Penggunaan<strong></h1>
      <br>
      <p2>BitreCast dapat membantu Anda untuk meminimalisir resiko dari kerugian
        investasi aset digital cryptocurrency, <br> dengan melakukan analisa prediksi selama beberapa periode kedepan
        yang meliputi Harga pasar, <br> Kapitalisasi Pasar, dan Volume Transaksi yang terjadi. Anda akan diberikan
        data Prediksi dalam bentuk <br> Grafik dan angka, Berita Terupdate dari dunia aset digital, dan Market dari
        aset digital Bitcoin.</p2>
    </div>
    <div class="kata-kata6">
      <p2>BitreCast dapat membantu Anda untuk meminimalisir resiko dari kerugian
        investasi aset digital, <br> dengan melakukan analisa prediksi selama beberapa periode kedepan
        yang meliputi Harga pasar, <br> Kapitalisasi Pasar, dan Volume Transaksi yang terjadi. Anda akan diberikan
        data Prediksi dalam bentuk <br> Grafik dan angka, Berita Terupdate dari dunia aset digital, dan Market dari
        aset digital Bitcoin.</p2>
    </div>
    <div class="kata-kata7">
      <p2>BitreCast dapat membantu Anda untuk meminimalisir resiko dari kerugian
        investasi aset digital, <br> dengan melakukan analisa prediksi selama beberapa periode kedepan
        yang meliputi Harga pasar, <br> Kapitalisasi Pasar, dan Volume Transaksi yang terjadi. Anda akan diberikan
        data Prediksi dalam bentuk <br> Grafik dan angka, Berita Terupdate dari dunia aset digital, dan Market dari
        aset digital Bitcoin.</p2>
    </div>
    <img class="triangle-home2" src="/MASTER/img/triangle_home2.png" alt="" width=35% data-aos="fade-down" data-aos-duration="1500">
    <div class="word-line4" data-aos="fade-up" data-aos-duration="900">
      <hr>
    </div>
    <!-- Footer -->
    <footer class="footer-distributed" data-aos="fade-up" data-aos-duration="1500">
      <div class="footer-left">
        <img class="image-footer" src="/MASTER/img/Logo Bitre Cast2.png" width=40%>
        <p class="footer-links">
          <a href="#">Home</a>??
          <a href="https://blockchair.com/id/bitcoin/blocks" target="_blank">Blocks</a>??
          <a href="https://blockchair.com/id/bitcoin/transactions" target="_blank">Transactions</a>??
          <a href="https://blockchair.com/id/bitcoin/outputs" target="_blank">Output</a>??
          <a href="https://blockchair.com/id/bitcoin/addresses" target="_blank">Address</a>??
          <a href="https://news.bitcoin.com/" target="_blank">News</a>
        </p>
        <p class="footer-company-name">Copyright?? 2022 BitreCast</p>
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
      <p1>Copyright?? 2022 BitreCast</p1>
    </div>
    <!-- Animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>

</html>
</div>