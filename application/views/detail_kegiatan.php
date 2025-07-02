<style>
  .judul-kegiatan {
    text-align: center;
    padding: 0 20px 40px;
    font-size: 30px;
    font-weight: bold;
    letter-spacing: 6px;
    text-transform: uppercase;
    color: #00000;
  }

  .gambar-kegiatan {
    width: 80%;
    height: auto;
    max-height: 480px;
    object-fit: cover;
    display: block;
    margin: 0 auto; 
    border-radius: 6px;
  }

  .konten-kegiatan {
    max-width: 980px;
    margin: 50px auto;
    padding: 0 30px;
    font-size: 16px;
    line-height: 2;
    text-align: justify;
    color: black;
    animation: fadeIn 1.2s ease-in-out;
  }

  .btn-kegiatan {
    display: block;
    width: fit-content;
    margin: 60px auto 100px;
    padding: 10px 50px;
    font-size: 16px;
    font-weight: bold;
    font-family: 'Lato';
    background-color: #4B2E2B;
    color: #F4EDE5;
    text-decoration: none;
    border-radius: 8px;
    transition: background-color 0.3s ease, transform 0.3s ease;
  }

  .btn-kegiatan:hover {
    background-color: #6d3e3b;
    transform: translateY(-3px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.2);
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @media (max-width: 768px) {
    .judul-kegiatan {
      font-size: 22px;
      padding-top: 100px;
      padding-bottom: 30px;
    }

    .gambar-kegiatan {
      width: 95%;
    }

    .konten-kegiatan {
      padding: 0 20px;
      font-size: 15px;
      line-height: 1.8;
    }

    .btn-kegiatan {
      padding: 12px 30px;
      font-size: 15px;
    }
  }
</style>

<button class="back-button" onclick="history.back()">
  <i class="fas fa-arrow-left"></i>
</button>

<!-- Judul Halaman -->
<div class="judul-kegiatan">
  KEGIATAN PKL MAHASISWA <br> UNIVERSITAS GADJAH MADA
</div>

<!-- Gambar -->
<img class="gambar-kegiatan" src="<?php echo base_url('gambar/TTP.jpg'); ?>" alt="Kegiatan PKL UGM">

<!-- Konten Deskripsi -->
<div class="konten-kegiatan">
  Magang mahasiswa Universitas Gadjah Mada (UGM) di Taman Teknologi Pertanian (TTP) Nglanggeran pada tanggal 23 Desember 2021 merupakan salah satu bentuk penguatan pembelajaran berbasis pengalaman nyata (experiential learning) yang diselenggarakan untuk menjembatani kesenjangan antara teori akademik dan praktik lapangan. Kegiatan ini menjadi wadah strategis bagi mahasiswa lintas disiplin untuk terlibat langsung dalam pengelolaan sistem pertanian terpadu yang dikembangkan oleh TTP Nglanggeran sebagai pusat inovasi teknologi pertanian di wilayah perdesaan.

  <br><br>
  Dalam kegiatan magang ini, mahasiswa mendapatkan kesempatan untuk mengobservasi dan ikut serta dalam berbagai tahapan produksi pertanian yang dilakukan di TTP, mulai dari proses budidaya tanaman, pengolahan hasil pertanian seperti kakao dan olahan bahan lokal, hingga tahap pengemasan dan pemasaran produk.

  <br><br>
  Mahasiswa juga diperkenalkan pada teknologi tepat guna yang digunakan untuk meningkatkan efisiensi produksi dan menjaga mutu produk olahan. Selain itu, mereka melakukan diskusi langsung dengan para pelaku UMKM, pengelola TTP, serta petani setempat, untuk memahami tantangan dan peluang dalam pengembangan pertanian berbasis potensi lokal secara berkelanjutan.

  <br><br>
  Dengan demikian, magang di TTP Nglanggeran tidak hanya menjadi pengalaman belajar yang informatif, tetapi juga transformatif. Mahasiswa diharapkan mampu membawa nilai-nilai integritas, inovasi, dan keberpihakan pada rakyat dalam setiap tindakan profesionalnya di masa depan.
</div>

<!-- Tombol -->
<a href="<?php echo base_url('kegiatan/galeri_kegiatan'); ?>" class="btn-kegiatan">FOTO KEGIATAN</a>

<!-- Tombol Scroll ke Atas -->
<button onclick="scrollToTop()" id="btnScrollTop" title="Kembali ke atas">
  &#8679;
</button>
