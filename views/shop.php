<?php
// Zmienne przekazywane do topbar.php
$pageTitle = 'VeloWorld – Sklep'; // Tytuł karty przeglądarki
$pageCss   = 'shop.css';         // Własny CSS tej strony
?>
<?php include 'partials/topbar.php'; ?> <!-- Dołącz: head + topbar + otwarcie page-layout -->

  <!-- GŁÓWNA TREŚĆ -->
  <main class="main-content"> <!-- Obszar treści sklepu -->

    <div class="shop-header"> <!-- Nagłówek sklepu z filtrem kategorii -->
      <h2>Sklep <?php if ($category): ?> <!-- Jeśli wybrano kategorię, dołącz jej nazwę -->
        <span class="shop-category-badge"><?php echo htmlspecialchars($category); ?></span> <!-- Badge z nazwą aktywnej kategorii -->
      <?php endif; ?></h2> <!-- Koniec nagłówka -->

      <div class="shop-filters"> <!-- Kontener przycisków filtrów kategorii -->
        <a class="shop-filter-btn <?php echo !$category ? 'active' : ''; ?>"
           href="index.php?page=shop">Wszystkie</a> <!-- Filtr "Wszystkie" – aktywny gdy brak kategorii -->
        <?php
          // Tablica dostępnych kategorii produktów
          $categories = ['Rowery górskie', 'Rowery szosowe', 'Rowery miejskie', 'Akcesoria', 'Części'];
          foreach ($categories as $cat): // Pętla po kategoriach
        ?>
        <a class="shop-filter-btn <?php echo ($category === $cat) ? 'active' : ''; ?>"
           href="index.php?page=shop&category=<?php echo urlencode($cat); ?>"> <!-- URL-encode nazwy kategorii -->
          <?php echo htmlspecialchars($cat); ?> <!-- Bezpieczny wydruk nazwy kategorii -->
        </a> <!-- Koniec przycisku filtra -->
        <?php endforeach; ?> <!-- Koniec pętli po kategoriach -->
      </div> <!-- Koniec filtrów -->
    </div> <!-- Koniec nagłówka sklepu -->

    <?php if (empty($products)): ?> <!-- Jeśli tablica produktów jest pusta -->
      <div class="alert error">Brak produktów w tej kategorii.</div> <!-- Alert o braku produktów -->
    <?php else: ?> <!-- Jeśli są produkty do wyświetlenia -->
      <ul class="product-grid"> <!-- Lista produktów w układzie siatki -->
        <?php foreach ($products as $p): ?> <!-- Pętla po każdym produkcie -->
          <li class="product-card"> <!-- Karta pojedynczego produktu -->
            <div class="product-name"><?php echo htmlspecialchars($p['name']); ?></div> <!-- Nazwa produktu -->
            <?php if (!empty($p['category'])): ?> <!-- Kategoria – tylko jeśli istnieje -->
            <div class="product-category"><?php echo htmlspecialchars($p['category']); ?></div> <!-- Kategoria produktu -->
            <?php endif; ?> <!-- Koniec warunku kategorii -->
            <div class="price"><?php echo htmlspecialchars($p['price']); ?> zł</div> <!-- Cena w złotych -->
            <?php if (!empty($p['description'])): ?> <!-- Opis – tylko jeśli istnieje -->
            <div class="product-desc"><?php echo htmlspecialchars($p['description']); ?></div> <!-- Opis produktu -->
            <?php endif; ?> <!-- Koniec warunku opisu -->
            <a class="btn" href="index.php?page=product&id=<?php echo (int)$p['id']; ?>">Zobacz</a> <!-- Przycisk szczegółów (id rzutowane na int) -->
          </li> <!-- Koniec karty produktu -->
        <?php endforeach; ?> <!-- Koniec pętli po produktach -->
      </ul> <!-- Koniec siatki produktów -->
    <?php endif; ?> <!-- Koniec warunku -->

<?php include 'partials/footer.php'; ?> <!-- Dołącz: zamknięcie main + page-layout + stopka -->