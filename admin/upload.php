<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Upload File</title>
  <!-- Load Bootstrap CSS menggunakan link CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/css/bootstrap.min.css">
  <style>
    .custom-file-label::after {
      content: "Choose File";
    }

    .custom-file-label::before {
      content: "Upload File";
      margin-right: 10px;
    }

    .custom-file-input {
      padding-left: 10px;
    }
  </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "menu_sidebar.php"; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include "menu_topbar.php"; ?>
                
                <div class="container d-flex justify-content-center align-items-start" style="min-height: 50vh;">
                    <div class="row justify-content-center">
                    <form action="upload.php" method="post" enctype="multipart/form-data" class="mt-3">
                        <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="excel_file" id="excel_file" accept=".xls, .xlsx">
                            <label class="custom-file-label" for="excel_file" id="excel_file_label">Pilih file...</label>
                        </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Upload File</button>
                    </form>
                    </div>
                </div>

                    <!-- admin/upload.php -->
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $targetDir = "uploads/";
                            $targetFile = $targetDir . basename($_FILES["excel_file"]["name"]);
                            $uploadOk = 1;
                            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                            // Periksa apakah file adalah file Excel yang valid
                            if ($fileType !== "xls" && $fileType !== "xlsx") {
                                echo "Hanya file Excel (.xls, .xlsx) yang diizinkan.";
                                $uploadOk = 0;
                            }

                            // Periksa jika uploadOk bernilai 0 karena ada kesalahan
                            if ($uploadOk == 0) {
                                echo "File tidak berhasil diunggah.";
                            } else {
                                // Hapus file sebelumnya jika ada
                                if (file_exists($targetFile)) {
                                    unlink($targetFile);
                                }

                                // Periksa apakah terjadi error saat mengunggah file
                                if ($_FILES["excel_file"]["error"] === UPLOAD_ERR_OK) {
                                    if (move_uploaded_file($_FILES["excel_file"]["tmp_name"], $targetFile)) {
                                        echo "File " . basename($_FILES["excel_file"]["name"]) . " berhasil diunggah.";
                                    } else {
                                        echo "Terjadi kesalahan saat mengunggah file.";
                                    }
                                } else {
                                    echo "Terjadi kesalahan saat mengunggah file: " . $_FILES["excel_file"]["error"];
                                }
                            }
                        }
                        ?>


            </div>
            <!-- End of Main Content -->
            <?php include "footer.php"; ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
     <!-- Load Bootstrap JavaScript menggunakan link CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.min.js"></script>

      <!-- Tambahkan skrip JavaScript untuk menampilkan keterangan file telah dipilih -->
      <script>
    // Ambil elemen input file
    const inputExcelFile = document.getElementById('excel_file');
    // Ambil elemen label
    const labelExcelFile = document.getElementById('excel_file_label');

    // Tambahkan event listener untuk mengubah teks label saat file dipilih
    inputExcelFile.addEventListener('change', function () {
        // Jika ada file yang dipilih, tampilkan nama file pada label
        if (this.files.length > 0) {
            labelExcelFile.textContent = this.files[0].name;
        } else {
            // Jika tidak ada file yang dipilih, kembalikan teks label ke "Pilih file..."
            labelExcelFile.textContent = "Pilih file...";
        }
    });
    </script>

</body>

</html>