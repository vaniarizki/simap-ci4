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
}
