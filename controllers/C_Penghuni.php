<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Penghuni extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Penghuni');
	}

	public function listPenghuni()
	{
		$data = $this->Model_Penghuni->getAllPenghuni();
		$this->session->set_userdata('datapenghuni', $data);
		$this->load->view('ListPenghuni');
	}

	public function inputPenghuni()
	{
		$this->load->view('CreatePenghuni');
	}

	public function prosesInput()
	{

		$namaPeng = $this->input->post('namaPeng');
		$unit = $this->input->post('unit');
		$ktp = $this->input->post('ktp');

		$this->Model_Penghuni->inputPenghuni($namaPeng, $unit, $ktp);
		$this->load->view('ListPenghuni');
	}


	public function editPenghuni()
	{

		$query['dataPenghuni'] = $this->Model_Penghuni->getPenghuni($_GET['ktp']);
		$this->load->view('EditPenghuni', $query);

	}

	public function prosesEditPenghuni(){
		
		$namaPeng = $this->input->post('namaPeng');
		$unit = $this->input->post('unit');
		$ktp = $this->input->post('ktp');

		$this->Model_Penghuni->updatePenghuni($namaPeng, $unit, $ktp);

		redirect('C_Penghuni/ListPenghuni');
	}
}

 ?>