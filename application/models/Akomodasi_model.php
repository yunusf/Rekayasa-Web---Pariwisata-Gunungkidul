<?php defined('BASEPATH') or exit('No direct script access allowed');

class Akomodasi_model extends CI_Model
{
	private $_table = "tb_akomodasi";

	public $id;
	public $nama;
	public $alamat;
	public $deskripsi;
	// public $harga;
	public $image = "default.jpg";

	public function rules()
	{
		return [
			[
				'field' => 'nama',
				'label' => 'nama',
				'rules' => 'required'
			],

			[
				'field' => 'alamat',
				'label' => 'alamat',
				'rules' => 'required'
			],

			// [
			// 	'field' => 'harga',
			// 	'label' => 'harga',
			// 	'rules' => 'int'
			// ],

			[
				'field' => 'deskripsi',
				'label' => 'deskripsi',
				'rules' => 'required'
			]
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id" => $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id = uniqid();
		$this->nama = $post["nama"];
		$this->alamat = $post["alamat"];
		$this->deskripsi = $post["deskripsi"];
		// $this->harga = $post["harga"];
		$this->image = $this->_uploadImage();
		return $this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id = $post["id"];
		$this->nama = $post["nama"];
		$this->alamat = $post["alamat"];
		$this->deskripsi = $post["deskripsi"];
		// $this->harga = $post["harga"];
		if (!empty($_FILES["image"]["name"])) {
			$this->image = $this->_uploadImage();
		} else {
			$this->image = $post["old_image"];
		}
		return $this->db->update($this->_table, $this, array('id' => $post['id']));
	}

	public function delete($id)
	{
		$this->_deleteImage($id);
		return $this->db->delete($this->_table, array("id" => $id));
	}

	private function _uploadImage()
	{
		$config['upload_path']          = './upload/product/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->id;
		$config['overwrite']            = true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}

		return "default.jpg";
	}
	private function _deleteImage($id)
	{
		$gambar = $this->getById($id);
		if ($gambar->image != "default.jpg") {
			$filename = explode(".", $gambar->image)[0];
			return array_map('unlink', glob(FCPATH . "upload/product/$filename.*"));
		}
	}
}
