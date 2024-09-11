<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_ts_pembelian extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model("m_ms_aksesoris");
        $this->load->model("m_ms_apparel");
        $this->load->model("m_ms_sparepart");
        $this->load->model("m_ts_pembelian");
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    // public function index()
    // {
    //     $this->load->view('template/adminheader');
    //     $this->load->view('ts_pembelian/v_ts_pembelian_listAKS.php');
	// 	$this->load->view('template/adminfooter');
    // }

    public function listSP()
    {
        $data["sparepart"] = $this->m_ms_sparepart->getAll();
        $this->load->view('template/adminheader');
        $this->load->view('ts_pembelian/v_ts_pembelian_listSP.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function listAPP()
    {
        $data["app"] = $this->m_ms_apparel->getAll();
        $this->load->view('template/adminheader');
        $this->load->view('ts_pembelian/v_ts_pembelian_listAPP.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function listAKS()
    {
        $data["aksesoris"] = $this->m_ms_aksesoris->getAll();
        $this->load->view('template/adminheader');
        $this->load->view('ts_pembelian/v_ts_pembelian_listAKS.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function listKRJ()
    {
        $id_pegawai = $_SESSION["id"];
        $data["krj"] = $this->m_ts_pembelian->getKRJ($id_pegawai);
        $this->load->view('template/adminheader');
        $this->load->view('ts_pembelian/v_ts_pembelian_listKRJ.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function tambahKRJ($id, $hargabrg, $jenis)
    {
        $id_pegawai  = $_SESSION["id"];
        $id_barang     = $id;
        $jumlah        = 1;
        $barang   = $this->m_ts_pembelian->getData($id, $jenis);
        $subtotal      = $jumlah * $hargabrg;
        $harga_barang  = $hargabrg;
        foreach ($barang as $row)
        {
            $nama_barang = $row['nama_'.$jenis];
        }

        $data = array(
            'id_pegawai'      => $id_pegawai,
            'id_barang'         => $id_barang,
            'jumlah'            => $jumlah,
            'nama_barang'       => $nama_barang,
            'harga_barang'      => $harga_barang,
            'subtotal'          => $subtotal

        );

        $this->m_ts_pembelian->save($data);
        echo "<script>alert('Data berhasil ditambah ke keranjang');</script>";
        echo "<script>window.location.href = '".site_url('c_ts_pembelian/listKRJ')."';</script>";

    }

    public function bayar($total)
    {
        $id_pegawai  = $_SESSION["id"];
        $tgl_pembelian = date("Y-m-d H:i:s");
        $total_pembelian = $total;

        $data = array(
            'id_pegawai'      => $id_pegawai,
            'tgl_pembelian'     => $tgl_pembelian,
            'total_pembelian'   => $total_pembelian

        );

        $where = array ('id_pegawai' => $id_pegawai);
        $this->m_ts_pembelian->delete($where, 'ts_pembelian_keranjang');

        $this->m_ts_pembelian->savePembelian($data);
        echo "<script>alert('Data berhasil melakukan pembelian');</script>";
        echo "<script>window.location.href = '".site_url('c_ts_pembelian/listKRJ')."';</script>";
    }

    
}