<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_ms_dservice extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model("m_ms_dservice");
        //loading session library
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["dservice"] = $this->m_ms_dservice->getAll();
		$this->load->view('template/adminheader');
        $this->load->view('dataservice/v_ms_dservice_read.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function input()
	{
        $this->load->view('template/adminheader');
        $this->load->view('dataservice/v_ms_dservice_create.php');
		$this->load->view('template/adminfooter');
	}

    public function tambah()
    {
        $dataBaru = $this->m_ms_dservice;
        $result = $dataBaru->save();
        if ($result > 0) $this->sukses();
        else $this->gagal();
    }

    public function view_ubah($id){
        $where = array('id_dservice' => $id);
        $data['ms_dservice'] = $this->m_ms_dservice -> view_update ($where, 'ms_data_service') -> result();
		$this->load->view('template/adminheader');
        $this->load->view('dataservice/v_ms_dservice_update.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function ubah()
    {
        $id_dservice       = $this->input->post('id_dservice');
        $nama_dservice     = $this->input->post('nama_dservice');
        $harga_dservice    = $this->input->post('harga_dservice');

        $data = array(
            'id_dservice'      => $id_dservice,
            'nama_dservice'    => $nama_dservice,
            'harga_dservice'   => $harga_dservice,
        );

        $where = array(
            'id_dservice'       => $id_dservice
        );

        $this->m_ms_dservice->update($where, $data, 'ms_data_service');
        redirect('c_ms_dservice/index');
    }

    public function hapus($id){
        $where = array ('id_dservice' => $id);
        $this->m_ms_dservice->delete($where, 'ms_data_service');
        redirect('c_ms_dservice/index');
    }

    function sukses()
    {
        redirect(site_url('c_ms_dservice/index'));
    }

    function gagal()
    {
        echo "<script>alert('Input data gagal!')</script>";
    }
}