<?php
/* ============================================================
   META
   ============================================================ */
$pageTitle = 'VeloWorld – NeoRack X1: koszyk przyszłości';
$pageCss   = 'article.css';

/* ============================================================
   ID AKTUALNEGO ARTYKUŁU + DANE DO "KOLEJNYCH"
   ============================================================ */
$currentArticle = 'basket';
include __DIR__ . '/_articles-data.php';
?>
<?php include __DIR__ . '/partials/topbar.php'; ?>

<main class="main-content">

<article class="article-wrap glass">

<!-- ======================================================
     HEADER
     ====================================================== -->
<header class="article-header">
    <div class="article-category">
        <img src="img/logo/basket-icon.jpg" class="category-icon" alt="NeoRack X1">
        <span>TECH / INNOWACJE</span>
    </div>

    <h1 class="article-title">
        NeoRack X1 – koszyk rowerowy, który obraca się w każdej osi
    </h1>

    <p class="article-lead">
        Futurystyczny projekt, kompozytowe materiały rodem z lotnictwa
        i mechanika znana dotąd wyłącznie z dronów stabilizowanych –
        tak NeoRack definiuje nowy standard transportu na rowerze,
        eliminując problem przechylających się ładunków raz na zawsze.
    </p>
</header>

<!-- ======================================================
     MODEL 3D
     ====================================================== -->
<section class="article-3d">

  <h2 class="gallery-title">Interaktywny model 3D – NeoRack X1</h2>

  <p style="color:var(--text-muted);font-size:.9rem;margin:6px 0 14px;line-height:1.55;">
      Obracaj koszyk myszką (LPM), przybliżaj i oddalaj kółkiem,
      przesuwaj widok prawym przyciskiem – dokładnie jak w konfiguratorach
      sprzętu premium. Model przedstawia faktyczną geometrię produktu,
      bez uproszczeń marketingowych.
  </p>

  <div id="basket-3d" style="
      width:100%;
      height:420px;
      border-radius:16px;
      background:#fff;
      border:1px solid var(--border);
      overflow:hidden;">
  </div>

  <!-- Ładujemy viewer 3D jako osobny moduł -->
  <script type="module" src="js/basket-viewer.js?v=1"></script>

</section>

<!-- ======================================================
     TREŚĆ – DŁUGA, NIERUSZONA
     ====================================================== -->
<section class="article-content">

<p>
NeoRack X1 powstał jako odpowiedź na realny problem, z którym
od dekad zmagali się użytkownicy klasycznych koszyków rowerowych:
każde pochylenie roweru oznaczało przechył ładunku,
ryzyko wylania płynów, przesuwania sprzętu fotograficznego
lub uszkodzenia elektroniki.
</p>

<p>
Inżynierowie NeoRack sięgnęli po rozwiązania znane z przemysłu lotniczego
oraz systemów stabilizacji optycznej. Zastosowano mechaniczny
układ trzech osi obrotu, który pozwala koszykowi zachować poziom
niezależnie od kąta nachylenia roweru – bez elektroniki,
bez czujników i bez zasilania.
</p>

<p>
Sercem konstrukcji jest gimbal wykonany z kompozytu
węglowo‑aramidowego, połączony z ramą za pomocą
łożysk magnetycznych o minimalnych oporach toczenia.
Całość została zoptymalizowana pod kątem wagi,
wytrzymałości i odporności na wibracje podczas jazdy w terenie.
</p>

<blockquote class="article-quote">
    „Nie chcieliśmy stworzyć gadżetu.
    Chcieliśmy rozwiązać problem, który każdy rowerzysta zna aż za dobrze.”
    <span>— zespół projektowy NeoRack</span>
</blockquote>

<p>
Według producenta, NeoRack X1 przeszedł testy przeciążeniowe
odpowiadające kilkukrotnemu upadkowi roweru przy pełnym obciążeniu.
Koszyk ma trafić nie tylko do miejskich użytkowników,
ale również do kurierów, bikepackerów oraz operatorów kamer sportowych,
dla których stabilność sprzętu jest kluczowa.
</p>

<p>
Pierwsze serie produkcyjne mają pojawić się w ograniczonej liczbie wariantów,
z możliwością personalizacji wykończenia oraz integracji
z systemami montażowymi popularnych producentów rowerowych.
</p>

</section>

<!-- ======================================================
     GALERIA
     ====================================================== -->
<section class="article-gallery">
    <h2 class="gallery-title">Galeria</h2>
    <div class="gallery-grid">
        <img src="img/articles/basket1.jpg" alt="NeoRack X1 – detal konstrukcji">
        <img src="img/articles/basket2.jpg" alt="NeoRack X1 – stabilizacja">
        <img src="img/articles/basket3.jpg" alt="NeoRack X1 – montaż na rowerze">
    </div>
</section>

</article>

<?php include __DIR__ . '/partials/related-articles.php'; ?>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>