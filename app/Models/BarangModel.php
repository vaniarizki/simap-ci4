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

  public function getBarangByKategori($kategori)
  {
    $query = $this->table($this->table)->where('kategori', $kategori)->findAll();
    return $query;
  }

  public function getBarangInWishlist($nim)
  {
    $db = \Config\Database::connect();

    $query = $db->query('SELECT * FROM barang WHERE id_barang IN (SELECT id_barang FROM wishlist WHERE nim_user = "' . $nim . '")');
    $results = $query->getResultArray();
    return $results;
  }
}
