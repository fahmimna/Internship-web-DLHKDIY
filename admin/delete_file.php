<!-- admin/delete_file.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["filename"])) {
    $filename = $_GET["filename"];
    $targetDir = "uploads/";

    // Pastikan file yang akan dihapus berada di dalam direktori uploads
    if (strpos($filename, "..") !== false || !file_exists($targetDir . $filename)) {
        echo "File tidak ditemukan.";
    } else {
        if (unlink($targetDir . $filename)) {
            echo "File " . $filename . " berhasil dihapus.";
        } else {
            echo "Terjadi kesalahan saat menghapus file.";
        }
    }
}
?>
