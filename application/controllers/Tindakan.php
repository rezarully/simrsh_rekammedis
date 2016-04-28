<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
 		
 		$this->load->helper('url');
 		$this->load->helper('form');
        $this->load->database();
    }

	public function index()
	{
		$this->load->view('tindakan_view');
	}

	public function savedata()
	{
		$insert = array();
		$insert['no_registrasi'] = $_POST['no_registrasi'];
		$insert['no_rm'] = $_POST['no_rm'];
		    
		$this->mod_tindakan->insert_users($insert);
		 
		redirect('tindakan/index');
	}

}

?>