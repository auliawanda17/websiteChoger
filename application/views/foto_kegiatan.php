<style>
  .kegiatan-container {
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
    font-size: 40px;
    text-transform: uppercase;
    text-decoration: none;
    border: none;
    margin-bottom: 40px;
  }

  .gallery {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    max-width: 90%;
    margin: 0 auto 60px;
  }

  .gallery a {
    display: block;
    overflow: hidden;
  }

  .gallery img {
    width: 100%;
    height: auto;
    transition: transform 0.3s ease;
    display: block;
  }

  .gallery a:hover img {
    transform: scale(1.05);
  }

  @media (max-width: 992px) {
    .gallery {
      grid-template-columns: repeat(3, 1fr);
    }

    .title-button {
      font-size: 32px;
      letter-spacing: 6px;
    }
  }

  @media (max-width: 768px) {
    .gallery {
      grid-template-columns: repeat(2, 1fr);
    }

    .title-button {
      font-size: 28px;
      letter-spacing: 4px;
    }
  }

  @media (max-width: 480px) {
    .gallery {
      grid-template-columns: 1fr;
    }

    .title-button {
      font-size: 22px;
      letter-spacing: 2px;
      padding: 5px 20px;
    }
  }
</style>

<button class="back-button" onclick="history.back()">
  <i class="fas fa-arrow-left"></i>
</button>

<div class="kegiatan-container">
  <div class="title-button">FOTO KEGIATAN</div>

  <div class="gallery mt-3">
    <a data-fancybox="gallery" href="<?= base_url('gambar/TTP 1.jpg'); ?>">
      <img src="<?= base_url('gambar/TTP 1.jpg'); ?>" alt="Gambar 1" />
    </a>
    <a data-fancybox="gallery" href="<?= base_url('gambar/TTP 2.jpg'); ?>">
      <img src="<?= base_url('gambar/TTP 2.jpg'); ?>" alt="Gambar 2" />
    </a>
    <a data-fancybox="gallery" href="<?= base_url('gambar/TTP.jpg'); ?>">
      <img src="<?= base_url('gambar/TTP.jpg'); ?>" alt="Gambar 3" />
    </a>
    <a data-fancybox="gallery" href="<?= base_url('gambar/TTP 1.jpg'); ?>">
      <img src="<?= base_url('gambar/TTP 1.jpg'); ?>" alt="Gambar 1" />
    </a>
    <a data-fancybox="gallery" href="<?= base_url('gambar/TTP 2.jpg'); ?>">
      <img src="<?= base_url('gambar/TTP 2.jpg'); ?>" alt="Gambar 2" />
    </a>
  </div>
</div>
