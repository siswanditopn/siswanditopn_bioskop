<?php

class Kotakabupaten_model extends CI_model {
  public function all()
  {
    return $this->db->get_where('kota', ['deleted_at' => null])->result_array();
  }

  public function simpan()
  {
    $data = ['nama' => $this->input->post('nama')];
    $this->db->insert('kota', $data);
  }
}