<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon ">
            <img class="rounded-circle" src="img/dlhk.jpg" width="45px" height="45px" alt="...">
        </div>
        <div class="sidebar-brand-text mx-3">Internship DLHK-DIY</div>

    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="tampil_data.php">
            <i class="fas fa-fw fa-building"></i>
            <span>Data Bidang atau Balai</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="tambah_data.php">
            <i class="fas fa-fw fa-user-friends"></i>
            <span>Tambah Data</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="upload.php">
            <i class="fas fa-fw fa-upload"></i>
            <span>Unggah File</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="file_list.php">
            <i class="fas fa-fw fa-file"></i>
            <span>Daftar File</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <script>
    // JavaScript untuk mengatur perilaku tombol ikon kiri
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('accordionSidebar');

    sidebarToggle.addEventListener('click', function() {
        sidebar.classList.toggle('toggled');
    });
</script>


</ul>
<!-- End of Sidebar -->