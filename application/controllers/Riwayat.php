<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

	function __construct()
    {
        parent::__construct();
 		
 		$this->load->helper('url');
        $this->load->database();
        $this->load->model(array('mod_riwayat'));
    }

	public function index()
	{
		$this->load->view('riwayat_view');
	}

	public function calldata()
	{
		$data['fields'] = array(
			'waktu',
			'no_registrasi',
			'no_rm',
			'username',
			'nama_hewan',
			'diagnosa'
		);

		$this->mod_riwayat->get_users($data);
	}

}

?>