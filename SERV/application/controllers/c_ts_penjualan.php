<?php defined('BASEPATH') OR exit('No direct script access allowed');

class c_ts_penjualan extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model("m_ms_aksesoris");
        $this->load->model("m_ms_apparel");
        $this->load->model("m_ms_sparepart");
        $this->load->model("m_ts_penjualan");
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function listSP()
    {
        $data["sparepart"] = $this->m_ms_sparepart->getAll();
        $this->load->view('template/userheader');
        $this->load->view('ts_penjualan/v_ts_penjualan_listSP.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function listAPP()
    {
        $data["app"] = $this->m_ms_apparel->getAll();
        $this->load->view('template/userheader');
        $this->load->view('ts_penjualan/v_ts_penjualan_listAPP.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function listAKS()
    {
        $data["aksesoris"] = $this->m_ms_aksesoris->getAll();
        $this->load->view('template/userheader');
        $this->load->view('ts_penjualan/v_ts_penjualan_listAKS.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function listKRJ()
    {
        $id_pelanggan = $_SESSION["id"];
        $data["krj"] = $this->m_ts_penjualan->getKRJ($id_pelanggan);
        $this->load->view('template/userheader');
        $this->load->view('ts_penjualan/v_ts_penjualan_listKRJ.php',$data);
		$this->load->view('template/adminfooter');
    }

    public function tambahKRJ($id, $hargabrg, $jenis)
    {
        $id_pelanggan  = $_SESSION["id"];
        $id_barang     = $id;
        $jumlah        = 1;
        $barang   = $this->m_ts_penjualan->getData($id, $jenis);
        $subtotal      = $jumlah * $hargabrg;
        $harga_barang  = $hargabrg;
        foreach ($barang as $row)
        {
            $nama_barang = $row['nama_'.$jenis];
        }

        $data = array(
            'id_pelanggan'      => $id_pelanggan,
            'id_barang'         => $id_barang,
            'jumlah'            => $jumlah,
            'nama_barang'       => $nama_barang,
            'harga_barang'      => $harga_barang,
            'subtotal'          => $subtotal

        );

        $this->m_ts_penjualan->save($data);
        echo "<script>alert('Data berhasil ditambah ke keranjang');</script>";
        echo "<script>window.location.href = '".site_url('c_ts_penjualan/listKRJ')."';</script>";

    }

    public function bayar($total)
    {
        $id_pelanggan  = $_SESSION["id"];
        $tgl_penjualan = date("Y-m-d H:i:s");
        $total_penjualan = $total;

        $data = array(
            'id_pelanggan'      => $id_pelanggan,
            'tgl_penjualan'     => $tgl_penjualan,
            'total_penjualan'   => $total_penjualan

        );

        $where = array ('id_pelanggan' => $id_pelanggan);
        $this->m_ts_penjualan->delete($where, 'ts_penjualan_keranjang');

        $this->m_ts_penjualan->savePenjualan($data);
        echo "<script>alert('Data berhasil melakukan pembayaran');</script>";
        echo "<script>window.location.href = '".site_url('c_ts_penjualan/listKRJ')."';</script>";
    }
}