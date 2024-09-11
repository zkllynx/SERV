<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_ms_aksesoris extends CI_Model {

    private $_table = "ms_aksesoris";

   	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_aksesoris" => $id])->row();
    }

    public function save()
    {
        //$id = "AKS".autoID();
        $post = $this->input->post();
        //$this->id_aksesoris = $id;
        $this->nama_aksesoris = $post["nama_aksesoris"];
        $this->harga_aksesoris = $post["harga_aksesoris"];
        $this->jumlah_aksesoris = $post["jumlah_aksesoris"];
        $this->id_vendor = $post["id_vendor"];
        
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

    public function getDataVendor()
    {
        $query = $this->db->query("SELECT * FROM ms_vendor ORDER BY nama_vendor ASC");
        return $query->result();
    }
}



