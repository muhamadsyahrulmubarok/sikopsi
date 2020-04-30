<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabungan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('M_admin', 'M_tabungan'));
    }

    public function index()
    {
        $hari = $this->input->get('hari');
        $resort = $this->input->get('resort');

        $data = array(
            'menu' => "Tabungan",
            'admin' => $this->M_admin->GetLoginAdmin()->row_array(),
            'data' => $this->M_tabungan->GetByName($hari, $resort)->result_array()
        );

        $this->load->view('backend/v_tabungan/index', $data);
    }
}
