<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kotakabupaten extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kotakabupaten_model');
	}

  public function index()
	{
		$data['vaKota'] = $this->Kotakabupaten_model->all();
    $this->load->view('template/head');
		$this->load->view('template/body_header');
		$this->load->view('template/body_menu');
    $this->load->view('kotakabupaten/index', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
  {
		$this->form_validation->set_rules('nama', 'Kota/Kabupaten', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/head');
			$this->load->view('template/body_header');
			$this->load->view('template/body_menu');
			$this->load->view('kotakabupaten/tambah');
			$this->load->view('template/footer');
		} else {
			$this->Kotakabupaten_model->simpan();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil tambah data!</div>');
			redirect('kotakabupaten');
		}
	}
}