<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('estrutura/cabepage');
		$this->load->view('corpo/index');
		$this->load->view('estrutura/rodapage');
	}
}
