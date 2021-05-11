<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <h2 class="active">Sign In</h2>
    <h2 class="inactive underlineHover"><a href="/signup">Sign Up</a></h2>
    <?php if (session()->getFlashdata('msg')) : ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
    <?php endif; ?>
    <form action="/signin/auth" method="post">
      <input type="text" id="nim" class="fadeIn first" name="nim" placeholder="nim" required autofocus>
      <input type="password" id="password" class="fadeIn second" name="password" placeholder="password" required><br>
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
    <div id="formFooter">
      <a href="/" class="underlineHover">SIMAP</a>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>