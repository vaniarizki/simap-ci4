<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;
use \App\Models\KategoriModel;
use \App\Models\BarangModel;
use \App\Models\UserModel;
use \App\Models\WishlistModel;

class Wishlist extends Controller
{
  protected $kategoriModel;
  protected $barangModel;
  protected $userModel;
  protected $wishlistModel;

  public function __construct()
  {
    $this->kategoriModel = new KategoriModel();
    $this->barangModel = new BarangModel();
    $this->userModel = new UserModel();
    $this->wishlistModel = new WishlistModel();
  }

  public function save($id_barang)
  {
    $session = session();

    $nim = $session->get('nim');
    $insert = $this->wishlistModel->addWishlist($nim, $id_barang);

    if ($insert) {
      $output = [
        'status' => 200,
        'message' => ''
      ];
      return;
    }
  }

  public function show()
  {
    $session = session();

    $nim = $session->get('nim');
    $barang = $this->barangModel->getBarangInWishlist($nim);

    $data = [
      'title' => 'Wishlist | SiMap STIS',
      'kategori' => $this->kategoriModel->getKategori(),
      'barang' => $barang,
      'nim' => $nim,
      'nama' => $session->get('nama'),
    ];

    return view('/user/barang', $data);
  }
}
