<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_petugas extends CI_Model
{
    public function petugas()
    {

        if ($this->session->userdata('id_petugas') == "") {
            return $this->db->query("select * from petugas ");
        } else {
            return $this->db->query("select * from petugas  where id_petugas='" . $this->session->userdata('id_petugas') . "'");
        }
    }

    public function edit_petugas($id_petugas)
    {
        return $this->db->query("select * from petugas where id_petugas='$id_petugas' ");
    }




    public function simpanDataPetugas($data = null)
    {
        return $this->db->insert('petugas', $data);
    }



    public function UpdateDataPetugas($data = null, $where = null)
    {

        return $this->db->update('petugas', $data, $where);
    }
}
