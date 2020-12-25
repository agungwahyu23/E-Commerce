<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller{
    
    //Load model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pelanggan_model');
        //proteksi
        $this->simple_login->cek_login();
    }

    //Data kategori
    public function index()
    {
        $pelanggan = $this->pelanggan_model->listing();
        $data = array('title'   => 'Data Pelanggan',
                      'kategori'    => $pelanggan,
                      'isi'     => 'admin/pelanggan/list'
                     );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
        
    }
}
?>
