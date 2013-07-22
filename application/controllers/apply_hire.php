<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apply_hire extends CI_Controller {

	public function index()
	{
		$this->load->helper('form');

		$this->load->view("meta/pagehead");
		$this->load->view("layouts/pageheader");
		$this->load->view('apply_hire/main');
		$this->load->view("layouts/pagefooter");
	}

	public function post() {

		$name = $this->input->post("name");
		$street_address = $this->input->post("street_address");
		$city = $this->input->post("city");
		$state = $this->input->post("state");
		$zip = $this->input->post("zip");
		$cell = $this->input->post("cell");
		$home = $this->input->post("home");
		$best_time_to_reach = $this->input->post("best_time_to_reach");
		$how_did_you_hear = $this->input->post("how_did_you_hear");
		$position_time = $this->input->post("position_time");
		$available_start_date = $this->input->post("available_start_date");
		$available_hours = $this->input->post("available_hours");

		$current_place_of_employment = $this->input->post("current_place_of_employment");
		$start_date = $this->input->post("start_date");
		$end_date = $this->input->post("end_date");
		$address_of_current_employment = $this->input->post("address_of_current_employment");
		$position = $this->input->post("position");
		$supervisor = $this->input->post("supervisor");
		$contact_previous_employer = $this->input->post("contact_previous_employer");

		$place_of_employment = $this->input->post("place_of_employment");
		$start_date_1 = $this->input->post("start_date_1");
		$end_date_1 = $this->input->post("end_date_1");
		$address_of_employment_1 = $this->input->post("address_of_employment_1");
		$position_1 = $this->input->post("position_1");
		$supervisor_1 = $this->input->post("supervisor_1");
		$contact_previous_employer_1 = $this->input->post("contact_previous_employer_1");

		$place_of_employment_2 = $this->input->post("place_of_employment_2");
		$start_date_2 = $this->input->post("start_date_2");
		$end_date_2 = $this->input->post("end_date_2");
		$address_of_current_employment_2 = $this->input->post("address_of_current_employment_2");
		$position_2 = $this->input->post("position_2");
		$supervisor_2 = $this->input->post("supervisor_2");
		$contact_previous_employer_2 = $this->input->post("contact_previous_employer_2");

		$ref_name = $this->input->post("ref_name");
		$relationship = $this->input->post("relationship");
		$ref_contact = $this->input->post("ref_contact");
		$ref_known_years = $this->input->post("ref_known_years");

		$ref_name_1 = $this->input->post("ref_name_1");
		$relationship_1 = $this->input->post("relationship_1");
		$ref_contact_1 = $this->input->post("ref_contact_1");
		$ref_known_years_1 = $this->input->post("ref_known_years_1");

		$ref_name_2 = $this->input->post("ref_name_2");
		$relationship_2 = $this->input->post("relationship_2");
		$ref_contact_2 = $this->input->post("ref_contact_2");
		$ref_known_years_2 = $this->input->post("ref_known_years_2");

		$this->load->library('email');

		$config['protocol'] = 'sendmail';
		$config['mailtype'] = 'html';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);

		$this->email->from('apply@oldeblinddog.com');

		$this->email->to('gskokoszka@gmail.com');

		$this->email->subject($name);

		$this->email->message(
			"<h1> General Information </h1>" . 
			"Name => " . $name . "<br />" . 
			"Street Address => " . $street_address . "<br />"  . 
			"City => " . $city . "<br />" . 
			"State => " . $state . "<br />" . 
			"Zip Code => " . $zip . "<br />" .
			"Cell Number => " . $cell . "<br />" . 
			"Home Number => " . $home . "<br />" . 
			"Best Time to Reach => " . $best_time_to_reach . "<br />" . 
			"How Did You Hear About OBD? => " . $how_did_you_hear . "<br />" . 
			"Position Time => " . $position_time . "<br />" . 
			"Available Start Date =>" . $available_start_date . "<br />" .
			"Available Hours =>" . $available_hours . "<br />" .

			"<h1> Work History </h1>" . 

			"Current Place of Employment => " . $current_place_of_employment . "<br />" .
			"Date Started => " . $start_date . "<br />" . 
			"Date Ended => " . $end_date . "<br />" . 
			"Address of Current Employment => " . $address_of_current_employment . "<br />" . 
			"Postion at Current Employment => " . $position . "<br />" . 
			"Supervisor Name => " . $supervisor . "<br />" . 
			"Allowed to Contact Current Employer => " . $contact_previous_employer . "<br />" . 


			"Place of Employment => " . $place_of_employment . "<br />" . 
			"Date Started => " . $start_date_1 . "<br />" . 
			"Date Ended => " . $end_date_1 . "<br />" . 
			"Address of Employment => " . $address_of_employment_1 . "<br />" . 
			"Position at Employment => " . $position_1 . "<br />" . 
			"Supervisor Name => " . $supervisor_1 . "<br />" . 
			"Allowed to Contact Current Employer => " . $contact_previous_employer_1 . "<br />" . 


			"Place of Employment => " . $place_of_employment_2 . "<br />" . 
			"Date Started => " . $start_date_2 . "<br />" . 
			"Date Ended => " . $end_date_2 . "<br />" . 
			"Address of Employment => " . $address_of_current_employment_2 . "<br />" . 
			"Postion at Employment => " . $position_2 . "<br />" . 
			"Supervisor Name => " . $supervisor_2 . "<br />" . 
			"Allowed to Contact Current Employee => " . $contact_previous_employer_2 . "<br />" .

			"<h1> References </h1>" . 

			"Reference Name => " . $ref_name . "<br />" . 
			"Reference Relationship => " . $relationship . "<br />" . 
			"Reference Contact => " . $ref_contact . "<br />" . 
			"Amount of Years Known => " . $ref_known_years . "<br />" . 


			"Reference Name => " . $ref_name_1 . "<br />" . 
			"Reference Relationship => " . $relationship_1 . "<br />" . 
			"Reference Contact => " . $ref_contact_1 . "<br />" . 
			"Amount of Years Known => " . $ref_known_years_1 . "<br />" . 


			"Referece Name => " . $ref_name_2 . "<br />" . 
			"Reference Relationship => " . $relationship_2 . "<br />" . 
			"Reference Contact => " . $ref_contact_2 . "<br />" . 
			"Amount of Years Known => " . $ref_known_years_2 . "<br />"


		);	

		$this->email->send();

		$this->load->view("meta/pagehead");
		$this->load->view("layouts/pageheader");
		$this->load->view('apply_hire/success');
		$this->load->view("layouts/pagefooter");

	}
}