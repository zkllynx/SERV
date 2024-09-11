<?php defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    public function index()
    {
        //$this->template->load('template','dashboard');
        /*
		$this->load->view('template/adminheader');
		$this->load->view('dashboard/admindashboard');
		$this->load->view('template/adminfooter');
        /*
        $this->load->view('template/userheader');
		$this->load->view('dashboard/admindashboard');
		$this->load->view('template/adminfooter');
        */
        $this->load->view('dashboard/login');
        //*/
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_ms_pegawai");
        $this->load->model("m_ms_pelanggan");
    }

    public function ceklogin()
    {
        $post = $this->input->post();
        if (isset($post["username"]) && isset($post["password"]))
        {
            //cek user
            $pegawai = $this->m_ms_pegawai;
            $pelangaan = $this->m_ms_pelanggan;

            $datapgw = $pegawai->getByUsernamePasswordPegawai();
            $datapgn = $pelangaan->getByUsernamePasswordPelanggan();

            if($datapgw != null)
            {
                $username = $datapgw->username;
                $password = $datapgw->password;
                $id = $datapgw->id_pegawai;

                //adding data to session
                $newdata = array(
                    'username' => $username,
                    'id' => $id
                );

                $this->session->set_userdata($newdata);

                
                    echo "<script>alert('Hallo Admin');</script>";
                    $this->load->view('template/adminheader');
                    $this->load->view('dashboard/admindashboard');
                    $this->load->view('template/adminfooter');
            
            }
            else if($datapgn!=null)
            {
                $username = $datapgn->username;
                $password = $datapgn->password;
                $id = $datapgn->id_pelanggan;

                //adding data to session
                $newdata = array(
                    'username' => $username,
                    'id' => $id
                );

                $this->session->set_userdata($newdata);

                
                echo "<script>alert('Hallo Pelanggan');</script>";
                $this->load->view('template/userheader');
                $this->load->view('dashboard/admindashboard');
                $this->load->view('template/adminfooter');
            }
            else 
            {
                echo "<script>alert('User atau Password tidak terdaftar!');</script>";
                $this->load->view("dashboard/login");
            }

        }else 
        {
            $this->load->view("dashboard/login");
        }
    }
}