<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_angsuran extends CI_Model
{
    public function GetAngsuran($id, $no)
    {
        $this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota');

        $this->db->where('peminjaman.id_anggota', $id);;
        $this->db->where('no_peminjaman', $no);
        return $this->db->get('peminjaman');
    }
}

/* End of file M_angsuran.php */
