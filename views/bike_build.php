<?php
// Zmienne przekazywane do topbar.php
$pageTitle = 'VeloWorld – Budowa roweru'; // Tytuł karty przeglądarki
$pageCss   = 'bike_build.css';            // Własny CSS tej strony
?>
<?php include 'partials/topbar.php'; ?> <!-- Dołącz: head + topbar + otwarcie page-layout -->

  <!-- GŁÓWNA TREŚĆ -->
  <main class="main-content"> <!-- Obszar treści -->

    <h2 class="guide-title">Budowa roweru</h2> <!-- Główny nagłówek strony -->
    <p class="guide-intro">Poznaj główne części składowe roweru i dowiedz się, jaką rolę pełni każdy element.</p> <!-- Wstęp -->

    <!-- LISTA CZĘŚCI SKŁADOWYCH -->
    <div class="frame-section-card"> <!-- Karta listy części -->
     

      <div class="bike-parts-list"> <!-- Lista kart: zdjęcie po lewej, opis po prawej -->

        <div class="bike-part-row"> <!-- Karta: Rama -->
          <div class="bike-part-photo"> <!-- Ramka na zdjęcie (180×140px) -->
            <img src="img/parts/rama.jpg" alt="Rama roweru"> <!-- Zdjęcie – wstaw plik: public/img/parts/rama.jpg -->
          </div>
          <div class="bike-part-info"> <!-- Opis po prawej -->
            <div class="bike-part-name">Rama</div> <!-- Nazwa części -->
            <div class="bike-part-desc">Szkielet roweru. Łączy wszystkie elementy. Wykonana ze stali, aluminium, karbonu lub tytanu. Decyduje o geometrii i charakterze jazdy.</div> <!-- Opis -->
          </div>
        </div> <!-- Koniec karty -->

        <div class="bike-part-row"> <!-- Karta: Koła -->
          <div class="bike-part-photo">
            <img src="img/parts/kolo.jpg" alt="Koła rowerowe"> <!-- Zdjęcie: public/img/parts/kola.jpg -->
          </div>
          <div class="bike-part-info">
            <div class="bike-part-name">Koła</div>
            <div class="bike-part-desc">Składają się z piasty, szprych, obręczy i opony. Rozmiar (26", 27,5", 29") wpływa na toczność i pokonywanie przeszkód.</div>
          </div>
        </div> <!-- Koniec karty -->

        <div class="bike-part-row"> <!-- Karta: Układ napędowy -->
          <div class="bike-part-photo">
            <img src="img/parts/naped.jpg" alt="Układ napędowy"> <!-- Zdjęcie: public/img/parts/naped.jpg -->
          </div>
          <div class="bike-part-info">
            <div class="bike-part-name">Układ napędowy</div>
            <div class="bike-part-desc">Korba, zębatki, łańcuch, kaseta i przerzutki. Przenosi siłę z nóg na tylne koło. Ilość biegów to wynik kombinacji zębatek i kasety.</div>
          </div>
        </div> <!-- Koniec karty -->

        <div class="bike-part-row"> <!-- Karta: Hamulce -->
          <div class="bike-part-photo">
            <img src="img/parts/hamulce.jpg" alt="Hamulce"> <!-- Zdjęcie: public/img/parts/hamulce.jpg -->
          </div>
          <div class="bike-part-info">
            <div class="bike-part-name">Hamulce</div>
            <div class="bike-part-desc">V-brake (szczękowe), tarczowe hydrauliczne lub mechaniczne. Hamulce tarczowe oferują lepszą siłę hamowania niezależnie od warunków pogodowych.</div>
          </div>
        </div> <!-- Koniec karty -->

        <div class="bike-part-row"> <!-- Karta: Kierownica -->
          <div class="bike-part-photo">
            <img src="img/parts/kierownica.jpg" alt="Kierownica i mostek"> <!-- Zdjęcie: public/img/parts/kierownica.jpg -->
          </div>
          <div class="bike-part-info">
            <div class="bike-part-name">Kierownica i mostek</div>
            <div class="bike-part-desc">Sterowanie rowerem. Szerokość i kształt kierownicy wpływa na pozycję i komfort. Mostek łączy kierownicę z widelcem przednim.</div>
          </div>
        </div> <!-- Koniec karty -->

        <div class="bike-part-row"> <!-- Karta: Siodło -->
          <div class="bike-part-photo">
            <img src="img/parts/siodlo.jpg" alt="Siodło i sztyca"> <!-- Zdjęcie: public/img/parts/siodlo.jpg -->
          </div>
          <div class="bike-part-info">
            <div class="bike-part-name">Siodło i sztyca</div>
            <div class="bike-part-desc">Siodło podpiera ciało rowerzysty. Sztyca reguluje wysokość siodła. Właściwa wysokość siodła to klucz do efektywnego pedałowania.</div>
          </div>
        </div> <!-- Koniec karty -->

        <div class="bike-part-row"> <!-- Karta: Widelec -->
          <div class="bike-part-photo">
            <img src="img/parts/widelec.jpg" alt="Widelec przedni"> <!-- Zdjęcie: public/img/parts/widelec.jpg -->
          </div>
          <div class="bike-part-info">
            <div class="bike-part-name">Widelec przedni</div>
            <div class="bike-part-desc">Łączy przednie koło z ramą. Może być sztywny (lżejszy) lub amortyzowany (lepsze tłumienie nierówności w terenie).</div>
          </div>
        </div> <!-- Koniec karty -->

        <div class="bike-part-row"> <!-- Karta: Łańcuch -->
          <div class="bike-part-photo">
            <img src="img/parts/lancuch.jpg" alt="Łańcuch"> <!-- Zdjęcie: public/img/parts/lancuch.jpg -->
          </div>
          <div class="bike-part-info">
            <div class="bike-part-name">Łańcuch</div>
            <div class="bike-part-desc">Przenosi napęd z korby na kasetę. Wymaga regularnego smarowania i wymiany co 2000–3000 km, by nie niszczyć kasety.</div>
          </div>
        </div> <!-- Koniec karty -->

      </div> <!-- Koniec listy części -->
    </div> <!-- Koniec karty sekcji -->

<?php include 'partials/footer.php'; ?> <!-- Dołącz: zamknięcie main + page-layout + stopka -->