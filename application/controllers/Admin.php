<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');

        if (!$this->session->userdata('username_admin')) {
            redirect('auth', 'refresh');
        }
    }

    public function index()
    {
        $data = array(
            'menu' => "Admin",
            'admin' => $this->M_admin->GetLoginAdmin()->row_array(),
            'data' => $this->M_admin->GetAll()->result_array()
        );
        $this->load->view('backend/v_admin/index', $data);
    }

    public function tambah()
    {
        $data = array(
            'menu' => "Admin",
            'sub_menu' => "Tambah",
            'admin' => $this->M_admin->GetLoginAdmin()->row_array()
        );
        $this->load->view('backend/v_admin/tambah', $data);
    }

    public function simpan()
    {
        $config['upload_path'] = './assets/img_admin/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['file_name'] = $this->input->post('username_admin');
        $config['overwrite']    = true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('img_admin')) {
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/img_admin/' . $gbr['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '100%';
            $config['width'] = 720;
            $config['height'] = 1000;
            $config['new_image'] = './assets/img_admin/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $gambar = $gbr['file_name'];
            $data = array(
                'nama_admin' => $this->input->post('nama_admin'),
                'username_admin' => $this->input->post('username_admin'),
                'pswd_admin' => password_hash($this->input->post('pswd_admin'), PASSWORD_DEFAULT),
                'lvl_admin' => '2',
                'img_admin' => $gambar
            );

            $this->M_admin->Insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data berhasil di simpan</div>');
            redirect('admin', 'refresh');
        } else {
            $data = array(
                'nama_admin' => $this->input->post('nama_admin'),
                'username_admin' => $this->input->post('username_admin'),
                'pswd_admin' => password_hash($this->input->post('pswd_admin'), PASSWORD_DEFAULT),
                'lvl_admin' => '2',
                'img_admin' => 'default.png'
            );
            $this->M_admin->Insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data berhasil di simpan</div>');
            redirect('admin', 'refresh');
        }
    }

    public function ubah($id)
    {
        $data = array(
            'menu' => "Admin",
            'sub_menu' => "Ubah",
            'data' => $this->M_admin->GetAdmin($id)->row_array(),
            'admin' => $this->M_admin->GetLoginAdmin()->row_array()
        );
        $this->load->view('backend/v_admin/ubah', $data);
    }

    public function update($id)
    {
        $config['upload_path'] = './assets/img_admin/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['file_name'] = $this->input->post('username_admin');
        $config['overwrite']    = true;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('img_admin')) {
            $gbr = $this->upload->data();
            //Compress Image
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/img_admin/' . $gbr['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '100%';
            $config['width'] = 720;
            $config['height'] = 1000;
            $config['new_image'] = './assets/img_admin/' . $gbr['file_name'];
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $gambar = $gbr['file_name'];
            $data = array(
                'nama_admin' => $this->input->post('nama_admin'),
                'username_admin' => $this->input->post('username_admin'),
                'pswd_admin' => password_hash($this->input->post('pswd_admin'), PASSWORD_DEFAULT),
                'lvl_admin' => '2',
                'img_admin' => $gambar
            );

            $this->M_admin->Update($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data berhasil di update</div>');
            redirect('admin', 'refresh');
        } else {
            $data = array(
                'nama_admin' => $this->input->post('nama_admin'),
                'username_admin' => $this->input->post('username_admin'),
                'pswd_admin' => password_hash($this->input->post('pswd_admin'), PASSWORD_DEFAULT),
                'lvl_admin' => '2',
                'img_admin' => $this->input->post('img_admin1')
            );
            $this->M_admin->Update($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data berhasil di update</div>');
            redirect('admin', 'refresh');
        }
    }

    public function hapus($id)
    {
        $this->M_admin->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data berhasil di hapus</div>');
        redirect('admin', 'refresh');
    }
}
