<?php foreach ($antrian4 as $key => $data4) {
  $aa = $data4["id"];
} ?>
<?php foreach ($antrian5 as $key => $data5) {
  $bb = $data5["id"];
} ?>
<?php foreach ($antrian6 as $key => $data6) {
  $cc = $data6["id"];
} ?>
<?php foreach ($antrian7 as $key => $data7) {
  $dd = $data7["id"];
} ?>

<?= $this->extend('/layouts/tempelate-admin'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <?php if (!empty(session()->getFlashdata("success"))) { ?>
 
        <div class="alert alert-success">
            <?php echo session()->getFlashdata("success"); ?>
        </div>
             
        <?php } ?>
        <?php if (!empty(session()->getFlashdata("info"))) { ?>
 
        <div class="alert alert-info">
            <?php echo session()->getFlashdata("info"); ?>
        </div>
             
        <?php } ?>
 
        <?php if (!empty(session()->getFlashdata("warning"))) { ?>
 
        <div class="alert alert-warning">
            <?php echo session()->getFlashdata("warning"); ?>
        </div>
             
        <?php } ?>
    </div>
    <div class="container">
        <a href="<?php echo base_url(
          ""
        ); ?>" class="btn btn-primary float-right mb-3">Home</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Jenis Layanan</th>
                    <th>Loket</th>
                    <th>No Antrian</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Customer Service</td>
                        <td>1</td>
                        <td>A<?php echo $aa; ?></td>
                        <td>
                        <div class="btn-group">
                              <?php if (is_numeric($aa)) {
                                echo "<a href='" .
                                  base_url("loketpanggil/edit/" . $aa) .
                                  "' class='btn btn-success'>Panggil</a>";
                              } else {
                                echo "<a class='btn btn-danger'>Kosong<a>";
                              } ?> 
                         </div>
                     </td>
                    </tr>
                     <tr>
                        <td>2</td>
                        <td>Pengaduan</td>
                        <td>2</td>
                        <td>B<?php echo $bb; ?></td>
                        <td>
                        <div class="btn-group">
                             <?php if (is_numeric($bb)) {
                               echo "<a href='" .
                                 base_url("loketpanggil/edit/" . $bb) .
                                 "' class='btn btn-success'>Panggil</a>";
                             } else {
                               echo "<a class='btn btn-danger'>Kosong<a>";
                             } ?> 
                         </div>
                     </td>
                    </tr>
                     <tr>
                        <td>3</td>
                        <td>Permohonan Baru</td>
                        <td>3</td>
                        <td>C<?php echo $cc; ?></td>
                        <td>
                        <div class="btn-group">
                              <?php if (is_numeric($cc)) {
                                echo "<a href='" .
                                  base_url("loketpanggil/edit/" . $cc) .
                                  "' class='btn btn-success'>Panggil</a>";
                              } else {
                                echo "<a class='btn btn-danger'>Kosong<a>";
                              } ?> 
                         </div>
                     </td>
                    </tr>
                     <tr>
                        <td>4</td>
                        <td>Perpanjangan</td>
                        <td>4</td>
                        <td>D<?php echo $dd; ?></td>
                        <td>
                        <div class="btn-group">
                              <?php if (is_numeric($dd)) {
                                echo "<a href='" .
                                  base_url("loketpanggil/edit/" . $dd) .
                                  "' class='btn btn-success'>Panggil</a>";
                              } else {
                                echo "<a class='btn btn-danger'>Kosong<a>";
                              } ?> 
                         </div>
                     </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?= $this->endSection(); ?>
