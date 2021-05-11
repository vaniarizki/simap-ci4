<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
  protected $table = 'kategori';
  protected $allowedFields = ['id', 'nama', 'gambar'];

  public function getKategori($id = null)
  {
    if ($id == null) {
      $query = $this->table($this->table)->findAll();
      return $query;
    } else {
      $query = $this->table($this->table)->where('id', $id)->findAll();
      return $query;
    }
  }
}
