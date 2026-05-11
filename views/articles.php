<?php
$pageTitle = 'VeloWorld – Artykuły';
$pageCss   = 'article.css';
?>
<?php include 'partials/topbar.php'; ?>

<main class="main-content">

  <section class="articles-wrap glass">

    <header class="articles-header">
      <h1>Aktualności</h1>
      <p>Najnowsze informacje ze świata MTB, partnerów, tras i innowacji.</p>
    </header>

    <div class="articles-grid">

      <!-- ARTYKUŁ 1: RED BULL -->
      <a href="index.php?page=article-redbull" class="article-card">
        <img src="img/articles/redbull3.jpg" alt="Red Bull – Dawid Godziek">

        <div class="article-card-body">
          <div class="article-category">
            <span>SPORT</span>
          </div>

          <h3>Red Bull i zwycięstwo Dawida Godźka na Crankworx</h3>

          <p>
            Spektakularny przejazd w Nowej Zelandii i kolejny sukces
            polskiego freeride’u na arenie międzynarodowej.
          </p>
        </div>
      </a>

      <!-- ARTYKUŁ 2: YT BIKES -->
      <a href="index.php?page=article-yt" class="article-card">
        <img src="img/articles/yt-cover.jpg" alt="YT Bikes">

        <div class="article-card-body">
          <div class="article-category">
            <span>PARTNERZY</span>
          </div>

          <h3>YT Bikes – innowacje i plany na sezon 2026</h3>

          <p>
            Jedna z najszybciej rozwijających się marek rowerowych
            na świecie nie zwalnia tempa i stawia na bezkompromisowy sprzęt.
          </p>
        </div>
      </a>

      <!-- ARTYKUŁ 3: TIGER SKOLNITY -->
      <a href="index.php?page=article-tiger" class="article-card">
        <img src="img/articles/tiger-skolnity-cover.jpg" alt="Trasa TIGER – Skolnity">

        <div class="article-card-body">
          <div class="article-category">
            <span>TRASY ROWEROWE W POLSCE</span>
          </div>

          <h3>Nowa trasa TIGER w Skolnity – oficjalne otwarcie</h3>

          <p>
            Dynamiczna, techniczna i szybka.
            Sprawdzamy nową perełkę beskidzkiej sceny trailowej.
          </p>
        </div>
      </a>

      <!-- ARTYKUŁ 4: FUTURYSTYCZNY KOSZYK -->
      <a href="index.php?page=article-basket" class="article-card">
        <img src="img/articles/basket-cover.jpg" alt="NeoRack X1 – koszyk przyszłości">

        <div class="article-card-body">
          <div class="article-category">
            <span>TECH / INNOWACJE</span>
          </div>

          <h3>NeoRack X1 – futurystyczny koszyk, który stabilizuje się sam</h3>

          <p>
            Nowa firma prezentuje koszyk rowerowy obracający się w każdej osi,
            inspirowany technologią dronów i systemów cargo przyszłości.
          </p>
        </div>
      </a>

    </div>

  </section>

</main>

<?php include 'partials/footer.php'; ?>