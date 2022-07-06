<?= $this->extend('/layouts/tempelate'); ?>

<?= $this->section('content'); ?>
<div class="container" >



<main>
<section class="mb-4" >
<div class="container">
<div class="hero-inner">
<div class="hero-copy">
  <div class="card text-center bg-light">
  <div class="card-body"></div>
  <div class="card-body">
  <h1 style="text-align: center;">Menu Antrian</h1>
  </div>
  <div class="card-body"></div>
</div>
                            
  </div>

</div>
</div>
</section>

<div class="container">
<div class="row row-cols-1 row-cols-md-2">

  <div class="col mb-4">
    <div class="card bg-info mb-3">
    <a style="color:white; text-decoration:none; text-align:center;" href="<?php echo base_url("antrian/a/4"); ?>">
    <div class="card-body" style="text-align: center; font-weight: bold;"></div>
      <div class="card-body">
        <h5 class="card-title">Cutomer Service</h5>
      </div>
      <div class="card-body" style="text-align: center; font-weight: bold;"></div>
    </a>
    </div>
  </div>

  <div class="col mb-4">
    <div class="card bg-primary mb-3">
    <a style="color:white; text-decoration:none; text-align:center;" href="<?php echo base_url("antrian/b/5"); ?>">
    <div class="card-body" style="text-align: center; font-weight: bold;"></div>
      <div class="card-body">
        <h5 class="card-title">Pengaduan</h5>
      </div>
      <div class="card-body" style="text-align: center; font-weight: bold;"></div>
    </a>
    </div>
  </div>

  <div class="col mb-4">
    <div class="card bg-secondary mb-3">
    <a style="color:white; text-decoration:none; text-align:center;" href="<?php echo base_url("antrian/c/6"); ?>">
    <div class="card-body" style="text-align: center; font-weight: bold;"></div>
      <div class="card-body">
        <h5 class="card-title">Permohonan baru</h5>
      </div>
      <div class="card-body" style="text-align: center; font-weight: bold;"></div>
    </a>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card bg-success mb-3">
    <a style="color:white; text-decoration:none; text-align:center;" href="<?php echo base_url("antrian/d/7"); ?>">
    <div class="card-body" style="text-align: center; font-weight: bold;"></div>
      <div class="card-body">
        <h5 class="card-title">Perpanjang</h5>
      </div>
      <div class="card-body" style="text-align: center; font-weight: bold;"></div>
    </a>
    </div>
  </div>
  
</div>

            </div>            
        </main>




<?= $this->endSection(); ?>