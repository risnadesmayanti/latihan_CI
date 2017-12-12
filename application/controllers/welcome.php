<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function lihat_info()
	{
		$this->load->view('spk');
	}

	public function lihat_biodata()
	{
		$this->load->view('biodata');
	}

	public function jumlah_angka($value, $value2)
	{
		if (isset($value) || isset($value2)) {
			echo $value."  ==> isi dari value 1 (argumen 1)<br>";
			echo $value2."  ==> isi dari value 2 (argumen 1)<br><br>";
			$hasil = $value+$value2;

			echo "hasil dari penjumlahan kedua angka adalah : ".$hasil;
		}else{
			echo "argumen tidak lengkap / terlalu banyak / tidak sesuai";
		}

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */