<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" href="images/simap.png" sizes="32x32" type="image/png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--enable mobile device-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--fontawesome css-->
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <!--bootstrap css-->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!--animate css-->
  <link rel="stylesheet" href="/css/animate-wow.css">
  <!--main css-->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="/css/slick.min.css">
  <!--responsive css-->
  <link rel="stylesheet" href="/css/responsive.css">

  <link rel="shortcut icon" href="/img/simap.png" type="image/x-icon">
  <title><?= $title; ?></title>
</head>

<body>

  <?= $this->renderSection('content'); ?>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->

  <!--main js-->
  <script src="/js/jquery-1.12.4.min.js"></script>
  <!--bootstrap js-->
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/bootstrap-select.min.js"></script>
  <script src="/js/slick.min.js"></script>
  <script src="/js/select2.full.min.js"></script>
  <script src="/js/wow.min.js"></script>
  <!--custom js-->
  <script src="/js/custom.js"></script>
</body>

</html>