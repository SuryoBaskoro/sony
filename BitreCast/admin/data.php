<!DOCTYPE html>
<html lang="en">
<?php
include "../koneksi.php";
session_start();
if ($_SESSION['nama'] != "admin") {
    header('location:index.php');
}
?>
<?php
include "header.php";

?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php
        include "sidebar.php";
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php
            include "navbar.php";
            ?>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="text-align: center;">NO</th>
                                            <th scope="col" style="text-align: center;">Periode</th>
                                            <th scope="col" style="text-align: center;">Kapitalisasi Pasar</th>
                                            <th scope="col" style="text-align: center;">Valome Transaksi</th>
                                            <th scope="col" style="text-align: center;">Satuan</th>
                                            <th scope="col" style="text-align: center;">Harga</th>
                                            <th scope="col" style="text-align: center;">Sirkulasi Beredar</th>
                                            <th scope="col" style="text-align: center;">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "../koneksi.php";
                                        $r = mysqli_query($conn, "SELECT * FROM sampel_data");

                                        while ($su = mysqli_fetch_array($r)) {
                                        ?>
                                            <tr>
                                                <th scope="row" style="text-align: center;"><?php echo $su['id_data'] ?></th>
                                                <td style="text-align: center;"><?php echo $su['Periode'] ?></td>
                                                <td style="text-align: center;"><?php echo $su['Kapitalisasi_Pasar'] ?></td>
                                                <td style="text-align: center;"><?php echo $su['Volume_Transaksi'] ?></td>
                                                <td style="text-align: center;"><?php echo $su['Satuan'] ?></td>
                                                <td style="text-align: center;"><?php echo $su['Harga'] ?></td>
                                                <td style="text-align: center;"><?php echo $su['Sirkulasi_Beredar'] ?></td>
                                                <td style="text-align: center;">
                                                    <a href="edit-data.php?id=<?php echo $su['id_data'] ?>" class="btn btn-warning"><i class="fa fa-cog"></i></a>
                                                    <a href="delete.php?id=<?php echo $su['id_data'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->


            <!-- Footer Start -->
            <?php
            include "footer.php";
            ?>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>