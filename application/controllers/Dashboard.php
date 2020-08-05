<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_admin', 'M_anggota', 'M_karyawan', 'M_peminjaman'));
        if (!$this->session->userdata('username_admin')) {
            redirect('auth', 'refresh');
        }
    }

    public function index()
    {
        $data = array(
            'menu' => "Dashboard",
            'admin' => $this->M_admin->GetLoginAdmin()->row_array(),
            'anggota' => $this->M_anggota->GetCount(),
            'karyawan' => $this->M_karyawan->GetCount(),
            'peminjaman' => $this->M_peminjaman->GetCount()
        );
        $this->load->view('backend/v_dashboard', $data);
    }
}
