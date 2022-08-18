<?php

class Jadwal_model extends CI_model {
  public function all()
  {
    return $this->db->get_where('jadwal', ['deleted_at' => null])->result_array();
  }

  public function simpan()
  {
    $film_kode    = $this->input->post('film_kode');
    $bioskop_kode = $this->input->post('bioskop_kode');
    $waktu        = $this->input->post('waktu');
    $jumData      = $this->db->count_all_results('jadwal');
    $urut         = str_pad($jumData, 5, "0", STR_PAD_LEFT);
    $kode         = $bioskop_kode.date('YmdHi', strtotime($waktu)).$film_kode.$urut;
    $data = [
              'kode'         => $kode,
              'film_kode'    => $film_kode,
              'bioskop_kode' => $bioskop_kode,
              'waktu'        => $waktu,
              'kuota'        => $this->input->post('kuota'),
              'harga'        => $this->input->post('harga')
            ];
    $this->db->insert('bioskop', $data);
  }
}