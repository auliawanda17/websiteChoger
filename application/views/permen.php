<style>
  .search {
    margin-bottom: 20px;
  }

  .search-input {
    padding: 10px 20px;
    width: 300px;
    max-width: 90%;
    font-size: 16px;
    border-radius: 8px;
    border: 2px solid #607D6D;
    outline: none;
    transition: 0.3s ease;
  }

  .search-input:focus {
    border-color: #4B2E2B;
  }

  .permen-img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    margin: 20px auto;
    display: block;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    object-fit: cover;
  }

  .produk-header {
    text-align: center;
    margin-bottom: 40px;
  }

  .produk-section {
	  display: flex;
	  justify-content: center;
	  flex-wrap: wrap;
	  gap: 100px;
	  padding: 50px 20px;
	}

	.produk-card {
	  background-color: #F4EDE5; 
	  border-radius: 25px;
	  padding: 30px;
	  width: 250px;
	  text-align: center;
	  transition: transform 0.2s;
	}

	.produk-card:hover {
	  transform: translateY(-5px);
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

	.pesan-button {
	  display: inline-block;
	  padding: 12px 28px;
	  background-color: #4B2E2B;
	  color: white;
	  border-radius: 12px;
	  font-size: 18px;
	  letter-spacing: 2px;
	  text-decoration: none;
	  font-style: italic;
	  font-weight: 500;
	  transition: background-color 0.3s ease;
	}

	.pesan-button:hover {
	  background-color: #6d3c34;
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

<button class="back-button" onclick="history.back()">
  <i class="fas fa-arrow-left"></i>
</button>

<div class="container search">
  <input type="text" id="searchInput" class="search-input" placeholder="SEARCH">
</div>
<div class="produk-header">
    <img src="<?= base_url('gambar/Kategori Permen.jpg'); ?>" alt="Kategori Permen" class="permen-img">
    <h3 style="font-family: 'Lato'; font-weight: bold; color: #4B2E2B; letter-spacing: 5px;">PERMEN</h3>
  </div>

<div class="produk-section">
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
        <img src="<?php echo base_url('gambar/Kategori Permen.jpg'); ?>" alt="Produk 7">
      </div>
      <p class="produk-nama">Choger Permen<br>Cokelat Stroberi</p>
      <p class="produk-harga"></p>
    </div>
    <a href="<?php echo base_url('produk/detail_permen7'); ?>" class="produk-detail">Detail Produk</a>
  </div>

  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Permen 1.jpg'); ?>" alt="Produk 8">
      </div>
      <p class="produk-nama">Choger Permen<br>Cokelat Mete</p>
      <p class="produk-harga"></p>
    </div>
    <a href="<?php echo base_url('produk/detail_permen8'); ?>" class="produk-detail">Detail Produk</a>
  </div>

  <div class="produk-card">
    <div class="produk-content">
      <div class="produk-img">
        <img src="<?php echo base_url('gambar/Permen 3.jpg'); ?>" alt="Produk 9">
      </div>
      <p class="produk-nama">Choger Chocolate<br>Varian Isi 6</p>
      <p class="produk-harga">Rp. 45.000</p>
    </div>
    <a href="<?php echo base_url('produk/detail_permen9'); ?>" class="produk-detail">Detail Produk</a>
  </div>

</div>

<script>
  const searchInput = document.getElementById("searchInput");
  const produkItems = document.getElementsByClassName("produk-card");

  searchInput.addEventListener("keyup", function () {
    const keyword = this.value.toLowerCase();
    for (let i = 0; i < produkItems.length; i++) {
      const namaProduk = produkItems[i].querySelector(".produk-nama").innerText.toLowerCase();
      if (namaProduk.includes(keyword)) {
        produkItems[i].style.display = "block";
      } else {
        produkItems[i].style.display = "none";
      }
    }
  });
</script>

<!-- Tombol Scroll ke Atas -->
<button onclick="scrollToTop()" id="btnScrollTop" title="Kembali ke atas">
  &#8679;
</button>