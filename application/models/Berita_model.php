<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model{
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //listing all berita
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->order_by('id_beirta', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
}