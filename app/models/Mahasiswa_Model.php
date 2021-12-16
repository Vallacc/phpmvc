<?php

class Mahasiswa_Model {
	private $table = "tbmahasiswa";
	private $db;

	public function __Construct()
	{
		$this->db = new Database;
	}

	public function getAllMahasiswa()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->findAll();
	}
}