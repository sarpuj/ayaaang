<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_stock extends CI_Model
{
    public function stock()
    {
        return $this->db->query("select * from stock ");
    }

    public function edit_stock($id_stockdarah)
    {
        return $this->db->query("select * from stock where id_stockdarah='$id_stockdarah' ");
    }




    public function simpanDataStock($data = null)
    {
        return $this->db->insert('stock', $data);
    }



    public function UpdateDataStock($data = null, $where = null)
    {

        return $this->db->update('stock', $data, $where);
    }
}
