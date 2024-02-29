<?php
$title = "Daftar Bidang atau Balai";
include_once "header.php";
include_once "koneksi.php"; ?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info panel-dashboard">
      <div class="panel-heading centered">
        <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-striped table-admin">
          <thead>
            <tr>
              <th width="10%">No.</th>
              <th width="30%">Nama Bidang</th>
              <th width="13%">Kriteria</th>
              <th width="20%">Kuota</th>
              <th width="27%">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $data = file_get_contents('http://localhost/Magang-DLHKDIY/ambildata.php');
            $no = 1;
            if (json_decode($data, true)) {
              $obj = json_decode($data);
              foreach ($obj->results as $item) {
            ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $item->nama_bidang; ?></td>
                  <td><?php echo $item->kriteria; ?></td>
                  <td><?php echo $item->kuota; ?></td>
                  <td class="ctr">
                    <div class="btn-group">
                      <a target="_blank" href="detail.php?id=<?php echo $item->id_bidang; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                        <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                    </div>
                  </td>
                </tr>
            <?php $no++;
              }
            } else {
              echo "data tidak ada.";
            } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<?php include_once "footer.php" ?>