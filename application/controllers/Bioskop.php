<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bioskop extends CI_Controller {
  public function __construct()
	{
		parent::__construct();
		$this->load->model('Bioskop_model');
		$this->load->model('Kota_model');
	}

  public function index()
	{
		$data['vaBioskop'] = $this->Bioskop_model->all();
    $this->load->view('template/head');
		$this->load->view('template/body_header');
		$this->load->view('template/body_menu');
    $this->load->view('bioskop/index', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
  {
		$this->form_validation->set_rules('kode', 'Kode', 'required|trim|min_length[3]|max_length[3]|is_unique[bioskop.kode]');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('kota', 'Kota', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['vaKota'] = $this->Kota_model->all();
			$this->load->view('template/head');
			$this->load->view('template/body_header');
			$this->load->view('template/body_menu');
			$this->load->view('bioskop/tambah', $data);
			$this->load->view('template/footer');
		} else {
			$this->Bioskop_model->simpan();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil tambah data!</div>');
			redirect('bioskop');
		}
	}
}