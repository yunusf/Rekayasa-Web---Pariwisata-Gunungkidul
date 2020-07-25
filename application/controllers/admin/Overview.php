<?php defined('BASEPATH') or exit('No direct script access allowed');

class Overview extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("login_model");
		if ($this->login_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
		// load view admin/overview.php
		$this->load->view("admin/overview");
	}
}
