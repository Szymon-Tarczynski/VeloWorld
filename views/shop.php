<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

$pageTitle = 'VeloWorld – Sklep';
$pageCss = 'shop.css';

$category = $_GET['category'] ?? '';
$gender = $_GET['gender'] ?? '';
$bike_type = $_GET['bike_type'] ?? '';
$frame_size = $_GET['frame_size'] ?? '';
$wheel_size = $_GET['wheel_size'] ?? '';
$q = trim($_GET['q'] ?? '');
$view_mode = $_GET['view'] ?? 'classic';

function queryWith(array $add = [], array $remove = []): string
{
  $p = array_merge($_GET, $add);
  foreach ($remove as $k)
    unset($p[$k]);
  return 'index.php?' . http_build_query($p);
}

$categories = ['rower' => 'Rowery', 'akcesoria' => 'Akcesoria', 'części' => 'Części'];
?>

<?php include 'partials/topbar.php'; ?>

<main class="main-content">

  <!-- FLASH MESSAGES -->
  <?php if (!empty($_SESSION['flash_added'])): ?>
    <div class="alert success" style="margin:10px 0;">✅ Dodano do koszyka!</div>
    <?php unset($_SESSION['flash_added']); ?>
  <?php endif; ?>

  <!-- SUB-BAR (bez przycisku koszyka) -->
  <div class="shop-sub-bar">
    <button class="shop-icon-btn" id="filterBtn" onclick="toggleFilters()">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
        <line x1="2" y1="4" x2="14" y2="4" stroke="white" stroke-width="1.4" stroke-linecap="round" />
        <line x1="2" y1="8" x2="14" y2="8" stroke="white" stroke-width="1.4" stroke-linecap="round" />
        <line x1="2" y1="12" x2="14" y2="12" stroke="white" stroke-width="1.4" stroke-linecap="round" />
      </svg>
      Filtry
    </button>


    <a class="shop-icon-btn" id="tinderBtn"
      href="<?php echo queryWith(['view' => $view_mode === 'tinder' ? 'classic' : 'tinder']); ?>">
      <?php echo $view_mode === 'tinder' ? 'Wróć do listy' : 'Tryb przeglądania'; ?>
    </a>

    <?php if ($view_mode === 'tinder'): ?>
      <button class="shop-icon-btn" id="cartBtn" onclick="toggleCart()">
        ♥ Ulubione
        <span class="shop-badge" id="cartBadge" style="display:none">0</span>
      </button>
    <?php endif; ?>
  </div>

  <?php if ($view_mode === 'tinder'): ?>
    <div class="shop-liked-panel glass" id="likedPanel">
      <div class="slp-title">♥ <span id="likedTitle">Ulubione (0)</span></div>
      <div id="likedContent">
        <p class="slp-empty">Jeszcze nic nie polubiłeś</p>
      </div>
    </div>
  <?php endif; ?>

  <!-- PANEL FILTRÓW -->
  <div class="shop-filter-panel glass" id="filterPanel">
    <form method="GET" action="index.php">
      <input type="hidden" name="page" value="shop">
      <input type="hidden" name="view" value="<?php echo htmlspecialchars($view_mode); ?>">

      <div class="sfp-title">Dopasuj rower do siebie</div>
      <div class="sfp-grid">

        <div class="sfp-group">
          <label>Rozmiar ramy</label>
          <div class="sfp-pills" data-name="frame_size">
            <?php foreach (['' => 'Wszystkie', 'XS' => 'XS', 'S' => 'S', 'M' => 'M', 'L' => 'L', 'XL' => 'XL'] as $v => $l): ?>
              <span class="sfp-pill <?php echo $frame_size === $v ? 'active' : ''; ?>"
                data-val="<?php echo htmlspecialchars($v); ?>">
                <?php echo htmlspecialchars($l); ?>
              </span>
            <?php endforeach; ?>
          </div>
          <input type="hidden" name="frame_size" value="<?php echo htmlspecialchars($frame_size); ?>">
        </div>

        <div class="sfp-group">
          <label>Rozmiar koła</label>
          <div class="sfp-pills" data-name="wheel_size">
            <?php foreach ([
              '' => 'Wszystkie',
              '27.5' => '27.5',
              '29' => '29',
              '700c (szosowe/gravel/fitness/trekking)' => '700c'
            ] as $v => $l): ?>
              <span class="sfp-pill <?php echo $wheel_size === $v ? 'active' : ''; ?>"
                data-val="<?php echo htmlspecialchars($v); ?>">
                <?php echo htmlspecialchars($l); ?>
              </span>
            <?php endforeach; ?>
          </div>
          <input type="hidden" name="wheel_size" value="<?php echo htmlspecialchars($wheel_size); ?>">
        </div>

        <div class="sfp-group">
          <label>Typ roweru</label>
          <div class="sfp-pills" data-name="bike_type">
            <?php foreach ([
              '' => 'Wszystkie',
              'Elektryczny' => 'Elektryczny',
              'górski' => 'Górski',
              'szosowy' => 'Szosowy',
              'miejski' => 'Miejski',
              'gravel' => 'Gravel',
              'trekkingowy' => 'Trekkingowy',
              'fitness' => 'Fitness',
              'enduro' => 'Enduro',
              'xc' => 'XC',
              'full' => 'Full Suspension'
            ] as $v => $l): ?>
              <span class="sfp-pill <?php echo $bike_type === $v ? 'active' : ''; ?>"
                data-val="<?php echo htmlspecialchars($v); ?>">
                <?php echo htmlspecialchars($l); ?>
              </span>
            <?php endforeach; ?>
          </div>
          <input type="hidden" name="bike_type" value="<?php echo htmlspecialchars($bike_type); ?>">
        </div>

        <div class="sfp-group">
          <label>Płeć</label>
          <div class="sfp-pills" data-name="gender">
            <?php foreach (['' => 'Wszystkie', 'Damski' => 'Damski', 'Męski' => 'Męski', 'Unisex' => 'Unisex'] as $v => $l): ?>
              <span class="sfp-pill <?php echo $gender === $v ? 'active' : ''; ?>"
                data-val="<?php echo htmlspecialchars($v); ?>">
                <?php echo htmlspecialchars($l); ?>
              </span>
            <?php endforeach; ?>
          </div>
          <input type="hidden" name="gender" value="<?php echo htmlspecialchars($gender); ?>">
        </div>

      </div>
      <button type="submit" class="btn sfp-apply">Pokaż rowery</button>
    </form>
  </div>

  <?php if ($view_mode === 'tinder'): ?>
    <!-- TRYB TINDER -->
    <?php
    $js_bikes = [];
    if (!empty($products)) {
      foreach ($products as $p) {
        $tags_raw = !empty($p['tags_json']) ? json_decode($p['tags_json'], true) : [];
        $js_bikes[] = [
          'id' => (int) $p['id'],
          'name' => $p['name'],
          'emoji' => $p['emoji'] ?? '🚲',
          'image' => $p['image'] ?? '',
          'cat' => $categories[$p['category']] ?? ($p['category'] ?? ''),
          'gender' => $p['gender'] ?? '',
          'price' => number_format((float) $p['price'], 2, ',', ' ') . ' zł',
          'tags' => array_values(array_filter($tags_raw ?: [])),
        ];
      }
    }
    ?>
    <script>
      const ALL_BIKES = <?php echo json_encode(array_values($js_bikes), JSON_UNESCAPED_UNICODE); ?>;
    </script>

    <div class="tinder-area" id="tinderArea">
      <div class="tinder-wrap" id="cardWrap">
        <div class="tinder-card glass" id="bikeCard">
          <div class="tinder-img" id="bikeImg">
            <span id="bikeEmoji" class="tinder-emoji">🚵</span>
          </div>
          <div class="tinder-info">
            <div class="tinder-name" id="bikeName"></div>
            <div class="tinder-cat" id="bikeCat"></div>
            <div class="tinder-price" id="bikePrice"></div>
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
      <p class="tinder-progress" id="tinderProgress">1 / ?</p>
      <div class="tinder-done" id="tinderDone" style="display:none">
        <p>🎉 Przejrzałeś wszystkie rowery!</p>
        <button class="btn" onclick="resetDeck()">Zacznij od nowa</button>
      </div>
    </div>

  <?php else: ?>
    <!-- TRYB KLASYCZNY -->
    <div id="classicView">

      <div class="shop-header">
        <h2>
          Sklep
          <?php if (!empty($category) && isset($categories[$category])): ?>
            <span class="shop-category-badge"><?php echo htmlspecialchars($categories[$category]); ?></span>
          <?php endif; ?>
        </h2>

        <div class="shop-filters">
          <a class="shop-filter-btn <?php echo empty($category) ? 'active' : ''; ?>"
            href="<?php echo queryWith([], ['category']); ?>">Wszystkie</a>

          <?php foreach ($categories as $key => $label): ?>
            <a class="shop-filter-btn <?php echo $category === $key ? 'active' : ''; ?>"
              href="<?php echo queryWith(['category' => $key]); ?>">
              <?php echo htmlspecialchars($label); ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <?php if (empty($products)): ?>
        <div class="alert error">Brak produktów w tej kategorii.</div>
      <?php else: ?>
        <ul class="product-grid">
          <?php foreach ($products as $p):
            $tags = !empty($p['tags_json']) ? json_decode($p['tags_json'], true) : [];
            ?>
            <li class="product-card" data-gender="<?php echo htmlspecialchars($p['gender'] ?? ''); ?>">

              <div class="product-img">
                <?php if (!empty($p['bike_type'])): ?>
                  <div class="bike-type-label"><?php echo htmlspecialchars($p['bike_type']); ?></div>
                <?php endif; ?>

                <?php if (!empty($p['image'])): ?>
                  <img src="<?php echo htmlspecialchars($p['image']); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>">
                <?php else: ?>
                  <span class="product-emoji"><?php echo $p['emoji'] ?? '🚲'; ?></span>
                <?php endif; ?>
              </div>

              <?php if (!empty($p['gender'])): ?>
                <span class="product-cat-badge product-cat-badge--<?php echo htmlspecialchars(strtolower($p['gender'])); ?>">
                  <?php echo htmlspecialchars($p['gender']); ?>
                </span>
              <?php endif; ?>

              <div class="product-body">
                <div class="product-name"><?php echo htmlspecialchars($p['name']); ?></div>

                <?php if (!empty($tags)): ?>
                  <div class="product-tags">
                    <?php foreach ($tags as $tag): ?>
                      <span class="product-tag"><?php echo htmlspecialchars($tag); ?></span>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>

                <?php if (!empty($p['description'])): ?>
                  <div class="product-desc"><?php echo htmlspecialchars($p['description']); ?></div>
                <?php endif; ?>

                <div class="price"><?php echo htmlspecialchars($p['price']); ?> zł</div>

                <div class="product-actions" style="display:flex; gap:10px; flex-wrap:wrap;">
                  <a class="btn" href="index.php?page=product&id=<?php echo (int) $p['id']; ?>">
                    Zobacz
                  </a>

                  <!-- DODAJ DO KOSZYKA — przekierowuje do koszyka -->
                  <form method="POST" action="index.php?page=cart_action" style="margin:0;">
                    <input type="hidden" name="action" value="add">
                    <input type="hidden" name="id" value="<?php echo (int) $p['id']; ?>">
                    <input type="hidden" name="qty" value="1">
                    <input type="hidden" name="redirect" value="index.php?page=cart">
                    <input type="hidden" name="name" value="<?php echo htmlspecialchars($p['name']); ?>">
                    <input type="hidden" name="price" value="<?php echo htmlspecialchars((string) ((float) $p['price'])); ?>">
                    <input type="hidden" name="image" value="<?php echo htmlspecialchars($p['image'] ?? ''); ?>">
                    <input type="hidden" name="bike_type" value="<?php echo htmlspecialchars($p['bike_type'] ?? ''); ?>">
                    <input type="hidden" name="emoji" value="<?php echo htmlspecialchars($p['emoji'] ?? '🚲'); ?>">
                    <button type="submit" class="btn btn-primary">Dodaj do koszyka</button>
                  </form>
                </div>

              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

    </div>
  <?php endif; ?>

</main>