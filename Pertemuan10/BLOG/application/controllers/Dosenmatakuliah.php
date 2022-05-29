<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dosenmatakuliah extends CI_Controller{
    public function index(){
        $this->load->model('matakuliah_model', 'mk1');
        $this->mk1->namamatkul = 'Jaringan Komputer';
        $this->mk1->sks = '3';
        $this->mk1->kode = '000113';
        $this->load->model('matakuliah_model', 'mk2');
        $this->mk2->namamatkul = 'Pemrogaman Web';
        $this->mk2->sks = '2';
        $this->mk2->kode = '00223';
        
        $this->load->model('dosen_model','dmk1');
        $this->dmk1->nidn = '010501';
        $this->dmk1->pendidikan = 'S2';
        $this->dmk1->nama = 'Faisal Achmad Simanjuntak Ghifari';
        $this->dmk1->matkul = $this->mk1->namamatkul;
        $this->load->model('dosen_model','dmk2');
        $this->dmk2->nidn = '020501';
        $this->dmk2->pendidikan = 'S2';
        $this->dmk2->nama = 'Bogeng Fathi Farhat';
        $this->dmk2->matkul = $this->mk2->namamatkul;
        $list_matkul = [$this->mk1, $this->mk2];
        $data['list_matkul']= $list_matkul;

        $list_dmk = [$this->dmk1, $this->dmk2];
        $data['list_dmk']= $list_dmk;

        // $this->load->view('kampus/index', $data);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kampus/index', $data);
        $this->load->view('layout/footer');
    }
    public function create(){
        $data["judul"] = "Form Kelola Dosen";
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kampus/create', $data);
        $this->load->view('layout/footer');
    }
    public function save(){
        $this->load->model('dosen_model','dmk');
        $this->dmk->nidn = $this->input->post('nidn');
        $this->dmk->pendidikan = $this->input->post('pendidikan');
        $this->dmk->nama = $this->input->post('nama');
        $this->dmk->matkul = $this->input->post('matkul');

        $data['dmk'] = $this->dmk;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kampus/view', $data);
        $this->load->view('layout/footer');
    }
}
?>