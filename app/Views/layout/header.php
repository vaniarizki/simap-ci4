<header id="header" class="top-head">
  <!-- Static navbar -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-sm-12 left-rs">
          <div class="navbar-header">
            <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="/user/home" class="navbar-brand">SIMAP</a>
          </div>
          <form action="jual.php" method="post" class="navbar-form navbar-left web-sh">
            <div style="background-image: url('../img/search-icon.png'); background-repeat: no-repeat;background-position: left;" class="form">
              <input type="text" class="form-control" placeholder="Pencarian...">
            </div>
          </form>
        </div>
        <div class="col-md-15 col-sm-17">
          <div class="right-nav">
            <div class="login-sr hidden-xs">
              <div class="login-signup">
                <ul>
                  <li><a class="custom-b" href="/signin/logout">Logout</a></li>
                </ul>
              </div>
            </div>
            <div class="help-r hidden-xs">
              <div class="nav-box">
                <ul>
                  <li><?= $nama; ?></li>
                </ul>
              </div>
            </div>
            <div class="nav-b hidden-xs">
              <div class="nav-box">
                <ul>
                  <li><a href="/user/barangsaya"><img class="h-i" src="/img/barang.png" alt="" />Barang Saya</a></li>
                  <li><a href="/user/profil"><img class="h-i" src="/img/profil.png" alt="" />Profil Saya</a></li>
                </ul>
              </div>
            </div>
            <div class="nav-b hidden-xs">
              <div class="nav-box">
                <ul>
                  <li><a href="/user/wishlist"><img class="h-i" src="/img/love.png" alt="" />Wishlist</a></li>
                  <li><a href="/user/notifikasi"><img class="h-i" src="/img/notifikasi.png" alt="" />Notifikasi</a></li>
                  <li><a href="/user/pesan"><img class="h-i" src="/img/pesan.png" alt="" />Pesan</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-fluid -->
  </nav>
</header>