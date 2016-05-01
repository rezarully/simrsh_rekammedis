<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

	function __construct()
    {
        parent::__construct();
 		
 		$this->load->helper('url');
        $this->load->database();
        $this->load->model('mod_riwayat');
    }

	public function index()
	{
        $data['h']=$this->mod_riwayat->select();  
        //return the data in view  
		$this->load->view('riwayat_view', $data);
	}

}

?>