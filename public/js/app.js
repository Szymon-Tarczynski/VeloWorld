document.addEventListener('DOMContentLoaded', function () { // Wykonaj dopiero gdy cały HTML jest gotowy


  // --- WALIDACJA FORMULARZA REZERWACJI (po stronie klienta) ---
  document.addEventListener('submit', (e) => {               // Słuchaj zdarzeń 'submit' w całym dokumencie
    const form = e.target;                                   // Formularz, który został wysłany
    if (form.id !== 'booking-form') return;                  // Reaguj tylko na nasz formularz rezerwacji

    const name = form.querySelector('input[name="customer_name"]').value.trim(); // Odczytaj imię i nazwisko
    const service = form.querySelector('select[name="service"]').value.trim();   // Odczytaj usługę
    const dateStr = form.querySelector('input[name="date"]').value;              // Odczytaj datę (string)

    const errors = [];                                       // Tablica błędów walidacji
    if (!name) errors.push('Podaj imię i nazwisko.');        // Wymagane: imię i nazwisko
    if (!service) errors.push('Wybierz usługę.');            // Wymagane: usługa
    if (!dateStr) {                                          // Wymagane: data
      errors.push('Wybierz datę.');
    } else {                                                 // Jeśli data jest podana...
      const today = new Date();                              // Dzisiejsza data/godzina
      today.setHours(0, 0, 0, 0);                               // Ustaw godzinę na 00:00 (porównujemy tylko daty)
      const chosen = new Date(dateStr + 'T00:00:00');        // Utwórz obiekt Date z danych input[type=date]
      if (chosen < today) errors.push('Data nie może być z przeszłości.'); // Sprawdź przeszłość
    }

    if (errors.length) {                                     // Jeśli są błędy...
      e.preventDefault();                                    // Zatrzymaj wysłanie formularza
      alert('Popraw formularz:\n- ' + errors.join('\n- '));  // Pokaż listę błędów użytkownikowi
    }
  });

  // --- KOSZYK (localStorage) —--
  const CART_KEY = 'cart';                                   // Nazwa klucza w localStorage

  function loadCart() {                                      // Funkcja: wczytaj koszyk z localStorage
    try { return JSON.parse(localStorage.getItem(CART_KEY)) || []; } // Zwróć tablicę koszyka lub pustą
    catch { return []; }                                     // W razie błędu parsowania zwróć pustą tablicę
  }

  function saveCart(cart) {                                  // Funkcja: zapisz koszyk do localStorage
    localStorage.setItem(CART_KEY, JSON.stringify(cart));    // Serializuj tablicę koszyka jako JSON
  }

  document.addEventListener('click', (e) => {                // Delegacja zdarzeń 'click'
    if (!e.target.matches('.add-to-cart')) return;           // Reaguj tylko na przyciski dodawania do koszyka
    const btn = e.target;                                    // Element przycisku

    const item = {                                           // Złóż obiekt produktu z atrybutów data-*
      id: Number(btn.dataset.id),                            // ID produktu (liczba)
      name: btn.dataset.name,                                // Nazwa produktu (tekst)
      price: Number(btn.dataset.price),                      // Cena (liczba)
      qty: 1                                                 // Domyślna ilość 1
    };

    const cart = loadCart();                                 // Wczytaj aktualny koszyk
    const existing = cart.find(p => p.id === item.id);       // Sprawdź, czy produkt jest już w koszyku
    if (existing) existing.qty += 1; else cart.push(item);   // Zwiększ ilość lub dodaj nowy wpis
    saveCart(cart);                                          // Zapisz koszyk
    alert('Dodano do koszyka: ' + item.name);                // Pokaż komunikat użytkownikowi
  });

  // --- SKRYPT SLIDERA ---
  var guideTrack = document.getElementById('guideTrack');    // Szukaj szyny slidera w DOM
  if (guideTrack) {                                          // Wykonaj tylko na stronie service_guide

    var btnPrev = document.getElementById('guidePrev');      // Przycisk ← lewo
    var btnNext = document.getElementById('guideNext');      // Przycisk → prawo
    var counter = document.getElementById('guideCurrent');   // Wyświetlacz numeru slajdu
    var slides = guideTrack.querySelectorAll('.guide-slide'); // Wszystkie slajdy
    var total = slides.length;                             // Łączna liczba slajdów
    var current = 0;                                         // Indeks aktualnego slajdu (0 = pierwszy)

    document.getElementById('guideTotal').textContent = total; // Wstaw łączną liczbę do licznika

    function goTo(index) {                                   // Funkcja przejścia do slajdu
      current = (index + total) % total;                     // Zapętlenie: po ostatnim wraca do pierwszego
      guideTrack.style.transform = 'translateX(-' + (current * 100) + '%)'; // Przesuń szynę
      counter.textContent = current + 1;                    // Aktualizuj licznik (od 1)
    }

    btnPrev.addEventListener('click', function () { goTo(current - 1); }); // Klik ← = poprzedni
    btnNext.addEventListener('click', function () { goTo(current + 1); }); // Klik → = następny

    goTo(0); // Inicjalizacja – pokaż pierwszy slajd

  } // Koniec warunku slidera

  // --- AUDIO ---
  document.addEventListener("click", function (e) {
    const btn = e.target.closest(".audio-btn");
    if (!btn) return;

    const audio = document.getElementById(btn.dataset.audio);
    if (!audio) return;

    // zatrzymaj wszystkie inne audio
    document.querySelectorAll(".audio-el").forEach(a => {
      if (a !== audio) a.pause();
    });
    document.querySelectorAll(".audio-btn").forEach(b => {
      if (b !== btn) b.classList.remove("playing");
    });

    // play / pause
    if (audio.paused) {
      audio.play();
      btn.classList.add("playing");
    } else {
      audio.pause();
      btn.classList.remove("playing");
    }

    // po zakończeniu wróć do play
    audio.onended = () => btn.classList.remove("playing");
  });

}); // Koniec DOMContentLoaded
