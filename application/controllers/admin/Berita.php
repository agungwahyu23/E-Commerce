<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller{
    
    //Load model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('berita_model');
        //proteksi
        $this->simple_login->cek_login();
    }

    //Data berita
    public function index()
    {
        $berita = $this->berita_model->listing();
        $data = array('title'   => 'Data Berita',
                      'berita'    => $berita,
                      'isi'     => 'admin/berita/list'
                     );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
        
    }
}