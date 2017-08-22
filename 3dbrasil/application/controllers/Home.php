<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->carregarViews('home');
	}

	public function sobre(){
		$this->carregarViews('sobre');
	}

	public function parceiros(){
		$this->carregarViews('parceiros');
	}

	public function produtos(){
		$this->carregarViews('produtos');
	}

	public function contato(){
		$this->carregarViews('contato');
	}

	public function error404(){
		$this->carregarViews('error404');

	}

	public function carregarViews($view){
		$this->load->view('html-header');
		$this->load->view('header');
		$this->load->view($view);
		$this->load->view('footer');
		$this->load->view('html-footer');
	}
}