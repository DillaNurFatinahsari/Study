<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Data Mahasiswa';
        $data['mahasiswa1'] = $this->mahasiswa1->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_data()
    {
        $data['title'] = 'Halaman Tambah Mahasiswa';
        $data['mahasiswa1'] = $this->mahasiswa1->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/tambah_data', $data);
        $this->load->view('templates/footer');
    }

    public function proses_tambah_data()
    {
        $this->mahasiswa1->proses_tambah_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
        redirect('Auth/Home');
    }

    public function hapus_data($id)
    {
        $this->mahasiswa1->hapus_data($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect('Auth/Home');
    }

    public function edit_data($id)
    {
        $data['mahasiswa1'] = $this->mahasiswa1->ambil_id_mahasiswa1($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/edit_data', $data);
        $this->load->view('templates/footer');
    }
    public function proses_edit_data()
    {
        $this->mahasiswa1->proses_edit_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect('Auth/Home');
    }
}
