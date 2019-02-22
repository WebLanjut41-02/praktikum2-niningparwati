<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Model_Penghuni extends CI_Model
{
	
	public function inputPenghuni($namaPeng, $unit, $ktp)
	{
		
		$data = array(
			'namaPenghuni' => $namaPeng,
			'unit' => $unit,
			'KTP' => $ktp
		);

		$this->db->insert('penghuni', $data);

	}

	public function getAllPenghuni()
	{
		$this->db->from('penghuni');
		$query = $this->db->get();

		return $query->result();
	}

	public function getPenghuni($ktp)
	{
		$this->db->from('penghuni');
		$this->db->where('KTP', $ktp);

		$query = $this->db->get();

		return $query->result();
	}

	public function updatePenghuni($namaPeng, $unit, $ktp)
	{

		$data = array(
			'namaPenghuni' => $namaPeng,
			'unit' => $unit,
			'KTP' => $ktp
		);

		$this->db->where('KTP', $ktp);
		$this->db->update('penghuni', $data);
	}



}

 ?>