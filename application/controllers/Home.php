<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_berita'));
    }

    public function index()
    {
        $data = array(
            'berita' => $this->M_berita->GetAll()->result_array(),
        );
        $this->load->view('frontend/home', $data);
    }
}
