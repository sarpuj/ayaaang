<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_rs extends CI_Controller
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
        $data['title'] = 'Daftar Rumah Sakit';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $data['data'] = $this->M_rs->rs();
        $this->load->view('admin/rs', $data);
        $this->load->view('admin/templates/footer');
    }

    public function tambah_data_rs()
    {
        $data['title'] = 'Tambah Data Rumah Sakit';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/tambah_data_rs', $data);
        $this->load->view('admin/templates/footer');
    }

    public function tambah_data_rs_proses()
    {


        $input = array(
            'nama_rs' => $this->input->post('nama_rs'),
            'alamat' => $this->input->post('alamat'),
            'kontak' => $this->input->post('kontak'),
            'id_login' =>  $this->session->userdata('id_login'),
        );

        $proses = $this->M_rs->simpanDataRs($input);


        if ($proses) {
            $this->session->set_flashdata('data', 'Data berhasil diTambahkan...');
            redirect('data_rs');
        }
    }




    public function edit_data_rs($id_rs)
    {
        $data['title'] = 'Edit Data RS';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $data['data'] = $this->M_rs->edit_rs($id_rs);
        $this->load->view('admin/edit_data_rs', $data);
        $this->load->view('admin/templates/footer');
    }





    public function update_data_rs()
    {

        $input = array(
            'nama_rs' => $this->input->post('nama_rs'),
            'alamat' => $this->input->post('alamat'),
            'kontak' => $this->input->post('kontak'),
        );



        $where = array('id_rs' => $this->input->post('id_rs'));

        $proses = $this->M_rs->UpdateDataRs($input, $where);

        if ($proses) {
            $this->session->set_flashdata('data', 'Data berhasil diUbah...');
            redirect('data_rs');
        }
    }



    public function hapus($id_rs)
    {

        $proses = $this->db->query("delete from rumah_sakit  where id_rs='" . $id_rs . "'");
        if ($proses) {
            $this->session->set_flashdata('data', 'Data Sudah Dihapus....');
            redirect('data_rs');
        }
    }
}
