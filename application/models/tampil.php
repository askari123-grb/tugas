<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tampil extends CI_Model {

	function getDatatampil() {
		$query = $this->db->get('tampilan');
		return $query->result();
	}

	function insertDatatampil($data) {
		$this->db->insert('tampilan', $data);
	}

	function getDatatampilDetail($nim) {
		$this->db->where('nim', $nim);
		$query = $this->db->get('tampilan');
		return $query->row();
	}

	function updateDatatampil($nim, $data) {
		$this->db->where('nim', $nim);
		$this->db->update('tampilan', $data);
	}

	function deleteDatatampil($nim) {
		$this->db->where('nim', $nim);
		$this->db->delete('tampilan');
	}

}
