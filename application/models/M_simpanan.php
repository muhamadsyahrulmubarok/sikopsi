<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_simpanan extends CI_Model
{
    public function GetByName($hari = null, $resort = null)
    {
        $this->db->select('*');
        $this->db->select_sum('simpanan');
        $this->db->join('anggota', 'anggota.id_anggota = simpanan.id_anggota');
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

        $this->db->group_by('simpanan.id_anggota');
        return $this->db->get('simpanan');
    }

    public function insert($data)
    {
        return $this->db->insert('simpanan', $data);
    }

    public function delete($id)
    {
        $this->db->where('no_peminjaman', $id);
        return $this->db->delete('simpanan');
    }

    public function Cetak($id)
    {
        $this->db->join('anggota', 'anggota.id_anggota = simpanan.id_anggota');
        $this->db->join('peminjaman', 'peminjaman.no_peminjaman = simpanan.no_peminjaman');
        $this->db->where('simpanan.id_anggota', $id);
        return $this->db->get('simpanan');
    }

    public function GetAnggota($id)
    {
        $this->db->join('resort', 'resort.kd_resort = anggota.kd_resort');
        $this->db->where('id_anggota', $id);
        return $this->db->get('anggota');
    }
}

/* End of file M_tabungan.php */
