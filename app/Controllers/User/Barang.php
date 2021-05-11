<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;
use \App\Models\KategoriModel;
use \App\Models\BarangModel;
use \App\Models\UserModel;

class Barang extends Controller
{
  protected $kategoriModel;
  protected $barangModel;
  protected $userModel;

  public function __construct()
  {
    $this->kategoriModel = new KategoriModel();
    $this->barangModel = new BarangModel();
    $this->userModel = new UserModel();
  }

  public function barangSaya()
  {
    $session = session();
    $data = [
      'title' => 'Barang Saya | SiMap STIS',
      'kategori' => $this->kategoriModel->getKategori(),
      'barang' => $this->barangModel->getBarangByNim($session->get('nim')),
      'nim' => $session->get('nim'),
      'nama' => $session->get('nama'),
    ];

    return view('/user/barangsaya', $data);
  }

  public function detail($id)
  {
    $session = session();
    $barang = $this->barangModel->getBarang($id);
    $nama_barang = $barang[0]['nama'];
    $nim_penjual = $barang[0]['id_penjual'];
    $penjual = $this->userModel->getUser($nim_penjual);

    $data = [
      'title' => join(" ", array($nama_barang, '| SiMap STIS')),
      'kategori' => $this->kategoriModel->getKategori(),
      'barang' => $barang[0],
      'penjual' => $penjual[0]['nama'],
      'nim' => $session->get('nim'),
      'nama' => $session->get('nama'),
    ];

    return view('/user/detailbarang', $data);
  }
}
