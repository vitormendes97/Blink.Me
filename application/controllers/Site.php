<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function home()
	{
	$this->load->view('site/head');
    $this->load->view('site/header');
    $this->load->view('site/home');
    $this->load->view('site/agendamento');
    $this->load->view('site/footer');
	}

  public function lab()
  {
    $this->load->view('site/head');
    $this->load->view('site/header');
    $this->load->view('site/lab');
    $this->load->view('site/agendamento');
    $this->load->view('site/footer');
  }

	public function contato()
	{
		$this->load->view('site/head');
		$this->load->view('site/header');
		$this->load->view('site/contato');
		$this->load->view('site/agendamento');
		$this->load->view('site/footer');
	}

	public function club()
	{
		$this->load->view('site/head');
		$this->load->view('site/header');
		$this->load->view('site/club');
		$this->load->view('site/agendamento');
		$this->load->view('site/footer');
	}

	public function atelier()
	{
		$this->load->view('site/head');
		$this->load->view('site/header');
		$this->load->view('site/atelier');
		$this->load->view('site/agendamento');
		$this->load->view('site/footer');
	}

	public function loja(){
		$this->load->view('site/head');
		$this->load->view('site/coming_soon');
	}

	public function cosmetics()
	{
		$this->load->model('Assets');
		$data['marcas'] = $this->Assets->carregarMarcasCosmetics();
		$this->load->view('site/head');
		$this->load->view('site/header');
		$this->load->view('site/cosmetics',$data);
		$this->load->view('site/agendamento');
		$this->load->view('site/footer');
	}

	public function nails()
	{
		$this->load->view('site/head');
		$this->load->view('site/header');
		$this->load->view('site/nails');
		$this->load->view('site/agendamento');
		$this->load->view('site/footer');
	}

	public function makeup()
	{
		$this->load->view('site/head');
		$this->load->view('site/header');
		$this->load->view('site/makeup');
		$this->load->view('site/agendamento');
		$this->load->view('site/footer');
	}

	public function hair()
	{
		$this->load->view('site/head');
		$this->load->view('site/header');
		$this->load->view('site/hair');
		$this->load->view('site/agendamento');
		$this->load->view('site/footer');
	}

}
