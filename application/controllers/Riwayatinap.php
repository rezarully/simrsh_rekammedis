<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayatinap extends CI_Controller {

	function __construct()
    {
        parent::__construct();
 		
 		$this->load->helper('url');
        $this->load->database();
 
    }

	public function index()
	{
		$this->load->view('riwayatinap_view');
	}

}

?>