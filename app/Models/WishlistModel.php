<?php

namespace App\Models;

use CodeIgniter\Model;

class WishlistModel extends Model
{
  protected $table = 'wishlist';
  protected $useTimestamps = true;
  protected $allowedFields = ['id_wishlist', 'id_barang', 'nim_user', 'created_at'];

  public function addWishlist($nim_user, $id_barang)
  {
    $data = [
      'nim_user' => $nim_user,
      'id_barang' => $id_barang
    ];

    $query = $this->db->table($this->table)->insert($data);
    return $query;
  }

  public function getWishlist()
  {
    $query = $this->table($this->table)->findAll();
    return $query;
  }
}
