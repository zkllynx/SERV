<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_ms_pegawai extends CI_Model {

    private $_table = "ms_pegawai";

   	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

    public function getData()
    {
        $query = $this->db->query("SELECT * FROM ms_role ORDER BY nama_role ASC");
        return $query->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pegawai" => $id])->row();
    }

    public function getByUsernamePasswordPegawai()
    {
        $post1 = $this->input->post();
        $username = $post1["username"];
        $password = $post1["password"];
        $array = array('username' => $username, 'password' => $password);
        $query = $this->db->get_where($this->_table,$array);
        return $query->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_pegawai     = $post["nama_pegawai"];
        $this->alamat_pegawai   = $post["alamat_pegawai"];
        $this->telp_pegawai     = $post["telp_pegawai"];
        $this->username         = $post["username"];
        $this->password         = $post["password"];
        
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



