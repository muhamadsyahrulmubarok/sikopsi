<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        redirect('home');
    }

    public function sejarah()
    {
        $this->load->view('frontend/sejarah');
    }
    public function visi_misi()
    {
        $this->load->view('frontend/visi_misi');
    }
}
