<?= $this->extend('/layouts/tempelate-antrian'); ?>

<?= $this->section('content'); ?>
<div class="container" >

<div class="body-wrap boxed-container">
<header class="site-header">
<div class="container">
    <div class="site-header-inner">
        <div class="brand header-brand">
            <h1 class="m-0">
                <a href="#">
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
                <g fill="none" fill-rule="evenodd">
                    <rect fill="url(#logo-a)" width="32" height="32" rx="16"/>
                    <rect fill="url(#logo-b)" x="16" width="32" height="32" rx="16"/>
                </g>
            </svg>
        </a>
    </h1>
        </div>
    </div>
</div>
</header>
<?php foreach ($antrian as $key => $data) {
$a = $data["id"];
} ?>
<main>
<section class="hero">
    <div class="container">
        <div class="hero-inner">
            <div class="hero-copy">
                <h1 class="hero-title h2-mobile mt-0 is-revealing">Antrian</h1>
                <br>
                <div class="container">
                <div class="card text-center">
  <div class="card-header">
    Perhatian!
  </div>
  <div class="card-body">

    <h5 class="hero-paragraph is-revealing">

        <?php
        $request = \Config\Services::request();
        $s = $request->uri->getSegment(3);
        if ($s == "4") {
          echo "Anda Telah mengambil no antrian untuk customer service dengan no antrian <br>A" .
            $a;
        } elseif ($s == "5") {
          echo "Anda Telah mengambil no antrian untuk pengaduan dengan no antrian <br>B" .
            $a;
        } elseif ($s == "6") {
          echo "Anda Telah mengambil no antrian untuk Permohonan Baru dengan no antrian <br>C" .
            $a;
        } elseif ($s == "7") {
          echo "Anda Telah mengantri untuk Perpanjang dengan no antrian <br>D" .
            $a;
        }
        ?>


    </h5>
                            
  </div>
  <div class="card-footer text-muted">
    @2021
  </div>
</div>
                            </div>
                            <p class="hero-cta is-revealing"><a class="button button-primary button-shadow" href="#">.</a></p>
                        </div>
                        <div class="container mt-5 mb-5 text-center">
        
    </div>
    <!-- <div class="container">
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
            
        </main>
    </div>

    <script src="<?php echo base_url("dist/js/main.min.js"); ?>"></script>

</div>
<?= $this->endSection(); ?>

