<style>
  .hero-bg {
    height: 500px;
    background-size: cover;
    background-position: center;
  }

  .hero-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.55);
    z-index: 1;
  }

  .hero-content {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 2;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
  }

  .hero-content h1 {
    font-family: 'Playfair Display', serif;
    font-size: 48px;
    font-weight: bold;
  }

  .hero-content p, .hero-content .btn {
    font-family: 'Lato', sans-serif;
  }

  .hero-content .btn {
    border: 2px solid #fff;
    padding: 10px 25px;
    text-transform: uppercase;
    font-weight: 700;
    background: transparent;
    color: white;
  }

  .hero-content .btn:hover {
    background: #4B2E2B;
    color: #ffffff;
  }

  .date {
    font-size: 12px;
    letter-spacing: 2px;
    font-weight: 400;
    text-transform: uppercase;
    color: #4D4D4D;
    margin-bottom: 4px;
  }

  .judul {
    font-weight: 500;
    font-size: 16px;
    color: #4D4D4D;
  }

  .produk-content {
    background-color: #FAF9F7; 
    border-radius: 15px;
    padding: 5px;
    margin-bottom: 8px;
  }

  .produk-img {
    background-color: #FAF9F7; 
    padding: 8px;
    margin-bottom: 8px;
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .produk-img img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    border-radius: 12px;
  }

  .produk-nama {
    font-size: 14px;
    font-weight: 500;
    margin: 6px 0 4px;
    color: #000000;
  }

  .produk-harga {
    font-size: 14px;
    color: #000000;
  }

  .produk-detail {
    font-size: 13px;
    color: #0033CC;
    text-decoration: underline;
  }

  .produk-section {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 25px;
    padding: 50px 20px;
  }

  .header {
    text-align: center;
    margin-bottom: 20px;
  }

  .header h5 {
    font-size: 24px;
    font-weight: bold;
    font-family: 'Lato', sans-serif;
    color: #4B2E2B;
  }

  .produk-card {
    position: relative;
    background-color: #F4EDE5;
    border-radius: 25px;
    padding: 30px;
    width: 250px;
    text-align: center;
    transition: transform 0.2s, box-shadow 0.2s;
  }

  .produk-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
  }

  .badge-best-seller {
    position: absolute;
    top: 12px;
    left: 12px;
    background-color: #4B2E2B;
    color: white;
    font-size: 12px;
    font-weight: bold;
    padding: 5px 8px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 5px;
    z-index: 2;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    pointer-events: none;
    opacity: 0;
    transform: translateY(-5px);
    transition: opacity 0.3s ease, transform 0.3s ease;
  }

  .produk-card:hover .badge-best-seller {
    opacity: 1;
    pointer-events: auto;
  }

  .divider {
    width: 80px;
    height: 5px;
    background: #4B2E2B;
    border-radius: 5px;
    margin: 0 auto 2rem auto;
  }

  @media (max-width: 768px) {
    .produk-section {
      gap: 20px;
      padding: 30px 10px;
    }

    .produk-card {
      width: 100%;
      max-width: 280px;
    }
  }
</style>

<!-- Hero Section -->
<div id="heroCarousel" class="carousel slide position-relative" data-bs-ride="carousel" style="margin-top: 100px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="hero-bg" style="background-image: url('<?php echo base_url("gambar/beranda.jpg"); ?>');"></div>
    </div>
    <div class="carousel-item">
      <div class="hero-bg" style="background-image: url('<?php echo base_url("gambar/Craousel 1.jpg"); ?>');"></div>
    </div>
    <div class="carousel-item">
      <div class="hero-bg" style="background-image: url('<?php echo base_url("gambar/Caraousel 2.jpg"); ?>');"></div>
    </div>
  </div>

  <div class="hero-overlay"></div>
  <div class="hero-content">
    <h1>Selamat datang di<br>Website Chokelat Nglanggeran</h1>
    <p>Yuk, pilih oleh-oleh favoritmu! 🎁 Untuk keluarga,atau yang tersayang—semuanya pasti suka! 💖</p>
    <a href="<?php echo base_url('produk'); ?>" class="btn">LIHAT PRODUK</a>
  </div>

  <!-- Kontrol -->
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </button>
</div>

