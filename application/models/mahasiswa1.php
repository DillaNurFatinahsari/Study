<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mahasiswa1 extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('mahasiswa1')->result_array();
    }
    public function proses_tambah_data()
    {
        $data = [
            "no" => $this->input->post('no', true),
            "nama" => $this->input->post('nama', true),
            "id" => $this->input->post('id', true),
            "alamat" => $this->input->post('alamat', true),
        ];
        $this->db->insert('mahasiswa1', $data);
    }
    public function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa1');
    }

    public function ambil_id_mahasiswa1($id)
    {
        return $this->db->get_where('mahasiswa1', ['id' => $id])->row_array();
    }

    public function proses_edit_data()
    {
        $data = [
            "no" => $this->input->post('no',),
            "nama" => $this->input->post('nama'),
            "id" => $this->input->post('id'),
            "alamat" => $this->input->post('alamat'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa1', $data);
    }
}
