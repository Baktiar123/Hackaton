<?php

class M_hackaton extends CI_Model{

	public function tampil_data()
	{
		return $this->db->get('datalaporan');
	}

	public function input_data($data)
	{
		$this->db->insert('datalaporan', $data);
	}
}