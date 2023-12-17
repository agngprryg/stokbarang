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
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('index');
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
			'data' => $this->proses->data_transaksi()
		] ;
		$this->load->view('templates/header', $t);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('transaksi', $array);
		$this->load->view('templates/footer');
	}
	public function lima()
	{
		$t['title'] = "Detail Transaksi";
		$d['data'] = $this->proses->data_transaksi();
		$this->load->view('templates/header', $t);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('detail_trans',$d);
		$this->load->view('templates/footer');
	}
}
