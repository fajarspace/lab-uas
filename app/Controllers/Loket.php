<?php 
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\LoketModel;
use App\Models\PelayananModel;
 
class Loket extends Controller
{
 
    public function __construct() {
 
        // Mendeklarasikan class ProductModel menggunakan $this->loket
        $this->loket = new LoketModel();
        $this->pelayanan = new PelayananModel();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Loket
        */
    }
 
    public function index()
    {
        $data = [
            'title' => 'Ambil Antrian'
        ];
        $data['loket'] = $this->loket->getLoket();
        echo view('admin/loket/index', $data);
    } 
    public function edit($id)
    {
    // Memanggil function getProduct($id) dengan parameter $id di dalam ProductModel dan menampungnya di variabel array loket
    $data['loket'] = $this->loket->getLoket($id);
    $data['pelayanan'] = $this->pelayanan->getPelayanan();
    // Mengirim data ke dalam view
    return view('admin/loket/edit', $data);
    } 

    public function create()
    {   
        $data['pelayanan'] = $this->pelayanan->getPelayanan();
        return view('admin/loket/create',$data);
    } 

 public function delete($id)
    {
    // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
    $hapus = $this->loket->delete_loket($id);
 
    // Jika berhasil melakukan hapus
    if($hapus)
    {
            // Deklarasikan session flashdata dengan tipe warning
        session()->setFlashdata('warning', 'Deleted loket successfully');
        // Redirect ke halaman product
        return redirect()->to(base_url('loket'));
    }
    } 

    public function update($id)
    {
    // Mengambil value dari form dengan method POST
    $name = $this->request->getPost('nama');
    $code = $this->request->getPost('pelayanan_id');
    $desc = $this->request->getPost('keterangan');
 
    // Membuat array collection yang disiapkan untuk insert ke table
    $data = [
        'nama' => $name,
        'keterangan' => $desc,
        'pelayanan_id' => $code
    ];
 
    /* 
    Membuat variabel ubah yang isinya merupakan memanggil function 
    update_loket dan membawa parameter data beserta id
    */
    $ubah = $this->loket->update_loket($data, $id);
     
    // Jika berhasil melakukan ubah
    if($ubah)
    {
        // Deklarasikan session flashdata dengan tipe info
        session()->setFlashdata('info', 'Updated loket successfully');
        // Redirect ke halaman loket
        return redirect()->to(base_url('loket')); 
    }
} 


    public function store()
    {
    // Mengambil value dari form dengan method POST
    $name = $this->request->getPost('nama');
    $desc = $this->request->getPost('keterangan');
    $code = $this->request->getPost('pelayanan_id');

 
    // Membuat array collection yang disiapkan untuk insert ke table
    $data = [
        'nama' => $name,
        'keterangan' => $desc,
        'pelayanan_id' => $code
    ];
 
    /* 
    Membuat variabel simpan yang isinya merupakan memanggil function 
    insert_loket dan membawa parameter data 
    */
    $simpan = $this->loket->insert_loket($data);
 
    // Jika simpan berhasil, maka ...
    if($simpan)
    {
        // Deklarasikan session flashdata dengan tipe success
        session()->setFlashdata('success', 'Created loket successfully');
        // Redirect halaman ke loket
        return redirect()->to(base_url('loket')); 
    }
    } 


    function action()
    {
        $data['loket'] = $this->loket->getLoket();
        echo json_encode($data);
    }
}