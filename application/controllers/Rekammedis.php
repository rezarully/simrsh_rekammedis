<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekammedis extends CI_Controller {

	function __construct()
    {
        parent::__construct();
 		
 		$this->load->helper('url','form', 'session', 'form_validation');
        $this->load->database();
        $this->load->library('Excel');
    }

	public function index()
	{
		if(!isset($_SESSION['username']))
        {
            redirect('login');            
        }

		$data['datapas_aktif'] = $this->rekammedis_model->datapas_aktif();
		$this->load->view('daftar_antrian_view', $data);
	}

	function login()
    {
        $this->load->view('login_view');
    }

    function logout()
    {
        $user_sess = array('username', 'level');
        $this->session->unset_userdata($user_sess);        
        $this->session->set_userdata('logged_in', FALSE);
        redirect('/');
    }

    function user_sess()
    {
        $user_exists = array();
        $user_exists['username'] = $_POST['username'];
        $user_exists['password'] = $_POST['password'];
        
        $check_user = $this->rekammedis_model->user_exists($user_exists);
        
        if($check_user == 1)
        {
            $check_level = $this->rekammedis_model->user_level($user_exists['username']);
            $userdata = array(
            'username'  => $user_exists['username'],
            'level'     => $check_level[0]->level,
            'logged_in' => TRUE
            );
            $this->session->set_userdata($userdata);
            redirect('/');
        }
        else
        {
            $this->session->set_flashdata('msg', 'Login Tidak Berhasil');
            
            $this->load->view('login_view');
        }
    }

    /*function ubahpassword()
    {
        $this->load->view('ubahpassword_view');
    }*/

    /*function change_password_process()
    {
	    $this->load->library('form_validation');
	    $this->form_validation->set_rules('pass_lama','Password Lama','trim|required|min_length[4]|max_length[32]');
	    $this->form_validation->set_rules('pass_baru','Password Baru','trim|required|min_length[4]|max_length[32]');
	    $this->form_validation->set_rules('ulangpass_baru','Ulangi Password Baru','trim|required|min_length[4]|max_length[32]|matches[pass_baru]');

	    if ($this->form_validation->run() == FALSE)
	    {
	        $this->load->view('ubahpassword_view');
	        $this->session->set_flashdata('msg', 'Error! Password tidak terganti!');   		    
    	}
	    else 
	    {
    		$query = $this->rekammedis_model->change_password();
    		$this->load->view('ubahpassword_view');
    		$this->session->set_flashdata('msg', 'Password berhasil terganti!');
        }
    }*/
    function antrian()
    {
        $this->load->view('daftar_antrian_view');
    }

	function linktoinputrm()
	{
        $this->load->view('input_rm_view');
	}

	function save_data_input_rm()
	{
		$checked = $this->input->post('checkbox_inap');
		if(!$checked)
		{	
			$impnama_pemeriksaan = implode(",", $this->input->post('nama_pemeriksaan'));
			$impket_lab = implode(",", $this->input->post('ket_lab'));
			$impnama_obat = implode(",", $this->input->post('nama_obat'));
			$impjumlah_resep = implode(",", $this->input->post('jumlah_resep'));
			$impsatuan_resep = implode(",", $this->input->post('satuan_resep'));
			$impperintah_pembuatan = implode(",", $this->input->post('perintah_pembuatan'));
			$imppetunjuk_penggunaan = implode(",", $this->input->post('petunjuk_penggunaan'));
			$impnama_tindakan = implode(",", $this->input->post('nama_tindakan'));
			$impqty_tindakan = implode(",", $this->input->post('qty_tindakan'));
			$impket_tindakan = implode(",", $this->input->post('ket_tindakan'));

			$insert = array();
			$insert['waktu'] 				= $_POST['waktu'];
			$insert['no_registrasi'] 		= $_POST['no_registrasi'];
			$insert['no_rm'] 				= $_POST['no_rm'];
			$insert['nama_pemilik'] 		= $_POST['nama_pemilik'];
			$insert['nama_hewan'] 			= $_POST['nama_hewan'];
			$insert['jenis_hewan'] 			= $_POST['jenis_hewan'];
			$insert['signalemen_ttl'] 		= $_POST['signalemen_ttl'];
			$insert['signalemen_kelamin'] 	= $_POST['signalemen_kelamin'];
			$insert['username'] 			= $_POST['username'];
			$insert['nama_tenagamedis'] 	= $_POST['nama_tenagamedis'];
			$insert['nama_mahasiswa'] 		= $_POST['nama_mahasiswa'];
			$insert['anamnesis']			= $_POST['anamnesis'];
			$insert['keadaan_umum'] 		= $_POST['keadaan_umum'];
			$insert['frek_nafas'] 			= $_POST['frek_nafas'];
			$insert['frek_pulsus'] 			= $_POST['frek_pulsus'];
			$insert['temperatur_tubuh'] 	= $_POST['temperatur_tubuh'];
			$insert['kulit_rambut'] 		= $_POST['kulit_rambut'];
			$insert['selaput_lendir'] 		= $_POST['selaput_lendir'];
			$insert['kelenjar_limfe'] 		= $_POST['kelenjar_limfe'];
			$insert['pernafasan'] 			= $_POST['pernafasan'];
			$insert['peredaran_darah'] 		= $_POST['peredaran_darah'];
			$insert['pencernaan'] 			= $_POST['pencernaan'];
			$insert['kelamin_perkencingan'] = $_POST['kelamin_perkencingan'];
			$insert['syaraf'] 				= $_POST['syaraf'];
			$insert['anggota_gerak'] 		= $_POST['anggota_gerak'];
			$insert['berat_badan'] 			= $_POST['berat_badan'];
			$insert['lain_anamnesis'] 		= $_POST['lain_anamnesis'];
			$insert['nama_pemeriksaan'] 	= $impnama_pemeriksaan;
			$insert['ket_lab'] 				= $impket_lab;
			$insert['diagnosis'] 			= $_POST['diagnosis'];
			$insert['prognosis'] 			= $_POST['prognosis'];
			$insert['nama_obat'] 			= $impnama_obat;
			$insert['jumlah_resep'] 		= $impjumlah_resep;
			$insert['satuan_resep'] 		= $impsatuan_resep;
			$insert['perintah_pembuatan'] 	= $impperintah_pembuatan;
			$insert['petunjuk_penggunaan'] 	= $imppetunjuk_penggunaan;
			$insert['nama_tindakan'] 		= $impnama_tindakan;
			$insert['qty_tindakan'] 		= $impqty_tindakan;
			$insert['ket_tindakan'] 		= $impket_tindakan;
			
			$this->rekammedis_model->insert_users($insert);

			$id_tabdatapasien = (int)$_POST['no_rm'];
    		$this->rekammedis_model->disable_antrian($id_tabdatapasien);

			redirect('daftar_rm');
			 
		}
		
		else
		{				
			$insert = array();
			$insert['waktu'] 				= $_POST['waktu'];
			$insert['no_registrasi'] 		= $_POST['no_registrasi'];
			$insert['no_rm'] 				= $_POST['no_rm'];
			$insert['nama_pemilik'] 		= $_POST['nama_pemilik'];
			$insert['nama_hewan'] 			= $_POST['nama_hewan'];
			$insert['diagnosis'] 			= $_POST['diagnosis'];
			$insert['signalemen_ttl'] 		= $_POST['signalemen_ttl'];
			$insert['signalemen_kelamin'] 	= $_POST['signalemen_kelamin'];
			$insert['berat_badan'] 			= $_POST['berat_badan'];
			$insert['username'] 			= $_POST['username'];
			$insert['nama_mahasiswa'] 		= $_POST['nama_mahasiswa'];
			
			$this->rekammedis_model->insert_users_checkbox_inap($insert);

    		$id_tabdatapasien = (int)$_POST['no_rm'];
    		$this->rekammedis_model->disable_antrian($id_tabdatapasien);
			
			redirect('daftar_rm');

		}
	}

	/*function daftar_rm()
	{
        $data['h']=$this->rekammedis_model->select();  
        //return the data in view  
		$this->load->view('daftar_rm_view', $data);
	}*/
    
	/*function search_daftar_rm() 
	{
        $kode = $this->input->post('kode',TRUE); //variabel kunci yang di bawa dari input text id kode

        if(isset($_GET['query']))
        {
            $query = $this->rekammedis_model->searchdaftarrm($_GET['query']); //query model
        }
        else
        {
            $query = $this->rekammedis_model->searchdaftarrm(); //query model   
        }
 
        $data = array();
        foreach ($query as $d) 
        {
            $data[] = array
            (
                'label'         => $d->no_rm.' | '.$d->nama_hewan, //variabel array yg dibawa ke label ketikan kunci
                'waktu'         => $d->waktu,
                'no_registrasi' => $d->no_registrasi,
                'no_rm'         => $d->no_rm,
                'username'  	=> $d->username, //variabel yg dibawa ke id nama
                'nama_hewan'  	=> $d->nama_hewan, //variabel yang dibawa ke id ibukota
                'diagnosis'    	=> $d->diagnosis //variabel yang dibawa ke id keterangan
            );
        }
        echo json_encode($data);
    }

    function populate_table()
    {   
        $this->db->select('waktu, no_registrasi, no_rm, username, nama_hewan, diagnosis');
        $this->db->from('inputrm');
        $query = $this->db->get();
        echo json_encode($query); 
    }*/

	function daftar_rm()
	{
		$data['daftar_rm_aktif'] = $this->rekammedis_model->daftar_rm_aktif();
		$data['daftar_rm_aktif1'] = $this->rekammedis_model->daftar_rm_aktif1();

		$this->load->view('daftar_rm_view', $data);
	}

	function linktodetailjalan()
	{
        $id_detail_jalan = $_GET['id'];
        $this->load->view('detail_jalan_view', $id_detail_jalan);
	}

	function linktodetailinap()
	{
        $id_detail_inap = $_GET['id'];
        $this->load->view('detail_inap_view', $id_detail_inap);
	}

	/*function daftar_inap()
	{
		$data['h']=$this->rekammedis_model->selectinap();  
        //return the data in view  
		$this->load->view('daftar_inap_view', $data);
	}*/

	function daftar_inap()
	{
		$data['daftar_inap_aktif'] = $this->rekammedis_model->daftar_inap_aktif();
		$this->load->view('daftar_inap_view', $data);
	}
	
	/*function daftar_inap()
	{
		$daftar_inap_aktif = $this->rekammedis_model->daftar_inap_aktif();
		$daftarinap_last_row = $daftar_inap_aktif[0];
		$this->load->view('daftar_inap_view', $daftarinap_last_row);

	}*/

	function save_data_daftar_inap()
	{
		$insert = array();
		$insert['waktu'] 				= $_POST['waktu'];
		$insert['no_registrasi'] 		= $_POST['no_registrasi'];
		$insert['no_rm'] 				= $_POST['no_rm'];
		$insert['nama_pemilik'] 		= $_POST['nama_pemilik'];
		$insert['nama_hewan'] 			= $_POST['nama_hewan'];
		$insert['diagnosis'] 			= $_POST['diagnosis'];
		$insert['signalemen_ttl'] 		= $_POST['signalemen_ttl'];
		$insert['signalemen_kelamin'] 	= $_POST['signalemen_kelamin'];
		$insert['berat_badan'] 			= $_POST['berat_badan'];
		$insert['username'] 			= $_POST['username'];
		$insert['nama_mahasiswa'] 		= $_POST['nama_mahasiswa'];
		$insert['semester_mahasiswa']	= $_POST['semester_mahasiswa'];
		$insert['nama_obat'] 			= $_POST['nama_obat'];
		$insert['jumlah_resep'] 		= $_POST['jumlah_resep'];
		$insert['satuan_resep'] 		= $_POST['satuan_resep'];
		$insert['perintah_pembuatan'] 	= $_POST['perintah_pembuatan'];
		$insert['petunjuk_penggunaan'] 	= $_POST['petunjuk_penggunaan'];
		$insert['pssm'] 				= $_POST['pssm'];
		$insert['pengobatan'] 			= $_POST['pengobatan'];
		$insert['ket_pengobatan'] 		= $_POST['ket_pengobatan'];
		$insert['statusinap']			= 1;
  
		$this->rekammedis_model->insert_users_inap($insert);
		 
		redirect('daftar_rm');
	}

	function linktoforminap()
	{
		$this->load->view('forminap');
	}

	function akhiriinap()
	{	
		$id_forminap = $_GET['no_registrasi'];
		$this->rekammedis_model->akhiri_inap();
		redirect('daftar_inap');
	}

	function laporan()
	{
		$this->load->view('laporan_view');
	}

    function export()
    {
    	$checkeds = $this->input->post('reportrange2');
		if(!$checkeds)
		{
        $startDate = explode(' to ', $this->input->post('reportrange'))[0]; 
        $endDate = explode(' to ', $this->input->post('reportrange'))[1];

        //membuat objek
        $objPHPExcel = new PHPExcel();
		$this->db->select('*');
	    $this->db->from('inputrm');
	    if(!empty($startDate) && !empty($endDate))
	    {
        	$this->db->where('waktu BETWEEN "'. date('Y-m-d', strtotime($startDate)). ' 00:00:00' . '" and "'. date('Y-m-d', strtotime($endDate)).' 23:59:59"');
        }
        $query = $this->db->get();

        // Nama Field Baris Pertama
        $fields = $query->list_fields();
        $col = 0;
        foreach ($fields as $field)
        {
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $field);
            $col++;
        }
 
        // Mengambil Data
        $row = 2;
        foreach($query->result() as $query)
        {
            $col = 0;
            foreach ($fields as $field)
            {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $query->$field);
                $col++;
            }
 
            $row++;
        }
        $objPHPExcel->setActiveSheetIndex(0);

        //Set Title
        $objPHPExcel->getActiveSheet()->setTitle('Rekam Medis');

        //Save ke .xlsx, kalau ingin .xls, ubah 'Excel2007' menjadi 'Excel5'
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

        //Header
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

        //Nama File
        header('Content-Disposition: attachment;filename="laporan_rekammedis.xlsx"');

        //Download
        $objWriter->save("php://output");
    	}
    	else
    	{
    	$startDate = explode(' to ', $this->input->post('reportrange2'))[0]; 
        $endDate = explode(' to ', $this->input->post('reportrange2'))[1];

        //membuat objek
        $objPHPExcel = new PHPExcel();
		$this->db->select('*');
	    $this->db->from('inputrminap');
	    if(!empty($startDate) && !empty($endDate))
	    {
        	$this->db->where('waktu BETWEEN "'. date('Y-m-d', strtotime($startDate)). ' 00:00:00' . '" and "'. date('Y-m-d', strtotime($endDate)).' 23:59:59"');
        }
        $query = $this->db->get();

        // Nama Field Baris Pertama
        $fields = $query->list_fields();
        $col = 0;
        foreach ($fields as $field)
        {
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $field);
            $col++;
        }
 
        // Mengambil Data
        $row = 2;
        foreach($query->result() as $query)
        {
            $col = 0;
            foreach ($fields as $field)
            {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $query->$field);
                $col++;
            }
 
            $row++;
        }
        $objPHPExcel->setActiveSheetIndex(0);

        //Set Title
        $objPHPExcel->getActiveSheet()->setTitle('Daftar Inap');

        //Save ke .xlsx, kalau ingin .xls, ubah 'Excel2007' menjadi 'Excel5'
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

        //Header
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

        //Nama File
        header('Content-Disposition: attachment;filename="laporan_inap.xlsx"');

        //Download
        $objWriter->save("php://output");
    	}

    }

}

?>