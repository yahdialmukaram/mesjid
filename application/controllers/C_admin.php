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
        // pengeluaran
		$pengeluaran_get=$this->Model->tampil_kegiatan();
		foreach ($pengeluaran_get as $key => $value) {
			$pengeluaran[]=$value['jumlah'];
		}
        $data['total']= array_sum($jumlah);
        $data['tb_infak']=$this->Model->tampil_infak();
        // pengeluaran
		$data['pengeluaran']=array_sum($pengeluaran);
		$data['sisa'] = $data['total'] - $data['pengeluaran'];
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
        $this->session->set_flashdata('success', 'data kas behasil di simpan');
        
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
    public function v_kegiatan()
    {
        // jumlah total keluar
        $total_keluar=$this->Model->tampil_kegiatan();
        foreach ($total_keluar as $key => $value) {
            $keluar[]=$value['jumlah'];
        }
        $data['keluar']= array_sum($keluar);
        $data['tb_kegiatan'] = $this->Model->tampil_kegiatan();
        
        $this->load->view('admin/header');
        $this->load->view('admin/v_kegiatan',$data);
        $this->load->view('admin/footer');
        
    }
    public function save_kegiatan()
    {
        $data = [
            'kegiatan' => $this->input->post('kegiatan'),
            // 'tanggal' => date('d-m-Y H:i:s'),
            'tanggal' => $this->input->post('tanggal'),
            'jumlah' => $this->input->post('jumlah'),
            
        ];
        $this->Model->save_kegiatan($data);
        $this->session->set_flashdata('success', 'data kegiatan  behasil di simpan');
        
        redirect('c_admin/v_kegiatan');
// print_r($data);
    }

    public function delete_kegiatan($id)
    {
        $this->Model->delete_kegiatan($id);
        $this->session->set_flashdata('danger', 'Data success deleted');
        
        redirect('c_admin/v_kegiatan');
        
        
        
    }
    }

  


