<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Signin extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Sign In | SiMap STIS'
    ];
    helper(['form']);
    return view('signin', $data);
  }

  public function auth()
  {
    $session = session();
    $model = new UserModel();
    $nim = $this->request->getVar('nim');
    $password = $this->request->getVar('password');
    $data = $model->where('nim', $nim)->first();
    if ($data) {
      $pass = $data['password'];
      if ($password == $pass) {
        $ses_data = [
          'nim'       => $data['nim'],
          'nama'     => $data['nama'],
          'email'    => $data['email'],
          'logged_in'     => TRUE
        ];
        $session->set($ses_data);
        return redirect()->to('/user/home');
      } else {
        $session->setFlashdata('msg', 'Password salah');
        return redirect()->to('/signin')->withInput();
      }
    } else {
      $session->setFlashdata('msg', 'Nim not Found');
      return redirect()->to('/signin');
    }
  }

  public function logout()
  {
    $session = session();
    $session->destroy();
    return redirect()->to('/signin');
  }
}
