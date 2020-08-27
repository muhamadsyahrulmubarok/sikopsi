<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_admin', 'M_anggota'));

        if (!$this->session->userdata('username_admin')) {
            redirect('auth', 'refresh');
        }
    }

    public function index()
    {
        $hari = $this->input->get('hari');
        $resort = $this->input->get('resort');

        $data = array(
            'menu' => "Anggota",
            'data' => $this->M_anggota->GetAll($hari, $resort)->result_array(),
            'admin' => $this->M_admin->GetLoginAdmin()->row_array()
        );
        $this->load->view('backend/v_anggota/index', $data);
    }

    public function tambah()
    {
        $data = array(
            'resort' => $this->M_anggota->GetResort()->result_array(),
            'menu' => "Anggota",
            'sub_menu' => "Tambah",
            'admin' => $this->M_admin->GetLoginAdmin()->row_array()
        );
        $this->load->view('backend/v_anggota/tambah', $data);
    }

    public function simpan()
    {
        $config['upload_path'] = './assets/tanda_pengenal/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = true;
        $config['overwrite']    = true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('tanda_pengenal')) {
            $gbr = $this->upload->data();
            $img = $gbr['file_name'];
        } else {
            $img = '';
        }
        $data = array(
            'nama_anggota' => $this->input->post('nama_anggota'),
            'alamat_anggota' => $this->input->post('alamat_anggota'),
            'rt_anggota' => $this->input->post('rt_anggota'),
            'rw_anggota' => $this->input->post('rw_anggota'),
            'desa_anggota' => $this->input->post('desa_anggota'),
            'kec_anggota' => $this->input->post('kec_anggota'),
            'kab_anggota' => $this->input->post('kab_anggota'),
            'prov_anggota' => $this->input->post('prov_anggota'),
            'nohp_anggota' => $this->input->post('nohp_anggota'),
            'usaha_anggota' => $this->input->post('usaha_anggota'),
            'kd_resort' => $this->input->post('kd_resort'),
            'id_hari' => $this->input->post('id_hari'),
            'id_admin' => $this->session->userdata('id_admin'),
            'tanda_pengenal' => $img
        );

        $this->M_anggota->save($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data berhasil di simpan</div>');
        redirect('anggota', 'refresh');
    }

    public function ubah($id)
    {
        $data = array(
            'resort' => $this->M_anggota->GetResort()->result_array(),
            'data' => $this->M_anggota->GetAnggota($id)->row_array(),
            'menu' => "Anggota",
            'sub_menu' => "Ubah",
            'admin' => $this->M_admin->GetLoginAdmin()->row_array()
        );
        $this->load->view('backend/v_anggota/ubah', $data);
    }

    public function update($id)
    {
        $config['upload_path'] = './assets/tanda_pengenal/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = true;
        $config['overwrite']    = true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('tanda_pengenal')) {
            $gbr = $this->upload->data();
            $img = $gbr['file_name'];
        } else {
            $img = $this->input->post('img');;
        }
        $data = array(
            'nama_anggota' => $this->input->post('nama_anggota'),
            'alamat_anggota' => $this->input->post('alamat_anggota'),
            'rt_anggota' => $this->input->post('rt_anggota'),
            'rw_anggota' => $this->input->post('rw_anggota'),
            'desa_anggota' => $this->input->post('desa_anggota'),
            'kec_anggota' => $this->input->post('kec_anggota'),
            'kab_anggota' => $this->input->post('kab_anggota'),
            'prov_anggota' => $this->input->post('prov_anggota'),
            'nohp_anggota' => $this->input->post('nohp_anggota'),
            'usaha_anggota' => $this->input->post('usaha_anggota'),
            'kd_resort' => $this->input->post('kd_resort'),
            'id_hari' => $this->input->post('id_hari'),
            'tanda_pengenal' => $img
        );

        $this->M_anggota->update($id, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data berhasil di ubah</div>');
        redirect('anggota', 'refresh');
    }

    public function hapus($id)
    {
        $this->M_anggota->delete($id);
        redirect('anggota', 'refresh');
    }
}
