<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_ts_servis extends CI_Model
{
    private $_table = "ts_servis_keranjang";
    private $_table2 = "ts_servis";

    public function getAll()
	{
		return $this->db->get($this->_table2)->result();
	}

    public function getKRJ($idpegawai)
    {
        $query = $this->db->query("SELECT * FROM ts_servis_keranjang WHERE id_pegawai = '$idpegawai'");
        return $query->result();
    }

    public function save($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function saveServis($data)
    {
        return $this->db->insert($this->_table2, $data);
    }

    public function delete($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function getData($id, $jenis)
    {
        $this->db->distinct();
        $this->db->select('nama_'.$jenis);
        $this->db->from('ms_'.$jenis);
        $this->db->where('id_'.$jenis, $id);
        $query = $this->db->get();
        return $query->row_array();
        //return $result->name;
    }
}
