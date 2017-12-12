<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_agenda extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function insert($data)
	{
		$this->db->insert('agenda', $data);	
	}

	public function select_all()
	{
		$this->db->select('*');
		$this->db->from('agenda');

		return $this->db->get();
	}

	public function select_ById($id)
	{
		$this->db->select('*');
		$this->db->from('agenda');
		$this->db->where('id', $id);

		return $this->db->get();
	}

	public function update($id, $nama_baru)
	{
		$this->db->where('id', $id);
		$this->db->update('agenda', $nama_baru);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('agenda');
	}

	// fungsi untuk menampilkan seluruh isi tabel. dibuat ke dalam array
	public function select_all_paging($limit= array())
	{
		$this->db->select('*');
		$this->db->from('agenda');
		$this->db->order_by('date_modified', 'desc');	

		if ($limit != NULL) 
			$this->db->value($limit['perpage'], $limit['offset']);            
		return $this->db->get();

	}

}

/* End of file m_agenda.php */
/* Location: ./application/models/m_agenda.php */