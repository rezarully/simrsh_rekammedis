<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_tindakan extends CI_Model {

	function __construct()
    {
        parent::__construct();
 	}

 	function insert_users($insert){
 		$data = array(
		    'no_registrasi' 		=> $insert['no_registrasi'],
		    'no_rm' 				=> $insert['no_rm'],
		    'nama_pemilik' 			=> $insert['nama_pemilik'],
		    'nama_hewan' 			=> $insert['nama_hewan'],
		    'jenis_hewan' 			=> $insert['jenis_hewan'],
		    'signalemen_ttl' 		=> $insert['signalemen_ttl'],
		    'signalemen_kelamin' 	=> $insert['signalemen_kelamin'],
		    'username' 				=> $insert['username'],
		    'nama_tenagamedis' 		=> $insert['nama_tenagamedis'],
		    'nama_koas' 			=> $insert['nama_koas'],
		    'anamnesis' 			=> $insert['anamnesis'],
		    'keadaan_umum' 			=> $insert['keadaan_umum'],
		    'frek_nafas' 			=> $insert['frek_nafas'],
		    'frek_pulsus' 			=> $insert['frek_pulsus'],
		    'temperatur_tubuh' 		=> $insert['temperatur_tubuh'],
		    'kulit_rambut' 			=> $insert['kulit_rambut'],
		    'selaput_lendir' 		=> $insert['selaput_lendir'],
		    'kelenjar_limfe' 		=> $insert['kelenjar_limfe'],
		    'pernafasan' 			=> $insert['pernafasan'],
		    'peredaran_darah' 		=> $insert['peredaran_darah'],
		    'pencernaan' 			=> $insert['pencernaan'],
		    'kelamin_perkencingan' 	=> $insert['kelamin_perkencingan'],
		    'syaraf' 				=> $insert['syaraf'],
		    'anggota_gerak' 		=> $insert['anggota_gerak'],
		    'berat_badan' 			=> $insert['berat_badan'],
		    'lain_anamnesis' 		=> $insert['lain_anamnesis'],
		    'id_lab' 				=> $insert['id_lab'],
		    'ket_lab' 				=> $insert['ket_lab'],
		    'diagnosis' 			=> $insert['diagnosis'],
		    'prognosis' 			=> $insert['prognosis'],
		    'id_obat' 				=> $insert['id_obat'],
		    'bentuk_sediaan' 		=> $insert['bentuk_sediaan'],
		    'jumlah_obat' 			=> $insert['jumlah_obat'],
		    'dosis_obat' 			=> $insert['dosis_obat'],
		    'petunjuk_obat' 		=> $insert['petunjuk_obat'],
		    'id_tindakan' 			=> $insert['id_tindakan'],
		    'qty_tindakan' 			=> $insert['qty_tindakan'],
		    'ket_tindakan' 			=> $insert['ket_tindakan']
		);

        $query = $this->db->insert('inputrm', $data);

    }

}

?>