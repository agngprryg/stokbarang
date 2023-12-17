<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Simpan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Proses');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper(array('captcha', 'url', 'form'));
    }
    public function tambah_jenis()
    {
        $this->Proses->add();
    }

    public function tambah_barang()
    {
        $this->Proses->add_barang();
    }

    public function cari_barang()
    {
        $this->Proses->cari_brg();
    }
    public function update_jml()
    {
        $this->Proses->update_jml_trans();
        redirect(base_url('transaksi'));
    }

   

}
