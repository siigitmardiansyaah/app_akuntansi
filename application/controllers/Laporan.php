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
        $data['pendapatan1'] = $this->laporan_m->getData($bulan,$tahun,'4000.01');
        $data['pendapatan2'] = $this->laporan_m->getData($bulan,$tahun,'4000.02');
        $data['pendapatan3'] = $this->laporan_m->getData($bulan,$tahun,'4000.03');
        $data['pendapatan4'] = $this->laporan_m->getData($bulan,$tahun,'4000.04');
        $data['pendapatan5'] = $this->laporan_m->getData($bulan,$tahun,'4000.05');
        $data['pendapatan6'] = $this->laporan_m->getData($bulan,$tahun,'4000.08');
        $data['pu1'] = $this->laporan_m->getData($bulan,$tahun,'PUL1');
        $data['pu2'] = $this->laporan_m->getData($bulan,$tahun,'PUL2');
        $data['pu3'] = $this->laporan_m->getData($bulan,$tahun,'PUL3');
        $data['pu4'] = $this->laporan_m->getData($bulan,$tahun,'PUL4');
        $data['pu5'] = $this->laporan_m->getData($bulan,$tahun,'PUL5');
        $data['pu6'] = $this->laporan_m->getData($bulan,$tahun,'PUL6');
        $data['pu7'] = $this->laporan_m->getData($bulan,$tahun,'PUL7');
        $data['pu8'] = $this->laporan_m->getData($bulan,$tahun,'PUL8');
        $data['biaya_gaji'] = $this->laporan_m->getData($bulan,$tahun,'6201.01');
        $data['insentive1'] = $this->laporan_m->getData($bulan,$tahun,'6201.02.02');
        $data['insentive2'] = $this->laporan_m->getData($bulan,$tahun,'6201.02.01');
        $data['biaya_lebaran'] = $this->laporan_m->getData($bulan,$tahun,'6204.09.01');
        $data['biaya_kerjasama'] = $this->laporan_m->getData($bulan,$tahun,'6203.02.01');
        $data['biaya_perlengkapan1'] = $this->laporan_m->getData($bulan,$tahun,'6203.03.01');
        $data['biaya_perlengkapan2'] = $this->laporan_m->getData($bulan,$tahun,'6203.03.02');
        $data['biaya_perlengkapan3'] = $this->laporan_m->getData($bulan,$tahun,'6203.03.05');
        $data['biaya_perlengkapan4'] = $this->laporan_m->getData($bulan,$tahun,'6203.03.06');
        $data['biaya_utility'] = $this->laporan_m->getData($bulan,$tahun,'6203.01');
        $data['biaya_penyusutan1'] = $this->laporan_m->getData($bulan,$tahun,'6203.05.01');
        $data['biaya_penyusutan2'] = $this->laporan_m->getData($bulan,$tahun,'6203.05.01.1');
        $data['penyusutan_gedung'] = $this->laporan_m->getData($bulan,$tahun,'6203.05.02');
        $data['pajak'] = $this->laporan_m->getData($bulan,$tahun,'6203.07.02');
        $data['biaya_pemakaian1'] = $this->laporan_m->getData($bulan,$tahun,'5000.02');
        $data['biaya_pemakaian2'] = $this->laporan_m->getData($bulan,$tahun,'5000.01');
        $data['biaya_perawatan1'] = $this->laporan_m->getData($bulan,$tahun,'6203.08.04');
        $data['biaya_perawatan2'] = $this->laporan_m->getData($bulan,$tahun,'6203.08.01');
        $data['biaya_perawatan3'] = $this->laporan_m->getData($bulan,$tahun,'6203.08.02');
        $data['biaya_umum1'] = $this->laporan_m->getData($bulan,$tahun,'6201.04');
        $data['biaya_umum2'] = $this->laporan_m->getData($bulan,$tahun,'6203.12.01');
        $data['biaya_umum3'] = $this->laporan_m->getData($bulan,$tahun,'6203.06');
        $data['biaya_umum4'] = $this->laporan_m->getData($bulan,$tahun,'6203.04');
        $data['biaya_umum5'] = $this->laporan_m->getData($bulan,$tahun,'6203.05');
        $data['biaya_umum6'] = $this->laporan_m->getData($bulan,$tahun,'7200.04');
        $data['biaya1_umum6'] = $this->laporan_m->getData($bulan,$tahun,'7200.04');
        $data['pajak_final'] = $this->laporan_m->getData($bulan,$tahun,'6303.07.01');
        $data['pendapat_lain'] = $this->laporan_m->getData($bulan,$tahun,'7100.99');
        $data['biaya_adm'] = $this->laporan_m->getData($bulan,$tahun,'7200.02');
        $data['tahun'] = $tahun;
        $data['bulan'] = $bulan;
        $this->load->view('layouts/head', $data);
        $this->load->view('cetak_laba',$data);
        $this->load->view('layouts/js');
        }else{
        $data['title'] = 'Cetak Laporan Neraca';
        //LABA
        $data['pendapatan1'] = $this->laporan_m->getData($bulan,$tahun,'4000.01');
        $data['pendapatan2'] = $this->laporan_m->getData($bulan,$tahun,'4000.02');
        $data['pendapatan3'] = $this->laporan_m->getData($bulan,$tahun,'4000.03');
        $data['pendapatan4'] = $this->laporan_m->getData($bulan,$tahun,'4000.04');
        $data['pendapatan5'] = $this->laporan_m->getData($bulan,$tahun,'4000.05');
        $data['pendapatan6'] = $this->laporan_m->getData($bulan,$tahun,'4000.08');
        $data['pu1'] = $this->laporan_m->getData($bulan,$tahun,'PUL1');
        $data['pu2'] = $this->laporan_m->getData($bulan,$tahun,'PUL2');
        $data['pu3'] = $this->laporan_m->getData($bulan,$tahun,'PUL3');
        $data['pu4'] = $this->laporan_m->getData($bulan,$tahun,'PUL4');
        $data['pu5'] = $this->laporan_m->getData($bulan,$tahun,'PUL5');
        $data['pu6'] = $this->laporan_m->getData($bulan,$tahun,'PUL6');
        $data['pu7'] = $this->laporan_m->getData($bulan,$tahun,'PUL7');
        $data['pu8'] = $this->laporan_m->getData($bulan,$tahun,'PUL8');
        $data['biaya_gaji'] = $this->laporan_m->getData($bulan,$tahun,'6201.01');
        $data['insentive1'] = $this->laporan_m->getData($bulan,$tahun,'6201.02.02');
        $data['insentive2'] = $this->laporan_m->getData($bulan,$tahun,'6201.02.01');
        $data['biaya_lebaran'] = $this->laporan_m->getData($bulan,$tahun,'6204.09.01');
        $data['biaya_kerjasama'] = $this->laporan_m->getData($bulan,$tahun,'6203.02.01');
        $data['biaya_perlengkapan1'] = $this->laporan_m->getData($bulan,$tahun,'6203.03.01');
        $data['biaya_perlengkapan2'] = $this->laporan_m->getData($bulan,$tahun,'6203.03.02');
        $data['biaya_perlengkapan3'] = $this->laporan_m->getData($bulan,$tahun,'6203.03.05');
        $data['biaya_perlengkapan4'] = $this->laporan_m->getData($bulan,$tahun,'6203.03.06');
        $data['biaya_utility'] = $this->laporan_m->getData($bulan,$tahun,'6203.01');
        $data['biaya_penyusutan1'] = $this->laporan_m->getData($bulan,$tahun,'6203.05.01');
        $data['biaya_penyusutan2'] = $this->laporan_m->getData($bulan,$tahun,'6203.05.01.1');
        $data['penyusutan_gedung'] = $this->laporan_m->getData($bulan,$tahun,'6203.05.02');
        $data['pajak'] = $this->laporan_m->getData($bulan,$tahun,'6203.07.02');
        $data['biaya_pemakaian1'] = $this->laporan_m->getData($bulan,$tahun,'5000.02');
        $data['biaya_pemakaian2'] = $this->laporan_m->getData($bulan,$tahun,'5000.01');
        $data['biaya_perawatan1'] = $this->laporan_m->getData($bulan,$tahun,'6203.08.04');
        $data['biaya_perawatan2'] = $this->laporan_m->getData($bulan,$tahun,'6203.08.01');
        $data['biaya_perawatan3'] = $this->laporan_m->getData($bulan,$tahun,'6203.08.02');
        $data['biaya_umum1'] = $this->laporan_m->getData($bulan,$tahun,'6201.04');
        $data['biaya_umum2'] = $this->laporan_m->getData($bulan,$tahun,'6203.12.01');
        $data['biaya_umum3'] = $this->laporan_m->getData($bulan,$tahun,'6203.06');
        $data['biaya_umum4'] = $this->laporan_m->getData($bulan,$tahun,'6203.04');
        $data['biaya_umum5'] = $this->laporan_m->getData($bulan,$tahun,'6203.05');
        $data['biaya_umum6'] = $this->laporan_m->getData($bulan,$tahun,'7200.04');
        $data['biaya1_umum6'] = $this->laporan_m->getData($bulan,$tahun,'7200.04');
        $data['pajak_final'] = $this->laporan_m->getData($bulan,$tahun,'6303.07.01');
        $data['pendapat_lain'] = $this->laporan_m->getData($bulan,$tahun,'7100.99');
        $data['biaya_adm'] = $this->laporan_m->getData($bulan,$tahun,'7200.02');
        //LABA



        //AKTIVA
        $data['kas1'] = $this->laporan_m->getData($bulan,$tahun,'1000.01');
        $data['kas2'] = $this->laporan_m->getData($bulan,$tahun,'1000.02');
        $data['kas3'] = $this->laporan_m->getData($bulan,$tahun,'1000.04');
        $data['kas4'] = $this->laporan_m->getData($bulan,$tahun,'1000.05');
        $data['piutang_usaha'] = $this->laporan_m->getData($bulan,$tahun,'1100');
        $data['piutang_barang'] = $this->laporan_m->getData($bulan,$tahun,'1100.01');
        $data['piutang_pinjaman'] = $this->laporan_m->getData($bulan,$tahun,'1100.05');
        $data['invest_sapi'] = $this->laporan_m->getData($bulan,$tahun,'1100.07');
        $data['persediaan_barang'] = $this->laporan_m->getData($bulan,$tahun,'1200');
        $data['invest'] = $this->laporan_m->getData($bulan,$tahun,'1700.05');
        $data['akumulasi'] = $this->laporan_m->getData($bulan,$tahun,'1710.02.01');
        $data['dp'] = $this->laporan_m->getData($bulan,$tahun,'1100,08');
        //AKTIVA

        //PASSIVA
        $data['simpan_sukarela'] = $this->laporan_m->getData($bulan,$tahun,'2000.01');
        $data['hutang_pajak'] = $this->laporan_m->getData($bulan,$tahun,'2000.05');
        $data['hutang_dansos'] = $this->laporan_m->getData($bulan,$tahun,'2000.06');
        $data['hutang_sejahtera'] = $this->laporan_m->getData($bulan,$tahun,'2000.07');
        $data['hutang_pajda'] = $this->laporan_m->getData($bulan,$tahun,'2000.08');
        $data['hutang_pendidikan'] = $this->laporan_m->getData($bulan,$tahun,'2000.09');
        $data['hutang_bagi'] = $this->laporan_m->getData($bulan,$tahun,'2000.11');
        $data['hutang_pengawas'] = $this->laporan_m->getData($bulan,$tahun,'2000.13');
        $data['hutang_pembangunan'] = $this->laporan_m->getData($bulan,$tahun,'2000.14');
        $data['bonus'] = $this->laporan_m->getData($bulan,$tahun,'2000.17');
        $data['pend_upkc'] = $this->laporan_m->getData($bulan,$tahun,'4000.11');
        $data['pend_parkir'] = $this->laporan_m->getData($bulan,$tahun,'4000.09');
        $data['simpanan_pokok'] = $this->laporan_m->getData($bulan,$tahun,'3000.01');
        $data['simpanan_wajib'] = $this->laporan_m->getData($bulan,$tahun,'3000.02');
        $data['modal_hibah'] = $this->laporan_m->getData($bulan,$tahun,'3000.03');
        $data['modal_cadangan'] = $this->laporan_m->getData($bulan,$tahun,'3000.04');
        $data['zakat_shu'] = $this->laporan_m->getData($bulan,$tahun,'3000.06');
        //PASSIVA
        $data['tahun'] = $tahun;
        $data['bulan'] = $bulan;
        $this->load->view('layouts/head', $data);
        $this->load->view('cetak_neraca',$data);
        $this->load->view('layouts/js');
        }
    }
}
