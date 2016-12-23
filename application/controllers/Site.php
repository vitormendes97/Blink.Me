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
<<<<<<< HEAD
	$this->load->view('site/head');
    $this->load->view('site/header');
    $this->load->view('site/home');
    $this->load->view('site/agendamento');
=======
		$this->load->view('site/head');
    $this->load->view('site/header');
    $this->load->view('site/home');
>>>>>>> 79195e55a2b44ca30b837150009e7719203770dd
    $this->load->view('site/footer');
	}

  public function lab()
  {
    $this->load->view('site/head');
    $this->load->view('site/header');
    $this->load->view('site/lab');
<<<<<<< HEAD
    $this->load->view('site/agendamento');
=======
>>>>>>> 79195e55a2b44ca30b837150009e7719203770dd
    $this->load->view('site/footer');
  }

	public function contato()
	{
		$this->load->view('site/head');
		$this->load->view('site/header');
		$this->load->view('site/contato');
<<<<<<< HEAD
		$this->load->view('site/agendamento');
=======
>>>>>>> 79195e55a2b44ca30b837150009e7719203770dd
		$this->load->view('site/footer');
	}

	public function club()
	{
		$this->load->view('site/head');
		$this->load->view('site/header');
		$this->load->view('site/club');
<<<<<<< HEAD
		$this->load->view('site/agendamento');
=======
>>>>>>> 79195e55a2b44ca30b837150009e7719203770dd
		$this->load->view('site/footer');
	}

	public function atelier()
	{
		$this->load->view('site/head');
		$this->load->view('site/header');
		$this->load->view('site/atelier');
<<<<<<< HEAD
		$this->load->view('site/agendamento');
=======
>>>>>>> 79195e55a2b44ca30b837150009e7719203770dd
		$this->load->view('site/footer');
	}

	public function loja(){
		$this->load->view('site/head');
		$this->load->view('site/coming_soon');
	}

	public function cosmetics()
	{
<<<<<<< HEAD
		$this->load->model('Assets');
		$data['marcas'] = $this->Assets->carregarMarcasCosmetics();
		$this->load->view('site/head');
		$this->load->view('site/header');
		$this->load->view('site/cosmetics',$data);
		$this->load->view('site/agendamento');
=======
		$this->load->view('site/head');
		$this->load->view('site/header');
		$this->load->view('site/cosmetics');
>>>>>>> 79195e55a2b44ca30b837150009e7719203770dd
		$this->load->view('site/footer');
	}

	public function nails()
	{
		$this->load->view('site/head');
		$this->load->view('site/header');
		$this->load->view('site/nails');
<<<<<<< HEAD
		$this->load->view('site/agendamento');
=======
>>>>>>> 79195e55a2b44ca30b837150009e7719203770dd
		$this->load->view('site/footer');
	}

	public function makeup()
	{
		$this->load->view('site/head');
		$this->load->view('site/header');
		$this->load->view('site/makeup');
<<<<<<< HEAD
		$this->load->view('site/agendamento');
=======
>>>>>>> 79195e55a2b44ca30b837150009e7719203770dd
		$this->load->view('site/footer');
	}

	public function hair()
	{
		$this->load->view('site/head');
		$this->load->view('site/header');
		$this->load->view('site/hair');
<<<<<<< HEAD
		$this->load->view('site/agendamento');
=======
>>>>>>> 79195e55a2b44ca30b837150009e7719203770dd
		$this->load->view('site/footer');
	}

}
