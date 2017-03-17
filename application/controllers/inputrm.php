<?php
require (APPPATH . '/libraries/REST_Controller.php');
class inputrm extends \Restserver\Libraries\REST_Controller {
	function __construct($config = 'rest') {
		parent::__construct($config);
	}
	// show data inputrm
	function index_get() {
		$nama_pemilik = $this->get('nama_pemilik');
		if ($nama_pemilik == '') {
			$inputrm = $this->db->get('inputrm')->result();
		} else {
			$this->db->where('nama_pemilik', $nama_pemilik);
			$inputrm = $this->db->get('inputrm')->result();
		}
		$this->response($inputrm, 200);
	}
	// insert new data to inputrm
	function index_post() {
		$data = array(
			// 'id' => $this->post('id'),
			'no_registrasi' => $this->post('no_registrasi'),
			'no_rm' => $this->post('no_rm'),
			'nama_pemilik' => $this->post('nama_pemilik'),
			'nama_hewan' => $this->post('nama_hewan'),
			'jenis_hewan' => $this->post('jenis_hewan'),
			'signalemen_ttl' => $this->post('signalemen_ttl'),
			'signalemen_kelamin' => $this->post('signalemen_kelamin'),
			'nama_tenagamedis' => $this->post('nama_tenagamedis'),
			'nama_mahasiswa' => $this->post('nama_mahasiswa'),
			'anamnesis' => $this->post('anamnesis'),
			'keadaan_umum' => $this->post('keadaan_umum'),
			'frek_nafas' => $this->post('frek_nafas'),
			'frek_pulsus' => $this->post('frek_pulsus'),
			'temperatur_tubuh' => $this->post('temperatur_tubuh'),
			'kulit_rambut' => $this->post('kulit_rambut'),
			'selaput_lendir' => $this->post('selaput_lendir'),
			'kelenjar_limfe' => $this->post('kelenjar_limfe'),
			'pernafasan' => $this->post('pernafasan'),
			'peredaran_darah' => $this->post('peredaran_darah'),
			'pencernaan' => $this->post('pencernaan'),
			'kelamin_perkencingan' => $this->post('kelamin_perkencingan'),
			'syaraf' => $this->post('syaraf'),
			'anggota_gerak' => $this->post('anggota_gerak'),
			'berat_badan' => $this->post('berat_badan'),
			'lain_anamnesis' => $this->post('lain_anamnesis'),
			'nama_pemeriksaan' => $this->post('nama_pemeriksaan'),
			'ket_lab' => $this->post('ket_lab'),
			'diagnosis' => $this->post('diagnosis'),
			'prognosis' => $this->post('prognosis'),
			'nama_obat' => $this->post('nama_obat'),
			'jumlah_resep' => $this->post('jumlah_resep'),
			'satuan_resep' => $this->post('satuan_resep'),
			'perintah_pembuatan' => $this->post('perintah_pembuatan'),
			'petunjuk_penggunaan' => $this->post('petunjuk_penggunaan'),
			'nama_tindakan' => $this->post('nama_tindakan'),
			'qty_tindakan' => $this->post('qty_tindakan'),
			'ket_tindakan' => $this->post('ket_tindakan'));
			// 'username' => $this->post('username'),
			// 'status_antrian' => $this->post('status_antrian'));
		$insert = $this->db->insert('inputrm', $data);
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
			'signalemen_kelamin' => $this->put('signalemen_kelamin'),
			'nama_tenagamedis' => $this->put('nama_tenagamedis'),
			'nama_mahasiswa' => $this->put('nama_mahasiswa'),
			'anamnesis' => $this->put('anamnesis'),
			'keadaan_umum' => $this->put('keadaan_umum'),
			'frek_nafas' => $this->put('frek_nafas'),
			'frek_pulsus' => $this->put('frek_pulsus'),
			'temperatur_tubuh' => $this->put('temperatur_tubuh'),
			'kulit_rambut' => $this->put('kulit_rambut'),
			'selaput_lendir' => $this->put('selaput_lendir'),
			'kelenjar_limfe' => $this->put('kelenjar_limfe'),
			'pernafasan' => $this->put('pernafasan'),
			'peredaran_darah' => $this->put('peredaran_darah'),
			'pencernaan' => $this->put('pencernaan'),
			'kelamin_perkencingan' => $this->put('kelamin_perkencingan'),
			'syaraf' => $this->put('syaraf'),
			'anggota_gerak' => $this->put('anggota_gerak'),
			'berat_badan' => $this->put('berat_badan'),
			'lain_anamnesis' => $this->put('lain_anamnesis'),
			'nama_pemeriksaan' => $this->put('nama_pemeriksaan'),
			'ket_lab' => $this->put('ket_lab'),
			'diagnosis' => $this->put('diagnosis'),
			'prognosis' => $this->put('prognosis'),
			'nama_obat' => $this->put('nama_obat'),
			'jumlah_resep' => $this->put('jumlah_resep'),
			'satuan_resep' => $this->put('satuan_resep'),
			'perintah_pembuatan' => $this->put('perintah_pembuatan'),
			'petunjuk_penggunaan' => $this->put('petunjuk_penggunaan'),
			'nama_tindakan' => $this->put('nama_tindakan'),
			'qty_tindakan' => $this->put('qty_tindakan'),
			'ket_tindakan' => $this->put('ket_tindakan'));
		$this->db->where('id', $id);
		$update = $this->db->update('inputrm', $data);
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
		$delete = $this->db->delete('inputrm');
		if ($delete) {
			$this->response(array('status' => 'success'), 201);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
}