<?php
// Zmienne przekazywane do topbar.php
$pageTitle = 'VeloWorld – Rezerwacja przyjęta'; // Tytuł karty przeglądarki
$pageCss   = 'booking_success.css';    // Własny CSS tej strony 
$pageCss2 = 'centered.css';        // Własny CSS tej strony
?>
<?php include 'partials/topbar.php'; ?> <!-- Dołącz: head + topbar + otwarcie page-layout -->

  <!-- GŁÓWNA TREŚĆ – wyśrodkowana pionowo i poziomo -->
  <main class="main-content main-content--center"> <!-- Klasa --center wyśrodkowuje kartę na ekranie -->

    <div class="booking-success"> <!-- Karta potwierdzenia rezerwacji -->
      <h2 class="booking-success-title">Rezerwacja przyjęta!</h2> <!-- Nagłówek sukcesu -->
      <p class="booking-success-sub">Dziękujemy, skontaktujemy się z Tobą wkrótce.</p> <!-- Podtytuł -->

      <div class="booking-summary"> <!-- Tabela z podsumowaniem danych rezerwacji -->

        <div class="booking-summary-row"> <!-- Wiersz: imię i nazwisko -->
          <span class="booking-summary-label">Imię i nazwisko</span> <!-- Etykieta -->
          <span class="booking-summary-value"><?php echo htmlspecialchars($booking['customer_name']); ?></span> <!-- Wartość (zabezpieczona) -->
        </div> <!-- Koniec wiersza -->

        <?php if (!empty($booking['phone'])): ?> <!-- Telefon – tylko jeśli użytkownik go podał -->
        <div class="booking-summary-row"> <!-- Wiersz: telefon -->
          <span class="booking-summary-label">Telefon</span> <!-- Etykieta -->
          <span class="booking-summary-value"><?php echo htmlspecialchars($booking['phone']); ?></span> <!-- Wartość -->
        </div> <!-- Koniec wiersza -->
        <?php endif; ?> <!-- Koniec warunku telefonu -->

        <div class="booking-summary-row"> <!-- Wiersz: wybrana usługa -->
          <span class="booking-summary-label">Usługa</span> <!-- Etykieta -->
          <span class="booking-summary-value"><?php echo htmlspecialchars($booking['service']); ?></span> <!-- Wartość -->
        </div> <!-- Koniec wiersza -->

        <div class="booking-summary-row"> <!-- Wiersz: data wizyty -->
          <span class="booking-summary-label">Data wizyty</span> <!-- Etykieta -->
          <span class="booking-summary-value"><?php echo htmlspecialchars($booking['date']); ?></span> <!-- Wartość -->
        </div> <!-- Koniec wiersza -->

        <?php if (!empty($booking['note'])): ?> <!-- Uwagi – tylko jeśli użytkownik coś wpisał -->
        <div class="booking-summary-row"> <!-- Wiersz: uwagi -->
          <span class="booking-summary-label">Uwagi</span> <!-- Etykieta -->
          <span class="booking-summary-value"><?php echo htmlspecialchars($booking['note']); ?></span> <!-- Wartość -->
        </div> <!-- Koniec wiersza -->
        <?php endif; ?> <!-- Koniec warunku uwag -->

      </div> <!-- Koniec tabeli podsumowania -->

      <a class="btn" href="index.php?page=home">Wróć na stronę główną</a> <!-- Przycisk powrotu do home -->
    </div> <!-- Koniec karty potwierdzenia -->

<?php include 'partials/footer.php'; ?> <!-- Dołącz: zamknięcie main + page-layout + stopka -->