<style>
  .hero-section {
    background: 
        linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
        url('<?php echo base_url('gambar/beranda.jpg') ?>');
    background-size: cover;
    background-position: center;
    height: 350px;
    margin-top: 110px;
  }

  .kategori-section {
    padding: 40px;
  }

  .kategori-wrapper {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 75px;
    padding: 16px;
    max-width: 720px;
    margin: 0 auto -60px;
  }

  .kategori-item {
    text-align: center;
  }

  .kategori-img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  }

  .produk-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 25px;
    padding: 50px 20px;
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
    color: #000;
  }

  .produk-harga {
    font-size: 14px;
    color: #000;
  }

  .produk-detail {
    font-size: 13px;
    color: #0033CC;
    text-decoration: underline;
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
    opacity: 1; 
  }

  @media (max-width: 768px) {
    .kategori-wrapper {
      gap: 50px;
      padding: 20px;
    }

    .produk-section {
      gap: 30px;
      padding: 30px 10px;
    }

    .produk-card {
      width: 100%;
      max-width: 270px;
    }
  }
</style>


<section class="hero-section">
  <div class="container text-center h-100 d-flex flex-column justify-content-center align-items-center">
    <h1 class="display-4 text-white" style="font-family: 'Playfair Display', serif; font-weight: 600; letter-spacing: 2px;">PRODUK</h1>
    <p style="font-family: 'Lato', sans-serif; color: white;">Yuk, pilih oleh-oleh favoritmu! 🎁</p>
  </div>
</section>

<!-- Bagian Kategori -->
<section class="kategori-section text-center">
  <div class="kategori-wrapper">
    <div class="kategori-item">
      <a href="<?php echo base_url('produk/permen'); ?>">
      	<img src="<?php echo base_url('gambar/Kategori Permen.jpg'); ?>" alt="Permen" class="kategori-img">
      </a>
      <p>Permen</p>
    </div>

    <div class="kategori-item">
      <a href="<?php echo base_url('produk/snack'); ?>">
      	<img src="<?php echo base_url('gambar/Kategori Snack.jpg'); ?>" alt="Snack" class="kategori-img">
      </a>
      <p>Snack</p>
    </div>

    <div class="kategori-item">
      <a href="<?php echo base_url('produk/minuman'); ?>">
      	<img src="<?php echo base_url('gambar/Kategori Minuman.jpg'); ?>" alt="Minuman" class="kategori-img">
      </a>
      <p>Minuman</p>
    </div>
    
  </div>
</section>

