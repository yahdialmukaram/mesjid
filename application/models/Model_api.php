<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_api extends CI_Model
{
    public function get_data_infak()
    {
        $this->db->from('tb_infak');
        $this->db->order_by('id_infak', 'desc');
        return $this->db->get()->result_array();

    }
    public function find_data_infak($id)
    {
        $this->db->from('tb_infak');
        $this->db->where('id_infak', $id);
        return $this->db->get()->row_array();

    }
    public function store_data_infak($id, $data)
    {
        if ($id == null) {
            $this->db->insert('tb_infak', $data);
        } else {
            $this->db->where('id_infak', $id);
            $this->db->update('tb_infak', $data);
        }

    }
    public function delete_data_infak($id)
    {
		$this->db->where('id_infak', $id);
		$this->db->delete('tb_infak');
    }

}

/* End of file Model_api.php */
