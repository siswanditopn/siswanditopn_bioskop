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
}