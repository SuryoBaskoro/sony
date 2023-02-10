<?php 
include "../koneksi.php";
$id = $_POST['id_data'];
mysqli_query($conn, "DELETE FROM sampel_data where id_data='$id'");
header('location:data.php');
