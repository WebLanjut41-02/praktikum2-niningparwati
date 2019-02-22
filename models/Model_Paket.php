<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Model_Paket extends CI_Model
{
	
	public function inputPaket($id, $datang, $sasaran, $penerima, $isi, $ambil)
	{
		
		$data = array(
			'id' => $id,
			'tgl_datang' => $datang,
			'sasaran' => $sasaran,
			'penerima' => $penerima,
			'isiPaket' => $isi,
			'tgl_ambil' => $ambil
		);

		$this->db->insert('paket', $data);

	}

	public function getAllPaket()
	{
		$this->db->from('paket');
		$query = $this->db->get();

		return $query->result();
	}

	public function getPaket($IdPaket)
	{
		$this->db->from('paket');
		$this->db->where('id', $IdPaket);

		$query = $this->db->get();

		return $query->result();
	}

	public function updatePaket($datang, $sasaran, $penerima, $isi, $ambil)
	{

		$data = array(

			'tgl_datang' => $datang,
			'sasaran' => $sasaran,
			'penerima' => $penerima,
			'isiPaket' => $isi,
			'tgl_ambil' => $ambil
		);

		$this->db->where('sasaran', $sasaran);
		$this->db->update('paket', $data);
	}



}

 ?>