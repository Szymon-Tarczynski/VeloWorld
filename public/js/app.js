document.addEventListener('DOMContentLoaded', function () {

  // --- WALIDACJA FORMULARZA REZERWACJI (po stronie klienta) ---
  document.addEventListener('submit', (e) => {
    const form = e.target;
    if (form.id !== 'booking-form') return;

    const name = form.querySelector('input[name="customer_name"]').value.trim();
    const service = form.querySelector('select[name="service"]').value.trim();
    const dateStr = form.querySelector('input[name="date"]').value;

    const errors = [];
    if (!name) errors.push('Podaj imię i nazwisko.');
    if (!service) errors.push('Wybierz usługę.');
    if (!dateStr) {
      errors.push('Wybierz datę.');
    } else {
      const today = new Date();
      today.setHours(0, 0, 0, 0);
      const chosen = new Date(dateStr + 'T00:00:00');
      if (chosen < today) errors.push('Data nie może być z przeszłości.');
    }

    if (errors.length) {
      e.preventDefault();
      alert('Popraw formularz:\n- ' + errors.join('\n- '));
    }
  });

  // --- KOSZYK (localStorage) ---
  const CART_KEY = 'cart';

  function loadCart() {
    try { return JSON.parse(localStorage.getItem(CART_KEY)) || []; }
    catch { return []; }
  }

  function saveCart(cart) {
    localStorage.setItem(CART_KEY, JSON.stringify(cart));
  }

  document.addEventListener('click', (e) => {
    if (!e.target.matches('.add-to-cart')) return;
    const btn = e.target;

    const item = {
      id: Number(btn.dataset.id),
      name: btn.dataset.name,
      price: Number(btn.dataset.price),
      qty: 1
    };

    const cart = loadCart();
    const existing = cart.find(p => p.id === item.id);
    if (existing) existing.qty += 1;
    else cart.push(item);

    saveCart(cart);
    alert('Dodano do koszyka: ' + item.name);
  });

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

});