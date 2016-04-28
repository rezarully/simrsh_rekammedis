<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_tindakan extends CI_Model {

	function __construct()
    {
        parent::__construct();
 	}

 	function insert_users($data){
        $this->db->insert('inputrm', $data);
        return;
    }

}

?>