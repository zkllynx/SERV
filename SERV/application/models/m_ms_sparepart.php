<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_ms_sparepart extends CI_Model {

    private $_table = "ms_sparepart";

   	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

    public function getDataJenisSP()
    {
        $query = $this->db->query("SELECT * FROM ms_jenis_sparepart ORDER BY nama_jenis_sparepart ASC");
        return $query->result();
    }

    public function getDataVendor()
    {
        $query = $this->db->query("SELECT * FROM ms_vendor ORDER BY nama_vendor ASC");
        return $query->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_sparepart" => $id])->row();
    }

    /*
    public function upload()
    {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;
      
        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
          // Jika berhasil :
          $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
          return $return;
        }else{
          // Jika gagal :
          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
          return $return;
        }
    }
    public function save($upload)
    {
        $data = array(
            'id_sparepart'       => $this->input->post('id_sparepart'),
            'nama_sparepart'    => $this->input->post('nama_sparepart'),
            'harga_sparepart'    => $this->input->post('harga_sparepart'),
            'jumlah_sparepart'   => $this->input->post('jumlah_sparepart'),
            'foto_sparepart' => $upload['file']['file_name'],
            'id_jenis_sparepart'   => $this->input->post('id_jenis_sparepart'),
            'id_vendor'   => $this->input->post('id_vendor')
        );

        $this->db->insert($this->_table, $data);
    }*/

    
    public function save()
    {
        $post = $this->input->post();
        $this->nama_sparepart = $post["nama_sparepart"];
        $this->harga_sparepart = $post["harga_sparepart"];
        $this->jumlah_sparepart = $post["jumlah_sparepart"];
        $this->id_jenis_sparepart = $post["id_jenis_sparepart"];
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
}
