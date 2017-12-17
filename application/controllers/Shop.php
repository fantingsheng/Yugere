<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	
	public function index()
	{
		$this->load->view('shop');
	}

	public function detail()
	{
		$this->load->view('shop-detail');
	}

}
