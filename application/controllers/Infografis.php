<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infografis extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('infografis');
		$this->load->view('footer');
	}
}
