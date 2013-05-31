<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index() {

		$this->load->model("events_model");

		$data['events'] = $this->events_model->future_events();

		$this->load->view("meta/pagehead");
		$this->load->view("layouts/pageheader");
		$this->load->view('events/main', $data);
		$this->load->view("layouts/pagefooter");
	}
}