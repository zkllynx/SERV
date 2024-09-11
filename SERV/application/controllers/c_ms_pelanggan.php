<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_ms_pelanggan extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model("m_ms_pelanggan");
        //loading session library
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
		$data["pelanggan"] = $this->m_ms_pelanggan->getAll();
        $this->load->view('template/adminheader');
        $this->load->view('ms_pelanggan/v_ms_pelanggan_read.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function input()
	{
        $this->load->view('template/adminheader');
        $this->load->view('ms_pelanggan/v_ms_pelanggan_create.php');
		$this->load->view('template/adminfooter');
	}

    public function tambah()
    {
        $dataBaru = $this->m_ms_pelanggan;
        $result = $dataBaru->save();
        if ($result > 0) $this->sukses();
        else $this->gagal();
    }

    public function view_ubah($id){
        $where = array('id_pelanggan' => $id);
        $data['ms_pelanggan'] = $this->m_ms_pelanggan -> view_update ($where, 'ms_pelanggan') -> result();
        $this->load->view('template/adminheader');
        $this->load->view('ms_pelanggan/v_ms_pelanggan_update.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function ubah()
    {
        $id_pelanggan       = $this->input->post('id_pelanggan');
        $nama_pelanggan     = $this->input->post('nama_pelanggan');
        $telp_pelanggan    = $this->input->post('telp_pelanggan');
        $alamat_pelanggan   = $this->input->post('alamat_pelanggan');
        $username         = $this->input->post('username');
        $password         = $this->input->post('password');

        $data = array(
            'id_pelanggan'      => $id_pelanggan,
            'nama_pelanggan'    => $nama_pelanggan,
            'telp_pelanggan'    => $telp_pelanggan,
            'alamat_pelanggan'  => $alamat_pelanggan,
            'username'        => $username,
            'password'        => $password
        );

        $where = array(
            'id_pelanggan'       => $id_pelanggan
        );

        $this->m_ms_pelanggan->update($where, $data, 'ms_pelanggan');
        echo "<script>alert('Data berhasil diedit');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_pelanggan')."';</script>";
    }

    public function hapus($id){
        $where = array ('id_pelanggan' => $id);
        $this->m_ms_pelanggan->delete($where, 'ms_pelanggan');
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_pelanggan')."';</script>";
    }

    function sukses()
    {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_pelanggan')."';</script>";
    }

    function gagal()
    {
        echo "<script>alert('Input data gagal!')</script>";
    }
}