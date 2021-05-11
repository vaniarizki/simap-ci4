<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
  protected $table = 'barang';
  protected $allowedFields = ['id_barang', 'id_penjual', 'nama', 'stok', 'harga', 'deskripsi', 'kategori', 'jenis', 'gambar_1', 'gambar_2'];

  public function getBarang($id = null)
  {
    if ($id == null) {
      $query = $this->table($this->table)->findAll();
      return $query;
    } else {
      $query = $this->table($this->table)->where('id_barang', $id)->findAll();
      return $query;
    }
  }

  public function getBarangByNim($nim = null)
  {
    if ($nim == null) {
      $query = $this->table($this->table)->findAll();
      return $query;
    } else {
      $query = $this->table($this->table)->where('id_penjual', $nim)->findAll();
      return $query;
    }
  }
}
