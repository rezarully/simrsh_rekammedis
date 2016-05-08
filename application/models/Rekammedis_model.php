<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekammedis_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
 	}

	function datapas_aktif()
	{
		$query = $this->db->get('inputrm');
		return $query->result();
	}

	function get_data_dropdownlab()
	{
		$data = array();
		$query = $this->db->get('daftarlab')->result_array();
		if( is_array($query) && count ($query) > 0 )
		{
			$data[''] = '';
			foreach ($query as $row ) 
			{
				$data[$row['id_lab']] = $row['nama_pemeriksaan'];
			}
		}
		return $data;
	}

	function get_data_dropdownobat()
	{
		$data = array();
		$query = $this->db->get('daftarobat')->result_array();
		if( is_array($query) && count ($query) > 0 )
		{
			foreach ($query as $row ) 
			{
				$data[$row['id_obat']] = $row['nama_obat'];
			}
		}
		return $data;
	}

	function get_data_dropdowntindakan()
	{
		$data = array();
		$query = $this->db->get('daftartindakan')->result_array();
		if( is_array($query) && count ($query) > 0 )
		{
			$data[''] = '';
			foreach ($query as $row ) 
			{
				$data[$row['id_tindakan']] = $row['nama_tindakan'];
			}
		}
		return $data;
	}

 	function insert_users($insert){
 		$data = array(
 			'waktu' 				=> $insert['waktu'],
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
		    'nama_pemeriksaan' 		=> $insert['nama_pemeriksaan'],
		    'ket_lab' 				=> $insert['ket_lab'],
		    'diagnosis' 			=> $insert['diagnosis'],
		    'prognosis' 			=> $insert['prognosis'],
		    'nama_obat' 			=> $insert['nama_obat'],
		    'bentuk_sediaan' 		=> $insert['bentuk_sediaan'],
		    'jumlah_obat' 			=> $insert['jumlah_obat'],
		    'dosis_obat' 			=> $insert['dosis_obat'],
		    'petunjuk_obat' 		=> $insert['petunjuk_obat'],
		    'nama_tindakan' 		=> $insert['nama_tindakan'],
		    'qty_tindakan' 			=> $insert['qty_tindakan'],
		    'ket_tindakan' 			=> $insert['ket_tindakan']
		);

        $query = $this->db->insert('inputrm', $data);

    }

    /*function select()  
    {  
         //data is retrive from this query  
         $query = $this->db->get('inputrm');  
         return $query;  
    }*/

    function daftar_rm_aktif()
	{
		$query = $this->db->get('inputrm');
		return $query->result();
	}

    /*function selectinap()  
    {  
        //data is retrive from this query  
        $query = $this->db->get('inputrminap');  
        return $query;  
    }*/

    function daftar_inap_aktif()
	{
		$query = $this->db->get('inputrminap');
		return $query->result();
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

    function clone_lab()
    {
    	//connect ke database
		mysql_connect("localhost","root","");
		mysql_select_db("db_anime");
		  
		//menankap data inputan field dari form
		$data = $_POST['data'];
		  
		//perulangan untuk mengekstrak array dari lemparan isi field form
		foreach($data as $row){
		//menyimpan data ke dalam tablel tbl_karakter
		mysql_query('INSERT INTO tbl_karakter (nama_char) VALUES ("'.$row.'") ');
 		}
 	}
 

}

?>