<?php
$pageTitle = 'VeloWorld – Sklep';
$pageCss   = 'shop.css';
?>
<?php include 'partials/topbar.php'; ?>

  <main class="main-content">

    <!-- SUB-BAR: koszyk + filtry -->
    <div class="shop-sub-bar">
      <button class="shop-icon-btn" id="cartBtn" onclick="toggleCart()">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
          <path d="M2 2h1.5l2 7h7l1.5-5H5" stroke="white" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          <circle cx="7" cy="13" r="1" fill="white"/>
          <circle cx="12" cy="13" r="1" fill="white"/>
        </svg>
        Ulubione
        <span class="shop-badge" id="cartBadge" style="display:none">0</span>
      </button>

      <button class="shop-icon-btn" id="filterBtn" onclick="toggleFilters()">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
          <line x1="2" y1="4" x2="14" y2="4" stroke="white" stroke-width="1.4" stroke-linecap="round"/>
          <line x1="2" y1="8" x2="14" y2="8" stroke="white" stroke-width="1.4" stroke-linecap="round"/>
          <line x1="2" y1="12" x2="14" y2="12" stroke="white" stroke-width="1.4" stroke-linecap="round"/>
        </svg>
        Filtry
      </button>
    </div>

    <!-- PANEL FILTRÓW -->
    <div class="shop-filter-panel glass" id="filterPanel">
      <div class="sfp-title">Dopasuj rower do siebie</div>
      <div class="sfp-grid">

        <div class="sfp-group">
          <label>Rozmiar ramy</label>
          <div class="sfp-pills" id="sizeFilter">
            <span class="sfp-pill active" data-val="">Wszystkie</span>
            <span class="sfp-pill" data-val="XS">XS</span>
            <span class="sfp-pill" data-val="S">S</span>
            <span class="sfp-pill" data-val="M">M</span>
            <span class="sfp-pill" data-val="L">L</span>
            <span class="sfp-pill" data-val="XL">XL</span>
          </div>
        </div>

        <div class="sfp-group">
          <label>Rozmiar koła</label>
          <div class="sfp-pills" id="wheelFilter">
            <span class="sfp-pill active" data-val="">Wszystkie</span>
            <span class="sfp-pill" data-val='26"'>26"</span>
            <span class="sfp-pill" data-val='27.5"'>27.5"</span>
            <span class="sfp-pill" data-val='29"'>29"</span>
            <span class="sfp-pill" data-val="700c">700c</span>
          </div>
        </div>

        <div class="sfp-group">
          <label>Typ roweru</label>
          <div class="sfp-pills" id="typeFilter">
            <span class="sfp-pill active" data-val="">Wszystkie</span>
            <span class="sfp-pill" data-val="Zwykły">Zwykły</span>
            <span class="sfp-pill" data-val="Elektryczny">Elektryczny</span>
          </div>
        </div>

        <div class="sfp-group">
          <label>Płeć</label>
          <div class="sfp-pills" id="genderFilter">
            <span class="sfp-pill active" data-val="">Wszystkie</span>
            <span class="sfp-pill" data-val="Damski">Damski</span>
            <span class="sfp-pill" data-val="Męski">Męski</span>
            <span class="sfp-pill" data-val="Unisex">Unisex</span>
          </div>
        </div>

      </div>
      <button class="btn sfp-apply" onclick="applyFilters()">Pokaż rowery</button>
    </div>

    <!-- KOSZYK ULUBIONYCH -->
    <div class="shop-liked-panel glass" id="likedPanel">
      <div class="slp-title">♥ <span id="likedTitle">Ulubione (0)</span></div>
      <div id="likedContent"><p class="slp-empty">Jeszcze nic nie polubiłeś</p></div>
    </div>

    <!-- TRYB TINDER -->
    <div class="tinder-area" id="tinderArea">
      <p class="tinder-hint">Przeciągnij w prawo ♥ aby polubić, w lewo ✕ aby pominąć</p>

      <div class="tinder-wrap" id="cardWrap">
        <div class="tinder-card glass" id="bikeCard">
          <div class="tinder-img" id="bikeImg">
            <span id="bikeEmoji" class="tinder-emoji">🚵</span>
          </div>
          <div class="tinder-info">
            <div class="tinder-name" id="bikeName">Trek Marlin 7</div>
            <div class="tinder-cat" id="bikeCat">Rower górski • Męski</div>
            <div class="tinder-price" id="bikePrice">3 499 zł</div>
            <div class="tinder-tags" id="bikeTags"></div>
          </div>
          <div class="tinder-like-ov" id="likeOv">LUBIĘ ♥</div>
          <div class="tinder-nope-ov" id="nopeOv">POMIJAM ✕</div>
        </div>
      </div>

      <div class="tinder-btns">
        <button class="tinder-btn skip" onclick="swipeAction('skip')">✕</button>
        <button class="tinder-btn like" onclick="swipeAction('like')">♥</button>
      </div>

      <p class="tinder-progress" id="tinderProgress">1 / 8</p>
    </div>

    <!-- KONIEC TALII -->
    <div class="tinder-done" id="tinderDone" style="display:none">
      <p>🎉 Przejrzałeś wszystkie rowery!</p>
      <button class="btn" onclick="resetDeck()">Zacznij od nowa</button>
    </div>

  </main>
