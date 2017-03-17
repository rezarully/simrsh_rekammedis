<?php
require (APPPATH . '/libraries/REST_Controller.php');
class data_pasien extends \Restserver\Libraries\REST_Controller {
	function __construct($config = 'rest') {
		parent::__construct($config);
	}
	// show data data_pasien
	function index_get() {
		$nama_pemilik = $this->get('nama_pemilik');
		if ($nama_pemilik == '') {
			$data_pasien = $this->db->get('data_pasien')->result();
		} else {
			$this->db->where('nama_pemilik', $nama_pemilik);
			$data_pasien = $this->db->get('data_pasien')->result();
		}
		$this->response($data_pasien, 200);
	}
	// insert new data to data_pasien
	function index_post() {
		$data = array(
			// 'id' => $this->post('id'),
			'no_registrasi' => $this->post('no_registrasi'),
			'no_rm' => $this->post('no_rm'),
			'nama_pemilik' => $this->post('nama_pemilik'),
			'nama_hewan' => $this->post('nama_hewan'),
			'jenis_hewan' => $this->post('jenis_hewan'),
			'signalemen_ttl' => $this->post('signalemen_ttl'),
			'signalemen_kelamin' => $this->post('signalemen_kelamin'));
			// 'username' => $this->post('username'),
			// 'status_antrian' => $this->post('status_antrian'));
		$insert = $this->db->insert('data_pasien', $data);
		if ($insert) {
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
	// update data mahasiswa
	function index_put() {
		$id = $this->put('id');
		$data = array(
			'id' => $this->put('id'),
			'no_registrasi' => $this->put('no_registrasi'),
			'no_rm' => $this->put('no_rm'),
			'nama_pemilik' => $this->put('nama_pemilik'),
			'nama_hewan' => $this->put('nama_hewan'),
			'jenis_hewan' => $this->put('jenis_hewan'),
			'signalemen_ttl' => $this->put('signalemen_ttl'),
			'signalemen_kelamin' => $this->put('signalemen_kelamin'));
		$this->db->where('id', $id);
		$update = $this->db->update('data_pasien', $data);
		if ($update) {
			$this->response($data, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
	// delete mahasiswa
	function index_delete() {
		$id = $this->delete('id');
		$this->db->where('id', $id);
		$delete = $this->db->delete('data_pasien');
		if ($delete) {
			$this->response(array('status' => 'success'), 201);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
}