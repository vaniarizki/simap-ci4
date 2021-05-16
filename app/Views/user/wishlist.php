<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/header'); ?>
<?= $this->include('layout/sidebar'); ?>

<div class="furniture-box">
  <div class="container">
    <div class="row">
      <div class="furniture-main">
        <h2>Semua</h2>
        <div class="col-md-3 col-sm-4">
          <div class="furniture-left">
            <h3>Filter Barang</h3>
            <div class="by-box">
              <h5>Harga</h5>
              <div class="css-frokek">
                <div class="css-d145w4 ed3tosx0">
                  <div class="css-79elbk ed3tosx2">
                    <div class="css-9yxw62 ed3tosx3">
                      <div class="css-1rcaxqf ed3tosx4">Rp</div>
                      <input name="keyword" placeholder="Harga Minimum" type="text" value="" id="keyword">
                    </div>
                  </div>
                </div>
              </div>
              <div class="css-frokek">
                <div class="css-d145w4 ed3tosx0">
                  <div class="css-79elbk ed3tosx2">
                    <div class="css-9yxw62 ed3tosx3">
                      <div class="css-1rcaxqf ed3tosx4">Rp</div>
                      <input name="max" placeholder="Harga Maksimum" type="text" value="" id="max">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="by-com">
              <h5>Jenis</h5>
              <div class="list-b">
                <div id="boxscroll">
                  <div class="form-check">
                    <input id="checkbox1" class="filled-in chk-col-blue" type="checkbox">
                    <label for="checkbox1">
                      Barang Jualan
                    </label>
                  </div>
                  <div class="form-check">
                    <input id="checkbox2" class="filled-in chk-col-blue" type="checkbox">
                    <label for="checkbox2">
                      Barang Hibah
                    </label>
                  </div>
                  <div class="form-check">
                    <input id="checkbox3" class="filled-in chk-col-blue" type="checkbox">
                    <label for="checkbox3">
                      Barang Sewaan
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="left-list-f">
              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="panel-title expand">
                      <div class="right-arrow pull-right"><span class="caret"></span></div>
                      <a href="#">Sort by</a>
                    </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse">
                    <div class="tight-btn-b clearfix">
                      <a href="#">Stok</a>
                      <a href="#">Harga</a>
                      <a href="#">Nama</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 page">
          <div class="furniture-middle">
            <div class="row cat-pd">
              <?php foreach ($barang as $b) : ?>
                <div class="col-md-4 col-sm-6" style="padding-top: 15px;">
                  <div class="small-box-c">
                    <div class="small-img-b">
                      <img src="/img/barang/<?= $b['gambar_1']; ?>" alt="#" />
                    </div>
                    <div class="dit-t clearfix">
                      <div class="left-ti">
                        <a href="/user/barang/<?= $b['id_barang']; ?>">
                          <h4><?= $b['nama']; ?></h4>
                        </a>
                        <p>By
                          <?php
                          $id = $b['id_penjual'];

                          $db = \Config\Database::connect();
                          $query = $db->query("SELECT nama FROM user WHERE nim LIKE '%$id%'");
                          $row   = $query->getRowArray(); ?>
                          <span>
                            <?= $row['nama']; ?>
                          </span>
                        </p>
                      </div>
                      <a href="#" tabindex="0"><?php echo $b['harga']; ?></a>
                    </div>
                    <div class="prod-btn">
                      <a href="#"><i class="fa fa-star" aria-hidden="true"></i>Detail Barang</a>
                      <?php
                      $id_barang = $b['id_barang'];
                      $wishlist = $db->query("SELECT * FROM wishlist WHERE nim_user LIKE '%$nim%' AND id_barang LIKE '%$id_barang%'");
                      $row = $wishlist->getNumRows();
                      if ($row > 0) {
                        echo '<button onclick="Wishlist(' . $id_barang . ', true)" id="' . $id_barang . '" class="wishlist active"><img class="h-i" src="/img/love.png" alt="" />Simpan ke wishlist</button>';
                      } else {
                        echo '<button onclick="Wishlist(' . $id_barang . ', false)" id="' . $id_barang . '" class="wishlist"><img class="h-i" src="/img/love.png" alt="" />Simpan ke wishlist</button>';
                      }
                      ?>
                      <a href="/user/wishlist/save/<?= $b['id_barang']; ?>"></a>
                      <a href="#/user/chat/..."><img class="h-i" src="/img/profil.png" alt="" />Chat Penjual</a>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <div class="loding-box">
          <a href="#">
            <div class="sk-wave">
              <div class="sk-rect sk-rect1"></div>
              <div class="sk-rect sk-rect2"></div>
              <div class="sk-rect sk-rect3"></div>
              <div class="sk-rect sk-rect4"></div>
              <div class="sk-rect sk-rect5"></div>
            </div>
            <span>Loading...</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!--main js-->
<script src="/js/jquery-1.12.4.min./"></script>
<!--bootstrap js-->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap-select.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/wow.min.js"></script>
<!--custom js-->
<script src="/js/custom.js"></script>
<script src="/js/ajax.js"></script>
<script>
  $(function() {
    $("#slider-range").slider({
      range: true,
      min: 0,
      max: 2000,
      values: [158, 1230],
      slide: function(event, ui) {
        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
      }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
      " - $" + $("#slider-range").slider("values", 1));
  });
</script>
<script src="js/jquery.nicescroll.min.js"></script>
<script>
  $(document).ready(function() {
    $("#boxscroll").niceScroll({
      cursorborder: "",
      cursorcolor: "#ededed",
      boxzoom: true
    }); // First scrollable DIV
  });
</script>

<?= $this->endSection(); ?>