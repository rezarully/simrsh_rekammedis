<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekammedis_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
        $this->load->database();
 	}

	function user_exists($user_exists)
    {
        $check_user = $this->db->get_where('user', array('username' => $user_exists['username'],'password' => $user_exists['password']));
        
        $query = $check_user->num_rows();
        
        return $query;
    }
     
    function user_level($username)
    {                           
        $this->db->select('level');
        $this->db->from('user');
        $this->db->where('username', $username);
        
        $query = $this->db->get();
        
        return $query->result();
    }

    /*function change_password()
    {   
        $this->db->select('id');
        $this->db->where('username', $this->session->userdata('username'));
        $this->db->where('password', md5($this->input->post('pass_lama')));
        $query = $this->db->get('user');   

        if ($query->num_rows() > 0)
        {
            $row = $query->row();
            if($row->id === $this->session->userdata('id'))
            {
                $data = array(
                  'password' => md5($this->input->post('pass_baru'))
                );
                
                $this->db->where('username', $this->session->userdata('username'));
            	$this->db->where('password', md5($this->input->post('pass_lama')));
                   
                	if($this->db->update('user', $data)) 
                	{
                		return "Password berhasil diganti!";
                	}
                	
                	else
                	{
                    	return "Terdapat kesalahan, password tidak terganti";
                	}
            }

            else
            {
            	return "Terdapat kesalahan, password tidak terganti";
            }


        }

        else
        {
            return "Password lama salah";
        }

    }*/

    /*function checkOldPass($pass_lama)
    {
	    $pass_lama = $this->input->post('pass_lama');
	    $id_passlama = $_GET['id'];
	    $this->db->where('id', $id_passlama);
        $this->db->where('username', $this->session->userdata('username'));
	    $this->db->where('password', $pass_lama);
	    $query = $this->db->get('user');
	    if($query->num_rows() > 0)
	        return 1;
	    else
	        return 0;
    }

	function saveNewPass($pass_baru)
	{
		$id_passbaru = $_GET['id'];
		$pass_baru = $this->input->post('pass_baru');
		$data = array(
           'password' => $pass_baru
        );
	    $this->db->where('id', $id_passbaru);
	    $this->db->update('user', $data);
	    return true;
	}*/  

	function datapas_aktif()
	{  	
 		$date = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
 		$curr_date = $date->format('Y-m-d ');
		$this->db->select('*');
	    $this->db->from('data_pasien');
	  	$this->db->where('DATE(waktu)',$curr_date);
	    $query = $this->db->get();
	    return $query->result();   
	}

	function disable_antrian($id_tabdatapasien)
	{
		$data = array(
		'status_antrian' => 0 //1 means it's true
		);
		$this->db->where('no_rm', $id_tabdatapasien)->update('data_pasien', $data); 
		return true;
	}

	/*function disable_antrian()
	{
		$id_antrian = $_GET['id'];
		$data = array(
		'aksi' => 0 //1 means it's true
		);
		$this->db->where('id', $id_antrian)->update('data_pasien', $data);	
		return true;
	}*/

	function get_data_dropdownlab()
	{
		$data = array();
		$query = $this->db->get('daftarlab')->result_array();
		if( is_array($query) && count ($query) > 0 )
		{
			$data[''] = '';
			foreach ($query as $row ) 
			{
				$data[$row['nama_pemeriksaan']] = $row['nama_pemeriksaan'];
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
			$data[''] = '';
			foreach ($query as $row ) 
			{
				$data[$row['nama_obat']] = $row['nama_obat'];
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
				$data[$row['nama_tindakan']] = $row['nama_tindakan'];
			}
		}
		return $data;
	}

 	function insert_users($insert)
 	{
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
		    'nama_mahasiswa' 		=> $insert['nama_mahasiswa'],
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
		    'jumlah_resep' 			=> $insert['jumlah_resep'],
		    'satuan_resep' 			=> $insert['satuan_resep'],
		    'perintah_pembuatan' 	=> $insert['perintah_pembuatan'],
		    'petunjuk_penggunaan' 	=> $insert['petunjuk_penggunaan'],
		    'nama_tindakan' 		=> $insert['nama_tindakan'],
		    'qty_tindakan' 			=> $insert['qty_tindakan'],
		    'ket_tindakan' 			=> $insert['ket_tindakan'],
		);

        $query = $this->db->insert('inputrm', $data);
    }

    /*function select()  
    {  
         //data is retrive from this query  
         $query = $this->db->get('inputrm');  
         return $query;  
    }*/

    /*function searchdaftarrm($query = null) 
    {
        $this->db->distinct();
        $this->db->from('inputrm');
        //$this->db->join('inputrminap', 'inputrm.no_rm=inputrminap.no_rm', 'left');
        $this->db->like('no_rm', $query, 'both');
        $this->db->or_like('nama_hewan', $query, 'both');

        $query = $this->db->get();
        //cek apakah ada data
        if ($query->num_rows() > 0) 
        { //jika ada maka jalankan
        	return $query->result();             
        }
    }*/

    function daftar_rm_aktif()
	{
		$date = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
 		$curr_date = $date->format('Y-m-d '); 	
		$this->db->select('*');
	    $this->db->from('inputrm');
	    $this->db->where('DATE(waktu)',$curr_date);
	    $query = $this->db->get();
	    return $query->result(); 
	}

	function daftar_rm_aktif1()
	{
		$date = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
 		$curr_date = $date->format('Y-m-d '); 	
		$this->db->select('*');
	    $this->db->from('inputrminap');
	    $this->db->where('DATE(waktu)',$curr_date);
	    $query = $this->db->get();
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
		$this->db->select('*');
		$this->db->select_max('waktu');
	    $this->db->from('inputrminap');
	    $this->db->where('statusinap =', 1);
	    $this->db->group_by('no_registrasi');
	    $this->db->order_by('waktu', 'DESC');
	    $query = $this->db->get();
	    return $query->result();
	}

	function akhiri_inap()
	{
		$id_forminap = $_GET['no_registrasi'];
		$data = array(
		'statusinap' => 0 //1 means it's true
		);
		$this->db->where('no_registrasi', $id_forminap)->update('inputrminap', $data);	
	}

	function insert_users_checkbox_inap($insert)
	{
		$data = array(
		    'waktu' 				=> $insert['waktu'],
		    'no_registrasi' 		=> $insert['no_registrasi'],
		    'no_rm' 				=> $insert['no_rm'],
		    'nama_pemilik' 			=> $insert['nama_pemilik'],
		    'nama_hewan' 			=> $insert['nama_hewan'],
		    'diagnosis' 			=> $insert['diagnosis'],
		    'signalemen_ttl' 		=> $insert['signalemen_ttl'],
		    'signalemen_kelamin' 	=> $insert['signalemen_kelamin'],
		    'berat_badan' 			=> $insert['berat_badan'],
		    'username' 				=> $insert['username'],
		    'nama_mahasiswa' 		=> $insert['nama_mahasiswa']
		);

        $query = $this->db->insert('inputrminap', $data); 
	}

 	function insert_users_inap($insert)
 	{
 		$data = array(
		    'waktu' 				=> $insert['waktu'],
		    'no_registrasi' 		=> $insert['no_registrasi'],
		    'no_rm' 				=> $insert['no_rm'],
		    'nama_pemilik' 			=> $insert['nama_pemilik'],
		    'nama_hewan' 			=> $insert['nama_hewan'],
		    'diagnosis' 			=> $insert['diagnosis'],
		    'signalemen_ttl' 		=> $insert['signalemen_ttl'],
		    'signalemen_kelamin' 	=> $insert['signalemen_kelamin'],
		    'berat_badan' 			=> $insert['berat_badan'],
		    'username' 				=> $insert['username'],
		    'nama_mahasiswa' 		=> $insert['nama_mahasiswa'],
		    'semester_mahasiswa' 	=> $insert['semester_mahasiswa'],
		    'nama_obat' 			=> $insert['nama_obat'],
		    'jumlah_resep' 			=> $insert['jumlah_resep'],
		    'satuan_resep' 			=> $insert['satuan_resep'],
		    'perintah_pembuatan' 	=> $insert['perintah_pembuatan'],
		    'petunjuk_penggunaan' 	=> $insert['petunjuk_penggunaan'],
		    'pssm' 					=> $insert['pssm'],
		    'pengobatan' 			=> $insert['pengobatan'],
		    'ket_pengobatan' 		=> $insert['ket_pengobatan']
		);

        $query = $this->db->insert('inputrminap', $data);

    }

    /*function clone_lab()
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
*/ 
 	
}

?>