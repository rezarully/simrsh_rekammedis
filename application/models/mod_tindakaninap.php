<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_tindakaninap extends CI_Model {

	function __construct()
    {
        parent::__construct();
 	}

 	function insert_users_inap($insert){
 		$data = array(
		    'waktu' 				=> $insert['waktu'],
		    'no_registrasi' 		=> $insert['no_registrasi'],
		    'no_rm' 				=> $insert['no_rm'],
		    'nama_pemilik' 			=> $insert['nama_pemilik'],
		    'nama_hewan' 			=> $insert['nama_hewan'],
		    'diagnosa' 				=> $insert['diagnosa'],
		    'signalemen_ttl' 		=> $insert['signalemen_ttl'],
		    'signalemen_kelamin' 	=> $insert['signalemen_kelamin'],
		    'berat_badan' 			=> $insert['berat_badan'],
		    'username' 				=> $insert['username'],
		    'nama_mahasiswa' 		=> $insert['nama_mahasiswa'],
		    'semester_mahasiswa' 	=> $insert['semester_mahasiswa'],
		    'rencana_pengobatan' 	=> $insert['rencana_pengobatan'],
		    'pengobatan' 			=> $insert['pengobatan'],
		    'ket_pengobatan' 		=> $insert['ket_pengobatan']
		);

        $query = $this->db->insert('inputrminap', $data);

    }

}

?>