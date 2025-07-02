<style>
  .youtube {
    position: relative;
    height: 400px;
    background-image: url('https://img.youtube.com/vi/25NpaFP9alo/maxresdefault.jpg');
    background-size: cover;
    background-position: center;
    margin-top: 110px;
  }

  .youtube::before {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.6));
    z-index: 1;
  }

  .youtube .container {
    position: relative;
    z-index: 2;
  }

  .video-author {
    font-family: 'Lato', sans-serif;
    color: white;
    font-size: 18px;
    font-weight: 300;
    margin-bottom: 5px;
    opacity: 0.9;
  }

  .video-title {
    font-family: 'Lato', sans-serif;
    color: white;
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 20px;
    text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
    line-height: 1.3;
  }

  .btn-play {
    background: transparent;
    border: none;
    font-size: 64px;
    color: white;
    transition: transform 0.2s ease;
  }

  .btn-play:hover {
    transform: scale(1.1);
    color: #ddd;
  }

  .btn-caption {
    font-size: 16px;
    font-family: 'Lato', sans-serif;
    font-weight: 400;
    margin-top: 8px;
  }

  #videoModal {
    display: none;
    position: fixed;
    top:0; left:0;
    width:100%; height:100%;
    background: rgba(0,0,0,0.9);
    z-index: 9999;
    justify-content: center;
    align-items: center;
  }

  #closeModal {
    position: absolute;
    top: 20px; right: 30px;
    font-size: 40px;
    color: #fff;
    cursor: pointer;
  }

  .divider {
    width: 80px;
    height: 5px;
    background: #4B2E2B;
    border-radius: 5px;
    margin: 0 auto 2rem auto;
  }
</style>


<!-- Hero Section Video Thumbnail -->
<section class="youtube">
  <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>

  <div class="container h-100 d-flex flex-column justify-content-center align-items-center text-center animate__animated animate__fadeInUp">
    <p class="video-author">Regina Jachinta</p>
    <h2 class="video-title">TAMAN TEKNOLOGI PERTANIAN<br>NGLANGGERAN</h2>
    <button id="playVideo" class="btn-play mt-2">
      <i class="fas fa-play-circle"></i>
    </button>
  </div>
</section>

<!-- Modal Popup -->
<div id="videoModal">
    <span id="closeModal">
      &times;
    </span>
    <iframe id="youtubePlayer"
            width="80%"
            height="80%"
            frameborder="0"
            allow="autoplay; fullscreen"
            allowfullscreen>
    </iframe>
  </div>

<!-- Kontak Section -->
<section class="py-5 px-3" style="background-color: #f9f7f5;">
  <div class="container text-center mb-5">
    <div class="row justify-content-center mb-4">
      <div class="col-md-2 mb-3 animate__animated animate__fadeInUp">
        <img src="https://img.icons8.com/fluency/48/instagram-new.png" />
        <div>@chogerttp</div>
      </div>
      <div class="col-md-2 mb-3 animate__animated animate__fadeInUp animate__delay-1s">
        <img src="https://img.icons8.com/fluency/48/whatsapp.png" />
        <div>0818-0428-3132</div>
      </div>
      <div class="col-md-3 mb-3 animate__animated animate__fadeInUp animate__delay-2s">
        <img src="https://img.icons8.com/color/48/facebook-new.png" />
        <div>Cokelat Ttp Nglanggeran</div>
      </div>
      <div class="col-md-2 mb-3 animate__animated animate__fadeInUp animate__delay-3s">
        <img src="https://img.icons8.com/color/48/gmail-new.png" />
        <div>chogerttp</div>
      </div>
    </div>

    <!-- Informasi dan Paket -->
    <div class="container py-5" style="background-color: #f4ebe5; border-radius: 10px;">
    <div class="row">
      <div class="col-md-5 mb-4 animate__animated animate__fadeInLeft">
        <div class="text-center mb-3">
          <h4>Informasi Magang/Penelitian</h4>
          <div class="divider"></div>
        </div>
        <div class="bg-white text-center rounded shadow-sm p-4">
          <img src="<?= base_url('gambar/logo choger.png') ?>" alt="Logo Choger" height="60">
          <p class="fst-italic text-muted mb-3">Agung Iswadi, S.Si., MSc</p>
          <div class="mb-3">
            <img src="https://img.icons8.com/fluency/48/whatsapp.png" alt="WhatsApp">
            <p class="mt-2 mb-0">0813 8279 2742</p>
          </div>
          <div class="mt-3">
            <img src="https://img.icons8.com/color/48/gmail-new.png" alt="Email">
            <p class="mt-2 mb-0">agungiswadi@pertanian.go.id</p>
          </div>
        </div>
      </div>

      <div class="col-md-7 animate__animated animate__fadeInRight d-flex flex-column justify-content-between">
      <!-- Maps -->
        <div>
            <h4>Lokasi Choger</h4>
            <div class="divider"></div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1105396080364!2d110.532677!3d-7.845013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a4f62e85dbc99%3A0x2c1513b674e66041!2sCoklat%20Embung%20Nglanggeran!5e0!3m2!1sen!2sid!4v1719400000000!5m2!1sen!2sid"
            width="100%" height="325" style="border:0;" allowfullscreen="" loading="lazy" class="rounded shadow-sm"></iframe>
        </div>
      </div>
    </div>
  </div>


    <!-- Formulir Hubungi Kami -->
    <div class="py-5 px-4 bg-white rounded shadow animate__animated animate__fadeInUp">
    <h4 class="text-uppercase fw-bold fst-italic mb-4" style="color: #4B2E2B;">Hubungi Kami</h4>
    <div class="divider"></div>
    <div class="p-4 rounded shadow-sm" style="background-color: #f4ebe5;">
      <form>
        <div class="mb-3">
          <input type="text" class="form-control rounded" placeholder="Nama" required>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control rounded" placeholder="Email" required>
        </div>
        <div class="mb-4">
          <textarea class="form-control rounded" rows="5" placeholder="Tuliskan Pesan" 
            style="background-color: #632d2d; color: #fff; font-style: italic;"></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn rounded px-4" 
            style="background-color: #4B2E2B; color: white;">Kirim</button>
        </div>
      </form>
    </div>
  </div>

  </div>
</section>

<!-- Animasi -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Tombol Scroll ke Atas -->
<button onclick="scrollToTop()" id="btnScrollTop" title="Kembali ke atas">
  &#8679;
</button>
