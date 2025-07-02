<style>
  .hero-section {
    background-image: url('<?php echo base_url("gambar/bg TTP.jpg") ?>');
    height: 400px;
    background-size: cover;
    background-position: center;
  }

  .layanan-item {
    font-family: 'Playfair Display', serif;
    font-size: 17.6px;
    color: #4B2E2B;
    background-color: #F5F5F5;
    box-shadow: 2px 4px 6px rgba(75, 46, 43, 0.2);
    border-radius: 8px;
    padding: 30px 10px;
    text-align: center;
    border: 1px solid black;
    margin: 10px;
  }

  .judul-section {
    letter-spacing: 4px;
    font-family: 'Lato', serif;
    font-size: 2rem;
    color: #4B2E2B;
  }

  .grid-fasilitas {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px 0;
  }

  .fasilitas-card a {
    display: block;
    overflow: hidden;
    border-radius: 10px;
  }

  .fasilitas-card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    border-radius: 10px;
    transition: transform 0.3s ease;
    display: block;
  }

  .fasilitas-card a:hover img {
    transform: scale(1.05);
  }

  .fasilitas-card p {
    margin-top: 10px;
    font-weight: bold;
    font-family: 'Lato', sans-serif;
    color: #4B2E2B;
  }
</style>

<button class="back-button" onclick="history.back()">
  <i class="fas fa-arrow-left"></i>
</button>

<!-- Hero Section -->
<section class="hero-section"></section>

<!-- LAYANAN -->
<section id="layanan" class="container my-5">
  <div class="text-center mb-4">
    <h2 class="judul-section">LAYANAN</h2>
  </div>
  <div class="row justify-content-center g-3">
    <div class="col-md-4 col-sm-6">
      <div class="layanan-item">Pemasaran Produk</div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="layanan-item">Pameran dan Display</div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="layanan-item">Perdagangan</div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="layanan-item">Pelatihan</div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="layanan-item">Pemagangan</div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="layanan-item">Informasi Teknologi</div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="layanan-item">Dukungan bagi Start Up</div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="layanan-item">Demonstrasi</div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="layanan-item">Perencanaan</div>
    </div>
  </div>
</section>

<!-- FASILITAS -->
<section id="fasilitas" class="container" style="margin-top: 120px;">
  <div class="text-center mb-4">
    <h2 class="judul-section">FASILITAS</h2>
  </div>
  <div class="grid-fasilitas">
    <div class="fasilitas-card">
      <a data-fancybox="fasilitas" href="<?= base_url('gambar/Ruang_Diskusi_Seminar.jpg'); ?>" data-caption="Ruang Diskusi atau Seminar">
        <img src="<?= base_url('gambar/Ruang_Diskusi_Seminar.jpg'); ?>" alt="Ruang Diskusi atau Seminar" />
      </a>
    </div>
    <div class="fasilitas-card">
      <a data-fancybox="fasilitas" href="<?= base_url('gambar/Ruang Rapat.jpg'); ?>" data-caption="Ruang Rapat">
        <img src="<?= base_url('gambar/Ruang Rapat.jpg'); ?>" alt="Ruang Rapat" />
      </a>
    </div>
    <div class="fasilitas-card">
      <a data-fancybox="fasilitas" href="<?= base_url('gambar/Ruang Diskusi.jpg'); ?>" data-caption="Ruang Diskusi">
        <img src="<?= base_url('gambar/Ruang Diskusi.jpg'); ?>" alt="Ruang Diskusi" />
      </a>
    </div>
    <div class="fasilitas-card">
      <a data-fancybox="fasilitas" href="<?= base_url('gambar/Mushola.jpg'); ?>" data-caption="Mushola">
        <img src="<?= base_url('gambar/Mushola.jpg'); ?>" alt="Mushola" />
      </a>
    </div>
  </div>
</section>

<!-- Tombol Scroll ke Atas -->
<button onclick="scrollToTop()" id="btnScrollTop" title="Kembali ke atas">
  &#8679;
</button>
