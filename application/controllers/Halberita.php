<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halberita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_berita');
    }

    public function index()
    {
        $data = array(
            'data' => $this->M_berita->GetAll()->result_array()
        );
        $this->load->view('frontend/v_berita/index', $data);
    }

    public function lihat($id)
    {
        $data = array(
            'data' => $this->M_berita->GetBerita($id)->row_array()
        );
        $this->load->view('frontend/v_berita/lihat', $data);
    }
}
