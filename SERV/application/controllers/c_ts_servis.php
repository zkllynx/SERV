<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_ts_servis extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model("m_ms_dservice");
        $this->load->model("m_ts_servis");
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('template/adminheader');
        $this->load->view('ts_servis/v_ts_servis_list.php');
		$this->load->view('template/adminfooter');
    }
    
    public function list()
    {
        $data["servis"] = $this->m_ms_dservice->getAll();
        $this->load->view('template/adminheader');
        $this->load->view('ts_servis/v_ts_servis_list.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function listKRJ()
    {
        $id_pegawai = $_SESSION["id"];
        $data["krj"] = $this->m_ts_servis->getKRJ($id_pegawai);
        $this->load->view('template/adminheader');
        $this->load->view('ts_servis/v_ts_servis_listKRJ.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function tambahKRJ($id, $hargabrg, $jenis)
    {
        $id_pegawai  = $_SESSION["id"];
        $id_servis     = $id;
        $jumlah        = 1;
        $barang   = $this->m_ts_servis->getData($id, $jenis);
        $subtotal      = $jumlah * $hargabrg;
        $harga_servis  = $hargabrg;
        foreach ($barang as $row)
        {
            $nama_servis = $row['nama_'.$jenis];
        }

        $data = array(
            'id_pegawai'      => $id_pegawai,
            'id_servis'         => $id_servis,
            'jumlah'            => $jumlah,
            'nama_servis '       => $nama_servis,
            'harga_servis'      => $harga_servis,
            'subtotal'          => $subtotal

        );

        $this->m_ts_servis->save($data);
        echo "<script>alert('Data berhasil ditambah ke keranjang');</script>";
        echo "<script>window.location.href = '".site_url('c_ts_pembelian/listKRJ')."';</script>";

    }

    public function bayar($total)
    {
        $id_pegawai  = $_SESSION["id"];
        $tgl_sevis = date("Y-m-d H:i:s");
        $total_sevis = $total;

        $data = array(
            'id_pegawai'      => $id_pegawai,
            'tgl_sevis'     => $tgl_sevis,
            'total_sevis'   => $total_sevis

        );

        $where = array ('id_pegawai' => $id_pegawai);
        $this->m_ts_servis->delete($where, 'ts_sevis_keranjang');

        $this->m_ts_servis->saveServis($data);
        echo "<script>alert('Data berhasil melakukan pembelian');</script>";
        echo "<script>window.location.href = '".site_url('c_ts_sevis/listKRJ')."';</script>";
    }
}