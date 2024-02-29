<?php include "header.php"; ?>

<!-- start banner Area -->
<section class="banner-area relative" style="background-image: url('admin/img/gedung.jpg');">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row fullscreen align-items-center justify-content-between">
      <div class="col-lg-7 col-md-6 banner-left">
        <h6 class="text-white">LAYANAN INTERNSHIP DINAS LINGKUNGAN HIDUP & KEHUTANAN</h6>
        <h1 class="text-white">DAERAH ISTIMEWA YOGYAKARTA</h1>
        <p class="text-white"> <br>
              Layanan informasi ini memuat tentang data bidang atau balai yang menerima program penilitian/magang/PKL 
              dari Sekolah atau Universitas.<br> Bidang atau balai di bawah DLHK-DIY
              yang beralamat kantor di Jl. Argulobang No. 19, Baciro, Gondokusuman, Yogyakarta, DIY 55225 
        </p> <br>
        <a href="data_bidang.php" class="primary-btn text-uppercase">Lihat Bidang</a>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- End banner Area -->

<main id="main">

    <!-- Start price Area -->
    <div class="container">
  <div class="row d-flex justify-content-center">
    <div class="menu-content pb-70 col-lg-8">
      <div class="title text-center">
        <br> <br> <br>
        <img src="admin/img/alur.png" alt="Gambar Alur" style="width: 80%; height: 80%;">
      
      </div>
    </div>
  </div>
</div>

    <!-- ======= Counts Section ======= -->
    <section id="counts">
      <div class="container"> 
        <div class="row d-flex justify-content-center">
          <div class="text-center">
            <div class="title text-center">
              <h1 class="mb-10">Daftar Ketersediaan Kuota</h1><br>
            </div>
        
              <?php
                // Mendapatkan daftar file Excel dari direktori uploads
                $excelFiles = glob('admin/uploads/*.xls*');

                if (empty($excelFiles)) {
                    echo "Tidak ada file Excel yang tersedia.";
                } else {
                    echo "<ul>";
                    foreach ($excelFiles as $FILE) {
                        echo "<li><a href='$FILE' target='_blank'>" . basename($FILE) . "</a></li>";
                    }
                    echo "</ul>";
                }
              ?>
            </div>
              <iframe loading="lazy" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQde9sNVoEnGTDe_wq_ZbEIFMBo3jZaqXvIZvqc09h5c1iELINzYzNwrlgm63L9-Lb8-JuDkiMgztj8/pubhtml" width="90%" height="500px"></iframe>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="text-center">
               <div class="title text-center"><br><br>
                  <h1 class="mb-10">Status Permohonan</h1><br>
                </div>
              </div>
                  <iframe loading="lazy" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSAj3zV7TUNHKz88fAE4a6AyhkhMMi33m3uGibex8-8NGmjMfuj02xASTew8KsQIBqoVS-Y_fKmAoHg/pubhtml" width="90%" height="500px"> </iframe>
        </div>
      
              </div>   
    </section><!-- End Counts Section -->
  
  <?php include "footer.php"; ?>