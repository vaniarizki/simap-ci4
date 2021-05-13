<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;
use \App\Models\BarangModel;
use \App\Models\KategoriModel;

class Sewa extends Controller
{
  protected $barangModel;
  protected $kategoriModel;

  public function __construct()
  {
    $this->barangModel = new BarangModel();
    $this->kategoriModel = new KategoriModel();
  }

  public function index()
  {
    $session = session();
    $data = [
      'title' => 'Upload Barang Sewaan | SiMap STIS',
      'kategori' => $this->kategoriModel->getKategori(),
      'nim' => $session->get('nim'),
      'nama' => $session->get('nama'),
    ];

    return view('/user/sewa', $data);
  }

  public function upload()
  {
    $session = session();
    $nim = $session->get('nim');
    $fileGambar1 = $this->request->getFile('file1');
    $fileGambar2 = $this->request->getFile('file2');

    $namaBarang = $this->request->getVar('nama');
    $fileGambar1->move('img/barang', join('-', array($nim, $this->request->getVar('nama'))));
    $namaGambar1 = $fileGambar1->getName();
    $fileGambar2->move('img/barang', $namaGambar1);
    $namaGambar2 = $fileGambar2->getName();

    $data = [
      'gambar_1' => $namaGambar1,
      'gambar_2' => $namaGambar2,
      'nama' => $namaBarang,
      'stok' => $this->request->getVar('stok'),
      'harga' => $this->request->getVar('harga'),
      'deskripsi' => $this->request->getVar('deskripsi'),
      'kategori' => $this->request->getVar('kategori'),
      'id_penjual' => $nim,
      'jenis' => 'Barang Sewaan'
    ];

    $save = $this->barangModel->save($data);

    if ($save) {
      return redirect()->to('/user/home');
    } else {
      return 'gagal simpan';
    }
  }
}
