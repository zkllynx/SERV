<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_ms_pegawai extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model("m_ms_pegawai");
        //loading session library
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
		$data["pegawai"] = $this->m_ms_pegawai->getAll();
        $this->load->view('template/adminheader');
        $this->load->view('ms_pegawai/v_ms_pegawai_read.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function input()
	{
        $this->load->view('template/adminheader');
        $this->load->view('ms_pegawai/v_ms_pegawai_create.php');
		$this->load->view('template/adminfooter');
	}

    public function tambah()
    {
        $dataBaru = $this->m_ms_pegawai;
        $result = $dataBaru->save();
        if ($result > 0) $this->sukses();
        else $this->gagal();
    }

    public function view_ubah($id){
        $where = array('id_pegawai' => $id);
        $data['ms_pegawai'] = $this->m_ms_pegawai -> view_update ($where, 'ms_pegawai') -> result();
        $this->load->view('template/adminheader');
        $this->load->view('ms_pegawai/v_ms_pegawai_update.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function ubah()
    {
        $id_pegawai       = $this->input->post('id_pegawai');
        $nama_pegawai     = $this->input->post('nama_pegawai');
        $alamat_pegawai   = $this->input->post('alamat_pegawai');
        $telp_pegawai     = $this->input->post('telp_pegawai');
        $username         = $this->input->post('username');
        $password         = $this->input->post('password');

        $data = array(
            'id_pegawai'      => $id_pegawai,
            'nama_pegawai'    => $nama_pegawai,            
            'alamat_pegawai'  => $alamat_pegawai,
            'telp_pegawai'    => $telp_pegawai,
            'username'        => $username,
            'password'        => $password
        );

        $where = array(
            'id_pegawai'       => $id_pegawai
        );

        $this->m_ms_pegawai->update($where, $data, 'ms_pegawai');
        echo "<script>alert('Data berhasil diedit');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_pegawai')."';</script>";
    }

    public function hapus($id){
        $where = array ('id_pegawai' => $id);
        $this->m_ms_pegawai->delete($where, 'ms_pegawai');
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_pegawai')."';</script>";
    }

    function sukses()
    {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_pegawai')."';</script>";
    }

    function gagal()
    {
        echo "<script>alert('Input data gagal!')</script>";
    }
}