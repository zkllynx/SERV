<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_ms_pelanggan extends CI_Model {

    private $_table = "ms_pelanggan";

   	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pelanggan" => $id])->row();
    }

    public function getByUsernamePasswordPelanggan()
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
        //$id = "PLG".autoID();
        $post = $this->input->post();
        //$this->id_pelanggan = $id;
        $this->nama_pelanggan = $post["nama_pelanggan"];
        $this->telp_pelanggan = $post["telp_pelanggan"];
        $this->alamat_pelanggan = $post["alamat_pelanggan"];
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



