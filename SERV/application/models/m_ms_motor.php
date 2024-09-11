<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_ms_motor extends CI_Model {

    private $_table = "ms_motor";

   	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

    public function getData()
    {
        $query = $this->db->query("SELECT * FROM ms_jenis_motor ORDER BY nama_jenis_motor ASC");
        return $query->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_motor" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_motor = $post["nama_motor"];
        $this->harga_motor = $post["harga_motor"];
        $this->jumlah_motor = $post["jumlah_motor"];
        $this->jenis_motor = $post["jenis_motor"];
        return $this->db->insert($this->_table, $this);
    }

    public function view_update($where, $table){
        return $this->db->get_where($table, $where);
    }

    public function update($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function delete($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}