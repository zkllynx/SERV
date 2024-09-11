<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_ms_vendor extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model("m_ms_vendor");
        //loading session library
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["vendor"] = $this->m_ms_vendor->getAll();
        $this->load->view('template/adminheader');
        $this->load->view('ms_vendor/v_ms_vendor_read.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function input()
	{
        $this->load->view('template/adminheader');
        $this->load->view('ms_vendor/v_ms_vendor_create.php');
		$this->load->view('template/adminfooter');
	}

    public function tambah()
    {
        $dataBaru = $this->m_ms_vendor;
        $result = $dataBaru->save();
        if ($result > 0) $this->sukses();
        else $this->gagal();
    }

    public function view_ubah($id){
        $where = array('id_vendor' => $id);
        $data['ms_vendor'] = $this->m_ms_vendor -> view_update ($where, 'ms_vendor') -> result();
        $this->load->view('template/adminheader');
        $this->load->view('ms_vendor/v_ms_vendor_update.php', $data);
		$this->load->view('template/adminfooter');
    }

    public function ubah()
    {
        $id_vendor       = $this->input->post('id_vendor');
        $nama_vendor     = $this->input->post('nama_vendor');
        $telp_vendor    = $this->input->post('telp_vendor');
        $alamat_vendor   = $this->input->post('alamat_vendor');

        $data = array(
            'id_vendor'      => $id_vendor,
            'nama_vendor'    => $nama_vendor,
            'telp_vendor'   => $telp_vendor,
            'alamat_vendor'  => $alamat_vendor
        );

        $where = array(
            'id_vendor'       => $id_vendor
        );

        $this->m_ms_vendor->update($where, $data, 'ms_vendor');
        echo "<script>alert('Data berhasil diedit');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_vendor')."';</script>";
    }

    public function hapus($id){
        $where = array ('id_vendor' => $id);
        $this->m_ms_vendor->delete($where, 'ms_vendor');
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_vendor')."';</script>";
    }

    function sukses()
    {
        echo "<script>alert('Data berhasil disimpan');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_vendor')."';</script>";
    }

    function gagal()
    {
        echo "<script>alert('Input data gagal!')</script>";
    }
}