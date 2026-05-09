<?php
// Zmienne przekazywane do topbar.php
$pageTitle = 'VeloWorld – Jak serwisować rower?';
$pageCss = 'service_guide.css';
?>
<?php include 'partials/topbar.php'; ?>

<!-- GŁÓWNA TREŚĆ -->
<main class="main-content">

  <h2 class="guide-title">Jak serwisować rower?</h2>
  <p class="guide-intro">
    Regularny serwis przedłuża żywotność roweru i zapewnia bezpieczną jazdę.
    Przeglądaj poradniki strzałkami.
  </p>

  <!-- SLIDER (UNIWERSALNY – PERCENT, 100%) -->
  <div class="slider">

    <!-- NAWIGACJA -->
    <div class="slider-nav">
      <button class="slider-arrow" id="sliderPrev" aria-label="Poprzedni slajd">&#8592;</button>

      <span class="slider-counter">
        <span id="sliderCurrent">1</span> /
        <span id="sliderTotal">3</span>
      </span>

      <button class="slider-arrow" id="sliderNext" aria-label="Następny slajd">&#8594;</button>
    </div>

    <!-- OKNO -->
    <div class="slider-window">
      <div class="slider-track" id="sliderTrack">

        <!-- SLAJD 1 -->
        <article class="slider-slide slider-card">
          <h3 class="slider-card-title">Regulacja hamulców</h3>

          <div class="guide-steps">
            <div class="guide-step">
              <div class="guide-step-body">
                <strong>Krok 1 – Sprawdź szczęki</strong>
                <p>
                  Ściśnij dźwignię hamulca i sprawdź, czy szczęki równomiernie przylegają do obręczy.
                  Między szczęką a obręczą powinno być 1–2 mm luzu.
                </p>
              </div>
            </div>

            <div class="guide-step">
              <div class="guide-step-body">
                <strong>Krok 2 – Ustaw linkę</strong>
                <p>
                  Poluzuj śrubę mocującą linkę, naciągnij ją ręcznie i dokręć śrubę.
                  Użyj klucza imbusowego 5 mm.
                </p>
              </div>
            </div>

            <div class="guide-step">
              <div class="guide-step-body">
                <strong>Krok 3 – Sprawdź działanie</strong>
                <p>
                  Kilkakrotnie ściśnij dźwignię. Koło powinno zatrzymać się płynnie,
                  bez pisków. Wyreguluj baryłkę linki jeśli luz jest za duży.
                </p>
              </div>
            </div>
          </div>
        </article>

        <!-- SLAJD 2 -->
        <article class="slider-slide slider-card">
          <h3 class="slider-card-title">Regulacja przerzutek</h3>

          <div class="guide-steps">
            <div class="guide-step">
              <div class="guide-step-body">
                <strong>Krok 1 – Oceń problem</strong>
                <p>
                  Jedź na rowerze i obserwuj, czy łańcuch spada,
                  skacze lub zmiana biegów jest opóźniona.
                </p>
              </div>
            </div>

            <div class="guide-step">
              <div class="guide-step-body">
                <strong>Krok 2 – Ustaw ograniczniki H i L</strong>
                <p>
                  Śruby H (high) i L (low) ograniczają zakres ruchu przerzutki.
                  Ustaw je tak, by łańcuch nie spadał na zewnątrz ani do szprych.
                </p>
              </div>
            </div>

            <div class="guide-step">
              <div class="guide-step-body">
                <strong>Krok 3 – Napięcie linki</strong>
                <p>
                  Obróć baryłkę linki przy manetce w lewo (aby napiąć)
                  lub w prawo (aby poluzować). Testuj po każdej korekcie.
                </p>
              </div>
            </div>
          </div>
        </article>

        <!-- SLAJD 3 -->
        <article class="slider-slide slider-card">
          <h3 class="slider-card-title">Wymiana i smarowanie łańcucha</h3>

          <div class="guide-steps">
            <div class="guide-step">
              <div class="guide-step-body">
                <strong>Krok 1 – Sprawdź zużycie</strong>
                <p>
                  Użyj miernika zużycia łańcucha (0.75 = czas wymiany).
                  Zużyty łańcuch niszczy kasetę i zębatki.
                </p>
              </div>
            </div>

            <div class="guide-step">
              <div class="guide-step-body">
                <strong>Krok 2 – Smarowanie</strong>
                <p>
                  Nanieś olej do łańcucha na każde ogniwo,
                  obracając pedałami. Zetrzyj nadmiar po 5 minutach.
                </p>
              </div>
            </div>

            <div class="guide-step">
              <div class="guide-step-body">
                <strong>Krok 3 – Wymiana</strong>
                <p>
                  Użyj rozpinacza lub quick-linka.
                  Dopasuj długość nowego łańcucha do starego.
                </p>
              </div>
            </div>
          </div>
        </article>

      </div><!-- /.slider-track -->
    </div><!-- /.slider-window -->
  </div><!-- /.slider -->

  <!-- CTA -->
  <div class="guide-cta glass">
    <div class="guide-cta-text">
      <h3>Wolisz żebyśmy zrobili to za Ciebie?</h3>
      <p>
        Oferujemy profesjonalne malowanie proszkowe
        i oklejanie folią PPF w naszym warsztacie.
      </p>
    </div>
    <a href="index.php?page=workshop" class="btn guide-cta-btn">Umów serwis</a>
  </div>

  <?php include 'partials/footer.php'; ?>

</main>