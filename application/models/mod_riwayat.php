<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_riwayat extends CI_Model {

	function __construct()
    {
        parent::__construct();
 	}

 	public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('inputrm');  
         return $query;  
      }

}

?>