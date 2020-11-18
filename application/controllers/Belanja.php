<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belanja extends CI_Controller{


	//Load Model

	public function __construct()

	{

		parent::__construct();
		$this->load->model('produk_model');
		$this->load->model('kategori_model');
		$this->load->model('konfigurasi_model');
	}

	//Halaman Belanja

	public function index()
	{



	}

	//Tambahkan ke keranjang belanja

	public function add()

	{
		//Ambil data dari form
		$id 			= $this->input->post('id');
		$qty 			= $this->input->post('qty');
		$price 			= $this->input->post('price');
		$name 			= $this->input->post('name');
		$redirect_page 	= $this->input->post('redirect_page');

		//Proses memasukan ke keranjang belanja
		$data		 = array(	'id' 			 => $id,
								'qty'			 => $qty,
								'price' 		 => $price,
								'name'		 	 => $name
								
							);
			$this->cart->insert($data);

			//redirect page
			redirect($redirect_page,'refresh');
	}

}