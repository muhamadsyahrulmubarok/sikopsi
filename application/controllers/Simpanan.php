<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Simpanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('M_admin', 'M_Simpanan'));
    }

    public function index()
    {
        $hari = $this->input->get('hari');
        $resort = $this->input->get('resort');

        $data = array(
            'menu' => "Simpanan",
            'admin' => $this->M_admin->GetLoginAdmin()->row_array(),
            'data' => $this->M_Simpanan->GetByName($hari, $resort)->result_array()
        );

        $this->load->view('backend/v_Simpanan/index', $data);
    }

    public function cetak($id)
    {
        $data = array(
            'menu' => 'Cetak Simpanan',
            'anggota' => $this->M_Simpanan->GetAnggota($id)->row_array(),
            'data' => $this->M_Simpanan->Cetak($id)->result_array()
        );
        $this->load->view('backend/v_Simpanan/cetak', $data);
    }
}