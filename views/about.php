<?php
// views/about.php
$pageTitle = 'VeloWorld – O nas';
$pageCss = 'about.css';
?>

<?php include 'partials/topbar.php'; ?>

<main class="main-content about-page">

    <!-- ════ SEKCJA GŁÓWNA ════ -->
    <div class="about-hero glass">

        <!-- LEWA: opis -->
        <div class="about-text">
            <div class="about-tag">Nasza historia</div>
            <h1 class="about-title">Pasja do<br>dwóch kółek</h1>
            <p class="about-lead">
                VeloWorld to wrocławski sklep i serwis rowerowy założony przez entuzjastów MTB
                z jedną misją — sprawić, żebyś jeździł lepiej i czerpał z tego czystą przyjemność.
            </p>
            <p class="about-body">
                Zaczęliśmy od małego warsztatu przy ul. Świdnickiej, gdzie naprawialiśmy rowery
                sąsiadom i znajomym. Dziś obsługujemy setki klientów rocznie, prowadzimy w pełni
                wyposażony serwis i oferujemy starannie dobrany asortyment rowerów — od crossowych
                po elektryczne enduro.
            </p>
            <p class="about-body">
                Każdy rower, który trafia do naszych rąk, traktujemy jak własny. Nie sprzedajemy
                sprzętu — pomagamy dobrać go tak, żeby służył latami i napędzał Cię do kolejnych
                przygód.
            </p>

            <div class="about-stats">
                <div class="about-stat">
                    <span class="stat-num">8+</span>
                    <span class="stat-label">lat doświadczenia</span>
                </div>
                <div class="about-stat">
                    <span class="stat-num">1200+</span>
                    <span class="stat-label">zadowolonych klientów</span>
                </div>
                <div class="about-stat">
                    <span class="stat-num">350+</span>
                    <span class="stat-label">serwisów rocznie</span>
                </div>
            </div>
        </div>

        <!-- PRAWA: zdjęcie -->
        <div class="about-img-wrap">
            <div class="about-img-frame">
                <!-- Placeholder z unsplash — możesz podmienić na własne zdjęcie -->
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80" alt="VeloWorld warsztat"
                    class="about-img">
                <div class="about-img-badge glass">
                    <div>
                        <div class="badge-title">Najlepszy serwis</div>
                        <div class="badge-sub">Wrocław 2023</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ════ SEPARATOR ════ -->
    <div class="about-divider">
        <span class="about-divider-label">Dane kontaktowe</span>
    </div>

    <!-- ════ KONTAKT ════ -->
    <div class="contact-grid">

        <div class="contact-card glass">
            <div class="cc-icon"></div>
            <div class="cc-label">Adres</div>
            <div class="cc-value">ul. Świdnicka 12</div>
            <div class="cc-sub">50-066 Wrocław</div>
        </div>

        <div class="contact-card glass">
            <div class="cc-icon"></div>
            <div class="cc-label">Godziny otwarcia</div>
            <div class="cc-value">Pn – Pt: 9:00 – 18:00</div>
            <div class="cc-sub">Sob: 10:00 – 15:00 · Nd: zamknięte</div>
        </div>

        <div class="contact-card glass">
            <div class="cc-icon"></div>
            <div class="cc-label">Telefon</div>
            <a href="tel:+48712345678" class="cc-value cc-link">+48 71 234 56 78</a>
            <div class="cc-sub">Zadzwoń lub wyślij SMS</div>
        </div>

        <div class="contact-card glass">
            <div class="cc-icon"></div>
            <div class="cc-label">E-mail</div>
            <a href="mailto:kontakt@veloworld.pl" class="cc-value cc-link">kontakt@veloworld.pl</a>
            <div class="cc-sub">Odpowiadamy w ciągu 24h</div>
        </div>

        <div class="contact-card glass">
            <div class="cc-icon"></div>
            <div class="cc-label">Social media</div>
            <div class="cc-value">@veloworld_wroclaw</div>
            <div class="cc-socials">
                <a href="#" class="cc-social-btn">Instagram</a>
                <a href="#" class="cc-social-btn">Facebook</a>
            </div>
        </div>

        <div class="contact-card glass contact-card--cta">
            <div class="cc-icon"></div>
            <div class="cc-label">Umów serwis</div>
            <div class="cc-value">Szybko i wygodnie online</div>
            <a href="index.php?page=workshop" class="btn cc-cta-btn">Zarezerwuj termin</a>
        </div>

    </div>

</main>