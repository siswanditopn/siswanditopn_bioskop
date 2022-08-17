<?php

class Kotakabupaten_model extends CI_model {
  public function all()
  {
    return $this->db->get('kota')->result_array();
  }
}