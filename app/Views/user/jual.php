<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/header'); ?>
<?= $this->include('layout/sidebar'); ?>

<div class="wrapper fadeInDown">
  <div class="find-box">
    <h1 style="color:White;">Whoever guides someone to goodness,<br>will have a similar reward.</h1>
  </div>
  <div id="formContent">
    <h2 class="active">Jual</h2>
    <h2 class="inactive underlineHover"><a href="/user/hibah">Hibah</a></h2>
    <h2 class="inactive underlineHover"><a href="/user/sewa">Sewa</a></h2>
    </h2>

    <script>
      function open_file1() {
        document.getElementById('file1').click();
      }

      function open_file2() {
        document.getElementById('file2').click();
      }

      function fileValidation1() {
        var fileInput = document.getElementById('file1');
        var filePath = fileInput.value;
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            document.getElementById('imagePreview1').innerHTML = '<img style="border-radius: 8px;" width="180" height="180" src="' + e.target.result + '"/>';
          };
          reader.readAsDataURL(fileInput.files[0]);
        }
      }

      function fileValidation2() {
        var fileInput = document.getElementById('file2');
        var filePath = fileInput.value;
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            document.getElementById('imagePreview2').innerHTML = '<img style="border-radius: 8px;" width="180" height="180" src="' + e.target.result + '"/>';
          };
          reader.readAsDataURL(fileInput.files[0]);
        }
      }
    </script>
    <form action="/user/jual/upload" method="post" enctype="multipart/form-data">
      <?= csrf_field(); ?>
      <h4>Upload Barang Jualan</h4>
      <div id="imageSection">
        <div class="css-j7qwjs">
          <div class="css-1k9ilcv" id="imgDropArea" tabindex="0">
            <div class="css-s027nm" onclick="open_file1();">
              <input accept="image/jpeg, image/jpg, image/x-png, image/png" type="file" name="file1" id='file1' onchange="return fileValidation1()" hidden>
              <div class="css-kmq1n0" data-testid="imgAEPImgUploader">
                <div id="imagePreview1">
                  <div class="css-1pp9iaz"></div>
                  <div class="css-17t9ldh">Foto 1</div>
                </div>
              </div>
            </div>
            <div class="css-s027nm" onclick="open_file2();">
              <input accept="image/jpeg, image/jpg, image/x-png, image/png" type="file" name="file2" id='file2' onchange="return fileValidation2()" hidden>
              <div class="css-kmq1n0" data-testid="imgAEPImgUploader">
                <div id="imagePreview2">
                  <div class="css-1pp9iaz"></div>
                  <div class="css-17t9ldh">Foto 2</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <td><input type="text" id="nama" class="fadeIn first" name="nama" placeholder="nama" required></td>
      <td><input type="text" id="stok" class="fadeIn second" name="stok" placeholder="stok" required></td>
      <td><input type="text" id="harga" class="fadeIn third" name="harga" placeholder="harga" required></td>
      <td><textarea id="deskripsi" class="fadeIn fourth" name="deskripsi" placeholder="deskripsi" required cols="40" rows="5"></textarea></td>
      <td>
        <select name="kategori" class="fadeIn fiveth">
          <?php foreach ($kategori as $k) : ?>
            <option id="kategori" name="<?= $k['nama']; ?>" value="<?= $k['nama']; ?>"><?= $k['nama']; ?></option>
          <?php endforeach; ?>
        </select>
      </td>
      <td><input type="submit" name="submit" class="fadeIn sixth" value="Jualin"></td>
    </form>

    <div id="formFooter">
      <a href="/user/home" class="underlineHover">SIMAP</a>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>