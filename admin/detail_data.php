<?php
session_start();
if (empty($_SESSION['username'])) {
    header('location:../index.php');
} else {
    include "../koneksi.php";
?>

    <!DOCTYPE html>
    <html lang="en">

    <?php include "header.php"; ?>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <?php include "menu_sidebar.php"; ?>
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <?php include "menu_topbar.php"; ?>

                    <?php
                    $id = $_GET['id_bidang'];
                    $query = mysqli_query($koneksi, "select * from bidang where id_bidang='$id'");
                    $data  = mysqli_fetch_array($query);
                    ?>

                <?php } ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Detail Bidang atau Balai <?php echo $data['nama_bidang']; ?></h1>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Detail Bidang atau Balai</h6>
                        </div>
                        <div class="card-body">

                            <!-- </div> -->
                            <div class="panel-body">
                                <table id="example" class="table table-hover table-bordered">
                                    <tr>
                                        <td width="250">Nama Bidang</td>
                                        <td width="550"><?php echo $data['nama_bidang']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kriteria</td>
                                        <td><?php echo $data['kriteria']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kuota</td>
                                        <td><?php echo $data['kuota']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alur Pengajuan</td>
                                        <td><?php echo $data['alur']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Latitude</td>
                                        <td><?php echo $data['latitude']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Longitude</td>
                                        <td><?php echo $data['longitude']; ?></td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
                <?php include "footer.php"; ?>
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
    </body>

    </html>