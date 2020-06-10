<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_admin', 'M_peminjaman'));
    }

    public function index()
    {
        $bulan = $this->input->get('bulan');
        $tahun = $this->input->get('tahun');

        $data = array(
            'admin' => $this->M_admin->GetLoginAdmin()->row_array(),
            'data' => $this->M_peminjaman->GetLaporan($bulan, $tahun)->result_array(),
            'menu' => "Laporan"
        );
        $this->load->view('backend/v_peminjaman/laporan', $data);
    }
}
