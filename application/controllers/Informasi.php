<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('informasi');
		$this->load->view('footer');
	}

	public function fasilitas()
	{
		$this->load->view('header');
		$this->load->view('fasilitas');
		$this->load->view('footer');
	}

}
