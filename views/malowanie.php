<?php
// views/guides/malowanie.php
$pageTitle = 'VeloWorld – Malowanie i oklejanie roweru';
$pageCss   = 'service_guide.css'; // reużywamy istniejący styl poradników
$pageCss2   = 'malowanie.css'; // reużywamy istniejący styl poradników
?>

<?php include 'partials/topbar.php'; ?>

<main class="main-content">
  <div class="guide-hero glass">
    <div class="guide-hero-icon">🎨</div>
    <div class="guide-hero-text">
      <h1 class="guide-hero-title">Malowanie i oklejanie roweru</h1>
      <p class="guide-hero-sub">
        Odśwież wygląd swojego roweru — od przygotowania ramy po profesjonalne wykończenie.
        Dowiedz się jak malować samodzielnie i jak przyklejać folie ochronne.
      </p>
    </div>
  </div>

  <!-- ════ SEKCJA 1: Malowanie ════ -->
  <div class="guide-section">
    <h2 class="guide-section-title">Malowanie ramy</h2>

    <div class="guide-steps">

      <div class="guide-step glass">
        <div class="guide-step-num">01</div>
        <div class="guide-step-body">
          <h3>Demontaż i oczyszczenie</h3>
          <p>
            Przed malowaniem zdejmij wszystkie komponenty — napęd, hamulce, widelec, suport.
            Ramę dokładnie odtłuść acetonem lub zmywaczem do farb. Stara farba powinna zostać
            zeszlifowana papierem ściernym o gradacji 120, a następnie 240.
          </p>
          <div class="guide-tip">
            Ramy aluminiowe i karbonowe wymagają specjalnych podkładów — nie używaj zwykłego
            gruntu do metalu.
          </div>
        </div>
      </div>

      <div class="guide-step glass">
        <div class="guide-step-num">02</div>
        <div class="guide-step-body">
          <h3>Podkład (grunt)</h3>
          <p>
            Nałóż 2 warstwy podkładu epoksydowego w spray'u, zachowując odległość ok. 25–30 cm
            od powierzchni. Każdą warstwę schnij minimum 30 minut. Po wyschnięciu delikatnie
            przeszlifuj papierem 400.
          </p>
          <div class="guide-warning">
            <span class="tip-icon">⚠️</span>
            Pracuj w dobrze wentylowanym pomieszczeniu. Temperatura powietrza powinna wynosić
            15–25°C — zbyt niska lub zbyt wysoka temperatura pogarsza przyczepność farby.
          </div>
        </div>
      </div>

      <div class="guide-step glass">
        <div class="guide-step-num">03</div>
        <div class="guide-step-body">
          <h3>Kolor bazowy</h3>
          <p>
            Nanieś 3–4 cienkie warstwy farby nawierzchniowej. Lepsze efekty dają farby
            akrylowe w spray'u niż farby do pistoletów przy amatorskim malowaniu.
            Każdą warstwę schnij 20–40 minut. Unikaj grubych warstw — powodują zacieki.
          </p>
          <div class="guide-colors">
            <div class="color-chip" style="background:#1a1a2e">Matt Black</div>
            <div class="color-chip" style="background:#e63946">Race Red</div>
            <div class="color-chip" style="background:#457b9d">Steel Blue</div>
            <div class="color-chip" style="background:#2d6a4f">Forest Green</div>
            <div class="color-chip" style="background:#f4a261">Desert Orange</div>
            <div class="color-chip" style="background:#c8b6ff; color:#333">Lavender</div>
          </div>
          <p class="guide-colors-note">Popularne kolory wśród rowerzystów MTB i szosowych</p>
        </div>
      </div>

      <div class="guide-step glass">
        <div class="guide-step-num">04</div>
        <div class="guide-step-body">
          <h3>Lakier bezbarwny (clear coat)</h3>
          <p>
            Po 24h od nałożenia koloru nałóż 2–3 warstwy lakieru bezbarwnego UV.
            Chroni on kolor przed zarysowaniami i promieniowaniem UV. Do wyboru:
            mat, satin lub połysk — każdy daje zupełnie inny efekt końcowy.
          </p>
          <div class="guide-tip">
            Lakier matowy ukrywa drobne niedoskonałości powierzchni lepiej niż połysk —
            dobry wybór przy pierwszym malowaniu.
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- ════ SEKCJA 2: Oklejanie ════ -->
  <div class="guide-section">
    <h2 class="guide-section-title">Oklejanie folią ochronną (PPF)</h2>

    <div class="guide-cards">

      <div class="guide-info-card glass">
        <h3>Czym jest PPF?</h3>
        <p>
          Paint Protection Film to przezroczysta folia poliuretanowa naklejana na ramę.
          Chroni lakier przed odpryskami kamieni, zarysowaniami od krzaków i UV.
          Grubość typowej folii to 150–200 mikronów.
        </p>
      </div>

      <div class="guide-info-card glass">
        <h3>Przygotowanie powierzchni</h3>
        <p>
          Rama musi być idealnie czysta i odtłuszczona. Użyj IPA (alkoholu izopropylowego)
          70%. Wszelkie zanieczyszczenia pod folią będą widoczne i niemożliwe do usunięcia
          bez odklejenia.
        </p>
      </div>

      <div class="guide-info-card glass">
        <h3>Metoda mokra vs sucha</h3>
        <p>
          <strong>Mokra:</strong> spryskaj ramę roztworem wody z płynem do naczyń (kilka kropel).
          Folia łatwiej się pozycjonuje, masz czas na korekty.<br><br>
          <strong>Sucha:</strong> trudniejsza, ale bez ryzyka bąbelków z wody.
          Zalecana dla małych elementów jak łańcuchownik.
        </p>
      </div>

      <div class="guide-info-card glass">
        <h3>Cięcie i naklejanie</h3>
        <p>
          Gotowe zestawy do popularnych modeli ram kupisz online (~100–300 zł).
          Przy samodzielnym cięciu używaj plotera lub ostrego noża i szablonów.
          Folia powinna zachodzić na krawędzie ramy o minimum 5 mm.
        </p>
      </div>

      <div class="guide-info-card glass">
        <h3>Wygrzewanie i usuwanie bąbelków</h3>
        <p>
          Opalarką (60–70°C) podgrzej folię i wygładź ją za pomocą rakli z filcem.
          Ruch od środka do krawędzi. Bąbelki powietrza można nakłuć igłą i wygładzić
          po podgrzaniu.
        </p>
      </div>

      <div class="guide-info-card glass">
        <h3>Czas schnięcia</h3>
        <p>
          Folia potrzebuje 48–72h do pełnego związania z lakierem. W tym czasie
          unikaj mycia roweru i jazdy w deszczu. Po tym czasie folia jest wodoodporna
          i gotowa na każde warunki.
        </p>
      </div>

    </div>
  </div>

  <!-- ════ SEKCJA 3: Naklejki dekoracyjne ════ -->
  <div class="guide-section">
    <h2 class="guide-section-title">Naklejki dekoracyjne i decale</h2>

    <div class="guide-step glass" style="margin-bottom:14px;">
      <div class="guide-step-num" style="background:rgba(255,200,0,0.15);color:#fcd34d;">★</div>
      <div class="guide-step-body">
        <h3>Decale (kalkomanie wodne)</h3>
        <p>
          Tradycyjna metoda stosowana przez producentów. Arkusz decali moczy się w wodzie
          przez 30–60 sekund, a następnie naklejka ześlizguje się na powierzchnię.
          Wymaga lakierowania na wierzchu dla trwałości. Efekt: profesjonalne logo producenta
          lub własny wzór zamówiony w drukarni (~50 zł za arkusz A4).
        </p>
      </div>
    </div>

    <div class="guide-step glass">
      <div class="guide-step-num" style="background:rgba(255,200,0,0.15);color:#fcd34d;">★</div>
      <div class="guide-step-body">
        <h3>Naklejki winylowe</h3>
        <p>
          Najłatwiejsza opcja — gotowe wzory lub własny projekt wycięty przez ploter.
          Folia matowa lub połyskująca, od 30 zł za zestaw. Naklejaj od środka wzoru
          na zewnątrz, odpowietrzając na bieżąco. Trwałość: 3–5 lat na zewnątrz.
        </p>
        <div class="guide-tip">
          <span class="tip-icon">💡</span>
          Naklejki na ramę dobrze wyglądają jako kontrast do koloru ramy — jasne wzory
          na ciemnym tle i odwrotnie. Unikaj zbyt wielu wzorów naraz.
        </div>
      </div>
    </div>
  </div>

  <!-- ════ CTA ════ -->
  <div class="guide-cta glass">
    <div class="guide-cta-text">
      <h3>Wolisz żebyśmy zrobili to za Ciebie?</h3>
      <p>Oferujemy profesjonalne malowanie proszkowe i oklejanie folią PPF w naszym warsztacie.</p>
    </div>
    <a href="index.php?page=workshop" class="btn guide-cta-btn">Umów serwis</a>
  </div>

</main>

<style>
