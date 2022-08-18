<?php

class Bioskop_model extends CI_model {
  public function all()
  {
    return $this->db->get_where('bioskop', ['deleted_at' => null])->result_array();
  }

  public function simpan()
  {
    $data = [
              'kode'    => $this->input->post('kode'),
              'nama'    => $this->input->post('nama'),
              'alamat'  => $this->input->post('alamat'),
              'kota_id' => $this->input->post('kota')
            ];
    $this->db->insert('bioskop', $data);
  }
}