<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('tampil');
	}

	public function index()
	{
		$queryAlltampil = $this->tampil->getDatatampil();
		$DATA = array('queryAlltampil' => $queryAlltampil);
		$this->load->view('home', $DATA);
	}

	public function halaman_tambah() 
	{
		$this->load->view('tambah');
	}

	public function halaman_edit($nim)
	{
		$querytampilDetail = $this->tampil->getDatatampilDetail($nim);
		$DATA = array('querytampilDetail' => $querytampilDetail);
		$this->load->view('edit', $DATA);
	}

	public function fungsiTambah()
	{
		$nim = $this->input->post('nim');
		$namapegawai = $this->input->post('namapegawai');
		$status = $this->input->post('status');
		$alamat = $this->input->post('alamat');

		$ArrInsert = array(
			'nim'=>$nim,
			'namapegawai' => $namapegawai,
			'status' => $status,
			'alamat' => $alamat
		);

		$this->tampil->insertDatatampil($ArrInsert);
		redirect(base_url(''));

	}

	public function fungsiEdit()
	{
		$nim = $this->input->post('nim');
		$namapegawai = $this->input->post('namapegawai');
		$status = $this->input->post('status');
		$alamat = $this->input->post('alamat');

		$ArrUpdate = array(
			'namapegawai' => $namapegawai,
			'status' => $status,
			'alamat' => $alamat
		);

		$this->tampil->updateDatatampil($nim, $ArrUpdate);
		redirect(base_url(''));

	}

	public function fungsiDelete($nim)
	{
		$this->tampil->deleteDatatampil($nim);
		redirect(base_url(''));
	}
}
