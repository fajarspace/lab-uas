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
<div class="container" >
    <!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card-body">
        <div class="container">
            <div class="row">
                <!-- Page Heading -->
                <div class="col-12">
                    Dashboard Antrian
                </div>
                <br>
                <div class="antrian">
                    <h5>Panggilan Antrian</h5>
                    <p>
                    <?php foreach ($antrianlast as $key => $data40) {
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
                    </p>
                    <h5>Loket 1</h5>
                </div>
                <div class="col-5">
                    <div class="carousel-item active ">
                        <marquee behavior="" direction=""><h1>Antrian saat ini :
                        <?php foreach ($antrianlast as $key => $data40) {
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
                        </h1></marquee>
                    </div>
                </div>
                <br>
                <!-- <div class="antrian">
                    <h5>Panggilan Antrian</h5>
                    <p>A03</p>
                    <h5>Loket 1</h5>
                </div> -->

                
                <div class="loket">
                  <p>A<?php echo $aa; ?></p>
                  <h5>Loket 1</h5>
                </div>
                <div class="loket">
                  <p>B<?php echo $bb; ?></p>
                  <h5>Loket 1</h5>
                </div>
                <div class="loket">
                  <p>C<?php echo $cc; ?></p>
                  <h5>Loket 1</h5>
                </div>
                <div class="loket">
                  <p>D<?php echo $dd; ?></p>
                  <h5>Loket 1</h5>
                </div>



            </div>
        </div>
    </div>
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<?= $this->endSection(); ?>



