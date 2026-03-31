<?php
// Zmienne przekazywane do topbar.php
$pageTitle = 'VeloWorld – Jak serwisować rower?'; // Tytuł karty przeglądarki
$pageCss   = 'service_guide.css';                 // Własny CSS tej strony
?>
<?php include 'partials/topbar.php'; ?> <!-- Dołącz: head + topbar + otwarcie page-layout -->

  <!-- GŁÓWNA TREŚĆ -->
  <main class="main-content"> <!-- Obszar treści -->

    <h2 class="guide-title">Jak serwisować rower?</h2> <!-- Główny nagłówek strony -->
    <p class="guide-intro">Regularny serwis przedłuża żywotność roweru i zapewnia bezpieczną jazdę. Przeglądaj poradniki strzałkami.</p> <!-- Wstęp -->

    <!-- SLIDER PORADNIKÓW -->
    <div class="guide-slider"> <!-- Kontener całego slidera -->
      <div class="guide-slider-nav"> <!-- Pasek nawigacji: ← licznik → -->
        <button class="guide-arrow" id="guidePrev" aria-label="Poprzedni poradnik">&#8592;</button> <!-- Strzałka lewa (←) -->
        <span class="guide-counter"> <!-- Licznik "1 / 3" -->
          <span id="guideCurrent">1</span> / <span id="guideTotal">3</span> <!-- Aktualny i łączny numer slajdu -->
        </span> <!-- Koniec licznika -->
        <button class="guide-arrow" id="guideNext" aria-label="Następny poradnik">&#8594;</button> <!-- Strzałka prawa (→) -->
      </div> <!-- Koniec nawigacji slidera -->

      <div class="guide-slider-window"> <!-- Okno widoczności – overflow: hidden ukrywa pozostałe slajdy -->
        <div class="guide-slider-track" id="guideTrack"> <!-- Szyna – przesuwa się przez translateX -->

          <!-- SLAJD 1: Regulacja hamulców -->
          <article class="guide-card guide-slide"> <!-- Karta poradnika (slajd 1) -->
            <h3 class="guide-card-title"> Regulacja hamulców</h3> <!-- Tytuł poradnika -->
            <div class="guide-steps"> <!-- Kontener kroków -->
              <div class="guide-step"> <!-- Krok 1 -->
                <div class="guide-step-body"> <!-- Treść kroku -->
                  <strong>Krok 1 – Sprawdź szczęki</strong>
                  <p>Ściśnij dźwignię hamulca i sprawdź, czy szczęki równomiernie przylegają do obręczy. Między szczęką a obręczą powinno być 1–2 mm luzu.</p>
                </div>
              </div> <!-- Koniec kroku 1 -->
              <div class="guide-step"> <!-- Krok 2 -->
                <div class="guide-step-body">
                  <strong>Krok 2 – Ustaw linkę</strong>
                  <p>Poluzuj śrubę mocującą linkę, naciągnij ją ręcznie do właściwego napięcia i dokręć śrubę. Użyj klucza imbusowego 5 mm.</p>
                </div>
              </div> <!-- Koniec kroku 2 -->
              <div class="guide-step"> <!-- Krok 3 -->
                <div class="guide-step-body">
                  <strong>Krok 3 – Sprawdź działanie</strong>
                  <p>Kilkakrotnie ściśnij dźwignię z siłą. Koło powinno zatrzymać się płynnie, bez pisków. Wyreguluj baryłkę linki jeśli luz jest za duży.</p>
                </div>
              </div> <!-- Koniec kroku 3 -->
            </div> <!-- Koniec kroków -->
          </article> <!-- Koniec slajdu 1 -->

          <!-- SLAJD 2: Regulacja przerzutek -->
          <article class="guide-card guide-slide"> <!-- Karta poradnika (slajd 2) -->
            <h3 class="guide-card-title"> Regulacja przerzutek</h3> <!-- Tytuł poradnika -->
            <div class="guide-steps"> <!-- Kontener kroków -->
              <div class="guide-step"> <!-- Krok 1 -->
                <div class="guide-step-body">
                  <strong>Krok 1 – Oceń problem</strong>
                  <p>Jedź na rowerze i obserwuj, czy łańcuch spada, skacze, lub zmiana biegów jest opóźniona.</p>
                </div>
              </div> <!-- Koniec kroku 1 -->
              <div class="guide-step"> <!-- Krok 2 -->
                <div class="guide-step-body">
                  <strong>Krok 2 – Ustaw ograniczniki H i L</strong>
                  <p>Śruby H (high) i L (low) ograniczają zakres ruchu przerzutki. Ustaw je tak, by łańcuch nie spadał na zewnątrz ani do szprych.</p>
                </div>
              </div> <!-- Koniec kroku 2 -->
              <div class="guide-step"> <!-- Krok 3 -->
                <div class="guide-step-body">
                  <strong>Krok 3 – Napięcie linki</strong>
                  <p>Obróć baryłkę linki przy manetce w lewo (aby napiąć) lub w prawo (aby rozluźnić). Testuj zmiany biegów po każdej korekcie.</p>
                </div>
              </div> <!-- Koniec kroku 3 -->
            </div> <!-- Koniec kroków -->
          </article> <!-- Koniec slajdu 2 -->

          <!-- SLAJD 3: Wymiana łańcucha -->
          <article class="guide-card guide-slide"> <!-- Karta poradnika (slajd 3) -->
            <h3 class="guide-card-title"> Wymiana i smarowanie łańcucha</h3> <!-- Tytuł poradnika -->
            <div class="guide-steps"> <!-- Kontener kroków -->
              <div class="guide-step"> <!-- Krok 1 -->
                <div class="guide-step-body">
                  <strong>Krok 1 – Sprawdź zużycie</strong>
                  <p>Użyj miernika zużycia łańcucha (wskaźnik 0.75 = czas wymiany). Zużyty łańcuch niszczy kasetę i zębatki.</p>
                </div>
              </div> <!-- Koniec kroku 1 -->
              <div class="guide-step"> <!-- Krok 2 -->
                <div class="guide-step-body">
                  <strong>Krok 2 – Smarowanie</strong>
                  <p>Nanieś olej do łańcucha na każde ogniwo od wewnątrz, obracając pedałami. Poczekaj 5 minut, a następnie zetrzyj nadmiar szmatką.</p>
                </div>
              </div> <!-- Koniec kroku 2 -->
              <div class="guide-step"> <!-- Krok 3 -->
                <div class="guide-step-body">
                  <strong>Krok 3 – Wymiana</strong>
                  <p>Użyj rozpinacza łańcucha lub spięcia quick-link. Dobierz długość nowego łańcucha do starego. Sprawdź działanie na wszystkich biegach.</p>
                </div>
              </div> <!-- Koniec kroku 3 -->
            </div> <!-- Koniec kroków -->
          </article> <!-- Koniec slajdu 3 -->

        </div> <!-- Koniec guide-slider-track -->
      </div> <!-- Koniec guide-slider-window -->
    </div> <!-- Koniec guide-slider -->

    <!-- CTA DO WARSZTATU -->
    <div class="guide-cta"> <!-- Baner zachęcający do rezerwacji -->
      <p>Wolisz żeby zrobił to fachowiec? <a href="index.php?page=workshop">Umów wizytę w naszym warsztacie →</a></p>
    </div> <!-- Koniec banera -->
<?php include 'partials/footer.php'; ?> <!-- Dołącz: zamknięcie main + page-layout + stopka -->