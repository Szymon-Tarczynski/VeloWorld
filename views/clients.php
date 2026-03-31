<?php
// Zmienne przekazywane do topbar.php
$pageTitle = 'VeloWorld – Nasi klienci'; // Tytuł karty przeglądarki
$pageCss   = 'clients.css';              // Style karty opinii
$pageCss2  = 'centered.css';             // Wyśrodkowanie zawartości
?>
<?php include 'partials/topbar.php'; ?> <!-- Dołącz: head + topbar + otwarcie page-layout -->

  <!-- GŁÓWNA TREŚĆ -->
  <main class="main-content main-content--center"> <!-- Obszar treści – wyśrodkowany -->

    <div class="clients-wrap"> <!-- Kontener całej sekcji klientów -->
      <h2 class="guide-title">Nasi klienci</h2> <!-- Nagłówek strony -->
      <p class="guide-intro">Co mówią o nas nasi klienci? Przeczytaj opinie i przeglądaj strzałkami.</p> <!-- Wstęp -->

      <!-- SLIDER OPINII – te same klasy co w service_guide, obsługiwany przez app.js -->
      <div class="guide-slider"> <!-- Kontener slidera – app.js szuka guideTrack wewnątrz -->

        <div class="guide-slider-nav"> <!-- Pasek nawigacji: ← licznik → -->
          <button class="guide-arrow" id="guidePrev" aria-label="Poprzednia opinia">&#8592;</button> <!-- Strzałka lewa -->
          <span class="guide-counter"> <!-- Licznik "1 / 3" -->
            <span id="guideCurrent">1</span> / <span id="guideTotal">3</span> <!-- Aktualny i łączny numer -->
          </span> <!-- Koniec licznika -->
          <button class="guide-arrow" id="guideNext" aria-label="Następna opinia">&#8594;</button> <!-- Strzałka prawa -->
        </div> <!-- Koniec nawigacji -->

        <div class="guide-slider-window"> <!-- Okno widoczności – overflow: hidden ukrywa pozostałe slajdy -->
          <div class="guide-slider-track" id="guideTrack"> <!-- Szyna – przesuwana przez app.js -->

            <!-- OPINIA 1 -->
            <article class="guide-card guide-slide client-card"> <!-- Slajd 1 – karta opinii -->
              <div class="client-avatar">👨</div> <!-- Avatar klienta (emoji – możesz zastąpić zdjęciem) -->
              <div class="client-name">Jan Kowalski</div> <!-- Imię klienta -->
              <div class="client-stars">★★★★★</div> <!-- Ocena w gwiazdkach -->
              <p class="client-opinion">Serwis na najwyższym poziomie. Rower po regulacji jeździ jak nowy. Polecam każdemu!</p> <!-- Treść opinii -->
            </article> <!-- Koniec slajdu 1 -->

            <!-- OPINIA 2 -->
            <article class="guide-card guide-slide client-card"> <!-- Slajd 2 – karta opinii -->
              <div class="client-avatar">👩</div> <!-- Avatar klienta -->
              <div class="client-name">Anna Nowak</div> <!-- Imię klienta -->
              <div class="client-stars">★★★★★</div> <!-- Ocena -->
              <p class="client-opinion">Kupiłam rower górski i jestem bardzo zadowolona. Obsługa profesjonalna, ceny uczciwe.</p> <!-- Opinia -->
            </article> <!-- Koniec slajdu 2 -->

            <!-- OPINIA 3 -->
            <article class="guide-card guide-slide client-card"> <!-- Slajd 3 – karta opinii -->
              <div class="client-avatar">👨‍🦳</div> <!-- Avatar klienta -->
              <div class="client-name">Marek Wiśniewski</div> <!-- Imię klienta -->
              <div class="client-stars">★★★★☆</div> <!-- Ocena (4/5) -->
              <p class="client-opinion">Szybka wymiana łańcucha i kasety. Miły kontakt, sprawna realizacja. Na pewno wrócę.</p> <!-- Opinia -->
            </article> <!-- Koniec slajdu 3 -->

          </div> <!-- Koniec guide-slider-track -->
        </div> <!-- Koniec guide-slider-window -->

      </div> <!-- Koniec guide-slider -->

    </div> <!-- Koniec clients-wrap -->

<?php include 'partials/footer.php'; ?> <!-- Dołącz: zamknięcie main + page-layout + stopka -->