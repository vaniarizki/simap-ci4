<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="wrapper fadeInDown">
  <div id="formContent">

    <form action="/signin" method="post">
      <h2 class="fadeIn first">Pendaftaran Sukses, Silahkan Login</h2>
      <input type="submit" class="fadeIn second" value="Login">
    </form>

    <div id="formFooter">
      <a href="/" class="underlineHover">SIMAP</a>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>