<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/header'); ?>
<?= $this->include('layout/sidebar'); ?>

<div class="product-page-main">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="prod-page-title">
               <h2><?= $barang['nama']; ?></h2>
               <p>By <span><?= $penjual; ?></span></p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-2 col-sm-4">
            <div class="left-profile-box-m prod-page">
               <div class="pro-img">
                  <img src="/img/profil/<?= $fotoPenjual; ?>" alt="#" />
               </div>
               <div class="pof-text">
                  <h3><?= $penjual; ?></h3>
                  <div class="check-box"></div>
               </div>
               <a href="#">Kunjungi Toko</a>
            </div>
         </div>
         <div class="col-md-7 col-sm-8">
            <div class="md-prod-page">
               <div class="md-prod-page-in">
                  <div class="page-preview">
                     <div class="preview">
                        <div class="preview-pic tab-content">
                           <div class="tab-pane active" id="pic-1"><img src="/img/barang/<?= $barang['gambar_1']; ?>" alt="#" /></div>
                           <div class="tab-pane" id="pic-2"><img src="/img/barang/<?= $barang['gambar_2']; ?>" alt="#" /></div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                           <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="/img/barang/<?= $barang['gambar_1']; ?>" alt="#" /></a></li>
                           <li><a data-target="#pic-2" data-toggle="tab"><img src="/img/barang/<?= $barang['gambar_2']; ?>" alt="#" /></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="btn-dit-list clearfix">
                     <div class="left-dit-p">
                        <div class="prod-btn">
                           <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Simpan ke wishlist</a>
                        </div>
                     </div>
                     <div class="right-dit-p">
                        <div class="like-list">
                           <ul>
                              <li>
                                 <div class="im-b"><img class="" src="images/list-img-01.png" alt=""></div>
                              </li>
                              <li>
                                 <div class="im-b"><img src="images/list-img-02.png" alt=""></div>
                              </li>
                              <li>
                                 <div class="im-b"><img src="images/list-img-03.png" alt=""></div>
                              </li>
                              <li>
                                 <div class="im-b"><img src="images/list-img-04.png" alt=""></div>
                              </li>
                              <li>
                                 <div class="im-b"><img src="images/list-img-05.png" alt=""></div>
                              </li>
                              <li>
                                 <div class="im-b"><img src="images/list-img-06.png" alt=""></div>
                              </li>
                              <li>
                                 <div class="im-b"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="description-box">
                  <div class="dex-a">
                     <h4>Deskripsi</h4>
                     <p><?= $barang['deskripsi']; ?></p>
                  </div>
                  <div class="spe-a">
                     <h4>Specifications</h4>
                     <ul>
                        <li class="clearfix">
                           <div class="col-md-4">
                              <h5>Measurments</h5>
                           </div>
                           <div class="col-md-8">
                              <p>H25 cm / 0 12 cm and H 24 cm / 0 25 cm</p>
                           </div>
                        </li>
                        <li class="clearfix">
                           <div class="col-md-4">
                              <h5>Material</h5>
                           </div>
                           <div class="col-md-8">
                              <p>Material Name</p>
                           </div>
                        </li>
                        <li class="clearfix">
                           <div class="col-md-4">
                              <h5>Wire</h5>
                           </div>
                           <div class="col-md-8">
                              <p>Wire Name</p>
                           </div>
                        </li>
                        <li class="clearfix">
                           <div class="col-md-4">
                              <h5>Comdition</h5>
                           </div>
                           <div class="col-md-8">
                              <p>Brand new</p>
                           </div>
                        </li>
                        <li class="clearfix">
                           <div class="col-md-4">
                              <h5>SKU number</h5>
                           </div>
                           <div class="col-md-8">
                              <p>SKU number</p>
                           </div>
                        </li>
                        <li class="clearfix">
                           <div class="col-md-4">
                              <h5>Shipping</h5>
                           </div>
                           <div class="col-md-8">
                              <p>Shipping worldwide</p>
                           </div>
                        </li>
                        <li class="clearfix">
                           <div class="col-md-4">
                              <h5>Warranty</h5>
                           </div>
                           <div class="col-md-8">
                              <p>1 years</p>
                           </div>
                        </li>
                        <li class="clearfix">
                           <div class="col-md-4">
                              <h5>Delivery</h5>
                           </div>
                           <div class="col-md-8">
                              <p>Choose country</p>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="similar-box">
               <h2>Barang lain dari <?= $penjual; ?></h2>
               <div class="row cat-pd">
                  <div class="col-md-6">
                     <div class="small-box-c">
                        <div class="small-img-b">
                           <img class="img-responsive" src="images/tr1.png" alt="#" />
                        </div>
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>Product</h4>
                              <p>By <span>Beko</span> under <span>Lights</span></p>
                           </div>
                           <a href="#" tabindex="0">$1220</a>
                        </div>
                        <div class="prod-btn">
                           <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                           <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           <p>23 likes</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="small-box-c">
                        <div class="small-img-b">
                           <img class="img-responsive" src="images/tr2.png" alt="#" />
                        </div>
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>Product</h4>
                              <p>By <span>Beko</span> under <span>Chairs</span></p>
                           </div>
                           <a href="#" tabindex="0">$1220</a>
                        </div>
                        <div class="prod-btn">
                           <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                           <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           <p>23 likes</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row cat-pd">
                  <div class="col-md-6">
                     <div class="small-box-c">
                        <div class="small-img-b">
                           <img class="img-responsive" src="images/tr3.png" alt="#" />
                        </div>
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>Product</h4>
                              <p>By <span>Beko</span> under <span>Lights</span></p>
                           </div>
                           <a href="#" tabindex="0">$1220</a>
                        </div>
                        <div class="prod-btn">
                           <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                           <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           <p>23 likes</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="small-box-c">
                        <div class="small-img-b">
                           <img class="img-responsive" src="images/tr4.png" alt="#" />
                        </div>
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>Product</h4>
                              <p>By <span>Beko</span> under <span>Chairs</span></p>
                           </div>
                           <a href="#" tabindex="0">$1220</a>
                        </div>
                        <div class="prod-btn">
                           <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                           <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                           <p>23 likes</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-sm-12">
            <div class="price-box-right">
               <h4>Harga</h4>
               <h3><?= $barang['harga']; ?></h3>
               <a href="#">Hubungi Penjual</a>
            </div>
         </div>
      </div>
   </div>
</div>

<?= $this->endSection(); ?>