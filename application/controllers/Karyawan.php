<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_admin', 'M_karyawan'));

        if (!$this->session->userdata('username_admin')) {
            redirect('auth', 'refresh');
        }
    }

    public function index()
    {
        $resort = $this->input->get('resort');

        $data = array(
            'menu' => "Karyawan",
            'admin' => $this->M_admin->GetLoginAdmin()->row_array(),
            'data' => $this->M_karyawan->GetAll($resort)->result_array()
        );
        $this->load->view('backend/v_karyawan/index', $data);
    }

    public function tambah()
    {
        $data = array(
            'resort' => $this->M_karyawan->GetResort()->result_array(),
            'menu' => "Karyawan",
            'sub_menu' => "Tambah",
            'admin' => $this->M_admin->GetLoginAdmin()->row_array()
        );
        $this->load->view('backend/v_karyawan/tambah', $data);
    }

    public function simpan()
    {
        $data = array(
            'nama_karyawan' => $this->input->post('nama_karyawan'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'masa_kerja' => $this->input->post('masa_kerja'),
            'jabatan' => $this->input->post('jabatan'),
            'diangkat' => $this->input->post('diangkat'),
            'golongan' => $this->input->post('golongan'),
            'kd_resort' => $this->input->post('kd_resort'),
        );

        $this->M_karyawan->Insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data karyawan berhasil di simpan</div>');
        redirect('karyawan', 'refresh');
    }

    public function ubah($id)
    {
        $data = array(
            'resort' => $this->M_karyawan->GetResort()->result_array(),
            'menu' => "Karyawan",
            'sub_menu' => "Ubah",
            'data' => $this->M_karyawan->GetKaryawan($id)->row_array(),
            'admin' => $this->M_admin->GetLoginAdmin()->row_array()
        );
        $this->load->view('backend/v_karyawan/ubah', $data);
    }


    public function hapus($id)
    {
        $this->M_karyawan->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data berhasil di hapus</div>');
        redirect('karyawan', 'refresh');
    }
}
