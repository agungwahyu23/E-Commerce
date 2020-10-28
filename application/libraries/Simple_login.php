<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login 
{
    protected $CI;

    public function __construct()
    {
        $CI =& get_instance();
        //load data mofdel user
        $this->CI->load->model('user_model');
    }

    //Fungsi login
    public function login($username, $password)
    {
        $check = $this->CI->user_mode->login($username, $password);
        //jika ada data maka buat session
        if ($check) {
            $id_user        = $check->id_user;
            $nama           = $check->nama;
            $akses_level    = $check->akses_level;
            //buat session
        }
    }

    //Fungsi cek login
    public function cek_login()
    {
        
    }

    //Fungsi logout
    public function logout()
    {
        
    }
    
}
