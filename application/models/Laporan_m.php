<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Laporan_m extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  function getData($bulan,$tahun) {
    $this->db->where('bulan',$bulan);
    $this->db->where('tahun',$tahun);
    $query = $this->db->get('akun');
    return $query->result();
  }
}