<!-- Bagian Produk -->
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

    <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Minuman 3.jpg'); ?>" alt="Produk 3">
      </div>
      <p class="produk-nama">Choger Cokelat Original<br>(Isi 10)</p>
      <p class="produk-harga">Rp. 53.000</p>
    </div>
    <a href="<?php echo base_url('produk/detail_minuman7'); ?>" class="produk-detail">Detail produk</a>
  </div>

  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Choger Cokelat Klasik Isi 15.png'); ?>" alt="Produk 3">
      </div>
      <p class="produk-nama">Choger Cokelat Klasik<br>(Isi 15)</p>
      <p class="produk-harga">Rp. 45.000</p>
    </div>
    <a href="<?php echo base_url('produk/detail_minuman8'); ?>" class="produk-detail">Detail produk</a>
  </div>

  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Bubuk Cokelat.jpg'); ?>" alt="Produk 3">
      </div>
      <p class="produk-nama">Choger Bubuk Cokelat<br>(200 gr)</p>
      <p class="produk-harga">Rp. 55.000</p>
    </div>
    <a href="<?php echo base_url('produk/detail_minuman9'); ?>" class="produk-detail">Detail produk</a>
  </div>

  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Permen 8.png'); ?>" alt="Produk 1">
      </div>
      <p class="produk-nama">Choger Milk Chocolate 35gr</p>
      <p class="produk-harga">Rp. 13.000</p>
    </div>
    <a href="<?php echo base_url('produk/detail_permen1'); ?>" class="produk-detail">Detail Produk</a>
  </div>

  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Permen7.jpg'); ?>" alt="Produk 2">
      </div>
      <p class="produk-nama">Choger Milk Chocolate 70gr</p>
      <p class="produk-harga">Rp. 27.000</p>
    </div>
    <a href="<?php echo base_url('produk/detail_permen2'); ?>" class="produk-detail">Detail Produk</a>
  </div>

  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Permen 6.jpg'); ?>" alt="Produk 3">
      </div>
      <p class="produk-nama">Choger Milk Chocolate Chunkybar 70gr</p>
      <p class="produk-harga">Rp. 30.000</p>
    </div>
    <a href="<?php echo base_url('produk/detail_permen3'); ?>" class="produk-detail">Detail Produk</a>
  </div>

  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Permen 5.jpg'); ?>" alt="Produk 4">
      </div>
      <p class="produk-nama">Choger Dark Chocolate 35gr</p>
      <p class="produk-harga">Rp. 14.000</p>
    </div>
    <a href="<?php echo base_url('produk/detail_permen4'); ?>" class="produk-detail">Detail Produk</a>
  </div>

  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Permen 2.jpg'); ?>" alt="Produk 5">
      </div>
      <p class="produk-nama">Choger Dark Chocolate 70gr</p>
      <p class="produk-harga">Rp. 28.000</p>
    </div>
    <a href="<?php echo base_url('produk/detail_permen5'); ?>" class="produk-detail">Detail Produk</a>
  </div>

  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Permen 4.jpg'); ?>" alt="Produk 6">
      </div>
      <p class="produk-nama">Choger Permen Cokelat Original (Isi 4 - 24)</p>
      <p class="produk-harga">Rp. 12.000 - Rp. 75.000</p>
    </div>
    <a href="<?php echo base_url('produk/detail_permen6'); ?>" class="produk-detail">Detail Produk</a>
  </div>

  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Snack 11.jpg'); ?>" alt="Produk 1">
      </div>
      <p class="produk-nama">Es Krim Susu Kambing Cokelat</p>
      <p class="produk-harga">Rp. 5.000</p>
    </div>
    <a href="<?= base_url('produk/detail_snack1'); ?>" class="produk-detail">Detail produk</a>
  </div>
  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Snack 13.jpg'); ?>" alt="Produk 2">
      </div>
      <p class="produk-nama">Es Krim Susu Kambing Kencur</p>
      <p class="produk-harga">Rp. 5.000</p>
    </div>
    <a href="<?= base_url('produk/detail_snack2'); ?>" class="produk-detail">Detail produk</a>
  </div>
  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Snack 12.jpg'); ?>" alt="Produk 3">
      </div>
      <p class="produk-nama">Dodol Cokelat (Isi 8)</p>
      <p class="produk-harga">Rp. 10.000</p>
    </div>
    <a href="<?= base_url('produk/detail_snack3'); ?>" class="produk-detail">Detail produk</a>
  </div>
  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Snack 9.jpg'); ?>" alt="Produk 3">
      </div>
      <p class="produk-nama">Stik Cokelat</p>
      <p class="produk-harga">Rp. 13.000</p>
    </div>
    <a href="<?= base_url('produk/detail_snack4'); ?>" class="produk-detail">Detail produk</a>
  </div>
  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Snack 10.jpg'); ?>" alt="Produk 3">
      </div>
      <p class="produk-nama">Singkong Cokelat</p>
      <p class="produk-harga">Rp. 13.000</p>
    </div>
    <a href="<?= base_url('produk/detail_snack5'); ?>" class="produk-detail">Detail produk</a>
  </div>
  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Snack 8.jpg'); ?>" alt="Produk 3">
      </div>
      <p class="produk-nama">Sale Untir Cokelat</p>
      <p class="produk-harga">Rp. 15.000</p>
    </div>
    <a href="<?= base_url('produk/detail_snack6'); ?>" class="produk-detail">Detail produk</a>
  </div>
  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Snack 6.jpg'); ?>" alt="Produk 3">
      </div>
      <p class="produk-nama">Pisang Salut Cokelat</p>
      <p class="produk-harga">Rp. 15.000</p>
    </div>
    <a href="<?= base_url('produk/detail_snack7'); ?>" class="produk-detail">Detail produk</a>
  </div>
  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Snack 5.jpg'); ?>" alt="Produk 3">
      </div>
      <p class="produk-nama">Nib Kakao</p>
      <p class="produk-harga">Rp. 25.000</p>
    </div>
    <a href="<?= base_url('produk/detail_snack8'); ?>" class="produk-detail">Detail produk</a>
  </div>
  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Snack 7.jpg'); ?>" alt="Produk 3">
      </div>
      <p class="produk-nama">Onde Onde Cokelat</p>
      <p class="produk-harga">Rp. 15.000</p>
    </div>
    <a href="<?= base_url('produk/detail_snack9'); ?>" class="produk-detail">Detail produk</a>
  </div>
  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Snack 3.jpg'); ?>" alt="Produk 3">
      </div>
      <p class="produk-nama">Kurma Cokelat</p>
      <p class="produk-harga">Rp. 28.000</p>
    </div>
    <a href="<?= base_url('produk/detail_snack10'); ?>" class="produk-detail">Detail produk</a>
  </div>
  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Snack 4.jpg'); ?>" alt="Produk 3">
      </div>
      <p class="produk-nama">Cipiran Cokelat</p>
      <p class="produk-harga">Rp. 13.000</p>
    </div>
    <a href="<?= base_url('produk/detail_snack11'); ?>" class="produk-detail">Detail produk</a>
  </div>
  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Snack 2.jpg'); ?>" alt="Produk 3">
      </div>
      <p class="produk-nama">Ampyang Cokelat</p>
      <p class="produk-harga">Rp. 15.000</p>
    </div>
    <a href="<?= base_url('produk/detail_snack12'); ?>" class="produk-detail">Detail produk</a>
  </div>
  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Snack 1.jpg'); ?>" alt="Produk 3">
      </div>
      <p class="produk-nama">Ampyang Cokelat "PETRUK"</p>
      <p class="produk-harga">Rp. 15.000</p>
    </div>
    <a href="<?= base_url('produk/detail_snack13'); ?>" class="produk-detail">Detail produk</a>
  </div>

</div>

<!-- Tombol Scroll ke Atas -->
<button onclick="scrollToTop()" id="btnScrollTop" title="Kembali ke atas">
  &#8679;
</button>