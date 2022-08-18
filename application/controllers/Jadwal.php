<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
  public function __construct()
	{
		parent::__construct();
		$this->load->model('Jadwal_model');
		$this->load->model('Bioskop_model');
		$this->load->model('Film_model');
	}

  public function index()
	{
		$data['vaJadwal'] = $this->Jadwal_model->all();
    $this->load->view('template/head');
		$this->load->view('template/body_header');
		$this->load->view('template/body_menu');
    $this->load->view('jadwal/index', $data);
		$this->load->view('template/footer');
	}
	public function tambah()
  {
		$this->form_validation->set_rules('film_kode', 'Film', 'required|trim');
		$this->form_validation->set_rules('bioskop_kode', 'Bioskop', 'required|trim');
		$this->form_validation->set_rules('waktu', 'Waktu', 'required|trim');
		$this->form_validation->set_rules('kuota', 'Kuota', 'required|trim');
		$this->form_validation->set_rules('harga', 'Harga', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['vaBioskop'] = $this->Bioskop_model->all();
			$data['vaFilm']    = $this->Film_model->all();
			$this->load->view('template/head');
			$this->load->view('template/body_header');
			$this->load->view('template/body_menu');
			$this->load->view('jadwal/tambah', $data);
			$this->load->view('template/footer');
		} else {
			$this->Jadwal_model->simpan();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil tambah data!</div>');
			redirect('jadwal');
		}
	}
}