<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conversion extends CI_Controller {


	public function index()
	{
		$this->load->view('redirect');
	}

	public function jsona()
	{
		$this->load->view('jsona');
	}

}
