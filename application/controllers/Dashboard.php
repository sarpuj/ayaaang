<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Donor Darah';
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/dashboard');
        $this->load->view('user/templates/footer');
    }

    public function stok_darah()
    {
        $data['title'] = 'Stok Darah';
        $this->load->view('user/templates/header', $data);
        $data['data'] = $this->M_stock->stock();
        $this->load->view('user/stok/stockdarah', $data);
        $this->load->view('user/templates/footer');
    }

    public function rs()
    {
        $data['title'] = 'Rumah Sakit';
        $this->load->view('user/templates/header', $data);
        $data['data'] = $this->M_rs->rs();
        $this->load->view('user/rs/rumahsakit', $data);
        $this->load->view('user/templates/footer');
    }

    public function rsud_wates()
    {
        $data['title'] = 'RSUD WATES';
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/rs/wates');
        $this->load->view('user/templates/footer');
    }

    public function rsu_rizki_amalia_medika()
    {
        $data['title'] = 'RSU RIZKI AMALIA MEDIKA';
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/rs/medika');
        $this->load->view('user/templates/footer');
    }

    public function rsu_queen_latifa()
    {
        $data['title'] = 'RSU QUEEN LATIFA';
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/rs/queen');
        $this->load->view('user/templates/footer');
    }
    public function rsu_kharisma_paramedika()
    {
        $data['title'] = 'RSU KHARISMA PARAMEDIKA';
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/rs/kharisma');
        $this->load->view('user/templates/footer');
    }
    public function rs_santo_yusup_boro()
    {
        $data['title'] = 'RSU SANTO YUSUP BORO';
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/rs/santoyusup');
        $this->load->view('user/templates/footer');
    }
    public function rsu_rizki_amalia()
    {
        $data['title'] = 'RSU RIZKI AMALIA';
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/rs/rizkiamalia');
        $this->load->view('user/templates/footer');
    }
    public function rsud_nyi_ageng_serang()
    {
        $data['title'] = 'RSU NYI AGENG SERANG';
        $this->load->view('user/templates/header', $data);
        $this->load->view('user/rs/nyi');
        $this->load->view('user/templates/footer');
    }
}
