<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_karyawan extends CI_Model
{
    public function GetAll($resort = null)
    {
        if ($resort) {
            $this->db->join('resort', 'resort.kd_resort = karyawan.kd_resort');
            $this->db->group_start();
            $this->db->where('karyawan.kd_resort', $resort);
            $this->db->group_end();
        }
        return $this->db->get('karyawan');
    }

    public function GetKaryawan($id)
    {
        $this->db->where('id_karyawan', $id);
        return $this->db->get('karyawan');
    }

    public function Insert($data)
    {
        return $this->db->insert('karyawan', $data);
    }

    public function Update($id, $data)
    {
        $this->db->where('id_karyawan', $id);
        return $this->db->update('karyawan', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_karyawan', $id);
        $this->db->delete('karyawan');
        return $this->db->affected_rows();
    }

    public function GetResort()
    {
        return $this->db->get('resort');
    }

    public function GetCount()
    {
        return $this->db->get('karyawan')->num_rows();
    }
}

/* End of file M_karyawan.php */
