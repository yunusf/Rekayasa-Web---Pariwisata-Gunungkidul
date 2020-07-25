<?php

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("login_model");
		$this->load->library('form_validation');
		// $this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		if ($this->input->post()) {
			if ($this->login_model->doLogin()) redirect(site_url('admin'));
		}
		$this->load->view("v_login");
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('home'));
	}

	public function test()
	{
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode(array('foo' => 'bar')));
	}
}
