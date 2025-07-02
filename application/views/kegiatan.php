<style>
   .judul {
    background-color: #4B2E2B;
    color: #F4EDE5;
    text-align: center;
    padding: 8px 100px;
    font-size: 30px;
    letter-spacing: 5px;
    border: none;
    border-radius: 10px;
    margin: 130px auto 60px;
    display: block;
    font-family: 'Lato';
  }

  .kegiatan-wrapper {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 32px;
    padding: 0 60px 80px;
    max-width: 1200px;
    margin: 0 auto;
  }

  .card-kegiatan {
    background-color: #FAF8F5;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card-kegiatan:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  }

  .card-kegiatan img {
    width: 100%;
    height: 180px;
    object-fit: cover;
  }

  .card-body {
    padding: 16px;
    text-align: left;
  }

  .tanggal {
    font-size: 14px;
    color: #555;
    margin-bottom: 6px;
    font-family: 'Playfair Display', serif;
    font-weight: bold;
  }

  .judul-kegiatan {
    font-size: 14px;
    color: #1a0dab;
    text-decoration: none;
    font-family: 'Playfair Display', serif;
    line-height: 1.4;
  }

  .judul-kegiatan:hover {
    text-decoration: underline;
  }

  @media (max-width: 768px) {
    .judul {
      font-size: 28px;
      padding: 10px 40px;
      margin-top: 100px;
    }

    .kegiatan-wrapper {
      padding: 0 20px 60px;
    }
  }
</style>

<!-- Judul Besar -->
<div style="text-align: center;">
  <button class="judul">KEGIATAN</button>
</div>

<!-- Grid Card Kegiatan -->
<div class="kegiatan-wrapper">

  <div class="card-kegiatan">
    <img src="<?php echo base_url('gambar/TTP.jpg'); ?>" alt="Kegiatan 1">
    <div class="card-body">
      <div class="tanggal">10 April 2017</div>
      <a href="<?php echo base_url('kegiatan/detail_kegiatan'); ?>" class="judul-kegiatan">Kunjungan Universitas Sriwijaya</a>
    </div>
  </div>

  <div class="card-kegiatan">
    <img src="<?php echo base_url('gambar/TTP 1.jpg'); ?>" alt="Kegiatan 2">
    <div class="card-body">
      <div class="tanggal">05 April 2017</div>
      <a href="<?php echo base_url('kegiatan/detail_kegiatan'); ?>" class="judul-kegiatan">Kunjungan SMA 1 Wonosari</a>
    </div>
  </div>

  <div class="card-kegiatan">
    <img src="<?php echo base_url('gambar/TTP 2.jpg'); ?>" alt="Kegiatan 3">
    <div class="card-body">
      <div class="tanggal">30 Maret 2017</div>
      <a href="<?php echo base_url('kegiatan/detail_kegiatan'); ?>" class="judul-kegiatan">Kunjungan delegasi G20: transformasi pangan & pertanian</a>
    </div>
  </div>

  <div class="card-kegiatan">
    <img src="<?php echo base_url('gambar/TTP.jpg'); ?>" alt="Kegiatan 4">
    <div class="card-body">
      <div class="tanggal">30 Oktober 2021</div>
      <a href="<?php echo base_url('kegiatan/detail_kegiatan'); ?>" class="judul-kegiatan">Kegiatan Universitas Negeri Yogyakarta</a>
    </div>
  </div>

</div>

<!-- Tombol Scroll ke Atas -->
<button onclick="scrollToTop()" id="btnScrollTop" title="Kembali ke atas">&#8679;</button>

<script>
  // Scroll to Top
  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  // Munculkan tombol saat scroll ke bawah
  window.onscroll = function () {
    document.getElementById("btnScrollTop").style.display =
      (document.documentElement.scrollTop > 200) ? "block" : "none";
  };
</script>
