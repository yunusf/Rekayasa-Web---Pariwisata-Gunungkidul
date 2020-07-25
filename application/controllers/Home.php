<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("event_model");
	}

	public function index()
	{
		$data["events"] = $this->event_model->getAll();
		$this->load->view("user/v_view", $data);
	}
}
