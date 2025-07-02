<style>
  .produk-nama {
    font-size: 20px;
    font-weight: 600;
    color: #000;
    margin-bottom: -50px;
    width: 100%;
  }

  .product-container {
    width: 80%;
    margin: 0 auto 60px;
    background-color: #f4e3d2;
    border-radius: 12px;
    padding: 40px;
    border: 1px solid #b59787;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 40px;
    box-sizing: border-box;
    flex-wrap: wrap;
  }

  .youtube {
    flex: 1 1 45%;
    min-width: 300px;
    aspect-ratio: 16 / 9;
    border-radius: 10px;
    background-image: url('https://img.youtube.com/vi/25NpaFP9alo/maxresdefault.jpg');
    background-size: cover;
    background-position: center;
    position: relative;
  }

  .youtube::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 10px;
  }

  .btn-play {
    background: transparent;
    border: none;
    font-size: 48px;
    color: white;
    z-index: 2;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    cursor: pointer;
    transition: transform 0.2s ease;
  }

  .btn-play:hover {
    transform: translate(-50%, -50%) scale(1.1);
    color: #ddd;
  }

  #videoModal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.85);
    z-index: 9999;
    justify-content: center;
    align-items: center;
  }

  #closeModal {
    position: absolute;
    top: 20px;
    right: 30px;
    font-size: 40px;
    color: #fff;
    cursor: pointer;
  }

  .product-details {
    flex: 1 1 45%;
    max-width: 480px;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .collapsible {
    background-color: #fff;
    color: #3e2723;
    cursor: pointer;
    padding: 14px 20px;
    text-align: left;
    border: 2px solid #5d4037;
    border-radius: 10px;
    font-weight: 600;
    font-size: 16px;
    position: relative;
  }

  .collapsible::after {
    content: '\25BC';
    font-size: 14px;
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
  }

  .collapsible.active::after {
    content: "\25B2";
  }

  .content {
    display: none;
    padding: 10px 20px;
    background-color: #fff;
    border: 1px solid #d2b7a3;
    border-radius: 6px;
    color: #4a2c2a;
    font-size: 15px;
  }

  .content p {
    margin: 8px 0;
  }

  .pesan-button {
    display: inline-block;
    padding: 12px 28px;
    background-color: #4B2E2B;
    color: white;
    border-radius: 12px;
    font-size: 18px;
    letter-spacing: 1px;
    text-decoration: none;
    font-weight: 500;
    transition: background-color 0.3s ease;
  }

  .pesan-button:hover {
    background-color: #3b211f;
  }

  @media (max-width: 768px) {
    .product-container {
      flex-direction: column;
      padding: 20px;
    }

    .youtube {
      width: 100%;
    }

    .product-details {
      width: 100%;
    }

    .produk-nama {
      text-align: center;
      font-size: 18px;
      margin-bottom: 10px;
    }
  }
</style>

<!-- Tombol Kembali -->
<button class="back-button" onclick="history.back()">
  <i class="fas fa-arrow-left"></i>
</button>

<!-- Konten Utama -->
<div class="product-container">
  <div class="produk-nama">Cipiran Cokelat</div>
  <!-- Video Section -->
  <div class="youtube">
    <button id="playVideo" class="btn-play">
      <i class="fas fa-play-circle"></i>
    </button>
  </div>

  <div>
    
  </div>

  <!-- Detail Produk -->
  <div class="product-details">
    <button class="collapsible">Bahan - Bahan</button>
    <div class="content">
      <p>• Gula</p>
      <p>• Pasta Kakao</p>
      <p>• Lemak Kakao</p>
      <p>• Pengemulsi Nabati</p>
      <p>• Vanili</p>
      <p>• Soda</p>
    </div>
    <div style="text-align: right; margin-top: 40px;">
      <a href="https://shopee.co.id/chogerttp" target="_blank" class="pesan-button">Pesan Sekarang</a>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="videoModal">
  <span id="closeModal">&times;</span>
  <iframe id="youtubePlayer" width="80%" height="80%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
</div>

<script>
  const coll = document.querySelector(".collapsible");
  const content = document.querySelector(".content");
  coll.addEventListener("click", function () {
    this.classList.toggle("active");
    content.style.display = content.style.display === "block" ? "none" : "block";
  });

  const videoModal = document.getElementById("videoModal");
  const playButton = document.getElementById("playVideo");
  const closeModal = document.getElementById("closeModal");
  const youtubePlayer = document.getElementById("youtubePlayer");

  playButton.onclick = () => {
    videoModal.style.display = "flex";
    youtubePlayer.src = "https://www.youtube.com/embed/25NpaFP9alo?autoplay=1";
  };

  closeModal.onclick = () => {
    videoModal.style.display = "none";
    youtubePlayer.src = "";
  };

  window.onclick = (e) => {
    if (e.target == videoModal) {
      videoModal.style.display = "none";
      youtubePlayer.src = "";
    }
  };
</script>

<!-- Tombol Scroll ke Atas -->
<button onclick="scrollToTop()" id="btnScrollTop" title="Kembali ke atas">
  &#8679;
</button>