<!-- Sejarah Choger -->
<div class="container my-5">
  <div class="header p-4" style="background-color: #F4EDE5;">
    <h5 class="text-center mb-4">
      SEJARAH CHOGER
    </h5>
    <div class="divider"></div>
    <div class="p-1" style="background-color: #FAF9F7;">
      <div class="text-center mb-4">
        <img src="<?php echo base_url('gambar/gambar TTP.jpg'); ?>"
             class="rounded-circle"
             style="width: 100px; height: 100px; object-fit: cover;">
      </div>
      <p class="text-center"
         style="font-size: 0.95rem; color: #4D4D4D; font-weight: 400; font-family: 'Lato'; max-width: 800px; margin: 0 auto;">
        Taman Teknologi Pertanian Nglanggeran merupakan salah satu Taman Sains Pertanian / Taman Teknologi Pertanian yang dibangun oleh Badan Litbang Pertanian, hal ini dilakukan dalam rangka mewujudkan Nawa Cita yang diusung oleh pemerintah....
      </p>
      <div class="text-center mt-3 mb-3">
        <a href="<?php echo base_url('informasi'); ?>"
           class="text-decoration-none"
           style="color: #007BFF; font-weight: 400; letter-spacing: 3px; font-size: 10px;">
          READ MORE >>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Produk Best Seller -->
<div class="header" style="margin-top: 70px; margin-bottom: -40px;">
  <h5>PRODUK BEST SELLER</h5>
  <div class="divider"></div>
</div>

<div class="produk-section">
  <!-- Produk 1 -->
    <div class="produk-card">
      <div class="badge-best-seller">
        <i class="fas fa-thumbs-up"></i> <span class="badge-text">Best Seller</span>
      </div>
      <div class="produk-content">
        <div class="produk-img">
          <img src="<?php echo base_url('gambar/Isi 10 Susu Kmbing.png'); ?>" alt="Produk Best Seller 1">
        </div>
        <p class="produk-nama">Choger Susu Kambing Etawa Original <br> (Isi 10)</p>
        <p class="produk-harga">Rp. 50.000</p>
      </div>
      <a href="<?php echo base_url('produk/detail_minuman4'); ?>" class="produk-detail">Detail produk</a>
    </div>

    <!-- Produk 2 -->
    <div class="produk-card">
      <div class="badge-best-seller">
        <i class="fas fa-thumbs-up"></i> <span class="badge-text">Best Seller</span>
      </div>
      <div class="produk-content">
        <div class="produk-img">
          <img src="<?php echo base_url('gambar/Kategori Minuman.jpg'); ?>" alt="Produk 4">
        </div>
        <p class="produk-nama">Choger Susu Kambing Etawa Original <br> (Isi 3)</p>
        <p class="produk-harga">Rp. 15.000</p>
      </div>
      <a href="<?php echo base_url('produk/detail_minuman3'); ?>" class="produk-detail">Detail produk</a>
    </div>

  <!-- Produk 3 -->
    <div class="produk-card">
      <div class="badge-best-seller">
        <i class="fas fa-thumbs-up"></i> <span class="badge-text">Best Seller</span>
      </div>
      <div class="produk-content">
        <div class="produk-img">
          <img src="<?php echo base_url('gambar/Minuman 1.jpg'); ?>" alt="Produk 3">
        </div>
        <p class="produk-nama">Choger Susu Kambing Etawa Cokelat <br> (Isi 10)</p>
        <p class="produk-harga">Rp. 60.000</p>
      </div>
      <a href="<?php echo base_url('produk/detail_minuman6'); ?>" class="produk-detail">Detail produk</a>
    </div>

  <!-- Produk 4 -->
    <div class="produk-card">
      <div class="badge-best-seller">
        <i class="fas fa-thumbs-up"></i> <span class="badge-text">Best Seller</span>
      </div>
      <div class="produk-content">
        <div class="produk-img">
          <img src="<?php echo base_url('gambar/Isi 3 Susu Kambing Cok.png'); ?>" alt="Produk 4">
        </div>
        <p class="produk-nama">Choger Susu Kambing Etawa Cokelat <br> (Isi 3)</p>
        <p class="produk-harga">Rp. 17.000</p>
      </div>
      <a href="<?php echo base_url('produk/detail_minuman5'); ?>" class="produk-detail">Detail produk</a>
    </div>

  <!-- Produk 5 -->
    <div class="produk-card">
      <div class="badge-best-seller">
        <i class="fas fa-thumbs-up"></i> <span class="badge-text">Best Seller</span>
      </div>
      <div class="produk-content">
        <div class="produk-img">
          <img src="<?php echo base_url('gambar/Minuman 2.jpg'); ?>" alt="Produk 2">
        </div>
        <p class="produk-nama">Choger Cokelat Instan 3 in 1 (Isi 10)</p>
        <p class="produk-harga">Rp. 50.000</p>
      </div>
      <a href="<?php echo base_url('produk/detail_minuman2'); ?>" class="produk-detail">Detail produk</a>
    </div>

  <!-- Produk 6 -->
    <div class="produk-card">
      <div class="badge-best-seller">
        <i class="fas fa-thumbs-up"></i> <span class="badge-text">Best Seller</span>
      </div>
      <div class="produk-content">
        <div class="produk-img">
          <img src="<?php echo base_url('gambar/Menu Best Seller 1.jpg'); ?>" alt="Produk 3">
        </div>
        <p class="produk-nama">Choger Cokelat Instan 3 in 1 <br> (Isi 3)</p>
        <p class="produk-harga">Rp. 13.000</p>
      </div>
      <a href="<?php echo base_url('produk/detail_minuman1'); ?>" class="produk-detail">Detail produk</a>
    </div>

    <!-- Produk 7 -->
    <div class="produk-card">
      <div class="badge-best-seller">
        <i class="fas fa-thumbs-up"></i> <span class="badge-text">Best Seller</span>
      </div>
      <div class="produk-content">
        <div class="produk-img">
          <img src="<?php echo base_url('gambar/Permen 1.jpg'); ?>" alt="Produk 4">
        </div>
        <p class="produk-nama">Choger Permen Cokelat Mete</p>
        <p class="produk-harga"></p>
      </div>
      <a href="<?php echo base_url('produk/detail_permen8'); ?>" class="produk-detail">Detail produk</a>
    </div>

    <!-- Produk 8 -->
    <div class="produk-card">
      <div class="badge-best-seller">
        <i class="fas fa-thumbs-up"></i> <span class="badge-text">Best Seller</span>
      </div>
      <div class="produk-content">
        <div class="produk-img">
          <img src="<?php echo base_url('gambar/Kategori Permen.jpg'); ?>" alt="Produk 4">
        </div>
        <p class="produk-nama">Choger Permen Cokelat Stroberi</p>
        <p class="produk-harga"></p>
      </div>
      <a href="<?php echo base_url('produk/detail_permen7'); ?>" class="produk-detail">Detail produk</a>
    </div>

    <!-- Produk 9 -->
    <div class="produk-card">
      <div class="badge-best-seller">
        <i class="fas fa-thumbs-up"></i> <span class="badge-text">Best Seller</span>
      </div>
      <div class="produk-content">
        <div class="produk-img">
          <img src="<?php echo base_url('gambar/Permen 4.jpg'); ?>" alt="Produk 4">
        </div>
        <p class="produk-nama">Choger Permen Cokelat Original <br> (Isi 4 - 24)</p>
        <p class="produk-harga"></p>
      </div>
      <a href="<?php echo base_url('produk/detail_permen6'); ?>" class="produk-detail">Detail produk</a>
    </div>

