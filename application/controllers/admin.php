<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {

		$this->load->view("meta/pagehead");
		$this->load->view("layouts/pageheader");
		$this->load->view('admin/main');
		$this->load->view("layouts/pagefooter");

	}

	public function login() {
		$this->load->library("form_validation");

		$this->form_validation->set_rules("username", "User Name", "required");
		$this->form_validation->set_rules("password", "Password", "required");

		if($this->form_validation->run()) {

			$this->load->model("admin_model");

			$username = $this->input->post("username");
			$password = $this->input->post("password");

			$result = $this->admin_model->login($username, $password);

			if($result) {

				redirect("admin/admin_panel");

			}

			else{

				$this->index();

			}

		}

		else {

			$this->index();

		}

	}

	public function admin_panel() {

		if($this->is_admin()) {

			$this->load->model("admin_model");

			$data['user'] = $this->admin_model->admin_user();

			$this->load->view("meta/pagehead");
			$this->load->view("layouts/pageheader");
			$this->load->view('admin/admin_panel', $data);
			$this->load->view("layouts/pagefooter");

		}

	}

	public function events() {

		if($this->is_admin()) {

			$this->load->helper('text');
			$this->load->model("events_model");

			$data['events'] = $this->events_model->events();

			$this->load->view("meta/pagehead");
			$this->load->view("layouts/pageheader");
			$this->load->view('admin/events', $data);
			$this->load->view("layouts/pagefooter");

		}		

	}

	public function event() {

		if($this->is_admin()) {

			$id = $this->input->get("id");

			if($id) {
				$this->load->model("events_model");
				$data['event'] = $this->events_model->event($id);				
			}
				$data['new'] = TRUE;
			$this->load->view("meta/pagehead");
			$this->load->view("layouts/pageheader");
			$this->load->view('admin/event', $data);
			$this->load->view("layouts/pagefooter");

		}

	}

	public function save_event() {

		$this->load->library("form_validation"); 

		$this->form_validation->set_rules("title", "Event Title", "");
		$this->form_validation->set_rules("description", "Event Description", "");
		$this->form_validation->set_rules("date", "Event Date", "");
		$this->form_validation->set_rules("current_event", "Current Event", "");

		if($this->form_validation->run()){

			$title = $this->input->post("title");
			$description = $this->input->post("description");
			$date = $this->input->post("date");
			$id = $this->input->post("current_event");

			$this->load->model("events_model");

			if($id){

				$this->events_model->update_event($title, $description, $date, $id);
				$this->events();

			}

			else {

				$this->events_model->create_event($title, $description, $date);
				$this->events();
				
			}

		}

		else {

			$this->event();

		}

	}


	private function is_admin() {

		if($this->session->userdata('is_admin') == TRUE) {

			return TRUE;

		}

		else {

			return FALSE;

		}

	}
	
}