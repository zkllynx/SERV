<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_ms_jnssparepart extends CI_Model {

    private $_table = "ms_jenis_sparepart";

   	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_jenis_sparepart" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_jenis_sparepart = $post["nama_jenis_sparepart"];
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