<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Signup extends Controller
{
  public function index()
  {
    //include helper form
    helper(['form']);
    $data = [
      'title' => 'Sign Up | SiMap STIS',
    ];
    echo view('signup', $data);
  }

  public function save()
  {
    //include helper form
    helper(['form']);
    //set rules validation form
    $rules = [
      'nim'          => 'required|min_length[3]|max_length[20]|numeric',
      'nama'         => 'required|min_length[5]|max_length[50]|is_unique[email]',
      'email'      => 'required|min_length[6]|valid_email',
      'password' => 'required|min_length[6]|max_length[200]',
      'confpassword'  => 'required|matches[password]'
    ];

    if ($this->validate($rules)) {
      $model = new UserModel();
      $data = [
        'nim'     => $this->request->getVar('nim'),
        'nama'    => $this->request->getVar('nama'),
        'email'    => $this->request->getVar('email'),
        'password' => $this->request->getVar('password')
      ];
      $model->save($data);
      return redirect()->to('/signup/success');
    } else {
      $data['validation'] = $this->validator;
      echo view('/signup', $data);
    }
  }
  public function success()
  {
    return view('/signupsuccess');
  }
}
