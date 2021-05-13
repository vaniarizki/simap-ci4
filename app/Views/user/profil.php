<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?= $this->include('layout/header'); ?>
<?= $this->include('layout/sidebar'); ?>

<div class="wrapper fadeInDown">
  <div class="find-box">
    <h1 style="color:White;">Be your self and never surrender.</h1>
  </div>
  <div id="formContent">
    <h2 class="active">Profil</h2>
    <script>
      function open_file() {
        document.getElementById('file').click();
      }

      function fileValidation() {
        var fileInput = document.getElementById('file');
        var filePath = fileInput.value;
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            document.getElementById('imagePreview').innerHTML = '<img style="border-radius: 8px;" width="180" height="180" src="' + e.target.result + '"/>';
          };
          reader.readAsDataURL(fileInput.files[0]);
        }
      }
    </script>
    <form action="/user/profil/update" method="post" enctype="multipart/form-data">
      <h4>Edit Profil Pengguna</h4>
      <?php foreach ($user as $user) : ?>
        <div id="imageSection" onclick="open_file();">
          <input accept="image/jpeg, image/jpg, image/x-png, image/png" type="file" name="file" id='file' onchange="return fileValidation()" hidden>
          <div class="css-j7qwjs">
            <div class="css-1k9ilcv" id="imgDropArea" tabindex="0">
              <div class="css-s027nm" id="imagePreview">
                <?php
                if (isset($user['foto'])) {
                ?>
                  <img style="border-radius: 8px;" width="180" height="180" src="<?= "/img/profil/" . $user['foto'] ?>">
                <?php } else { ?>
                  <div class="css-kmq1n0" data-testid="imgAEPImgUploader">
                    <div class="css-1pp9iaz"></div>
                    <div class="css-17t9ldh">Foto</div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <td><input type="text" id="nim" class="fadeIn first" name="nim" value="<?= $user['nim'] ?>" readonly="readonly"></td>
        <td><input type="text" id="nama" class="fadeIn second" name="nama" value="<?= $user['nama'] ?>" required></td>
        <td><input type="text" id="kelas" class="fadeIn third" placeholder="kelas" name="kelas" value="<?= $user['kelas'] ?>"></td>
        <td><input type="text" id="email" class="fadeIn fourth" name="email" value="<?= $user['email'] ?>" readonly="readonly"></td>
        <td><textarea id="alamat" class="fadeIn fiveth" placeholder="alamat" name="alamat" cols="40" rows="5"><?= $user['alamat'] ?></textarea></td>
        <input type="password" id="password" class="fadeIn sixth" name="password" value="<?= $user['password'] ?>" required><br>
        <input type="checkbox" class="fadeIn sixth" onclick="myFunction()"><i class="fadeIn sixth">Show Password</i><br>
        <td><input type="submit" name="submit" class="fadeIn seventh" value="Simpan"></td>
      <?php endforeach; ?>
      <script>
        function myFunction() {
          var x = document.getElementById("password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
      </script>
    </form>
    <div id="formFooter">
      <a href="/user/home" class="underlineHover">SIMAP</a>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>