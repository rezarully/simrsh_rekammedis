<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
 		
 		$this->load->helper('url');
 		$this->load->helper('form');
        $this->load->database();
    }

	public function index()
	{
		$this->load->view('tindakan_view');
	}

	public function savedata()
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
  
		$this->mod_tindakan->insert_users($insert);
		 
		redirect('tindakan/index');
	}

}

?>