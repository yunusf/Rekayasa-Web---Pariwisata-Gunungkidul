<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Events extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("event_model");
		$this->load->library('form_validation');
		$this->load->model("login_model");
		if ($this->login_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
		$data["events"] = $this->event_model->getAll();
		$this->load->view("admin/eventt/list", $data);
	}

	public function add()
	{
		$eevent = $this->event_model;
		$validation = $this->form_validation;
		$validation->set_rules($eevent->rules());

		if ($validation->run()) {
			$eevent->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$this->load->view("admin/eventt/new_form");
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/events');

		$eevent = $this->event_model;
		$validation = $this->form_validation;
		$validation->set_rules($eevent->rules());

		if ($validation->run()) {
			$eevent->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["eevent"] = $eevent->getById($id);
		if (!$data["eevent"]) show_404();

		$this->load->view("admin/eventt/edit_form", $data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->event_model->delete($id)) {
			redirect(site_url('admin/events'));
		}
	}
}
