<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index()
	{
		$this->load->view("meta/pagehead");
		$this->load->view("layouts/pageheader");
		$this->load->view('events/main');
	}
}