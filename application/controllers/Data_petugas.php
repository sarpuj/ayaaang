<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_petugas extends CI_Controller
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
        $data['title'] = 'Daftar Petugas';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $data['data'] = $this->M_petugas->petugas();
        $this->load->view('admin/petugas', $data);
        $this->load->view('admin/templates/footer');
    }

    public function tambah_data_petugas()
    {
        $data['title'] = 'Tambah Data petugas';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/tambah_data_petugas');
        $this->load->view('admin/templates/footer');
    }

    public function tambah_data_petugas_proses()
    {


        $input = array(
            'id_petugas' => $this->input->post('id_petugas'),
            'nama_petugas' => $this->input->post('nama_petugas'),
            'nama_rs' => $this->input->post('nama_rs'),
            'email' => $this->input->post('email'),
            'id_login' =>  $this->session->userdata('id_login'),
        );

        $proses = $this->M_petugas->simpanDataPetugas($input);


        if ($proses) {
            $this->session->set_flashdata('data', 'Data berhasil diTambahkan...');
            redirect('data_petugas');
        }
    }




    public function edit_data_petugas($id_petugas)
    {
        $data['title'] = 'Edit Data Petugas';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $data['data'] = $this->M_petugas->edit_petugas($id_petugas);
        $this->load->view('admin/edit_data_petugas', $data);
        $this->load->view('admin/templates/footer');
    }





    public function update_data_petugas()
    {

        $input = array(
            'id_petugas' => $this->input->post('id_petugas'),
            'nama_petugas' => $this->input->post('nama_petugas'),
            'nama_rs' => $this->input->post('nama_rs'),
            'email' => $this->input->post('email'),
        );



        $where = array('id_petugas' => $this->input->post('id_petugas'));

        $proses = $this->M_petugas->UpdateDataPetugas($input, $where);

        if ($proses) {
            $this->session->set_flashdata('data', 'Data berhasil diUbah...');
            redirect('data_petugas');
        }
    }



    public function hapus($id_petugas)
    {

        $proses = $this->db->query("delete from petugas  where id_petugas='" . $id_petugas . "'");
        if ($proses) {
            $this->session->set_flashdata('data', 'Data Sudah Dihapus....');
            redirect('data_petugas');
        }
    }
}
