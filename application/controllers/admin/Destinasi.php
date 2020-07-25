<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Destinasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("destinasi_model");
		$this->load->library('form_validation');
		$this->load->model("login_model");
		if ($this->login_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
		$data["destinasi"] = $this->destinasi_model->getAll();
		$this->load->view("admin/destinasi/v_index", $data);
	}

	public function add()
	{
		$dst = $this->destinasi_model;
		$validation = $this->form_validation;
		$validation->set_rules($dst->rules());

		if ($validation->run()) {
			$dst->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$this->load->view("admin/destinasi/v_tambah");
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/destinasi');

		$dst = $this->destinasi_model;
		$validation = $this->form_validation;
		$validation->set_rules($dst->rules());

		if ($validation->run()) {
			$dst->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["dst"] = $dst->getById($id);
		if (!$data["dst"]) show_404();

		$this->load->view("admin/destinasi/v_ubah", $data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->destinasi_model->delete($id)) {
			redirect(site_url('admin/destinasi'));
		}
	}
}
