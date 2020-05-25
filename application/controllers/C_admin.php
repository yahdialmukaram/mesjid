<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    

    public function index()
    {
        
        $this->load->view('admin/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
        
    }
    public function v_infak()
    { 
        //jumlah total
		$infak=$this->Model->tampil_infak();
		foreach ($infak as $key => $value) {
			$jumlah[]=$value['jumlah'];
		}
        $data ['total']= array_sum($jumlah);
        $data['tb_infak']=$this->Model->tampil_infak();
        
        $this->load->view('admin/header');
        $this->load->view('admin/v_infak',$data);
		$this->load->view('admin/footer');
		// print_r($data);
        
    }

    public function save_infak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'keterangan' => $this->input->post('keterangan'),
            // 'tanggal' => date('d-m-Y H:i:s'),
            'tanggal' => $this->input->post('tanggal'),
            'jumlah' => $this->input->post('jumlah'),
            
        ];
        $this->Model->save_infak($data);
        $this->session->set_flashdata('success', 'data behasil di simpan');
        
        redirect('c_admin/v_infak');
        
    }
    public function delete_infak($id)
    {
        $this->Model->delete_infak($id);
        $this->session->set_flashdata('danger', 'data behasil di hapus');
        
        redirect('c_admin/v_infak');
        
        
    }
    public function edit_infak($id)
    {

        $data['edit'] = $this->Model->edit_infak($id);
        

        $this->load->view('admin/header');
        $this->load->view('admin/edit_infak',$data);
        $this->load->view('admin/footer');

        
    }

    public function update($id)
    {
        $data =[
            'nama' =>$this->input->post('nama'),
            'keterangan' =>$this->input->post('keterangan'),
            'jumlah' =>$this->input->post('jumlah'),  
        ];
        $this->Model->update($id,$data);
        $this->session->set_flashdata('success', 'Data di ubah');
        redirect('c_admin/v_infak');
        
    }


    
    // public function edit_infak($id)
    // {

    //     $data = array(
    //         'nama'  => $this->input->post('nama'),
    //         'keterangan' => $this->input->post('keterangan'),
    //         'tanggal' => $this->input->post('tanggal'),
    //         'jumlah' => $this->input->post('jumlah'),
    //     );


    //     $data['edit'] = $this->Model->edit_infak($id);
        // $this->load->view('admin/header');
        // $this->load->view('admin/edit_infak',$data);
        // $this->load->view('admin/footer');
        // $this->session->set_flashdata('danger', 'value');
        
        // print_r($data);
        

// redirect('c_admin/v_infak');

    }

  


