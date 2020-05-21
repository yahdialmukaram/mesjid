<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model 
{
    public function tampil_infak()
    {
        $this->db->from('tb_infak');
        $this->db->order_by('id_infak', 'desc');   
        return $this->db->get()->result_array();
    }
    
    public function save_infak($data)
    {
        $this->db->insert('tb_infak', $data);
        
    }
    public function delete_infak($id)
    {
        $this->db->where('id_infak', $id);
        $this->db->delete('tb_infak');
        
        
    }
    public function edit_infak($id)
    {
        $this->db->where('id_infak', $id);
        return $this->db->get('tb_infak')->row_array();
        
        
        
    }
    public function check_account($username,$password)
    {
        $this->db->from('tb_user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get();
    }
    public function hitung_jumlah()
    {
   
    $this->db->select('SUM(jumlah) as total');
    $this->db->from('tb_infak');
    $this->db->where('jumlah');
 return   $this->db->get()->row()->total;

    }
    
}
