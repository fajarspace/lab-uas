<?= $this->extend('/layouts/tempelate'); ?>

<?= $this->section('content'); ?>
<div class="container" >

<div class="body-wrap boxed-container">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                <svg width="48" height="32" viewBox="0 0 48 32" xmlns="http://www.w3.org/2000/svg"> 
                                    <title>Antrian</title>
                                    <defs>
                                        <linearGradient x1="0%" y1="100%" y2="0%" id="logo-a">
                                            <stop stop-color="#007CFE" stop-opacity="0" offset="0%"/>
                                            <stop stop-color="#007DFF" offset="100%"/>
                                        </linearGradient>
                                        <linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="logo-b">
                                            <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"/>
                                            <stop stop-color="#FF4F7A" offset="100%"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
                        <div class="hero-copy">
                            <h1 class="hero-title h2-mobile mt-0 is-revealing">Antrian</h1>
                            <p class="hero-paragraph is-revealing">Untuk mengambil antrian silakan tekan gambar di bawah sesuai dengan kebutuhan anda</p>
                            <p class="hero-cta is-revealing"><a class="button button-primary button-shadow" href="#"></a></p>
                            <a href="<?php echo base_url(
                              ""
                            ); ?>" class="btn btn-primary float-left mb-3 center">Home</a>  
                        </div>
                        <div class="container mt-5 mb-5 text-center">
        
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
                    </div>
                </div>
            </section>
            <br>
            <section>
            <div class="container">
            <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Customer Service</h5>
        <p class="card-text">Antrian Ini Untuk Customer Service.</p>
        <a href="<?php echo base_url(
          "antrian/cs/4"
        ); ?>" class="btn btn-primary">Lanjutkan</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pengaduan</h5>
        <p class="card-text">Antrian Ini Untuk Pengaduan.</p>
        <a href="<?php echo base_url(
          "antrian/pg/5"
        ); ?>" class="btn btn-primary">Lanjutkan</a>
      </div>
    </div>
  </div>
</div>
            </div>
            </section>

            <br>
            
            <section>
            <div class="container">
            <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Permohonan Baru</h5>
        <p class="card-text">Antrian Ini Untuk Permohonan Baru.</p>
        <a href="<?php echo base_url(
          "antrian/pb/6"
        ); ?>" class="btn btn-primary">Lanjutkan</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Perpanjangan</h5>
        <p class="card-text">Antrian Untuk Perpanjangan.</p>
        <a href="<?php echo base_url(
          "antrian/png/7"
        ); ?>" class="btn btn-primary">Lanjutkan</a>
      </div>
    </div>
  </div>
</div>
            </div>
            </section>

            <br>

            
        </main>

        <footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Aplikasi Antrian Dengan Codeigniter 4</span>
  </div>
</footer>

    </div>

    <script src="<?php echo base_url("dist/js/main.min.js"); ?>"></script>

</div>
<?= $this->endSection(); ?>