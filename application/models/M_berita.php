<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_berita extends CI_Model
{

    public function Getberita($id)
    {
        return $this->db->get_where('berita', ['id_berita' => $id]);
    }

    public function GetAll()
    {
        return $this->db->get('berita');
    }

    public function Insert($data)
    {
        return $this->db->insert('berita', $data);
    }

    public function Update($id, $data)
    {
        $this->db->where('id_berita', $id);
        return $this->db->update('berita', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_berita', $id);
        $this->db->delete('berita');
        return $this->db->affected_rows();
    }
}

/* End of file M_admin.php */
