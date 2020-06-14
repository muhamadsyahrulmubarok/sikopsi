<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_tabungan extends CI_Model
{
    public function GetByName($hari = null, $resort = null)
    {
        $this->db->select('*');
        $this->db->select_sum('tabungan');
        $this->db->join('anggota', 'anggota.id_anggota = tabungan.id_anggota');
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

        $this->db->group_by('tabungan.id_anggota');
        return $this->db->get('tabungan');
    }

    public function insert($data)
    {
        return $this->db->insert('tabungan', $data);
    }

    public function delete($id)
    {
        $this->db->where('no_peminjaman', $id);
        return $this->db->delete('tabungan');
    }

    public function Cetak($id)
    {
        $this->db->join('anggota', 'anggota.id_anggota = tabungan.id_anggota');
        $this->db->join('peminjaman', 'peminjaman.no_peminjaman = tabungan.no_peminjaman');
        $this->db->where('tabungan.id_anggota', $id);
        return $this->db->get('tabungan');
    }

    public function GetAnggota($id)
    {
        $this->db->join('resort', 'resort.kd_resort = anggota.kd_resort');
        $this->db->where('id_anggota', $id);
        return $this->db->get('anggota');
    }
}

/* End of file M_tabungan.php */
