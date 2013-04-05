<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Locations extends CI_Controller {

	public function index()
	{
		$this->load->view("meta/pagehead");
		$this->load->view("layouts/pageheader");
		$this->load->view('locations/main');
		$this->load->view("layouts/pagefooter");
	}

	public function milton() {

		$this->load->view("meta/pagehead");
		$this->load->view("layouts/pageheader");
		$this->load->view("locations/milton");
		$this->load->view("layouts/pagefooter");

	}

	public function brookhaven() {

		$this->load->view("meta/pagehead");
		$this->load->view("layouts/pageheader");
		$this->load->view("locations/brookhaven");
		$this->load->view("layouts/pagefooter");
		
	}
}