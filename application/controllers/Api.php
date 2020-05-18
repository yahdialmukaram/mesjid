<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_api','api');
		$this->load->model('Model_infak','model_infak');
		
		
	}
	public function get_data_infak()
	{
		$post=[
			'length'=>$this->input->get_post('length'),
			'start'=>$this->input->get_post('start'),
			'order'=>$this->input->get_post('order'),
            'search'=>$this->input->get_post('search'),
            'draw'=>$this->input->get_post('draw'),
		];
        $list = $this->model_infak->get_datatables($post);
        $data = array();
		$no = $post['start']; 
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nama;
            $row[] = $field->keterangan;
            $row[] = $field->tanggal;
            $row[] = $field->jumlah;
            $data[] = $row;
        }
		$reponse['status']=200;
		$reponse['message']='Data di dapatkan';
		$reponse['draw']=$post['draw'];
		$reponse['recordsTotal']=$this->model_infak->count_all();
		$reponse['recordsFiltered']=$this->model_infak->count_filtered($post);
		$reponse['data']=$data;
		echo json_encode($reponse);
	}
	public function edit_data_infak()
	{
		$id=$this->input->get('id');
		$data=$this->api->find_data_infak($id);
		$reponse['status']=200;
		$reponse['message']='Data di dapatkan';
		$reponse['data']=$data;
		echo json_encode($reponse);
	}
	public function store_data_infak($status)
	{
		$data=[
			'nama'=>$this->input->post('nama'),
			'keterangan'=>$this->input->post('keterangan'),
			'tanggal'=>$this->input->post('tanggal'),
			'jumlah'=>$this->input->post('jumlah'),
		];
		$reponse['status']=200;
		if ($status=='save') {
		$this->api->store_data_infak(null,$data);
		$reponse['message']='Data berhasil di simpan';
		} else {
		$id=$this->input->post('id');
		$this->api->store_data_infak($id,$data);
		
		$reponse['message']='Data berhasil di edit';
		}
		$reponse['data']=$data;
		echo json_encode($reponse);
	}
	

}

/* End of file Api.php */
