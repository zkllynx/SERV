<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_ms_sparepart extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model("m_ms_sparepart");
        //loading session library
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["sparepart"] = $this->m_ms_sparepart->getAll();
        $this->load->view('template/adminheader');
        $this->load->view('ms_sparepart/v_ms_sp_read.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function input()
	{
        $data['jenis_sparepart'] = $this->m_ms_sparepart->getDataJenisSP();
        $data['vendor'] = $this->m_ms_sparepart->getDataVendor();
        $this->load->view('template/adminheader');
        $this->load->view('ms_sparepart/v_ms_sp_create.php', $data);
		$this->load->view('template/adminfooter');
	}

    public function tambah()
    {
        $dataBaru = $this->m_ms_sparepart;
        $result = $dataBaru->save();
        if ($result > 0) $this->sukses();
        else $this->gagal();
    }

    public function view_ubah($id){
        $where = array('id_sparepart' => $id);
        $data['ms_sparepart'] = $this->m_ms_sparepart -> view_update ($where, 'ms_sparepart') -> result();
        $data['jenis_sparepart'] = $this->m_ms_sparepart->getDataJenisSP();
        $data['vendor'] = $this->m_ms_sparepart->getDataVendor();
        $this->load->view('template/adminheader');
        $this->load->view('ms_sparepart/v_ms_sp_update.php', $data);
		$this->load->view('template/adminfooter');
    }

    public function ubah()
    {
        $id_sparepart       = $this->input->post('id_sparepart');
        $nama_sparepart    = $this->input->post('nama_sparepart');
        $harga_sparepart    = $this->input->post('harga_sparepart');
        $jumlah_sparepart   = $this->input->post('jumlah_sparepart');
        $id_jenis_sparepart   = $this->input->post('id_jenis_sparepart');
        $id_vendor   = $this->input->post('id_vendor');

        $data = array(
            'id_sparepart'      => $id_sparepart,
            'nama_sparepart'    => $nama_sparepart,
            'harga_sparepart'   => $harga_sparepart,
            'jumlah_sparepart'  => $jumlah_sparepart,
            'id_jenis_sparepart'  => $id_jenis_sparepart,
            'id_vendor'  => $id_vendor,
        );

        $where = array(
            'id_sparepart'       => $id_sparepart
        );

        $this->m_ms_sparepart->update($where, $data, 'ms_sparepart');
        echo "<script>alert('Data berhasil diedit');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_sparepart')."';</script>";
    }

    public function hapus($id){
        $where = array ('id_sparepart' => $id);
        $this->m_ms_sparepart->delete($where, 'ms_sparepart');
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_sparepart')."';</script>";
    }

    function sukses()
    {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_sparepart')."';</script>";
    }

    function gagal()
    {
        echo "<script>alert('Input data gagal!')</script>";
    }
}