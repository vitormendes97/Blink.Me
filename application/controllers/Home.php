<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('header_original');
		$this->load->view('Home2');

	}
	
		public function test()
	{
		$this->load->view('header_original');
		$this->load->view('Home');

	}
}
