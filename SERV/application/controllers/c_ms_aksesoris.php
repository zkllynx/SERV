<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_ms_aksesoris extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model("m_ms_aksesoris");
        //loading session library
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
		$data["aksesoris"] = $this->m_ms_aksesoris->getAll();
        $this->load->view('template/adminheader');
        $this->load->view('ms_aksesoris/v_ms_aks_read.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function input()
	{
        $data['vendor'] = $this->m_ms_aksesoris->getDataVendor();
        $this->load->view('template/adminheader');
        $this->load->view('ms_aksesoris/v_ms_aks_create.php',$data);
		$this->load->view('template/adminfooter');
	}

    public function tambah()
    {
        $dataBaru = $this->m_ms_aksesoris;
        $result = $dataBaru->save();
        if ($result > 0) $this->sukses();
        else $this->gagal();
    }

    public function view_ubah($id){
        $where = array('id_aksesoris' => $id);
        $data['ms_aksesoris'] = $this->m_ms_aksesoris -> view_update ($where, 'ms_aksesoris') -> result();
        $data['vendor'] = $this->m_ms_aksesoris->getDataVendor();
        $this->load->view('template/adminheader');
        $this->load->view('ms_aksesoris/v_ms_aks_update.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function ubah()
    {
        $id_aksesoris       = $this->input->post('id_aksesoris');
        $nama_aksesoris     = $this->input->post('nama_aksesoris');
        $harga_aksesoris    = $this->input->post('harga_aksesoris');
        $jumlah_aksesoris   = $this->input->post('jumlah_aksesoris');
        $id_vendor          = $this->input->post('id_vendor');

        $data = array(
            'id_aksesoris'      => $id_aksesoris,
            'nama_aksesoris'    => $nama_aksesoris,
            'harga_aksesoris'   => $harga_aksesoris,
            'jumlah_aksesoris'  => $jumlah_aksesoris,
            'id_vendor'         => $id_vendor
        );

        $where = array(
            'id_aksesoris'       => $id_aksesoris
        );

        $this->m_ms_aksesoris->update($where, $data, 'ms_aksesoris');
        echo "<script>alert('Data berhasil diubah');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_aksesoris')."';</script>";
    }

    public function hapus($id){
        $where = array ('id_aksesoris' => $id);
        $this->m_ms_aksesoris->delete($where, 'ms_aksesoris');
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_aksesoris')."';</script>";
    }

    function sukses()
    {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_aksesoris')."';</script>";
    }

    function gagal()
    {
        echo "<script>alert('Input data gagal!')</script>";
    }
}