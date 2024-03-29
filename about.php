
<?php include "header.php"; ?>  
<?php
$id = $_GET['id_bidang'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$id_bidang = "";
$nama_bidang = "";
$kriteria = "";
$alur = "";
$kuota = "";
$lat = "";
$long = "";
foreach ($obj->results as $item) {
  $id_bidang .= $item->id_bidang;
  $nama_bidang .= $item->nama_bidang;
  $kriteria .= $item->kriteria;
  $alur .= $item->alur;
  $kuota .= $item->kuota;
  $lat .= $item->latitude;
  $long .= $item->longitude;
}

$title = "Detail dan Lokasi : " . $nama_bidang;
//include_once "header.php"; 
?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap"></script>

<script>
  
  function initialize() {
    var myLatlng = new google.maps.LatLng(<?php echo $lat ?>, <?php echo $long ?>);
    var mapOptions = {
      zoom: 13,
      center: myLatlng
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var contentString = '<div id="content">' +
      '<div id="siteNotice">' +
      '</div>' +
      '<h1 id="firstHeading" class="firstHeading"><?php echo $nama_bidang ?></h1>' +
      '<div id="bodyContent">' +
      '<p><?php echo $kriteria ?></p>' +
      '</div>' +
      '</div>';

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon: 'img/marker.png'
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>

	<!-- start banner Area -->
    <section class="about-banner relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Us				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> About Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
            	<!-- Start about-info Area -->
			<section class="about-info-area section-gap">
      <div class="container" style="padding-top: 120px;">
    <div class="row">

      <div class="col-md-7" data-aos="fade-up" data-aos-delay="200">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 class="panel-title"><strong>Informasi Internship </strong></h4>
          </div>
          <div class="panel-body">
            <table class="table">
              <tr>
                <!-- <th>Item</th> -->
                <th>Detail</th>
              </tr>
              <tr>
                <td>Nama Bidang</td>
                <td>
                  <h5><?php echo $nama_bidang ?></h5>
                </td>
              </tr>
              <tr>
                <td>Kriteria</td>
                <td>
                  <h5><?php echo $kriteria ?></h5>
                </td>
              </tr>
              <tr>
                <td>Kuota</td>
                <td>
                  <h5><?php echo $kuota ?></h5>
                </td>
              </tr>
              <tr>
                <td>Alur Pengajuan</td>
                <td>
                  <h5><?php echo $alur ?></h5>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-5" data-aos="zoom-in">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 class="panel-title"><strong>Lokasi</strong></h4>
          </div>
          <div class="panel-body">
            <div id="map-canvas" style="width:100%;height:380px;"></div>
          </div>
        </div>
      </div>  
			</section>
			<!-- End about-info Area -->
<?php include "footer.php"; ?>