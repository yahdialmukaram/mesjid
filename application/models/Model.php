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
	public function update($id,$data)
	{
		$this->db->where('id_infak', $id);
		$this->db->update('tb_infak', $data);
		
	}
    public function check_account($username,$password)
    {
        $this->db->from('tb_user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get();
    }

    public function tampil_kegiatan()
    {
        $this->db->from('tb_kegiatan');
        $this->db->order_by('id_kegiatan', 'desc');
        return $this->db->get()->result_array();
        
    }

    public function save_kegiatan($data)
    {
        $this->db->insert('tb_kegiatan', $data);
        
    }
    public function delete_kegiatan($id)
    {
        $this->db->where('id_kegiatan', $id);
        $this->db->delete('tb_kegiatan');
     
    }
    public function edit_kegiatan($id)
    {
        $this->db->where('id_kegiatan', $id);
        return $this->db->get('tb_kegiatan')->row_array();
        
    }
    public function update_kegiatan($id,$data)
    {
        $this->db->where('id_kegiatan', $id);
        $this->db->update('tb_kegiatan', $data);
        
        
    }
    
}
