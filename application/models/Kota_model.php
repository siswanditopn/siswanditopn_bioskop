<?php

class Kota_model extends CI_model {
  public function all()
  {
    return $this->db->get_where('kota', ['deleted_at' => null])->result_array();
  }
}