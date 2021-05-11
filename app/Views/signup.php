<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <h2 class="inactive underlineHover"><a href="/signin">Sign In</a></h2>
    <h2 class="active">Sign Up </h2>

    <?php if (isset($validation)) : ?>
      <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
    <?php endif; ?>

    <form action="/signup/save" method="post">
      <?= csrf_field(); ?>
      <input type="text" id="nim" class="fadeIn first" name="nim" placeholder="nim" required autofocus>
      <input type="text" id="nama" class="fadeIn third" name="nama" placeholder="nama" required>
      <input type="text" id="email" class="fadeIn fourth" name="email" placeholder="email" required>
      <input type="password" id="password" class="fadeIn fiveth" name="password" placeholder="password" required>
      <input type="password" id="confpassword" class="fadeIn sixth" name="confpassword" placeholder="konfirmasi password" required>
      <input type="submit" class="fadeIn seventh" value="Sign Up">
    </form>

    <div id="formFooter">
      <a href="/" class="underlineHover">SIMAP</a>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>