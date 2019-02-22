<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_PaketPos extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Paket');
	}

	public function listPaket()
	{
		$data = $this->Model_Paket->getAllPaket();
		$this->session->set_userdata('datapaket', $data);
		$this->load->view('ListPaket');
	}

	public function inputPaket()
	{
		$this->load->view('CreatePaket');
	}

	public function prosesInput()
	{
		$id = '';
		$datang = $this->input->post('datang');
		$sasaran = $this->input->post('sasaran');
		$penerima = $this->input->post('penerima');
		$isi = $this->input->post('isi');
		$ambil = $this->input->post('ambil');

		$this->Model_Paket->inputPaket($id, $datang, $sasaran, $penerima, $isi, $ambil);
		redirect('C_PaketPos/ListPaket');
	}


	public function editPaket()
	{

		$query['dataPaket'] = $this->Model_Paket->getPaket($_GET['IdPaket']);
		$this->load->view('EditPaket', $query);

	}

	public function prosesEditPaket(){

		$datang = $this->input->post('datang');
		$sasaran = $this->input->post('sasaran');
		$penerima = $this->input->post('penerima');
		$isi = $this->input->post('isi');
		$ambil = $this->input->post('ambil');

		$this->Model_Paket->updatePaket($datang, $sasaran, $penerima, $isi, $ambil);

		redirect('C_PaketPos/ListPaket');
	}
}

 ?>