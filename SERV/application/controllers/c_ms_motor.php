<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_ms_motor extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model("m_ms_motor");
        //loading session library
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["motor"] = $this->m_ms_motor->getAll();
        $this->load->view('template/adminheader');
        $this->load->view('ms_motor/v_ms_motor_read.php', $data);
		$this->load->view('template/adminfooter');
    }

    public function input()
	{
        $data['jnsmotor'] = $this->m_ms_motor->getData();
        $this->load->view('template/adminheader');
        $this->load->view('ms_motor/v_ms_motor_create.php', $data);
		$this->load->view('template/adminfooter');
	}

    public function tambah()
    {
        $dataBaru = $this->m_ms_motor;
        $result = $dataBaru->save();
        if ($result > 0) $this->sukses();
        else $this->gagal();
    }

    public function view_ubah($id){
        $where = array('id_motor' => $id);
        $data['ms_motor'] = $this->m_ms_motor -> view_update ($where, 'ms_motor') -> result();
        $data['ms_jenis_motor'] = $this->m_ms_motor->getData();
        $this->load->view('template/adminheader');
        $this->load->view('ms_motor/v_ms_motor_update.php', $data);
		$this->load->view('template/adminfooter');
    }

    public function ubah()
    {
        $id_motor      = $this->input->post('id_motor');
        $nama_motor     = $this->input->post('nama_motor');
        $harga_motor    = $this->input->post('harga_motor');
        $jumlah_motor   = $this->input->post('jumlah_motor');
        $jenis_motor   = $this->input->post('jenis_motor');

        $data = array(
            'id_motor'      => $id_motor,
            'nama_motor'    => $nama_motor,
            'harga_motor'     => $harga_motor,
            'jumlah_motor'  => $jumlah_motor,
            'jenis_motor'     => $jenis_motor
        );

        $where = array(
            'id_motor'       => $id_motor
        );

        $this->m_ms_motor->update($where, $data, 'ms_motor');
        echo "<script>alert('Data berhasil diupdate');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_motor')."';</script>";
    }

    public function hapus($id){
        $where = array ('id_motor' => $id);
        $this->m_ms_motor->delete($where, 'ms_motor');
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_motor')."';</script>";
    }

    function sukses()
    {
        echo "<script>alert('Data berhasil disimpan');</script>";
        echo "<script>window.location.href = '".site_url('c_ms_motor')."';</script>";
    }

    function gagal()
    {
        echo "<script>alert('Input data gagal!')</script>";
    }
}