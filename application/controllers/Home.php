<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    
    //Halaman utama website
    public function index()
    {
        $data = array('title' => 'Java Web Media - Toko Online', 'isi' => 'home/list');
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

?>