<style>
  .footer {
    background-color: #FAF9F7;
    padding: 20px;
  }

  .footer .container {
    max-width: 800px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .footer-row {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
  }

  .footer-item {
    display: flex;
    align-items: center;
    gap: 10px;
    flex: 1 1 45%;  
  }

  .footer-item img {
    width: 28px;
    height: 28px;
  }

  .footer-item a {
    color: #000;
    text-decoration: none;
    font-weight: 500;
    font-size: 16px;
  }

  .footer-item a:hover {
    text-decoration: underline;
  }

  @media (max-width: 600px) {
    .footer-row {
      flex-direction: column;
      align-items: flex-start;
    }
    .footer-item {
      flex: 1 1 100%;
    }
  }
</style>

<footer class="footer">
  <div class="container">
    <div class="footer-row">
      <div class="footer-item">
        <img src="<?php echo base_url('gambar/Instagram.jpg'); ?>" alt="Instagram">
        <a href="https://instagram.com/chogerttp" target="_blank">@chogerttp</a>
      </div>
      <div class="footer-item">
        <img src="<?php echo base_url('gambar/Facebook.jpg'); ?>" alt="Facebook">
        <a href="https://facebook.com/chogerttp" target="_blank">Cokelat Ttp Nglanggeran</a>
      </div>
    </div>
    <div class="footer-row">
      <div class="footer-item">
        <img src="<?php echo base_url('gambar/WhatsApp.jpg'); ?>" alt="WhatsApp">
        <a href="tel:081804283132">0818-0428-3132</a>
      </div>
      <div class="footer-item">
        <img src="<?php echo base_url('gambar/Email.jpg'); ?>" alt="Email">
        <a href="mailto:chogerttp@gmail.com">chogerttp@gmail.com</a>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<!-- Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<!-- Video Youtube -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
document.getElementById('playVideo').addEventListener('click', function() {
  var modal = document.getElementById('videoModal');
  var player = document.getElementById('youtubePlayer');
  player.src = "https://www.youtube.com/embed/25NpaFP9alo?autoplay=1";
  modal.style.display = "flex";
});

document.getElementById('closeModal').addEventListener('click', function() {
  var modal = document.getElementById('videoModal');
  var player = document.getElementById('youtubePlayer');
  player.src = "";
  modal.style.display = "none";
});
</script>

<!-- Caraosel -->
<script>
  const carousel = document.getElementById('carouselProduk');
  const dots = document.querySelectorAll('.indicator-dot');

  const myCarousel = new bootstrap.Carousel(carousel);

  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      myCarousel.to(index);
    });
  });

  carousel.addEventListener('slide.bs.carousel', function (e) {
    dots.forEach(dot => dot.classList.remove('active'));
    dots[e.to].classList.add('active');
  });
</script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
  window.onscroll = function() {
    const btn = document.getElementById("btnScrollTop");
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      btn.style.display = "block";
    } else {
      btn.style.display = "none";
    }
  };

  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
</script>


