<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Angsuran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_angsuran');
    }

    public function index()
    {
        $id = $this->input->get('id_anggota');
        $no = str_replace('%2F', '/', $this->input->get('no'));

        $data = array(
            'data' => $this->M_angsuran->GetAnggota($id, $no)->row_array(),
            'angsuran' => $this->M_angsuran->GetAngsuran($id, $no)->result_array()
        );
        $this->load->view('frontend/v_angsuran/index', $data);
    }

    public function lihat()
    {
        $id = $this->input->get('id');
        $data = array(
            'data' => $this->M_angsuran->GetAngsuran($id)
        );
        $this->load->view('frontend/v_angsuran/lihat', $data);
    }
}
