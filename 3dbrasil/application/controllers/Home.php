<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->view('html-header');
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
		$this->load->view('html-footer');
	}

	public function sobre(){
		$this->load->view('html-header');
		$this->load->view('header');
		$this->load->view('sobre');
		$this->load->view('footer');
		$this->load->view('html-footer');
	}

	public function parceiros(){
		$this->load->view('html-header');
		$this->load->view('header');
		$this->load->view('parceiros');
		$this->load->view('footer');
		$this->load->view('html-footer');
	}

	public function produtos(){
		$this->load->view('html-header');
		$this->load->view('header');
		$this->load->view('produtos');
		$this->load->view('footer');
		$this->load->view('html-footer');
	}

	public function contato(){
		$this->load->view('html-header');
		$this->load->view('header');
		$this->load->view('contato');
		$this->load->view('footer');
		$this->load->view('html-footer');
	}

	public function error404(){
		
		$this->load->view('html-header');
		$this->load->view('header');
		$this->load->view('error404');
		$this->load->view('footer');
		$this->load->view('html-footer');
	}

}