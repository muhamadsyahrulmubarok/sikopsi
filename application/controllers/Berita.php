<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('M_admin', 'M_berita'));
    }

    public function index()
    {
        $data = array(
            'menu' => "Berita",
            'admin' => $this->M_admin->GetLoginAdmin()->row_array(),
            'data' => $this->M_berita->GetAll()->result_array()
        );
        $this->load->view('backend/v_berita/index', $data);
    }

    public function tambah()
    {
        $data = array(
            'menu' => "Berita",
            'sub_menu' => "Tambah",
            'admin' => $this->M_admin->GetLoginAdmin()->row_array()
        );
        $this->load->view('backend/v_berita/tambah', $data);
    }

    public function simpan()
    {
        $config['upload_path'] = './assets/img_berita/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = true;
        $config['overwrite']    = true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('img_berita')) {
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/img_berita/' . $gbr['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '100%';
            $config['width'] = 720;
            $config['height'] = 480;
            $config['new_image'] = './assets/img_berita/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $gambar = $gbr['file_name'];
            $data = array(
                'judul_berita' => $this->input->post('judul_berita'),
                'isi_berita' => $this->input->post('isi_berita'),
                'tgl_berita' => $this->input->post('tgl_berita'),
                'img_berita' => $gambar
            );

            $this->M_berita->Insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data berhasil di simpan</div>');
            redirect('berita', 'refresh');
        } else {
            $data = array(
                'judul_berita' => $this->input->post('judul_berita'),
                'isi_berita' => $this->input->post('isi_berita'),
                'tgl_berita' => $this->input->post('tgl_berita'),
                'img_berita' => '404.jpg'
            );
            $this->M_berita->Insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data berhasil di simpan</div>');
            redirect('berita', 'refresh');
        }
    }

    public function ubah($id)
    {
        $data = array(
            'menu' => "Berita",
            'sub_menu' => "Ubah",
            'data' => $this->M_berita->GetBerita($id)->row_array(),
            'admin' => $this->M_admin->GetLoginAdmin()->row_array()
        );
        $this->load->view('backend/v_berita/ubah', $data);
    }

    public function update($id)
    {
        $config['upload_path'] = './assets/img_berita/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = true;
        $config['overwrite']    = true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('img_berita')) {
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/img_berita/' . $gbr['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '100%';
            $config['width'] = 720;
            $config['height'] = 480;
            $config['new_image'] = './assets/img_berita/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $gambar = $gbr['file_name'];
            $data = array(
                'judul_berita' => $this->input->post('judul_berita'),
                'isi_berita' => $this->input->post('isi_berita'),
                'tgl_berita' => $this->input->post('tgl_berita'),
                'img_berita' => $gambar
            );

            $this->M_berita->Update($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data berhasil di update</div>');
            redirect('berita', 'refresh');
        } else {
            $data = array(
                'judul_berita' => $this->input->post('judul_berita'),
                'isi_berita' => $this->input->post('isi_berita'),
                'tgl_berita' => $this->input->post('tgl_berita'),
                'img_berita' => $this->input->post('img_berita1')
            );
            $this->M_berita->Update($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data berhasil di update</div>');
            redirect('berita', 'refresh');
        }
    }

    public function hapus($id)
    {
        $this->M_berita->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data berhasil di hapus</div>');
        redirect('berita', 'refresh');
    }
}
