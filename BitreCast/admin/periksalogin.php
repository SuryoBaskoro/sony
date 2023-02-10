<?php
include "../koneksi.php";
session_start();
$email = $_POST['email'];
$pass = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM user where Email='$email' AND Password='$pass'");

if (mysqli_num_rows($result) > 0) {
    sleep(2);
    $data = mysqli_fetch_assoc($result);
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['nama'] = $data['Nama'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['pass'] = $data['Password'];
    header("Location: dashboard.php");
} else {
    sleep(2);
    echo "<script>
    $(document).ready(function() {
        swal('Succes','','succes');
    });
    </script>";
    header("Location: index.php");
}
