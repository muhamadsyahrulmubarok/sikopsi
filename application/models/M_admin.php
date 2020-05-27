<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{

    public function GetLoginAdmin()
    {
        return $this->db->get_where('admin', ['username_admin' => $this->session->userdata('username_admin')]);
    }

    public function GetAdmin($id)
    {
        return $this->db->get_where('admin', ['id_admin' => $id]);
    }

    public function GetAll()
    {
        return $this->db->get('admin');
    }

    public function Insert($data)
    {
        return $this->db->insert('admin', $data);
    }

    public function Update($id, $data)
    {
        $this->db->where('id_admin', $id);
        return $this->db->update('admin', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_admin', $id);
        $this->db->delete('admin');
        return $this->db->affected_rows();
    }
}

/* End of file M_admin.php */
