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
                    <div class="col-sm-12 col-xl-12">
                        <?php
                        include "../koneksi.php";
                        $id = $_GET['id'];
                        $data = mysqli_query($conn, "SELECT * FROM sampel_data where id_data='$id'");
                        $s = mysqli_fetch_array($data);
                        ?>
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">EDIT DATA</h6>
                            <form action="edit-act.php" method="post">
                                <div class="form-group">
                                    <input name="id_data" value="<?php echo $s['id_data'] ?>" class="form-control" type="hidden">
                                    <label>Periode</label>
                                    <input name="Periode" type="text" class="form-control" value="<?php echo $s['Periode'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Kapitalisasi Pasar</label>
                                    <input name="Kapitalisasi_Pasar" type="text" class="form-control" value="<?php echo $s['Kapitalisasi_Pasar'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Volume</label>
                                    <input name="Volume_Transaksi" type="text" class="form-control" value="<?php echo $s['Volume_Transaksi'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Satuan</label>
                                    <input name="Satuan" type="text" class="form-control" value="<?php echo $s['Satuan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input name="Harga" type="text" class="form-control" value="<?php echo $s['Harga'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Sirkulasi Beredar</label>
                                    <input name="Sirkulasi_Beredar" type="text" class="form-control" value="<?php echo $s['Sirkulasi_Beredar'] ?>">
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success"> SAVE</button>
                                </div>
                            </form>
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