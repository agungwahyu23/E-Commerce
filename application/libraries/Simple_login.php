<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login 
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        //load data mofdel user
        $this->CI->load->model('user_model');
    }

    //Fungsi login
    public function login($username, $password)
    {
        $check = $this->CI->user_model->login($username, $password);
        //jika ada data maka buat session
        if ($check) {
            $id_user        = $check->id_user;
            $nama           = $check->nama;
            $akses_level    = $check->akses_level;
            //buat session

            $this->CI->session->set_userdata('id_user',$id_user);
            $this->CI->session->set_userdata('nama',$nama);
            $this->CI->session->set_userdata('username',$username);
            $this->CI->session->set_userdata('akses_level',$akses_level);
            //redirect ke halaman admin yang diproteksi
            redirect(base_url('admin/dasbor'),'refresh');
        }else{
            // kalau tidak ada (username password salah), maka suruh login lagi
            $this->CI->session->set_flashdata('warning','username atau password salah');
            redirect(base_url('login'),'refresh');

            
            $this->CI->session->set_userdata('id_user', $id_user);
            $this->CI->session->set_userdata('nama', $nama);
            $this->CI->session->set_userdata('username', $username);
            $this->CI->session->set_userdata('akses_level', $akses_level);
            //redirect
            
            redirect(base_url('admin/dasbor'), 'refresh');
        }else{
            //jika salah
            $this->CI->session->set_flashdata('warning', 'Username atau Password salah');
            redirect(base_url('login'), 'refresh');
 288b869b9c50bc75ca028e02834b606958e889b8
        }
    }

    //Fungsi cek login
    public function cek_login()
    {

        //memeriksa apakah session sudah atau belum, jika belum alihkan ke halaman login
        if($this->CI->session->userdata('username') == "") {
            $this->CI->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');

        //memeriksa session ada atau belum
        if ($this->CI->session->userdata('username')=="") {
            $this->CI->session->set_flashdata('warning', 'Anda belum Login');
            redirect(base_url('login'), 'refresh');
 288b869b9c50bc75ca028e02834b606958e889b8
        }
    }

    //Fungsi logout
    public function logout()
    {

        // membuang semua session yang telah diset pada saat login

        //buang semua session
 288b869b9c50bc75ca028e02834b606958e889b8
        $this->CI->session->unset_userdata('id_user');
        $this->CI->session->unset_userdata('nama');
        $this->CI->session->unset_userdata('username');
        $this->CI->session->unset_userdata('akses_level');

        // setelah session dibuang, maka redirect ke login
        $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
        redirect(base_url('login'),'refresh');

        //redirect ke login  
        $this->CI->session->set_flashdata('sukses', 'Anda berhasil logout');
            redirect(base_url('login'), 'refresh');       
 288b869b9c50bc75ca028e02834b606958e889b8
    }
    
}
