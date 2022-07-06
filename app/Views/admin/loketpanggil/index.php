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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loket</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>
 
    <div class="container mt-5 mb-5 text-center">
        <h4>Antrian Menggunakan Codeigniter 4</h4>
    </div>
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
                        <td>CS<?php echo $aa; ?></td>
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
                        <td>PGDN<?php echo $bb; ?></td>
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
                        <td>PB<?php echo $cc; ?></td>
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
                        <td>PNG<?php echo $dd; ?></td>
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
     
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html> 