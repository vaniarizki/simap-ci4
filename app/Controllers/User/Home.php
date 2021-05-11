<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;
use \App\Models\KategoriModel;

class Home extends Controller
{
  protected $kategoriModel;

  public function __construct()
  {
    $this->kategoriModel = new KategoriModel();
  }

  public function index()
  {
    $session = session();
    $data = [
      'title' => 'Home | SiMap STIS',
      'kategori' => $this->kategoriModel->getKategori(),
      'nim' => $session->get('nim'),
      'nama' => $session->get('nama'),
    ];

    return view('/user/home', $data);
  }
}
