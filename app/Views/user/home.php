<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/header'); ?>
<?= $this->include('layout/sidebar'); ?>

<div class="page-content-product">
  <div class="main-product">
    <div class="container">
      <div class="row clearfix">
        <div class="find-box">
          <h1>Allah gives us what we need, <br> not what we want.</h1>
          <div class="product-sh">
            <div class="col-sm-9">
              <div class="form-sh">
                <input type="text" placeholder="Search something you need">
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-sh"> <a class="btn" href="#">Search</a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row clearfix">
        <?php
        $nomor = 1;
        foreach ($kategori as $k) :
        ?>
          <?php $nomor++; ?>
          <div class="col-lg-3 col-sm-6 col-md-3">
            <a href="/kategori/<?= $k['nama']; ?>">
              <div class="box-img">
                <h4><?= $k['nama']; ?></h4>
                <img src="/img/product/<?= $k['gambar']; ?>" alt="" />
              </div>
            </a>
          </div>
        <?php endforeach; ?>
        <div class="categories_link">
          <a href="/user/kategori">Lihat semua kategori disini</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="cat-main-box">
  <div class="container">
    <div class="row panel-row">
      <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.0s">
        <div class="panel panel-default">
          <div class="panel-body">
            <img src="/img/jual.png" class="icon-small" alt="">
            <a href="jual.php">
              <h4>Jualin Barang</h4>
            </a>
            <p>Dengan SIMAP kamu bisa jualin barang-barang kamu ke mahasiswa lain dengan cepat.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
        <div class="panel panel-default">
          <div class="panel-body">
            <img src="/img/hibah.png" class="icon-small" alt="">
            <a href="hibah.php">
              <h4>Hibahin Barang</h4>
            </a>
            <p>Dengan SIMAP kamu bisa hibahin barang-barang kamu ke mahasiswa lain dengan tepat.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 wow fadeIn hidden-sm" data-wow-delay="0.4s">
        <div class="panel panel-default">
          <div class="panel-body">
            <img src="/img/sewa.png" class="icon-small" alt="">
            <a href="sewa.php">
              <h4>Sewain Barang</h4>
            </a>
            <p>Dengan SIMAP kamu bisa sewain barang-barang kamu ke mahasiswa lain dengan mudah.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>