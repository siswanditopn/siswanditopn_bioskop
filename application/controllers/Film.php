<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Film extends CI_Controller {
  public function __construct()
	{
		parent::__construct();
		$this->load->model('Film_model');
	}

  public function index()
	{
		$data['vaFilm'] = $this->Film_model->all();
    $this->load->view('template/head');
		$this->load->view('template/body_header');
		$this->load->view('template/body_menu');
    $this->load->view('film/index', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
  {
		$this->form_validation->set_rules('judul', 'Judul Film', 'required|trim|is_unique[film.judul]');
		$this->form_validation->set_rules('tgl_launc', 'Tanggal Rilis', 'required|trim');
		$this->form_validation->set_rules('synopsys', 'Sipnosis', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/head');
			$this->load->view('template/body_header');
			$this->load->view('template/body_menu');
			$this->load->view('film/tambah');
			$this->load->view('template/footer');
		} else {
			$this->Film_model->simpan();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil tambah data!</div>');
			redirect('film');
		}
	}
}