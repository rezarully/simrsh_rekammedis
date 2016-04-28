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
		
		if(isset($_POST['submit']))
		{
		    $no_registrasi 	= $this->input->post('no_registrasi');
		    $no_rm 			= $this->input->post('no_rm');

		    $data = array(
		        'no_registrasi' => $no_registrasi,
		        'no_rm' 		=> $no_rm
		    );

		    $this->load->mod_tindakan->insert_users($data);
		}

	}

}

?>