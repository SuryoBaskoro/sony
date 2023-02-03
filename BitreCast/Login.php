<?php

session_start();
require 'koneksi.php';

$nama = $_POST["Nama"];
$password = $_POST["Password"];

$query = "SELECT * FROM user WHERE Nama = '$nama' AND Password = '$password'";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    sleep(2);
    $data = mysqli_fetch_assoc($result);
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['nama'] = $data['Nama'];
    $_SESSION['pass'] = $data['Password'];
    header("Location: home_special.php");
} else {
    sleep(2);
    echo "<script>
    $(document).ready(function() {
        swal('Succes','','succes');
    });
    </script>";
    header("Location: home.php");
}
