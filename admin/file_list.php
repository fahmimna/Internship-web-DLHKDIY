<!-- admin/file_list.php -->
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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Daftar File Unggah</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <!-- </div> -->
                            <div class="panel-body">
                                <form class="form-horizontal style-form" style="margin-top: 20px;" action="edit_aksi.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                    <div class="form-group">
                                        <div class="col-sm-8">

                                        <?php
                                        $targetDir = "uploads/";
                                        $files = glob($targetDir . "*.xls*");
                                        ?>

                                            <!DOCTYPE html>
                                            <html>    
                                            <body>
                                                <?php if (empty($files)): ?>
                                                    <p>Tidak ada file yang diunggah.</p>
                                                <?php else: ?>
                                                    <ul>
                                                        <?php foreach ($files as $file): ?>
                                                            <li>
                                                                <?php echo basename($file); ?>
                                                                <a href="delete_file.php?filename=<?php echo urlencode(basename($file)); ?> class="btn-sm btn-danger"><span class="fas fa-trash"></a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </body>
                                            </html>
                                        </div>
                                    </div>
                                    <div style="margin-top: 20px;"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Daftar File Excel</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <!-- </div> -->
                            <div class="panel-body">
                                <form class="form-horizontal style-form" style="margin-top: 20px;" action="edit_aksi.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                    <div class="form-group">
                                        <div class="col-sm-8">
                                        <ul>
                                            <li><a href="https://docs.google.com/spreadsheets/d/1SxfAjOKZ_HqOx_DofT3WJmmhmKuGqnkABILqXmJmvqw/edit?usp=sharing">Daftar Kuota</a></li>
                                            <li><a href="https://docs.google.com/spreadsheets/d/1IVvhbP1hxw5XVrqaiUSijAzBrfS3fLG7Kx33FVS5Wwc/edit?usp=sharing">Status Permohonan</a></li>
                                        </ul>
                                        </div>
                                    </div>
                                    <div style="margin-top: 20px;"></div>
                                </form>
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