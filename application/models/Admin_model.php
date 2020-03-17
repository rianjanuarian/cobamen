<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public $table = "admin";

	public function getData($where=null) // mengambil data admin dari database
	{
		$this->db->select('*');
		$this->db->from($this->table);
		if ($where!=null) {
			$this->db->where($where);
		}
		return $this->db->get()->result_array();
	}

	public function insertData($data) // menambah data admin
	{
		$this->db->insert($this->table,$data);
	}

	public function updateData($data,$where)	 // mengubah data admin
	{
		$this->db->where($where);
		if($this->db->update($this->table,$data)){
			return "Berhasil";
		}
	}

	public function hapusData($where) // menghapus data admin
	{
		$this->db->where($where);
		if($this->db->delete($this->table)){
			return "Berhasil";
		}
	}
	//durung dari
	public function getDataJoin()
	{
		$this->db->select($select);
		$this->db->from("catalog");
		$this->db->join('category','catalog.fk_id_category=category.id_category');
		if ($where!=null) {
			$this->db->where($where);
		}
		return $this->db->get()->result_array();
	}
}
