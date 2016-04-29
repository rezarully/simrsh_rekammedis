<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakaninap extends CI_Controller {

	function __construct()
    {
        parent::__construct();
 		
 		$this->load->helper('url');
        $this->load->database();
 
    }

	public function index()
	{
		$this->load->view('tindakaninap_view');
	}

	public function savedatainap()
	{
		$insert = array();
		$insert['waktu'] 				= $_POST['waktu'];
		$insert['no_registrasi'] 		= $_POST['no_registrasi'];
		$insert['no_rm'] 				= $_POST['no_rm'];
		$insert['nama_pemilik'] 		= $_POST['nama_pemilik'];
		$insert['nama_hewan'] 			= $_POST['nama_hewan'];
		$insert['diagnosa'] 			= $_POST['diagnosa'];
		$insert['signalemen_ttl'] 		= $_POST['signalemen_ttl'];
		$insert['signalemen_kelamin'] 	= $_POST['signalemen_kelamin'];
		$insert['berat_badan'] 			= $_POST['berat_badan'];
		$insert['username'] 			= $_POST['username'];
		$insert['nama_mahasiswa'] 		= $_POST['nama_mahasiswa'];
		$insert['semester_mahasiswa']	= $_POST['semester_mahasiswa'];
		$insert['rencana_pengobatan'] 	= $_POST['rencana_pengobatan'];
		$insert['pengobatan'] 			= $_POST['pengobatan'];
		$insert['ket_pengobatan'] 		= $_POST['ket_pengobatan'];
		
  
		$this->mod_tindakaninap->insert_users_inap($insert);
		 
		redirect('tindakaninap/index');
	}
}

?>