<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firstpage extends CI_Controller {

    public function index()
    {
		$this->load->model('warga');
        $tampil['warga'] = $this->warga->getdata();
        $this->load->view('first_message', $tampil);
    }

	public function editform($id){
		$this->load->model('warga');
		$tampil['warga'] = $this->warga->showdatatoform($id);
		$this -> load -> view('form-edit', $tampil);
	}

	public function editprocess(){
		$this->load->model('warga');
		
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$notel = $this->input->post('notel');
		$nik = $this->input->post('nik');

		$arrayhasil = array(
			'id' => $id,
			'nama' => $nama,
			'notel' => $notel,
			'nik' => $nik
		);
		
		
		$this->warga->updatedata($id, $arrayhasil ,'tb_warga');
		redirect(base_url());
	}

	public function addform(){
		$this -> load -> view('form_add');
	}
	
	public function addprocess(){
		$this->load->model('warga');
		
		$nama = $this->input->post('nama');
		$notel = $this->input->post('notel');
		$nik = $this->input->post('nik');

		$arrayhasil = array(
			'nama' => $nama,
			'notel' => $notel,
			'nik' => $nik
		);
		
		
		$this->db->insert ('tb_warga',$arrayhasil );
		redirect(base_url());
	}

	public function deleteprocess($id){
		$this->load->model('warga');
		$this->db->delete('tb_warga', array('id' => $id));  
		redirect(base_url());
	}
	

}
