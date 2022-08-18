<?php

class Film_model extends CI_model {
  public function all()
  {
    return $this->db->get_where('film', ['deleted_at' => null])->result_array();
  }

  public function simpan()
  {
    // Generate kode
    $HurufHidup        = 0;
    $HurufKonsonan     = 0;
    $TmpHurufKonsonan1 = "";

    $jumData           = $this->db->count_all_results('film');
    $judul             = strtolower($this->input->post('judul'));
    $vaJudul           = str_split($judul);
    $vaKata            = explode(" ", $judul);
    $jumKata           = count($vaKata);

    foreach ($vaJudul as $row) {
      if(preg_match('/^[aiueo]/', $row[0])) { $HurufHidup++;
      } else { $HurufKonsonan++; $TmpHurufKonsonan1 .= $row[0]; }
    }

    $KodeHuruf = "";
    if ($jumKata == 1) {
      if ($HurufKonsonan == 1) { // 1 kata dan 1 suku kata
        foreach ($vaJudul as $row) {
          if(preg_match('/^[aiueo]/', $row[0])) {
            if (!empty($KodeHuruf) && strlen($KodeHuruf) == 1) {
              $KodeHuruf .= $row[0];
            }
          } else {
            if (empty($KodeHuruf)) {
              $KodeHuruf .= $row[0];
            }
          }
        }
      } else { // 1 kata tapi lebih dari 1 suku kata
        $KodeHuruf = substr($TmpHurufKonsonan1, 0, 2);
      }
    } else if ($jumKata == 2) { // 2 kata
      $HurufKata = [];
      foreach ($vaKata as $key => $kata) {
        $splitKata = str_split($kata);
        foreach ($splitKata as $row) {
          if(!preg_match('/^[aiueo]/', $row[0])) {
            if (empty($HurufKata[$key])) {
              $HurufKata[$key] = $row[0];
            }
          }
        }
      }
      $KodeHuruf = implode("", $HurufKata);
    } else {
      $HurufKata = [];
      foreach ($vaKata as $key => $kata) {
        $splitKata = str_split($kata);
        foreach ($splitKata as $row) {
          if(!preg_match('/^[aiueo]/', $row[0])) {
            if (empty($HurufKata[$key])) {
              $HurufKata[$key] = $row[0];
            }
          }
        }
      }
      $KodeHuruf = $HurufKata[0].$HurufKata[$jumKata-1];
    }

    $KodeAngka = str_pad($jumData+1, 3, "0", STR_PAD_LEFT);

    $data = [
              'kode'      => strtoupper($KodeHuruf).$KodeAngka,
              'judul'     => $this->input->post('judul'),
              'tgl_launc' => $this->input->post('tgl_launc'),
              'synopsys'  => $this->input->post('synopsys')
            ];
    $this->db->insert('film', $data);
  }
}