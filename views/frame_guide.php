<?php
// Zmienne przekazywane do topbar.php
$pageTitle = 'VeloWorld – Dobór ramy'; // Tytuł karty przeglądarki
$pageCss = 'frame_guide.css';        // Własny CSS tej strony
?>
<?php include 'partials/topbar.php'; ?> <!-- Dołącz: head + topbar + otwarcie page-layout -->
<!-- GŁÓWNA TREŚĆ -->
<main class="main-content"> <!-- Obszar treści -->

  <h2 class="guide-title">Dobór ramy</h2> <!-- Główny nagłówek strony -->
  <p class="guide-intro">Właściwy rozmiar ramy to podstawa komfortu i efektywności jazdy. Skorzystaj z kalkulatora lub
    tabeli rozmiarów.</p> <!-- Wstęp -->

  <!-- KALKULATOR ROZMIARU RAMY -->
  <div class="frame-calc-card"> <!-- Karta kalkulatora -->
    <h3 class="frame-section-title"> Kalkulator rozmiaru ramy</h3> <!-- Tytuł sekcji -->
    <p class="frame-calc-desc">Podaj swój wzrost, a kalkulator podpowie optymalny rozmiar ramy.</p>
    <!-- Opis kalkulatora -->
    <div class="frame-calc-row"> <!-- Wiersz: input + przycisk -->
      <input class="frame-calc-input" type="number" id="heightInput" placeholder="Twój wzrost (cm)" min="140" max="220">
      <!-- Pole na wzrost (zakres 140–220 cm) -->
      <button class="btn" id="calcBtn">Oblicz</button> <!-- Przycisk uruchamiający kalkulator -->
    </div> <!-- Koniec wiersza -->
    <div class="frame-calc-result" id="calcResult"></div> <!-- Wynik – wypełniany przez JS po obliczeniu -->
  </div> <!-- Koniec kalkulatora -->

  <!-- TABELA ROZMIARÓW RAM -->
  <div class="frame-section-card"> <!-- Karta tabeli -->
    <h3 class="frame-section-title"> Tabela rozmiarów ram</h3> <!-- Tytuł -->
    <div class="frame-table-wrap"> <!-- Wrapper z poziomym scrollem na mobile -->
      <table class="frame-table"> <!-- Tabela rozmiarów -->
        <thead> <!-- Nagłówek tabeli -->
          <tr>
            <th>Wzrost</th> <!-- Kolumna: wzrost -->
            <th>Rozmiar ramy</th> <!-- Kolumna: rozmiar -->
            <th>Oznaczenie</th> <!-- Kolumna: oznaczenie calowe -->
            <th>Długość rury podsiodłowej</th> <!-- Kolumna: długość rury -->
          </tr>
        </thead> <!-- Koniec nagłówka -->
        <tbody> <!-- Ciało tabeli -->
          <tr>
            <td>150–160 cm</td>
            <td>XS</td>
            <td>13–14"</td>
            <td>33–36 cm</td>
          </tr> <!-- Wiersz XS -->
          <tr>
            <td>160–168 cm</td>
            <td>S</td>
            <td>15–16"</td>
            <td>38–40 cm</td>
          </tr> <!-- Wiersz S -->
          <tr>
            <td>168–175 cm</td>
            <td>M</td>
            <td>17–18"</td>
            <td>43–46 cm</td>
          </tr> <!-- Wiersz M -->
          <tr>
            <td>175–183 cm</td>
            <td>L</td>
            <td>19–20"</td>
            <td>48–51 cm</td>
          </tr> <!-- Wiersz L -->
          <tr>
            <td>183–190 cm</td>
            <td>XL</td>
            <td>21–22"</td>
            <td>53–56 cm</td>
          </tr> <!-- Wiersz XL -->
          <tr>
            <td>190+ cm</td>
            <td>XXL</td>
            <td>23–24"</td>
            <td>58–61 cm</td>
          </tr> <!-- Wiersz XXL -->
        </tbody> <!-- Koniec ciała tabeli -->
      </table> <!-- Koniec tabeli -->
    </div> <!-- Koniec wrappera -->
  </div> <!-- Koniec karty tabeli -->

  <!-- TYPY RAM ROWEROWYCH -->
  <div class="frame-section-card"> <!-- Karta typów ram -->
    <h3 class="frame-section-title">Typy ram rowerowych</h3> <!-- Tytuł -->
    <div class="frame-types-grid"> <!-- Siatka kart typów ram -->

      <div class="frame-type-card"> <!-- Karta: MTB -->
        <div class="frame-type-name">Rama MTB</div> <!-- Nazwa typu -->
        <div class="frame-type-desc">Krótka, niska, z dużym prześwitem. Zaprojektowana do jazdy w terenie — wytrzymała
          na uderzenia i wibracje.</div> <!-- Opis -->
      </div> <!-- Koniec karty -->

      <div class="frame-type-card"> <!-- Karta: szosowa -->
        <div class="frame-type-name">Rama szosowa</div> <!-- Nazwa -->
        <div class="frame-type-desc">Lekka, aerodynamiczna, z agresywną geometrią. Niska pozycja kierowcy zmniejsza opór
          powietrza.</div> <!-- Opis -->
      </div> <!-- Koniec karty -->

      <div class="frame-type-card"> <!-- Karta: miejska -->
        <div class="frame-type-name">Rama miejska</div> <!-- Nazwa -->
        <div class="frame-type-desc">Wysoka i wyprostowana pozycja jazdy dla komfortu w mieście. Solidna i odporna na
          codzienne użytkowanie.</div> <!-- Opis -->
      </div> <!-- Koniec karty -->

      <div class="frame-type-card"> <!-- Karta: trekkingowa -->
        <div class="frame-type-name">Rama trekkingowa</div> <!-- Nazwa -->
        <div class="frame-type-desc">Kompromis między szosą a MTB. Wygodna pozycja, bagażnik i błotniki w standardzie.
        </div> <!-- Opis -->
      </div> <!-- Koniec karty -->

    </div> <!-- Koniec siatki typów ram -->
  </div> <!-- Koniec karty typów -->


  <!-- JAK MIERZYĆ RAMĘ -->
  <div class="frame-section-card"> <!-- Karta z krokami pomiaru -->
    <h3 class="frame-section-title">Jak mierzyć ramę?</h3> <!-- Tytuł -->
    <!-- Kontener kroków -->
    <div class="frame-measure-steps">
      <div class="frame-measure-step"> <!-- Krok 1 -->
        <div class="frame-measure-num">1</div> <!-- Numer w kółku -->
        <div class="frame-measure-body"> <!-- Treść kroku -->
          <strong>Zmierz długość nogi (wewnętrzna)</strong> <!-- Nagłówek -->
          <p>Stań boso przy ścianie, umieść książkę między nogami na wysokości krocza. Zmierz odległość od podłogi do
            górnej krawędzi książki.</p> <!-- Opis -->
        </div> <!-- Koniec treści -->
      </div> <!-- Koniec kroku 1 -->

      <div class="frame-measure-step"> <!-- Krok 2 -->
        <div class="frame-measure-num">2</div> <!-- Numer -->
        <div class="frame-measure-body"> <!-- Treść -->
          <strong>Oblicz rozmiar ramy MTB</strong> <!-- Nagłówek -->
          <p>Długość nogi (cm) × 0,56 = rozmiar ramy w calach. Np. 82 cm × 0,56 = 45,9 cm (~18").</p> <!-- Opis -->
        </div> <!-- Koniec treści -->
      </div> <!-- Koniec kroku 2 -->

      <div class="frame-measure-step"> <!-- Krok 3 -->
        <div class="frame-measure-num">3</div> <!-- Numer -->
        <div class="frame-measure-body"> <!-- Treść -->
          <strong>Oblicz rozmiar ramy szosowej</strong> <!-- Nagłówek -->
          <p>Długość nogi (cm) × 0,64 = rozmiar ramy w centymetrach. Np. 82 cm × 0,64 = 52,5 cm.</p> <!-- Opis -->
        </div> <!-- Koniec treści -->
      </div> <!-- Koniec kroku 3 -->

    </div> <!-- Koniec kroków pomiaru -->
  </div> <!-- Koniec karty pomiaru -->
  <?php include 'partials/footer.php'; ?>