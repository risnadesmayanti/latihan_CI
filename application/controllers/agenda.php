<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		// membutuhkan ketiga dibawah ini
		$this->load->helper('url');
		$this->load->library('input');
		$this->load->model('daftaragenda/m_agenda');
	}	

	public function index()
	{
		$data['daftar_agenda'] = $this->m_agenda->select_all()->result();
		$this->load->view('daftaragenda/v_daftaragenda', $data);

	}

	public function t_agenda()
	{
		$this->load->view('daftaragenda/t_agenda');
	}

	public function proses_t_agenda()
	{
		$data['nama'] = $this->input->post('nama');
		$data['keterangan'] = $this->input->post('keterangan');
		$this->m_agenda->insert($data);

		redirect(site_url('agenda'));
	}

	public function edit_agenda($id)
	{
		$data['agenda'] = $this->m_agenda->select_ById($id)->row();
		$this->load->view('daftaragenda/form_edit', $id);
	}


	public function proses_edit_agenda()
	{
		$data['nama'] = $this->input->post('nama');
		$data['keterangan'] = $this->input->post('keterangan');
		$id = $this->input->post('id');
		$this->m_agenda->update($id, $data);

		redirect(site_url('agenda'));
	}
}

/* End of file agenda.php */
/* Location: ./application/controllers/agenda.php */