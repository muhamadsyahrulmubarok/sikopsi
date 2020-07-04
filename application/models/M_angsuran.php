<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_angsuran extends CI_Model
{
    public function GetAngsuran($id, $no)
    {
        $this->db->join('peminjaman', 'peminjaman.no_peminjaman = angsuran.no_peminjaman');
        $this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota');
        $this->db->where('anggota.id_anggota', $id);
        $this->db->where('angsuran.no_peminjaman', $no);
        return $this->db->get('angsuran');
    }

    public function GetAnggota($id, $no)
    {
        $this->db->join('anggota', 'peminjaman.id_anggota = anggota.id_anggota');
        $this->db->where('anggota.id_anggota', $id);
        $this->db->where('peminjaman.no_peminjaman', $no);
        return $this->db->get('peminjaman');
    }
}

/* End of file M_angsuran.php */
