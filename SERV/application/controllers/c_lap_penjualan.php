<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class c_lap_penjualan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_ts_penjualan');
	}

	//index
	public function index()
	{
		$data = array(
			'lap_penjualan' => $this->m_ts_penjualan->getAll()
        );
        $this->load->view('template/adminheader');
        $this->load->view('laporan/penjualan.php',$data);
		$this->load->view('template/adminfooter');
	}
}

?>