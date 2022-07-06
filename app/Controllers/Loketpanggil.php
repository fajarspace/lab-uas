<?php 
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\AntrianModel;
 
class Loketpanggil extends Controller
{
 
    public function __construct() {
 
          $this->antrian = new AntrianModel();
    }
 
    public function index()
    {
         $data['antrian4'] = $this->antrian->getAntrianno(4);
         $data['antrian5'] = $this->antrian->getAntrianno(5);
         $data['antrian6'] = $this->antrian->getAntrianno(6);
         $data['antrian7'] = $this->antrian->getAntrianno(7);
         $data['antrianlast'] = $this->antrian->getAntrianlast(7);
        echo view('admin/loketpanggil/index', $data);
    } 
    public function edit($id)
    {
   

    $desc = 'selesai';
 
    // Membuat array collection yang disiapkan untuk insert ke table
    $data = [
        'status' => $desc
    ];
 
    /* 
    Membuat variabel ubah yang isinya merupakan memanggil function 
    update_loket dan membawa parameter data beserta id
    */
    $ubah = $this->antrian->update_antrian_data($data, $id);
     
    // Jika berhasil melakukan ubah
    if($ubah)
    {
        // Deklarasikan session flashdata dengan tipe info
        session()->setFlashdata('info', 'Update data berhasil, no antrian '.$id.' berhasil di panggil' );
        // Redirect ke halaman antrian
        return redirect()->to(base_url('loketpanggil')); 
    }
    
    } 

   
}