<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('laporan_m');
        if (!$this->session->userdata('authenticated'))
        redirect('auth');
    }

    function index()
    {
        $data['title'] = 'Laporan';
        $this->load->view('layouts/head', $data);
        $this->load->view('layouts/sidebar');
        $this->load->view('laporan', $data);
        $this->load->view('layouts/js');
        $this->load->view('layouts/footer');
    }

    function cetak () {

        $jenis = $this->input->post('jenis');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        if($jenis == 'Laba') {
        $data['title'] = 'Cetak Laporan Laba Rugi';
        $data['data'] = $this->laporan_m->getData($bulan,$tahun);
        $data['tahun'] = $tahun;
        $data['bulan'] = $bulan;
        $this->load->view('layouts/head', $data);
        $this->load->view('cetak_laba',$data);
        $this->load->view('layouts/js');

        }else{
        $data['title'] = 'Cetak Laporan Neraca';
        $data['data'] = $this->laporan_m->getData($bulan,$tahun);
        $data['tahun'] = $tahun;
        $data['bulan'] = $bulan;
        $this->load->view('layouts/head', $data);
        $this->load->view('cetak_neraca',$data);
        $this->load->view('layouts/js');
        }
    }
}
