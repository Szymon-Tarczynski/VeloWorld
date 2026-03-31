<?php
// Zmienne przekazywane do topbar.php
$pageTitle = 'VeloWorld – Najczęstsze usterki';
$pageCss = 'faults.css';
?>

<?php include 'partials/topbar.php'; ?>

<main class="main-content">

  <h2 class="guide-title">Najczęstsze usterki rowerowe</h2>
  <p class="guide-intro">
    Poznaj najczęstsze problemy spotykane w rowerach oraz dowiedz się,
    kiedy możesz poradzić sobie sam, a kiedy warto odwiedzić serwis.
  </p>

  <!-- ===== USTERKA 1 ===== -->
  <div class="guide-card">
    <h3 class="guide-card-title">Problemy z hamulcami</h3>
    <p>
      Słabe hamowanie, piszczenie lub brak reakcji klamki to najczęstsze objawy.
      Przyczyną mogą być zużyte klocki, zapowietrzony układ lub zabrudzone tarcze.
    </p>

    <div class="fault-audio">
      <button class="audio-btn" type="button" data-audio="fault-audio-1">
        <span class="audio-icon">
          <span class="play"></span>
          <span class="pause"></span>
        </span>
        <span class="audio-text">Dźwięk piszczących hamulców</span>
      </button>


      <audio id="fault-audio-1" class="audio-el" preload="metadata">
        <source src="media/faults/brakes.mp3" type="audio/mpeg">
      </audio>

    </div>
  </div>

  <!-- ===== USTERKA 2 ===== -->
  <div class="guide-card">
    <h3 class="guide-card-title">Problemy z przerzutkami</h3>
    <p>
      Przeskakiwanie biegów, hałas lub brak precyzji zmiany przełożeń
      zwykle oznacza złe napięcie linki lub zabrudzoną kasetę.
    </p>

    <div class="fault-audio">
      <button class="audio-btn" type="button" data-audio="fault-audio-2">
        <span class="audio-icon">
          <span class="play"></span>
          <span class="pause"></span>
        </span>
        <span class="audio-text">Odsłuchaj opis</span>
      </button>

      <audio id="fault-audio-2" class="audio-el">
        media/faults/gears.mp3
      </audio>
    </div>
  </div>

  <!-- ===== USTERKA 3 ===== -->
  <div class="guide-card">
    <h3 class="guide-card-title">Zużyty lub suchy łańcuch</h3>
    <p>
      Brak smarowania powoduje szybkie zużycie napędu.
      Regularne czyszczenie i smarowanie znacząco wydłuża jego żywotność.
    </p>

    <div class="fault-audio">
      <button class="audio-btn" type="button" data-audio="fault-audio-3">
        <span class="audio-icon">
          <span class="play"></span>
          <span class="pause"></span>
        </span>
        <span class="audio-text">Odsłuchaj opis</span>
      </button>

      <audio id="fault-audio-3" class="audio-el">
        media/faults/chain.mp3
      </audio>
    </div>
  </div>

  <!-- ===== USTERKA 4 ===== -->
  <div class="guide-card">
    <h3 class="guide-card-title">Krzywe koło</h3>
    <p>
      Bicie koła na boki wpływa na komfort i bezpieczeństwo jazdy.
      Najczęściej wymaga centrowania w profesjonalnym serwisie.
    </p>

    <div class="fault-audio">
      <button class="audio-btn" type="button" data-audio="fault-audio-4">
        <span class="audio-icon">
          <span class="play"></span>
          <span class="pause"></span>
        </span>
        <span class="audio-text">Odsłuchaj opis</span>
      </button>

      <audio id="fault-audio-4" class="audio-el">
        media/faults/wheel.mp3
      </audio>
    </div>
  </div>

  <!-- ===== USTERKA 5 ===== -->
  <div class="guide-card">
    <h3 class="guide-card-title">Przebita opona</h3>
    <p>
      Najczęstsza usterka w trasie. Przyczyną jest szkło, gwóźdź
      lub zbyt niskie ciśnienie w oponie.
    </p>

    <div class="fault-audio">
      <button class="audio-btn" type="button" data-audio="fault-audio-5">
        <span class="audio-icon">
          <span class="play"></span>
          <span class="pause"></span>
        </span>
        <span class="audio-text">Odsłuchaj opis</span>
      </button>

      <audio id="fault-audio-5" class="audio-el">
        media/faults/puncture.mp3
      </audio>
    </div>
  </div>

</main>

<?php include 'partials/footer.php'; ?>