<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?= $data['judul']; ?> Page</title>
  <link rel="stylesheet" href="<?= BASEURL ;?>/css/bootstrap.css">
</head>
<body>
<ul class="nav justify-content-center p-2 bg-dark bg-opacity-25">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= BASEURL; ?>/About">About me</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">my wrk</a>
  </li>
  <li class="nav-item">
    <a class="nav-link fw-bold disabled">MVC PHP</a>
  </li>
</ul>