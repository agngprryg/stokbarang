<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('proses');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper(array('captcha', 'url', 'form'));
	}

	public function index()
	{
		$t['title'] = "Home Page";
		$this->load->view('templates/header', $t);
		$this->load->view('auth/login');
		$this->load->view('templates/footer');
	}
	public function satu()
	{
		$t['title'] = "Home Page";
		$this->load->view('templates/header', $t);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('homepage');
		$this->load->view('templates/footer');
	}

	public function dua()
	{
		$data['title'] = 'Data Jenis';
		$d['jancok'] = $this->proses->data_jenis();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('menu_data_jenis', $d);
		$this->load->view('templates/footer');
	}
	public function tiga()
	{
		$data['title'] = 'Data Barang';
		$array =[
			'dataBarang' => $this->proses->data_barang(),
			'edata' => $this->proses->kodeJenis(),
			'halo' =>$this->proses->data_jenis()
		] ;
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('menu_data_barang', $array);
		$this->load->view('templates/footer');
	}
	public function empat()
	{
		$t['title'] = "Transaksi page";
		$array =[
			'tot' => $this->proses->totale(),
			'data' => $this->proses->data_transaksi(),
			'nota' => $this->proses->data_not(),
			'det_nota' => $this->proses->data_detail_not()
		] ;
		$this->load->view('templates/header', $t);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('transaksi', $array);
		$this->load->view('templates/footer');
	}
	public function lima()
	{
		$cari = $this->input->post('cari_tgl');
		$t['title'] = "Laporan Pembelian";
		$d['fil'] = $this->proses->cari_tanggal($cari); 
		$this->load->view('templates/header', $t);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('laporan', $d);
		$this->load->view('templates/footer');
	}
}
