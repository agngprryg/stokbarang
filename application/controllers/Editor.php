<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Editor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('proses');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper(array('captcha', 'url', 'form'));
    }
    public function edit($andi)
    {
        $this->proses->ngedit($andi);
        $T['title'] = "Edit jenis";
        $a['edata'] = $this->proses->ngedit($andi);
        $this->load->view('templates/header', $T);
        $this->load->view('form/form_edit_jenis', $a);
        $this->load->view('templates/footer');
    }
    public function edit_data_brg($dataBrg)
    {
        $this->proses->ngedit_barang($dataBrg);
        $T['title'] = "Edit barang";
        $d['ebdata'] = $this->proses->ngedit_barang($dataBrg);
        $this->load->view('templates/header', $T);
        $this->load->view('form/form_edit_barang', $d);
        $this->load->view('templates/footer');
    }
    
    public function update()
    {
        $this->proses->diupdate();
        $a['edata'] = $this->proses->diupdate();
        $this->load->view('form/form_edit_jenis', $a); 
    }
    public function update_brg()
    {
        $this->proses->diupdate_data_brg();
        $a['edata'] = $this->proses->diupdate_data_brg();
        $this->load->view('form/form_edit_barang', $a);
    }

    public function hapus($del)
    {
        $this->proses->delete($del);
        redirect(base_url('data_jenis'));
    }

    public function hapusBrg($del)
    {
        $this->proses->delete_brg($del);
        redirect(base_url('data_barang'));
    }    
    public function hapusTrans($del)
    {
        $this->proses->delete_trans($del);
        redirect(base_url('transaksi'));
    }
    public function detail_tr(){
        $this->proses->detail_tr();
        redirect(base_url('transaksi'));
    }    
}
