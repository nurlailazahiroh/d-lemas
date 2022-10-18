<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Dilemas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = "input";
        $this->load->view('form', $data);

    }

    public function output()
    {
        $data['nama'] = $this->input->post('nama');
        $data['nis'] = $this->input->post('nis');
        $data['kelas'] = $this->input->post('kelas');
        $data['tanggal'] = $this->input->post('tanggal');
        $data['tempat'] = $this->input->post('tempat');
        $data['alamat'] = $this->input->post('alamat');
        $data['kelamin'] = $this->input->post('kelamin');
        $data['agama'] = $this->input->post('agama');
        $this->load->view('tampildata', $data);
    }
}