<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("berita_model");
		$this->load->library('form_validation');
		$this->load->model("login_model");
		if ($this->login_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
		$data["berita"] = $this->berita_model->getAll();
		$this->load->view("admin/berita/v_index", $data);
	}

	public function add()
	{
		$tambah = $this->berita_model;
		$validation = $this->form_validation;
		$validation->set_rules($tambah->rules());

		if ($validation->run()) {
			$tambah->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$this->load->view("admin/berita/v_tambah");
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/berita');

		$rubah = $this->berita_model;
		$validation = $this->form_validation;
		$validation->set_rules($rubah->rules());

		if ($validation->run()) {
			$rubah->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["rubah"] = $rubah->getById($id);
		if (!$data["rubah"]) show_404();

		$this->load->view("admin/berita/v_ubah", $data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->berita_model->delete($id)) {
			redirect(site_url('admin/berita'));
		}
	}
}
