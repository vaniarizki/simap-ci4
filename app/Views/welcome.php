<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="fadeInDown">
        <h1>WELCOME TO SIMAP</h1>
        <h2>APLIKASI JUAL BELI BARANG FOSIL STIS BERBASIS WEB</h2>
        <a href="/signin" class="tombol_login">Sign In</a>
        <a href="/signup" class="tombol_signup">Sign Up</a>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>