<?php
// Zmienne przekazywane do topbar.php
$pageTitle = 'VeloWorld – Warsztat'; // Tytuł karty przeglądarki
$pageCss   = 'workshop.css';  // Własny CSS tej strony    
$pageCss2 = 'centered.css';   // Własny CSS tej strony
?>
<?php include 'partials/topbar.php'; ?> <!-- Dołącz: head + topbar + otwarcie page-layout -->

  <!-- GŁÓWNA TREŚĆ -->
  <main class="main-content"> <!-- Obszar głównej treści -->

    <!-- LISTA USŁUG -->
    <section class="workshop-services"> <!-- Sekcja usług warsztatu -->
      <h2>Nasze usługi</h2> <!-- Nagłówek sekcji -->
      <div class="services-grid"> <!-- Siatka kart usług -->

        <div class="service-card"> <!-- Karta usługi -->
          <div class="service-name">Przegląd podstawowy</div> <!-- Nazwa usługi -->
          <div class="service-desc">Kompleksowy przegląd stanu technicznego roweru.</div> <!-- Opis -->
        </div> <!-- Koniec karty -->

        <div class="service-card"> <!-- Karta usługi -->
          <div class="service-name">Regulacja hamulców</div> <!-- Nazwa usługi -->
          <div class="service-desc">Ustawienie szczęk, naciąg linki, test działania.</div> <!-- Opis -->
        </div> <!-- Koniec karty -->

        <div class="service-card"> <!-- Karta usługi -->
          <div class="service-name">Regulacja przerzutek</div> <!-- Nazwa usługi -->
          <div class="service-desc">Ograniczniki H/L, napięcie linki, płynność zmiany biegów.</div> <!-- Opis -->
        </div> <!-- Koniec karty -->

        <div class="service-card"> <!-- Karta usługi -->
          <div class="service-name">Wymiana łańcucha / kasety</div> <!-- Nazwa usługi -->
          <div class="service-desc">Kontrola zużycia, wymiana, smarowanie układu napędowego.</div> <!-- Opis -->
        </div> <!-- Koniec karty -->

        <div class="service-card"> <!-- Karta usługi -->
          <div class="service-name">Centrowanie kół</div> <!-- Nazwa usługi -->
          <div class="service-desc">Likwidacja ósemek, regulacja naciągu szprych.</div> <!-- Opis -->
        </div> <!-- Koniec karty -->

      </div> <!-- Koniec siatki usług -->
    </section> <!-- Koniec sekcji usług -->

    <!-- BLOK BŁĘDÓW WALIDACJI -->
    <?php if (!empty($errors ?? [])): ?> <!-- Wyświetl błędy jeśli PHP je przekazał -->
      <div class="alert error"> <!-- Alert błędu -->
        <strong>Popraw błędy:</strong> <!-- Nagłówek alertu -->
        <ul> <!-- Lista błędów -->
          <?php foreach ($errors as $e): ?> <!-- Pętla po tablicy błędów -->
            <li><?php echo htmlspecialchars($e); ?></li> <!-- Bezpieczny wydruk błędu -->
          <?php endforeach; ?> <!-- Koniec pętli -->
        </ul> <!-- Koniec listy -->
      </div> <!-- Koniec alertu -->
    <?php endif; ?> <!-- Koniec warunku -->

    <!-- FORMULARZ REZERWACJI -->
    <section class="workshop-booking workshop-booking--center"> <!-- Sekcja formularza rezerwacji -->
      <h2>Umów rezerwację serwisu</h2> <!-- Nagłówek formularza -->

      <form class="form" method="post" action="index.php?page=submit_booking"> <!-- Formularz POST do routera -->

        <label> <!-- Pole: imię i nazwisko -->
          Imię i nazwisko * <!-- Etykieta wymagana -->
          <input type="text" name="customer_name" required
                 value="<?php echo htmlspecialchars($old['customer_name'] ?? ''); ?>"> <!-- Wymagane pole; przywraca wartość po błędzie -->
        </label> <!-- Koniec pola -->

        <label> <!-- Pole: telefon -->
          Telefon <!-- Etykieta (opcjonalne) -->
          <input type="tel" name="phone" placeholder="np. 500123456"
                 value="<?php echo htmlspecialchars($old['phone'] ?? ''); ?>"> <!-- Pole tel; przywraca wartość -->
        </label> <!-- Koniec pola -->

        <label> <!-- Pole: wybór usługi -->
          Usługa * <!-- Etykieta wymagana -->
          <select name="service" required> <!-- Wymagany select -->
            <?php
              // Tablica dostępnych usług warsztatu
              $services = ['Przegląd', 'Regulacja hamulców', 'Regulacja przerzutek', 'Wymiana łańcucha', 'Centrowanie kół'];
              $sel = $old['service'] ?? ''; // Poprzednio wybrana usługa (po błędzie)
              foreach ($services as $s) { // Pętla po usługach
                $selected = ($sel === $s) ? 'selected' : ''; // Zaznacz wybraną wcześniej
                echo '<option value="' . htmlspecialchars($s) . '" ' . $selected . '>'
                   . htmlspecialchars($s) . '</option>'; // Wyrenderuj opcję selecta
              }
            ?>
          </select> <!-- Koniec select -->
        </label> <!-- Koniec pola -->

        <label> <!-- Pole: data wizyty -->
          Data wizyty * <!-- Etykieta wymagana -->
          <input type="date" name="date" required
                 value="<?php echo htmlspecialchars($old['date'] ?? ''); ?>"> <!-- Wymagane pole daty; przywraca wartość -->
        </label> <!-- Koniec pola -->

        <label> <!-- Pole: uwagi -->
          Uwagi <!-- Etykieta (opcjonalne) -->
          <textarea name="note" rows="3"><?php echo htmlspecialchars($old['note'] ?? ''); ?></textarea> <!-- Pole textarea; przywraca tekst -->
        </label> <!-- Koniec pola -->

        <button class="btn" type="submit">Zarezerwuj</button> <!-- Przycisk wysłania formularza -->

      </form> <!-- Koniec formularza -->
    </section> <!-- Koniec sekcji rezerwacji -->

<?php include 'partials/footer.php'; ?> <!-- Dołącz: zamknięcie main + page-layout + stopka -->