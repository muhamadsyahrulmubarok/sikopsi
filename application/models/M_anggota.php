<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_anggota extends CI_Model
{

    public function GetAll($hari = null, $resort = null)
    {
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
        return $this->db->get('anggota');
    }

    public function GetResort()
    {
        return $this->db->get('resort');
    }

    public function save($data)
    {
        return $this->db->insert('anggota', $data);
    }

    public function GetAnggota($id)
    {
        return $this->db->get_where('anggota', ['id_anggota' => $id]);
    }

    public function update($id, $data)
    {
        $this->db->where('id_anggota', $id);
        return $this->db->update('anggota', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_anggota', $id);
        $this->db->delete('anggota');
        return $this->db->affected_rows();
    }

    public function GetCount()
    {
        return $this->db->get('anggota')->num_rows();
    }
}

/* End of file M_anggota.php */
