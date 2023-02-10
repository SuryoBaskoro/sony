<?php
include "../koneksi.php";
$id = $_POST['id_data'];
$per = $_POST['Periode'];
$kap = $_POST['Kapitalisasi_Pasar'];
$vol = $_POST['Volume_Transaksi'];
$sat = $_POST['Satuan'];
$har = $_POST['Harga'];
$sir = $_POST['Sirkulasi_Beredar'];

mysqli_query($conn, "UPDATE sampel_data set Periode='$per', Kapitalisasi_Pasar='$kap', Volume_Transaksi='$vol' , Satuan='$sat', Harga='$har', Sirkulasi_Beredar='$sir' where id_data='$id'");
header('location:data.php');
