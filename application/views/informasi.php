<style>
  .btn-light {
    background-color: #F4EDE5;
    color: #4B2E2B;
    padding: 15px 35px;
    font-weight: 500;
    border-radius: 5px;
  }

  .section-title {
    background-color: #F4EDE5;
    color: #4B2E2B;
    border-radius: 10px;
    display: inline-block;
    padding: 10px 100px;
    font-weight: 600;
    letter-spacing: 5px;
  }

  #sejarah p {
    text-align: justify;
  }

  .hero-section {
    background: 
        linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
        url('<?php echo base_url('gambar/W-100.jpg') ?>');
    background-size: cover;
    background-position: center;
    height: 450px;
    margin-top: 110px;
  }

  .judul-tabel {
    font-weight: bold;
    font-size: 18px;
    font-family: 'Lato', sans-serif;
    color: #4B2E2B;
  }

  .custom-table {
    width: 100%;
    background-color: #fff;
    border: solid 1px #4B2E2B;
  }


  .custom-table th, .custom-table td {
    padding: 16px;
    border: 1px solid #ddd;
    vertical-align: top;
  }

  .custom-table ul {
    padding-left: 18px;
    margin: 0;
  }

  .custom-table ul li {
    margin-bottom: 4px;
  }

  .struktur-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    font-family: 'Lato', sans-serif;
    color: #4B2E2B;
    margin-top: 20px;
  }

  .struktur-box {
    background-color: #F4EDE5;
    border: 2px solid #4B2E2B;
    border-radius: 8px;
    padding: 10px 15px;
    margin: 10px;
    text-align: center;
    font-weight: 600;
    min-width: 200px;
  }

  .struktur-flex {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    margin-top: 10px;
  }

  .struktur-line {
    height: 30px;
    width: 2px;
    background-color: #4B2E2B;
    margin: 0 auto;
  }

  .struktur-hub {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
  }

  .struktur-sub {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .struktur-branch {
    border-top: 2px solid #4B2E2B;
    margin: 10px 0;
    width: 90%;
  }

  @media(max-width: 768px) {
    .struktur-flex {
      flex-direction: column;
      align-items: center;
    }
  }

</style>

<!-- Hero Section -->
<section class="hero-section">
  <div class="container text-center h-100 d-flex flex-column justify-content-center align-items-center">
    <h1 class="display-4 text-white" style="font-family: 'Playfair Display', serif; font-weight: 600; letter-spacing: 2px;">TENTANG</h1>
    <div class="d-flex justify-content-center mt-4 flex-wrap">
      <a href="#sejarah" class="btn btn-light mx-2 mb-2">Sejarah</a>
      <a href="#struktur" class="btn btn-light mx-2 mb-2">Struktur</a>
      <a href="#paket" class="btn btn-light mx-2 mb-2">Paket Kunjungan</a>
      <a href="<?php echo base_url('informasi/fasilitas'); ?>" class="btn btn-light mx-2 mb-2">Fasilitas & Layanan</a>
    </div>
  </div>
</section>

<!-- Sejarah -->
<section id="sejarah" style="margin-top: 100px;">
  <div class="container text-center">
    <h2 class="section-title mb-4">SEJARAH</h2>
    <p class="mt-4">
      Taman Teknologi Pertanian Nglanggeran merupakan salah satu Taman Sains Pertanian / Taman Teknologi Pertanian yang dibangun oleh Badan Litbang Pertanian, hal ini dilakukan dalam rangka mewujudkan Nawa Cita yang diusung oleh pemerintah. Taman Teknologi Pertanian (TTP) Nglanggeran terletak di Kabupaten Gunungkidul, D. I. Yogyakarta.<br><br>
      
      Kakao menjadi salah satu komoditas utama yang ada di daerah Nglanggeran, maka dari itu TTP Nglanggeran hadir untuk menjadi wadah bagi para warga dalam mengoptimalkan pemanfaatan kakao. Dengan adanya TTP Nglanggeran, maka warga mulai mengetahui bagaimana proses untuk melakukan fermentasi cokelat.<br><br>
      
      TTP Nglanggeran dibangun pada akhir tahun 2015, Badan Pengkajian Teknologi Pertanian (BPTP) Yogyakarta menjadi badan yang bertanggungjawab dan bertugas untuk memberikan pendampingan teknologi kepada masyarakat Nglanggeran.<br><br>
      
      Banyaknya tanaman kakao yang tumbuh disekitar wilayah Nglanggeran, memunculkan peluang bagi BPTP untuk mengintegrasikannya dengan ternak yang ada di Nglanggeran, yakni Kambing Pe. Sehingga TTP pun menjadi wadah bagi masyarakat Nglanggeran untuk meningkatkan nilai tambah produk yang dihasilkannya, selain itu TTP pun menjadi tempat untuk memproduksi produk-produk yang berbasis cokelat dan susu Kambing Pe, termasuk di dalamnya terdapat pabrik kecil yang menjadi tempat produksi bagi kedua komoditas tersebut.<br><br>
      
      Per tahun 2017 TTP Nglanggeran sudah berada di bawah naungan Pemerintah Daerah Kabupaten Gunungkidul.
    </p>
    <hr style="border: solid 1px #6C7A6F;" class="my-5">
  </div>
</section>

<!-- Struktur Section -->
<section id="struktur">
  <!-- <img src="<?php echo base_url('gambar/Struktur.jpg') ?>" alt="Struktur Organisasi" class="img-fluid mt-4 mb-5" style="max-width: 100%; height: auto;"> -->
  <div class="container text-center">
    <h2 class="section-title mb-4">STRUKTUR</h2>

    <div class="struktur-container">
      <div class="struktur-box">Penanggung Jawab<br><small>Sekdin Diperta & Pangan, BUMD</small></div>
      <div class="struktur-hub">
        <div class="struktur-box">Penasihat Teknis (Kabupaten)<br><small>Dinas Terkait</small></div>
        <div class="struktur-box">PJ Harian<br><strong>Sudiyono</strong></div>
        <div class="struktur-box">Penasihat Teknis (DIY)<br><small>BPTP & UGM</small></div>
      </div>

      <div class="struktur-line"></div>

      <div class="struktur-flex">
        <div class="struktur-sub">
          <div class="struktur-box">Sekretaris<br><strong>Tutik Handayani</strong></div>
        </div>
        <div class="struktur-sub">
          <div class="struktur-box">Bendahara<br><strong>Suprapmiati</strong></div>
        </div>
      </div>

      <div class="struktur-branch"></div>

      <div class="struktur-flex">
        <div class="struktur-sub">
          <div class="struktur-box">PJ Divisi Ternak<br><strong>Basuki</strong></div>
          <div class="struktur-line"></div>
          <div class="struktur-box">Koord. Blok A<br><small>Drh. Ika</small></div>
        </div>
        <div class="struktur-sub">
          <div class="struktur-box">PJ Divisi Pangan + Hort<br><strong>H. Purwanto</strong></div>
          <div class="struktur-line"></div>
          <div class="struktur-box">Koord. Blok D<br><small>Rubiyo</small></div>
        </div>
        <div class="struktur-sub">
          <div class="struktur-box">PJ Divisi Pengolahan<br><strong>Tutik Handayani</strong></div>
          <div class="struktur-line"></div>
          <div class="struktur-box">Koord. Blok B<br><small>Puji Lestari</small></div>
        </div>
        <div class="struktur-sub">
          <div class="struktur-box">PJ Divisi Kakao<br><strong>Tumiran</strong></div>
          <div class="struktur-line"></div>
          <div class="struktur-box">Koord. Blok G<br><small>Rubiyo</small></div>
        </div>
        <div class="struktur-sub">
          <div class="struktur-box">PJ Divisi Kelembagaan & SDM<br><strong>Ahmad Nasrudin</strong></div>
        </div>
        <div class="struktur-sub">
          <div class="struktur-box">PJ Divisi Pemasaran/Agrowisata<br><strong>Pardiyo</strong></div>
          <div class="struktur-line"></div>
          <div class="struktur-box">Koord. Blok E<br><small>Mursidi</small></div>
        </div>
      </div>
    </div>

    <hr style="border: solid 1px #6C7A6F;" class="my-5">
  </div>
</section>

<!-- Paket Section -->
<section id="paket" class="text-center">
  <div class="container">
    <h2 class="section-title mb-4">PAKET KEGIATAN</h2><br>
      <div class="container my-5">
    <div class="tabel-header text-center mb-4">
      <img src="<?php echo base_url('gambar/logo choger.png'); ?>" alt="Logo Choger" style="width: 100px; margin-top: -25px">
      <h5 class="judul-tabel mt-3">DAFTAR HARGA PEMBUATAN PRODUK <br> TAMAN TEKNOLOGI PERTANIAN NGLANGGERAN</h5>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered custom-table">
        <thead class="table table-warning text-center">
          <tr>
            <th>PRODUK</th>
            <th>HARGA</th>
            <th>BAHAN BAKU</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Minuman Cokelat Choger 3 in 1</strong><br><small>(untuk 30 orang)</small></td>
            <td class="text-center">Rp. 450.000,-</td>
            <td>
              <ul>
                <li>Bubuk Cokelat</li>
                <li>Susu Full Cream</li>
                <li>Susu Skim</li>
                <li>Pengemulsi</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td><strong>Permen Cokelat</strong><br><small>(untuk 30 orang)</small></td>
            <td class="text-center">Rp. 900.000,-</td>
            <td>
              <ul>
                <li>Pasta Kakao</li>
                <li>Lemak Kakao</li>
                <li>Susu Full Cream</li>
                <li>Lestitin</li>
                <li>Vanila</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td><strong>Dodol Cokelat</strong><br><small>(untuk 30 orang)</small></td>
            <td class="text-center">Rp. 300.000,-</td>
            <td>
              <ul>
                <li>Santan</li>
                <li>Gula Pasir</li>
                <li>Tepung Ketan</li>
                <li>Tepung Beras</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td><strong>Susu Kambing Etawa</strong><br><small>(untuk 30 orang)</small></td>
            <td class="text-center">Rp. 350.000,-</td>
            <td>
              <ul>
                <li>Susu Kambing Etawa Segar</li>
                <li>Gula Pasir</li>
              </ul>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  </div>
</section>

<!-- Tombol Scroll ke Atas -->
<button onclick="scrollToTop()" id="btnScrollTop" title="Kembali ke atas">
  &#8679;
</button>
