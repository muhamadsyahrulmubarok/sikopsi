<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_admin', 'M_peminjaman', 'M_anggota', 'M_tabungan'));
    }

    public function index()
    {
        $hari = $this->input->get('hari');
        $resort = $this->input->get('resort');

        $data = array(
            'admin' => $this->M_admin->GetLoginAdmin()->row_array(),
            'data' => $this->M_peminjaman->GetAll($hari, $resort)->result_array(),
            'menu' => "Peminjaman"
        );
        $this->load->view('backend/v_peminjaman/index', $data);
    }

    public function tambah()
    {
        $data = array(
            'anggota' => $this->M_anggota->GetAll()->result_array(),
            'menu' => "Peminjaman",
            'sub_menu' => "Tambah",
            'admin' => $this->M_admin->GetLoginAdmin()->row_array()
        );
        $this->load->view('backend/v_peminjaman/tambah', $data);
    }

    public function simpan()
    {
        $last_row = $this->M_peminjaman->GetLastPeminjaman();
        $no = explode("/", $last_row['no_peminjaman']);
        $id_anggota = $this->input->post('id_anggota');
        $kd_resort =  $this->M_anggota->GetAnggota($id_anggota)->row_array()['kd_resort'];
        $data = array(
            'no_peminjaman' => $no[0] + 1 . '/' . $kd_resort . '/' . date('m'),
            'tgl_drop' => $this->input->post('tgl_drop'),
            'pinjaman_pokok' => str_replace('.', '', $this->input->post('pinjaman_pokok')),
            'jasa_peminjaman' => $this->input->post('jasa_peminjaman'),
            'jasa_pelayanan' => $this->input->post('jasa_pelayanan'),
            'resiko_kredit' => $this->input->post('resiko_kredit'),
            'total_pinjaman' => $this->input->post('total_pinjaman'),
            'angsuran' => $this->input->post('angsuran'),
            'id_anggota' => $id_anggota,
            'id_admin' => $this->session->userdata('id_admin')
        );

        $tabungan = array(
            'no_peminjaman' => $no[0] + 1 . '/' . $kd_resort . '/' . date('m'),
            'tgl_drop_tabungan' => $this->input->post('tgl_drop'),
            'id_anggota' => $id_anggota,
            'tabungan' => str_replace('.', '', $this->input->post('pinjaman_pokok')) * 5 / 100
        );

        $this->M_peminjaman->insert($data);
        $this->M_tabungan->insert($tabungan);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data berhasil di simpan</div>');
        redirect('peminjaman', 'refresh');
    }


    public function hapus()
    {
        $id = $this->input->get('id');

        $this->M_tabungan->delete($id);
        $this->M_peminjaman->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Data berhasil di hapus</div>');
        redirect('peminjaman', 'refresh');
    }

    public function lihat()
    {
        $id = $this->input->get('id');

        $data = array(
            'admin' => $this->M_admin->GetLoginAdmin()->row_array(),
            'data' => $this->M_peminjaman->GetPeminjaman($id)->row_array(),
            'angsuran' => $this->M_peminjaman->GetAngsuran($id)->result_array(),
            'angsuran_ke' => $this->M_peminjaman->AngsuranKe($id),
            'sisa_angsuran' => $this->M_peminjaman->SisaAngsuran($id)->row_array(),
            'menu' => "Peminjaman",
            'sub_menu' => 'Angsuran'
        );
        $this->load->view('backend/v_peminjaman/lihat', $data);
    }

    public function simpan_angsuran()
    {
        $id = $this->input->get('id');

        $data = array(
            'tgl_angsuran' => $this->input->post('tgl_angsuran'),
            'nominal_angsuran' => str_replace('.', '', $this->input->post('nominal_angsuran')),
            'angsuran_ke' => $this->input->post('angsuran_ke'),
            'no_peminjaman' => $id,
            'id_admin' => $this->session->userdata('id_admin')
        );

        $this->M_peminjaman->insertAngsuran($data);
        redirect('peminjaman/lihat?id=' . $id);
    }

    public function hapus_angsuran($id)
    {
        $r = $this->input->get('r');
        $this->M_peminjaman->deleteAngsuran($id);
        redirect('peminjaman/lihat?id=' . $r);
    }
}
