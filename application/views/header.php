<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cokelat Nglanggeran</title>

    <!-- Bootstrap untuk styling dan layout responsif -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons adalaj ikon-ikon dari Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts Playfair Display & Lato yang dipakai -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Henny+Penny&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Preconnect Google Fonts untuk mempercepat loading font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- plugin untuk galeri gambar menggunakan pop-up -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <style>
      body {
        background-color: #FAF9F7;
      }

      .box {
        display: flex;
        justify-content: center;
        position: fixed;
        width: 100%;
        z-index: 1000;
        top: 20px;
      }

      .navbar {
        background-color: #F4EDE5;
        font-family: 'Lato';
        width: 90%;
      }

      .navbar-brand {
        font-size: 1.8rem;
        font-weight: 400;
        color: #F4EDE5;
        text-transform: uppercase;
      }

      .nav-link {
        color: #828282;
        font-size: 1rem;
        font-weight: 400;
        transition: color 0.3s ease;
      }

      .nav-link:hover {
        color: #4B2E2B;
        text-decoration: underline;
      }

      .nav-item {
        margin: 5px 45px;
      }

      .w-100 {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 400px;
        display: flex;
        flex-direction: column;
        color: white;
        padding: 25px;
      }

      #btnScrollTop {
        display: none;
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 99;
        font-size: 24px;
        border: none;
        outline: none;
        background-color: #4B2E2B;
        color: white;
        cursor: pointer;
        padding: 12px 20px;
        border-radius: 50%;
        transition: background-color 0.3s;
      }

      #btnScrollTop:hover {
        background-color: #6E3C2F;
      }

      .back-button {
        font-size: 24px;
        padding: 8px 16px;
        border-radius: 12px;
        background-color: #fff;
        border: 2px solid #4B2E2B;
        color: #4B2E2B;
        margin: 110px 0 40px 40px;
        display: block;
        width: fit-content;
      }

      .back-button:hover{
        background-color: #4B2E2B;
        color: #fff;
      }

    </style>
  </head>
  <body>

    <div class="box">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <!-- Logo -->
          <img src="<?php echo base_url('gambar/logo choger.png') ?>" style="width: 70px; height: 55px;">

          <!-- Burger Menu untuk Mobile -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#naff"
            aria-controls="naff" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Navigasi -->
          <div class="collapse navbar-collapse" id="naff">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="<?php echo base_url('/') ?>" class="nav-link">BERANDA</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('informasi') ?>" class="nav-link">INFORMASI</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('produk') ?>" class="nav-link">PRODUK</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('infografis') ?>" class="nav-link">INFOGRAFIS</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('kegiatan') ?>" class="nav-link">KEGIATAN</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('kontak') ?>" class="nav-link">KONTAK</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>