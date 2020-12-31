<?php

class Laundry extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laundry_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Laundry';
        $data['laundry'] = $this->Laundry_model->getAllLaundry();
        if( $this->input->post('keyword') ) {
            $data['laundry'] = $this->Laundry_model->cariDataLaundry();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('crud_laundry/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Laundry';

        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('crud_laundry/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Laundry_model->tambahDataLaundry();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('laundry');
        }
    }

    public function hapus($id)
    {
        $this->Laundry_model->hapusDataLaundry($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('laundry');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Laundry';
        $data['laundry'] = $this->Laundry_model->getLaundryById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('crud_laundry/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Laundry';
        $data['laundry'] = $this->Laundry_model->getLaundryById($id);
        
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('crud_laundry/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Laundry_model->ubahDataLaundry();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('laundry');
        }
    }

}
