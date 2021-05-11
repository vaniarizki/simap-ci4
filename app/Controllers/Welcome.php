<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Welcome extends Controller
{
  public function index()
  {
    $data = [
      'title' => 'Welcome | SiMap STIS',
    ];
    return view('welcome', $data);
  }
}
