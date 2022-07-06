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

<?= $this->extend('/layouts/tempelate'); ?>

<?= $this->section('content'); ?>
<div class="container" >

<div class="body-wrap boxed-container">
  
<main>
<section>
<div class="container">
<div class="hero-inner">
<div class="hero-copy">
    <div class="card text-center bg-light">
  <div class="card-header" style="font-weight: bold;">
    Perhatian!
  </div>
  <div class="card-body">
  <h1 style="text-align: center;">Antrian Saat ini adalah</h1>
    <h1 style="text-align: center;"><?php foreach (
      $antrianlast
      as $key => $data40
    ) {
      if ($data40["id"] == $aa) {
        echo "A";
      }
      if ($data40["id"] == $bb) {
        echo "B";
      }
      if ($data40["id"] == $cc) {
        echo "C";
      }
      if ($data40["id"] == $dd) {
        echo "D";
      }
      echo $data40["id"];
    } ?>
    </h1>

  </div>
  <div class="card-footer text-muted">
    @2021
  </div>
</div>
                            
                        </div>

<!--     <div class="container">
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
    </div> -->

<br>
<br>
                    </div>
                </div>
            </section>

<div class="container">
<div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card bg-primary mb-3">
    <div class="card-header" style="text-align: center; font-weight: bold;">Antrian</div>
      <div class="card-body">
        <h5 class="card-title">Cutomer Service</h5>
        <p class="card-text">Antrian Saat ini A<?php echo $aa; ?></p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card bg-success">
    <div class="card-header" style="text-align: center; font-weight: bold;">Antrian</div>
      <div class="card-body">
        <h5 class="card-title">Pengaduan</h5>
        <p class="card-text">Antrian Saat ini B<?php echo $bb; ?></p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card bg-warning">
    <div class="card-header" style="text-align: center; font-weight: bold;">Antrian</div>
      <div class="card-body">
        <h5 class="card-title">Permohonan Baru</h5>
        <p class="card-text">Antrian Saat ini C<?php echo $cc; ?></p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card bg-secondary">
    <div class="card-header" style="text-align: center; font-weight: bold;">Antrian</div>
      <div class="card-body">
        <h5 class="card-title">Perpanjangan</h5>
        <p class="card-text">Antrian Saat ini D<?php echo $dd; ?></p>
      </div>
    </div>
  </div>
</div>

            </div>            
        </main>

        <footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Aplikasi Antrian Dengan Codeigniter 4.</span>
  </div>
</footer>
    </div>

    <script src="<?php echo base_url("dist/js/main.min.js"); ?>"></script>

</div>
<?= $this->endSection(); ?>



