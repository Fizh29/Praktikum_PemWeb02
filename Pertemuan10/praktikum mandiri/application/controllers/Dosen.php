<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
    public function index()
    {
        $this->load->model('dosen_model', 'dsn');
        $dosen = $this->dsn->getAll();
        $data['dosen'] = $dosen;
        $this->load->view('dosen/index', $data);
    }
	public function detail($id){
        $this->load->model('dosen_model','dsn');
        $dosen = $this->dsn->getById($id);
        $data['dosen'] = $dosen;
        $this->load->view('dosen/detail', $data);
    }
}
