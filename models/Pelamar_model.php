<?php

/**
 * 
 */
class Pelamar_model extends CI_model
{
	public function data($number,$offset){
		return $query = $this->db->get('tb_pelamar',$number,$offset)->result();		
	}
	public function getAllPelamar()
	{
		return $this->db->get('tb_pelamar')->result_array();
	}

	public function tambahDataPelamar()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"ktp" => $this->input->post('ktp', true),
			"jk" => $this->input->post('jk'),
			"nohp" => $this->input->post('nohp', true),
			"email" => $this->input->post('email', true),
			"alamat" => $this->input->post('alamat', true),
			"pendidikan" => $this->input->post('pendidikan'),
			"jurusan" => $this->input->post('jurusan', true)
		];
		$this->db->insert('tb_pelamar', $data);
	}

	public function hapusDataPelamar($id_pelamar)
	{
		$this->db->where('id_pelamar', $id_pelamar);
		$this->db->delete('tb_pelamar');
	}

	public function getPelamarById($id_pelamar){
		return $this->db->get_where('tb_pelamar', ['id_pelamar' => $id_pelamar])->row_array();
	}

	public function ubahDataPelamar()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"ktp" => $this->input->post('ktp', true),
			"jk" => $this->input->post('jk'),
			"nohp" => $this->input->post('nohp', true),
			"email" => $this->input->post('email', true),
			"alamat" => $this->input->post('alamat', true),
			"pendidikan" => $this->input->post('pendidikan'),
			"jurusan" => $this->input->post('jurusan', true)
		];

		$this->db->where('id_pelamar', $this->input->post('id_pelamar'));
		$this->db->update('tb_pelamar', $data);
	}

	public function cariDataPelamar()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		$this->db->or_like('id_pelamar', $keyword);
		$this->db->or_like('ktp', $keyword);
		$this->db->or_like('jurusan', $keyword);
		$this->db->or_like('nohp', $keyword);
		$this->db->or_like('jk', $keyword);

		return $this->db->get('tb_pelamar')->result_array();
	}


}