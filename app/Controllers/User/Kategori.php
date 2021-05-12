<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;
use \App\Models\KategoriModel;
use \App\Models\BarangModel;
use \App\Models\UserModel;

class Kategori extends Controller
{
  protected $kategoriModel;
  protected $barangModel;

  public function __construct()
  {
    $this->kategoriModel = new KategoriModel();
    $this->barangModel = new BarangModel();
  }

  public function index()
  {
    $session = session();
    $data = [
      'title' => 'Kategori | SiMap STIS',
      'kategori' => $this->kategoriModel->getKategori(),
      'barang' => $this->barangModel->getBarang(),
      'nim' => $session->get('nim'),
      'nama' => $session->get('nama'),
    ];

    return view('/user/kategori', $data);
  }

  public function kategori($kategori)
  {
    $session = session();
    $data = [
      'title' => join(" ", array($kategori, '| SiMap STIS')),
      'kategori' => $this->kategoriModel->getKategori(),
      'barang' => $this->barangModel->getBarangByKategori($kategori),
      'nim' => $session->get('nim'),
      'nama' => $session->get('nama'),
    ];
    return view('/user/barang', $data);
  }
}
