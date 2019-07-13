<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*

    class Dashboard 
    Handle Semua Fungsi Untuk Mer Route 
    Halaman Yang Ada di sidemenu 

*/
class Dashboard extends CI_controller { 
     public function __construct()
     {
          parent::__construct();
          $this->load->model('Siswa_m' , 'siswa');
          
     }
   public function index(){
    
        $data['title'] = 'Aplikasi Absensi';
        // hitung siswa 
          $data['siswa'] =  $this->siswa->hitung_siswa();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidenav',$data);
        $this->load->view('templates/navbar' , $data);
        $this->load->view('Dashboard' , $data );
        $this->load->view('templates/footer');
   }
}
