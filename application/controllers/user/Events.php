<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Events extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("event_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["events"] = $this->event_model->getAll();
		$this->load->view("user/index.php", $data);
	}
}
