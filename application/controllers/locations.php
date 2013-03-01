<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Locations extends CI_Controller {

	public function index()
	{
		$this->load->view("meta/pagehead");
		$this->load->view("layouts/pageheader");
		$this->load->view('locations/main');
	}

	public function milton() {

		$this->load->view("meta/pagehead");
		$this->load->view("layouts/pageheader");
		$this->load->view("locations/milton");

	}

	public function brookhaven() {

		$this->load->view("meta/pagehead");
		$this->load->view("layouts/pageheader");
		$this->load->view("locations/brookhaven");
		
	}
}