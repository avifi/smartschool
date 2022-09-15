<?php 
/**
 * 
 */
class M_links extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	function insert($data)
	{
		return $this->db->insert('links', $data);
	}

	function get()
	{
		$this->db->where('is_deleted', 'false');
		return $this->db->get('links')->result_array();
	}

	function get_single($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('links')->row(0);
	}

	function update($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('links', $data);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('links');
	}
}