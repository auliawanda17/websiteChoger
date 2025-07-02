<style>
  .infografis-container {
    margin-top: 150px;
    text-align: center;
    padding: 0 20px;
  }

  .title-button {
    display: inline-block;
    background-color: #4B2E2B;
    color: white;
    padding: 5px 50px;
    border-radius: 10px;
    font-weight: 500;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);
    letter-spacing: 8px;
    font-size: 30px;
    text-transform: uppercase;
    text-decoration: none;
    border: none;
    margin-bottom: 40px;
  }

  .gallery-infografis {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    max-width: 1000px;
    margin: 0 auto 60px;
  }

  .gallery-infografis a {
    display: block;
    overflow: hidden;
  }

  .gallery-infografis img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
    display: block;
  }

  .gallery-infografis a:hover img {
    transform: scale(1.05);
  }
</style>

<div class="infografis-container">
  <div class="title-button mb-5">INFOGRAFIS</div>

  <div class="gallery-infografis mt-3">
    <a data-fancybox="gallery-infografis" href="<?= base_url('gambar/Infografis 1.jpg'); ?>">
      <img src="<?= base_url('gambar/Infografis 1.jpg'); ?>" alt="Infografis 1" />
    </a>
    <a data-fancybox="gallery-infografis" href="<?= base_url('gambar/Infografis 2.jpg'); ?>">
      <img src="<?= base_url('gambar/Infografis 2.jpg'); ?>" alt="Infografis 2" />
    </a>
    <a data-fancybox="gallery-infografis" href="<?= base_url('gambar/Infografis 3.jpg'); ?>">
      <img src="<?= base_url('gambar/Infografis 3.jpg'); ?>" alt="Infografis 3" />
    </a>
    <a data-fancybox="gallery-infografis" href="<?= base_url('gambar/Infografis 4.jpg'); ?>">
      <img src="<?= base_url('gambar/Infografis 4.jpg'); ?>" alt="Infografis 4" />
    </a>
    <a data-fancybox="gallery-infografis" href="<?= base_url('gambar/Infografis 5.jpg'); ?>">
      <img src="<?= base_url('gambar/Infografis 5.jpg'); ?>" alt="Infografis 5" />
    </a>
    <a data-fancybox="gallery-infografis" href="<?= base_url('gambar/Infografis 6.jpg'); ?>">
      <img src="<?= base_url('gambar/Infografis 6.jpg'); ?>" alt="Infografis 6" />
    </a>
  </div>
</div>

<!-- Tombol Scroll ke Atas -->
<button onclick="scrollToTop()" id="btnScrollTop" title="Kembali ke atas">
  &#8679;
</button>
