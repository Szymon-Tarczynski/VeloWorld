<?php
$pageTitle = 'VeloWorld – Konfigurator Roweru';
$pageCss   = 'creator.css';
$pageJs    = 'creator.js';
?>

<?php include 'partials/topbar.php'; ?>

<main class="main-content">

  <div class="bg-dots" id="bgDots"></div>

  <section class="configurator">

    <div class="cfg-header">
      <h1>Konfigurator Roweru</h1>
      <p>Dobierz części i sprawdź kompatybilność zestawu w czasie rzeczywistym</p>
    </div>

    <div class="progress-wrap">
      <div class="progress-bar" id="progressBar" style="width:0%"></div>
    </div>

    <!-- KROKI -->
    <div class="cfg-steps" id="stepsRow"></div>

    <!-- ✅ GLOBALNY KOMUNIKAT KOMPATYBILNOŚCI (NOWE, KLUCZOWE) -->
    <div id="globalCompat" class="global-compat"></div>

    <!-- SEKCJE Z KARTAMI -->
    <div id="sectionsContainer"></div>

    <!-- PODSUMOWANIE KOMPATYBILNOŚCI (stare, dolne) -->
    <div class="compat-panel">
      <div class="compat-title">Podsumowanie kompatybilności</div>
      <div class="compat-list" id="compatList">
        <div style="color:var(--text-muted);font-size:.82rem;">
          Wybierz części, aby zobaczyć sprawdzenie kompatybilności.
        </div>
      </div>
    </div>

    <!-- WYNIK KOŃCOWY -->
    <div class="final-card" id="finalCard" style="display:none"></div>

    <!-- PODSUMOWANIE ZESTAWU -->
    <div class="summary-bar">
      <div class="sum-item">
        <div class="sum-label">Wybrane części</div>
        <div class="sum-val" id="sumCount">0 / 7</div>
      </div>

      <div class="sum-item">
        <div class="sum-label">Szacowana cena</div>
        <div class="sum-val price" id="sumPrice">0 zł</div>
      </div>

      <div class="sum-item">
        <div class="sum-label">Status zestawu</div>
        <div class="sum-val" id="sumStatus">–</div>
      </div>

      <div style="display:flex;gap:10px;flex-wrap:wrap;">
        <button class="btn-reset" id="btnReset" type="button" onclick="resetAll()">↺ Reset</button>
        <button class="btn-check" id="btnCheck" type="button" onclick="runFinalCheck()" disabled>
          Sprawdź komplet
        </button>
        <button class="btn-cart" id="btnCart" type="button" onclick="addSetToCart()" disabled>
          <span id="btnCartLabel">Dodaj zestaw do koszyka</span>
        </button>
      </div>
    </div>

  </section>

  <!-- TOAST – globalne powiadomienie -->
  <div class="cfg-toast" id="cfgToast">
    <div class="cfg-toast-icon" id="cfgToastIcon"></div>
    <div class="cfg-toast-body">
      <div class="cfg-toast-title" id="cfgToastTitle"></div>
      <div class="cfg-toast-sub" id="cfgToastSub"></div>
    </div>
  </div>

</main>

<?php include 'partials/footer.php'; ?>
