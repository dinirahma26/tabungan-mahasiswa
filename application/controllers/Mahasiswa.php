<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller{
 /*
 $view berfungsi untuk membaca file view seperti read.php, create.php
 dan edit.php dengan lokasi folder views/backend/v_admin/
 */
 private $view = "backend/v_mahasiswa/";
 //memanggil control Admin/index dalam keadaan refresh
 private $redirect = "Mahasiswa";
 public function __construct()
 {
 parent::__construct();
 //control Admin menghubungkan model M_admin
 $this->load->model('M_mahasiswa');
 }
 function index(){
     //memanggil model M_admin dengan function GetAll
 $read = $this->M_mahasiswa->GetAll();
 $data = array(
   'judul' => "",
   'sub' => "",
   'read'=> $read
   );
    /*
    $this->template memanggil libraries template,
    load('backend/template' artinya memanggil file template.php,
    $this->view.'read' memanggil file read.php
    catatan: setelah kita mengetahui untuk view kali ini script ada penambahan 
   template,
    maka CRUD Admin pembalajaran sebelumnya mengikuti script seperti pada 
   control Home */
    $this->template->load('backend/template',$this->view.'read', $data);
 }
 public function create(){
 //untuk create tidak memangil model, langsung ke view dengan data baru
 $data = array(
 'create' => ''
 );
 $this->load->view($this->view.'create', $data);
}
 public function save(){
 $data = array(
 'id_mahasiswa'=> $this->input->post('id_mahasiswa'),
 'nama_mahasiswa'=> $this->input->post('nama_mahasiswa'),
 'prodi'=> $this->input->post('prodi'),
 'jenis_kelamin'=> $this->input->post('jenis_kelamin'),
 'alamat'=> $this->input->post('alamat'),
 'tanggal_lahir'=> $this->input->post('tanggal_lahir')
 );
 $this->M_mahasiswa->save($data);
 //dengan $this->redirect artinya memanggil private $redirect = "Admin"
 redirect($this->redirect,'refresh');
 }
 public function edit(){
 /*
 segment 1 adalah control, segment 2 adalah function, segment 2 adalah PK,
 data yang akan ditambilkan hanya yang dipilih saja sesuai PK yang dipilih
 */
 $kd = $this->uri->segment(3);
 $data = array(
 //'edit' variabel yang akan dipanggil pada view edit.php
 'edit' => $this->M_mahasiswa->edit($kd)
 );
 $this->load->view($this->view.'edit', $data);
 }
 public function update(){
    $kd = $this->uri->segment(3);
    $data = array(
    /*
    'nama_admin' =nama yang diambil dari fild pada tabel
    $this->input->post('nama_admin') =nama yang diambil dari form
    */
    'id_mahasiswa'=> $this->input->post('id_mahasiswa'),
    'nama_mahasiswa'=> $this->input->post('nama_mahasiswa'),
    'prodi'=> $this->input->post('prodi'),
    'jenis_kelamin'=> $this->input->post('jenis_kelamin'),
    'alamat'=> $this->input->post('alamat'),
    'tanggal_lahir'=> $this->input->post('tanggal_lahir')
    );
    $this->M_mahasiswa->update($kd,$data);
    redirect($this->redirect,'refresh');
    }
 public function delete(){
 $kd = $this->uri->segment(3);
 $data = array(
 //data akan dihapus sesuai uri->segment(3) yang dipilih
 'nama_mahasiswa' => $kd
 );
 $this->M_mahasiswa->delete($data);
 redirect($this->redirect,'refresh');
 }
}