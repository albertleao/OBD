<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view("meta/pagehead");
		$this->load->view("layouts/pageheader");
		$this->load->view('home/main');
		$this->load->view("layouts/pagefooter");
	}
}