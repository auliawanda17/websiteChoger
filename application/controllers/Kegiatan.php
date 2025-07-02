<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('kegiatan');
		$this->load->view('footer');
	}

	public function detail_kegiatan(){
		$this->load->view('header');
		$this->load->view('detail_kegiatan');
		$this->load->view('footer');
	}

	public function galeri_kegiatan()
	{
		$this->load->view('header');
		$this->load->view('foto_kegiatan');
		$this->load->view('footer');
	}
}
