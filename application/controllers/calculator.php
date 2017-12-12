<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculator extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('input');
	}

	public function index()
	{
		$this->load->view('view_calculator');
	}

	public function hasil_hitung()
	{
		//mengambil nilai dari input form yang ada di view
		$angka1 = $this->input->post('angka1');
		$angka2 = $this->input->post('angka2');
		$pilih_operator = $this->input->post('pilih-hitung');

		$hasil = 0;

		//kondisi operator kalkulator sederhana
		if ($pilih_operator == "+") {
			$hasil = $angka1 + $angka2;
		}elseif ($pilih_operator == "-") {
			$hasil = $angka1 - $angka2;
		}elseif ($pilih_operator == "/") {
			$hasil = $angka1 / $angka2;
		}elseif ($pilih_operator == "*") {
			$hasil = $angka1 * $angka2;
		}

		//dibungkus kedalam satu variabel
		$data['angka1'] = $angka1;
		$data['angka2'] = $angka2;
		$data['pilih_operator'] = $pilih_operator;
		$data['hasil'] = $hasil;

		$this->load->view('hasil_hitung', $data);

	}

}

/* End of file calculator.php */
/* Location: ./application/controllers/calculator.php */