</div>


<!-- Kegiatan Terbaru -->
<div class="py-4" style="background-color: #F4EDE5;">
  <h4 class="text-center mb-4">
    KEGIATAN TERBARU
  </h4>
  <div class="divider"></div>
  <div class="row px-3">
    <!-- Kegiatan 1 -->
    <div class="col-md-4 mb-4">
      <img src="<?php echo base_url('gambar/TTP.jpg'); ?>" alt="Kegiatan 1" class="img-fluid mb-2">
      <p class="date">10 April, 2017</p>
      <p class="judul">Kunjungan Universitas Sriwijaya</p>
    </div>

    <!-- Kegiatan 2 -->
    <div class="col-md-4 mb-4">
      <img src="<?php echo base_url('gambar/TTP 1.jpg'); ?>" alt="Kegiatan 2" class="img-fluid mb-2">
      <p class="date">5 April, 2017</p>
      <p class="judul">Kunjungan SMA 1 Wonosari</p>
    </div>

    <!-- Kegiatan 3 -->
    <div class="col-md-4 mb-4">
      <img src="<?php echo base_url('gambar/TTP 2.jpg'); ?>" alt="Kegiatan 3" class="img-fluid mb-2">
      <p class="date">30 March, 2017</p>
      <p class="judul">
        Kunjungan para delegasi G20 untuk melihat upaya transformasi sistem pangan dan pertanian Indonesia.
      </p>
    </div>
  </div>
</div>

<!-- Maps -->
<div>
  <div class="header" style="margin-top: 70px;">
    <h5>LOKASI CHOGER</h5>
    <div class="divider"></div>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1105396080364!2d110.532677!3d-7.845013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a4f62e85dbc99%3A0x2c1513b674e66041!2sCoklat%20Embung%20Nglanggeran!5e0!3m2!1sen!2sid!4v1719400000000!5m2!1sen!2sid"
  width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" class="rounded shadow-sm"></iframe>
</div>

<!-- Tombol Scroll ke Atas -->
<button onclick="scrollToTop()" id="btnScrollTop" title="Kembali ke atas">
  &#8679;
</button>

