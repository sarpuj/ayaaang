<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_stock extends CI_Controller
{



    function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('id_login')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Data stock';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $data['data'] = $this->M_stock->stock();
        $this->load->view('admin/stock', $data);
        $this->load->view('admin/templates/footer');
    }

    public function tambah_data_stock()
    {
        $data['title'] = 'Tambah Data stock';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/tambah_data_stock');
        $this->load->view('admin/templates/footer');
    }

    public function tambah_data_stock_proses()
    {


        $input = array(
            'goldar' => $this->input->post('goldar'),
            'jumlah' => $this->input->post('jumlah'),
            'keterangan' => $this->input->post('keterangan'),
            'id_login' =>  $this->session->userdata('id_login'),
        );

        $proses = $this->M_stock->simpanDataStock($input);


        if ($proses) {
            $this->session->set_flashdata('data', 'Data berhasil diTambahkan...');
            redirect('data_stock');
        }
    }




    public function edit_data_stock($id_stockdarah)
    {
        $data['title'] = 'Edit Data stock';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $data['data'] = $this->M_stock->edit_stock($id_stockdarah);
        $this->load->view('admin/edit_data_stock', $data);
        $this->load->view('admin/templates/footer');
    }





    public function update_data_stock()
    {

        $input = array(
            'goldar' => $this->input->post('goldar'),
            'jumlah' => $this->input->post('jumlah'),
            'keterangan' => $this->input->post('keterangan'),
        );



        $where = array('id_stockdarah' => $this->input->post('id_stockdarah'));

        $proses = $this->M_stock->UpdateDataStock($input, $where);

        if ($proses) {
            $this->session->set_flashdata('data', 'Data berhasil diUbah...');
            redirect('Data_stock');
        }
    }



    public function hapus($id_stockdarah)
    {

        $proses = $this->db->query("delete from stock  where id_stockdarah='" . $id_stockdarah . "'");
        if ($proses) {
            $this->session->set_flashdata('data', 'Data Sudah Dihapus....');
            redirect('Data_stock');
        }
    }
}
