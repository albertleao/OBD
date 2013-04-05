<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index()
	{
		$this->load->view("meta/pagehead");
		$this->load->view('menu/main');
		$this->load->view("layouts/pagefooter");
	}
}