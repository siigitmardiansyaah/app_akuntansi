<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Auth_m extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  function get($username)
  {
    $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
    $result = $this->db->get("users")->row(); // Untuk mengeksekusi dan mengambil data hasil query
    return $result;
  }

  function getUser($username)
  {
    $this->db->where('username', $username);
    $query = $this->db->get("users");
    return $query->num_rows();
  }

  function UpdatePassword($username, $password)
  {
    $this->db->set('password', $password);
    $this->db->where('username', $username);
    $this->db->update("users");
    return true;
  }
}
