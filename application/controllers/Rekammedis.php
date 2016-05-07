<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekammedis extends CI_Controller {

	function __construct()
    {
        parent::__construct();
 		
 		$this->load->helper('url','form');
        $this->load->database();
 
    }

	public function index()
	{
		$data['datapas_aktif'] = $this->rekammedis_model->datapas_aktif();
		$this->load->view('daftar_antrian_view', $data);
	}

	function input_rm()
	{
		$this->load->view('input_rm_view');
	}

	function dropdownlab()
    {
        $data['data'] = $this->rekammedis_model->get_data_dropdownlab();
        $this->load->view('input_rm_view', $data);
    }

    function dropdowntindakan()
    {
        $data['data'] = $this->rekammedis_model->get_data_dropdowntindakan();
        $this->load->view('tabtindakan_view', $data);
    }

	function save_data_input_rm()
	{
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
		$insert['nama_koas'] 			= $_POST['nama_koas'];
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
		$insert['id_lab'] 				= $_POST['id_lab'];
		$insert['ket_lab'] 				= $_POST['ket_lab'];
		$insert['diagnosis'] 			= $_POST['diagnosis'];
		$insert['prognosis'] 			= $_POST['prognosis'];
		$insert['id_obat'] 				= $_POST['id_obat'];
		$insert['bentuk_sediaan'] 		= $_POST['bentuk_sediaan'];
		$insert['jumlah_obat'] 			= $_POST['jumlah_obat'];
		$insert['dosis_obat'] 			= $_POST['dosis_obat'];
		$insert['petunjuk_obat'] 		= $_POST['petunjuk_obat'];
		$insert['id_tindakan'] 			= $_POST['id_tindakan'];
		$insert['qty_tindakan'] 		= $_POST['qty_tindakan'];
		$insert['ket_tindakan'] 		= $_POST['ket_tindakan'];
  
		$this->rekammedis_model->insert_users($insert);
		 
		redirect('rekammedis/input_rm');
	}

	/*function daftar_rm()
	{
        $data['h']=$this->rekammedis_model->select();  
        //return the data in view  
		$this->load->view('daftar_rm_view', $data);
	}*/

	function daftar_rm()
	{
		$data['daftar_rm_aktif'] = $this->rekammedis_model->daftar_rm_aktif();
		$this->load->view('daftar_rm_view', $data);
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

	function save_data_daftar_inap()
	{
		$insert = array();
		$insert['waktu'] 				= $_POST['waktu'];
		$insert['no_registrasi'] 		= $_POST['no_registrasi'];
		$insert['no_rm'] 				= $_POST['no_rm'];
		$insert['nama_pemilik'] 		= $_POST['nama_pemilik'];
		$insert['nama_hewan'] 			= $_POST['nama_hewan'];
		$insert['diagnosa'] 			= $_POST['diagnosa'];
		$insert['signalemen_ttl'] 		= $_POST['signalemen_ttl'];
		$insert['signalemen_kelamin'] 	= $_POST['signalemen_kelamin'];
		$insert['berat_badan'] 			= $_POST['berat_badan'];
		$insert['username'] 			= $_POST['username'];
		$insert['nama_mahasiswa'] 		= $_POST['nama_mahasiswa'];
		$insert['semester_mahasiswa']	= $_POST['semester_mahasiswa'];
		$insert['rencana_pengobatan'] 	= $_POST['rencana_pengobatan'];
		$insert['pengobatan'] 			= $_POST['pengobatan'];
		$insert['ket_pengobatan'] 		= $_POST['ket_pengobatan'];
		
  
		$this->rekammedis_model->insert_users_inap($insert);
		 
		redirect('rekammedis/daftar_inap');
	}

	function laporan()
	{
		$this->load->view('laporan_view');
	}

}

?>