<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_ms_jnssparepart extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model("m_ms_jnssparepart");
        //loading session library
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
		$data["jnssparepart"] = $this->m_ms_jnssparepart->getAll();
        $this->load->view('template/adminheader');
		$this->load->view('ms_jnssparepart/v_ms_jnssparepart_read', $data);
		$this->load->view('template/adminfooter');
    }

    public function input()
	{
		$this->load->view('template/adminheader');
        $this->load->view('ms_jnssparepart/v_ms_jnssparepart_create.php');
		$this->load->view('template/adminfooter');
	}

    public function tambah()
    {
        $dataBaru = $this->m_ms_jnssparepart;
        $result = $dataBaru->save();
        if ($result > 0) $this->sukses();
        else $this->gagal();
    }

    public function view_ubah($id){
        $where = array('id_jenis_sparepart' => $id);
        $data['jnssparepart'] = $this->m_ms_jnssparepart-> view_update ($where, 'ms_jenis_sparepart') -> result();
		$this->load->view('template/adminheader');
        $this->load->view('ms_jnssparepart/v_ms_jnssparepart_update.php', $data);
		$this->load->view('template/adminfooter');
    }

    public function ubah()
    {
        $id_jenis_sparepart       = $this->input->post('id_jenis_sparepart');
        $nama_jenis_sparepart    = $this->input->post('nama_jenis_sparepart');

        $data = array(
            'id_jenis_sparepart'      => $id_jenis_sparepart,
            'nama_jenis_sparepart'    => $nama_jenis_sparepart
        );

        $where = array(
            'id_jenis_sparepart'       => $id_jenis_sparepart
        );

        $this->m_ms_jnssparepart->update($where, $data, 'ms_jenis_sparepart');
        echo "<script>alert('Data berhasil diedit');</script>";
       echo "<script>window.location.href = '".site_url('c_ms_jnssparepart')."';</script>";
    }

    public function hapus($id){
        $where = array ('id_jenis_sparepart' => $id);
        $this->m_ms_jnssparepart->delete($where, 'ms_jenis_sparepart');
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_jnssparepart')."';</script>";
    }

    function sukses()
    {
 	    echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_jnssparepart')."';</script>";
    }

    function gagal()
    {
        echo "<script>alert('Input data gagal!')</script>";
    }
}