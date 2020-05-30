<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        
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

    public function edit_kegiatan($id)
    {
        $data['edit_kegiatan'] = $this->Model->edit_kegiatan($id);
     $this->load->view('admin/header');
     $this->load->view('admin/edit_kegiatan',$data);
     $this->load->view('admin/footer');
    }

    public function update_kegiatan($id)
    {
        $data = [
            'kegiatan'=>$this->input->post('kegiatan'),
            'tanggal'=>$this->input->post('tanggal'), 
            'jumlah'=>$this->input->post('jumlah'), 
        ];
    $this->Model->update_kegiatan($id,$data);
    $this->session->set_flashdata('success', 'data berhasil di ubah');
    
    redirect('c_admin/v_kegiatan');
    
    
    

    }
    public function laporan_masuk()
    {
      
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // gambar
        // $pdf->Image('assets/image/lambang.png',15,10,20);

        
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(260,7,'KEUANGAN MESJID MUJAHIDDIN DUO KOTO MALALO',0,1,'C');
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(260,9,'Kecamatan Batipuh Selatan Kabupaten Tanah Datar',0,9,'C');
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(260,9,'jln. ps.malalo No. 137 Guguak Malalo Telp (0752)71150, 574421, 71890 Fax. (0752) 7152',0,9,'C');
        $pdf->Cell(260,1,'','LAPORAN METERAN PERBULAN',0,1,'C');
    
        $pdf->Cell(190,7,'',0,1,'C');
        $pdf->SetFont('Arial','',9);
        // $pdf->Cell(50,8,'LAPORAN METERAN PERBULAN :',0,0,'C');
        
        // $pdf->Cell(18,8,$referensi,0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0);
        $pdf->Cell(60,6,'Nama',1,0);
        $pdf->Cell(70,6,'Keterangan',1,0);
        $pdf->Cell(60,6,'Tanggal',1,0);
        $pdf->Cell(60,6,'Jumlah',1,1);
        $pdf->SetFont('Arial','',10);
        $infak = $this->db->get('tb_infak')->result();
        $no = 1;
        foreach ($infak as $row){
            $pdf->Cell(10,6,$no++,1,0);
            $pdf->Cell(60,6,$row->nama,1,0);
            $pdf->Cell(70,6,$row->keterangan,1,0);
            $pdf->Cell(60,6,$row->tanggal,1,0);
            $pdf->Cell(60,6,$row->jumlah,1,1); 
        }
        $pdf->Cell(480,20,'Duo koto',0,1,'C');
        $pdf->SetFont('Arial','B',12);    
        $pdf->Cell(480,20,'Petugas',0,1,'C'); 
        $pdf->Output();
    }

    }


   

  


