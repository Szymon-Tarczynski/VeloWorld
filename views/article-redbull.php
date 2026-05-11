<?php
$pageTitle = 'VeloWorld – Red Bull i zwycięstwo Dawida Godźka';
$pageCss   = 'article.css';

$currentArticle = 'redbull';
include __DIR__ . '/_articles-data.php';
?>
<?php include __DIR__ . '/partials/topbar.php'; ?>

<main class="main-content">

  <article class="article-wrap glass">

    <!-- ================= HEADER ================= -->

    <header class="article-header">

      <div class="article-category">
        <img src="img/logo/redbull-icon.png"
             alt="Red Bull"
             class="category-icon">
        <span>SPORT / PARTNERZY</span>
      </div>

      <h1 class="article-title">
        Red Bull i zwycięstwo Dawida Godźka na Crankworx Rotorua 2026
      </h1>

      <p class="article-lead">
        Spektakularny przejazd, ogromne emocje i kolejny dowód na to,
        że polski freeride MTB należy do światowej czołówki.
      </p>

    </header>

    <!-- ================= WIDEO ================= -->

    <section class="article-media">
      <div class="video-embed">
        <div id="yt-godziek"></div>

        <script>
          function timeToSeconds(t){
            const p = t.split(':').map(Number);
            if (p.length === 3) return p[0]*3600 + p[1]*60 + p[2];
            if (p.length === 2) return p[0]*60 + p[1];
            return p[0];
          }

          const VIDEO_ID   = 'QmUToTo3tAE';
          const START_TIME = '3:23:16';
          const END_TIME   = '3:30:42';

          const START = timeToSeconds(START_TIME);
          const END   = timeToSeconds(END_TIME);

          (function(){
            if (window.YT) return;
            const s = document.createElement('script');
            s.src = 'https://www.youtube.com/iframe_api';
            document.head.appendChild(s);
          })();

          let player, timer;
          window.onYouTubeIframeAPIReady = function(){
            player = new YT.Player('yt-godziek',{
              videoId: VIDEO_ID,
              playerVars:{
                autoplay: 1,
                mute: 1,
                controls: 1,
                playsinline: 1,
                start: START
              },
              events:{
                onReady(){
                  player.seekTo(START, true);
                  player.playVideo();
                  timer = setInterval(() => {
                    if (player.getCurrentTime() >= END) {
                      player.pauseVideo();
                      clearInterval(timer);
                    }
                  }, 200);
                }
              }
            });
          };
        </script>
      </div>
    </section>

    <!-- ================= TREŚĆ ================= -->

    <section class="article-content">
      <p>
        Dawid Godziek ponownie potwierdził swoją światową klasę.
        Rotorua dostarczyła jednych z najbardziej widowiskowych
        momentów ostatnich lat.
      </p>

      <p>
        Wsparcie marki Red Bull umożliwia realizację projektów,
        które przekraczają granice klasycznego MTB.
      </p>

      <blockquote class="article-quote">
        „To był jeden z najlepszych przejazdów w mojej karierze.”
        <span>— Dawid Godziek</span>
      </blockquote>
    </section>

    <!-- ================= GALERIA ================= -->

    <section class="article-gallery">
      <h2 class="gallery-title">Galeria zdjęć</h2>

      <div class="gallery-grid">
        <img src="img/articles/redbull1.jpg" alt="Godziek – Crankworx">
        <img src="img/articles/redbull2.jpg" alt="Crankworx Rotorua">
        <img src="img/articles/redbull3.jpg" alt="Podium Crankworx">
      </div>
    </section>

  </article>

  <!-- ================= KOLEJNE ARTYKUŁY (AUTO) ================= -->

  <?php include __DIR__ . '/partials/related-articles.php'; ?>

</main>

<?php include __DIR__ . '/partials/footer.php'; ?>