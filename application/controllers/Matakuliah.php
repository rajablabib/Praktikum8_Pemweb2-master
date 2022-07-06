<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

    public function index(){
        $this->load->model('Matakuliah_model', 'matkul1');
        $this->matkul1->id=1;
        $this->matkul1->nama='Dasar-Dasar Pemrograman';
        $this->matkul1->sks='24';
        $this->matkul1->kode='001';

        $this->load->model('Matakuliah_model', 'matkul2');
        $this->matkul2->id=2;
        $this->matkul2->nama='Pemrograman Web';
        $this->matkul2->sks='24';
        $this->matkul2->kode='002';

        $this->load->model('Matakuliah_model', 'matkul3');
        $this->matkul3->id=3;
        $this->matkul3->nama='UI/UX';
        $this->matkul3->sks='22';
        $this->matkul3->kode='003';

        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3];
        $data2['list_matkul'] = $list_matkul;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');

        $this->load->view('Matakuliah/index', $data2);

        $this->load->view('layout/footer');

    }

    public function create(){
        $data['judul'] = 'Form Kelola Matakuliah';

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('Matakuliah_model', 'matkul1');

        $this->matkul1->nama=$this->input->post('matkul');
        $this->matkul1->sks=$this->input->post('sks');
        $this->matkul1->kode=$this->input->post('kode');

        // die(print_r($this->matkul1));

        $data['matkul1'] = $this->matkul1;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('Matakuliah/view', $data);
        $this->load->view('layout/footer');

    }
}

?>