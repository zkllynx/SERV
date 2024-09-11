<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_ms_apparel extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model("m_ms_apparel");
        //loading session library
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
		$data["app"] = $this->m_ms_apparel->getAll();
        $this->load->view('template/adminheader');
        $this->load->view('ms_apparel/v_ms_apparel_read.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function input()
	{
        $data['vendor'] = $this->m_ms_apparel->getDataVendor();
        $this->load->view('template/adminheader');
        $this->load->view('ms_apparel/v_ms_apparel_create.php',$data);
		$this->load->view('template/adminfooter');
	}

    public function tambah()
    {
        $dataBaru = $this->m_ms_apparel;
        $result = $dataBaru->save();
        if ($result > 0) $this->sukses();
        else $this->gagal();
    }

    public function view_ubah($id){
        $where = array('id_apparel' => $id);
        $data['jnsapp'] = $this->m_ms_apparel -> view_update ($where, 'ms_apparel') -> result();
        $data['vendor'] = $this->m_ms_apparel->getDataVendor();
        $this->load->view('template/adminheader');
        $this->load->view('ms_apparel/v_ms_apparel_update.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function ubah()
    {
        $id_apparel       = $this->input->post('id_apparel');
        $nama_apparel    = $this->input->post('nama_apparel');
        $harga_apparel    = $this->input->post('harga_apparel');
        $jumlah_apparel   = $this->input->post('jumlah_apparel');
        $id_vendor   = $this->input->post('id_vendor');

        $data = array(
            'id_apparel'      => $id_apparel,
            'nama_apparel'    => $nama_apparel,
            'harga_apparel'   => $harga_apparel,
            'jumlah_apparel'  => $jumlah_apparel,
            'id_vendor'  => $id_vendor
        );

        $where = array(
            'id_apparel'       => $id_apparel
        );

        $this->m_ms_apparel->update($where, $data, 'ms_apparel');
        echo "<script>alert('Data berhasil diedit');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_apparel')."';</script>";
    }

    public function hapus($id){
        $where = array ('id_apparel' => $id);
        $this->m_ms_apparel->delete($where, 'ms_apparel');
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_apparel')."';</script>";
    }

    function sukses()
    {
        echo "<script>alert('Data berhasil simpan');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_apparel')."';</script>";
    }

    function gagal()
    {
        echo "<script>alert('Data gagal disimpan');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_apparel')."';</script>";
    }
}