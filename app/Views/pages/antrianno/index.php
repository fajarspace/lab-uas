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
<?= $this->extend('layouts/tempelate'); ?>
<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container">
  <div class="card-body">

    <div class="row">
      <!-- Page Heading -->
      <div class="col-12"> Dashboard Antrian </div>

      <div class="antrian">
        <h5>Panggilan Antrian</h5>
        <p> A <?php echo $aa; ?> </p>
        <h5>Loket 1</h5>
      </div>
      <div class="antrian">
        <marquee behavior="" direction="">
          <h1>Antrian saat ini : <br>
          </h1>
          <tr>
            <td>
              <h2>Loket 1 : A <?php echo $aa; ?> </h2>
            </td>
            <td>
              <h2>Loket 2 : B <?php echo $bb; ?> </h2>
            </td>
            <td>
              <h2>Loket 3 : C <?php echo $cc; ?> </h2>
            </td>
            <td>
              <h2>Loket 4 : D <?php echo $dd; ?> </h2>
            </td>
          </tr>
        </marquee>
      </div>

      <br>
      <!-- <div class="antrian"><h5>Panggilan Antrian</h5><p>A03</p><h5>Loket 1</h5></div> -->
      <br>
      <div class="loket">
        <p>A <?php echo $aa; ?> </p>
        <h5>Loket 1</h5>
      </div>
      <div class="loket">
        <p>B <?php echo $bb; ?> </p>
        <h5>Loket 2</h5>
      </div>
      <div class="loket">
        <p>C <?php echo $cc; ?> </p>
        <h5>Loket 3</h5>
      </div>
      <div class="loket">
        <p>D <?php echo $dd; ?> </p>
        <h5>Loket 4</h5>
      </div>
    </div>

  </div>
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>