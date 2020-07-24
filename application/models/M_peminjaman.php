<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_peminjaman extends CI_Model
{

    public function GetAll($hari = null, $resort = null)
    {
        $this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota');
        $this->db->join('hari', 'hari.id_hari = anggota.id_hari');
        $this->db->join('resort', 'resort.kd_resort = anggota.kd_resort');

        if ($hari && $resort) {
            $this->db->group_start();
            $this->db->where('anggota.id_hari', $hari);
            $this->db->where('anggota.kd_resort', $resort);
            $this->db->group_end();
        } elseif ($hari) {
            $this->db->group_start();
            $this->db->where('anggota.id_hari', $hari);
            $this->db->group_end();
        } elseif ($resort) {
            $this->db->group_start();
            $this->db->where('anggota.kd_resort', $resort);
            $this->db->group_end();
        }

        return $this->db->get('peminjaman');
    }
    public function GetLaporan($bulan = null, $tahun = null)
    {
        $this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota');
        $this->db->join('resort', 'resort.kd_resort = anggota.kd_resort');
        if ($bulan && $tahun) {
            $this->db->where('MONTH(peminjaman.tgl_drop)', $bulan);
            $this->db->where('YEAR(peminjaman.tgl_drop)', $tahun);
            return $this->db->get('peminjaman');
        } elseif ($tahun) {
            $this->db->where('YEAR(peminjaman.tgl_drop)', $tahun);
            return $this->db->get('peminjaman');
        } else {
            return $this->db->get('peminjaman');
        }
    }

    public function GetLastPeminjaman()
    {
        $this->db->order_by('no_peminjaman', 'desc');
        return $this->db->get('peminjaman')->row_array();
    }

    public function insert($data)
    {
        return $this->db->insert('peminjaman', $data);
    }

    public function delete($id)
    {
        $this->db->where('no_peminjaman', $id);
        $this->db->delete('peminjaman');
        return $this->db->affected_rows();
    }

    public function GetPeminjaman($id)
    {
        $this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota');
        $this->db->where('no_peminjaman', $id);
        return $this->db->get('peminjaman');
    }

    public function GetAngsuran($id)
    {
        $this->db->where('no_peminjaman', $id);
        return $this->db->get('angsuran');
    }

    public function AngsuranKe($id)
    {
        $this->db->where('no_peminjaman', $id);
        return $this->db->get('angsuran')->num_rows();
    }

    public function SisaAngsuran($id)
    {
        $this->db->where('no_peminjaman', $id);
        $this->db->select_sum('nominal_angsuran');
        return $this->db->get('angsuran');
    }

    public function insertAngsuran($data)
    {
        return $this->db->insert('angsuran', $data);
    }

    public function deleteAngsuran($id)
    {
        $this->db->where('id_angsuran', $id);
        $this->db->delete('angsuran');
        return $this->db->affected_rows();
    }

    public function GetNo()
    {
        $tgl = date('Y-m-d');
        $this->db->where('tgl_drop', $tgl);
        $q = $this->db->get('peminjaman');
        return $q->num_rows();
    }

    public function update($id, $data)
    {
        $this->db->where('no_peminjaman', $id);
        return $this->db->update('peminjaman', $data);
    }

    public function cekanggota($id)
    {
        $this->db->order_by('tgl_drop', 'desc');
        $this->db->where('id_anggota', $id);
        $q = $this->db->get('peminjaman')->row_array()['keterangan'];
        if ($q == 'Proses') {
            return true;
        } else {
            return false;
        }
    }
}

/* End of file M_peminjaman.php */
