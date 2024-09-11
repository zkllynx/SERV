<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_ts_penjualan extends CI_Model {

    private $_table = "ts_penjualan_keranjang";
    private $_table2 = "ts_penjualan";

    public function getAll()
	{
		return $this->db->get($this->_table2)->result();
	}

    public function getKRJ($idpelanggan)
    {
        $query = $this->db->query("SELECT * FROM ts_penjualan_keranjang WHERE id_pelanggan = '$idpelanggan'");
        return $query->result();
    }

    public function save($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function savePenjualan($data)
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
