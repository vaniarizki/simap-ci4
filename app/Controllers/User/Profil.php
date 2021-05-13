<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;
use \App\Models\UserModel;

class Profil extends Controller
{
  protected $kategoriModel;

  public function __construct()
  {
    $this->userModel = new UserModel();
  }

  public function index()
  {
    $session = session();
    $data = [
      'title' => 'Profil | SiMap STIS',
      'user' => $this->userModel->getUser($session->get('nim')),
      'nim' => $session->get('nim'),
      'nama' => $session->get('nama'),
    ];

    return view('/user/profil', $data);
  }

  public function update()
  {
    $session = session();
    $nim = $session->get('nim');
    $fileFoto = $this->request->getFile('file');

    // pindah file ke folder img
    $fileFoto->move('img/profil');

    // ambil nama file
    $namaFoto = $fileFoto->getName();

    $data = [
      'foto' => $namaFoto,
      'nama' => $this->request->getVar('nama'),
      'kelas' => $this->request->getVar('kelas'),
      'alamat' => $this->request->getVar('alamat'),
      'password' => $this->request->getVar('password'),
    ];

    $update = $this->userModel->updateUser($nim, $data);

    if ($update) {
      return redirect()->to('/user/profil');
    } else {
      return 'gagal update';
    }
  }
}
