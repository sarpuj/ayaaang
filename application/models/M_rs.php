<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_rs extends CI_Model
{
    public function rs()
    {

        if ($this->session->userdata('id_rs') == "") {
            return $this->db->query("select * from rumah_sakit ");
        } else {
            return $this->db->query("select * from rumah_sakit  where id_rs='" . $this->session->userdata('id_rs') . "'");
        }
    }

    public function edit_rs($id_rs)
    {
        return $this->db->query("select * from rumah_sakit where id_rs='$id_rs' ");
    }




    public function simpanDatars($data = null)
    {
        return $this->db->insert('rumah_sakit', $data);
    }



    public function UpdateDatars($data = null, $where = null)
    {

        return $this->db->update('rumah_sakit', $data, $where);
    }
}
