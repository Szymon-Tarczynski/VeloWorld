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

  // --- KOSZYK (SESSION przez cart_action.php) ---
  // UWAGA: to ma obsługiwać sklepowe .add-to-cart (a nie konfigurator).
  document.addEventListener('click', (e) => {
    const btn = e.target.closest('.add-to-cart');
    if (!btn) return;

    const id = String(btn.dataset.id || '');
    const name = String(btn.dataset.name || '');
    const price = String(btn.dataset.price || '0');

    if (!id || !name) {
      console.warn('Brak data-id lub data-name na przycisku .add-to-cart');
      return;
    }

    const params = new URLSearchParams();
    params.set('action', 'add');
    params.set('id', id);
    params.set('name', name);
    params.set('price', price);
    params.set('qty', '1');
    params.set('redirect', 'index.php?page=shop');

    fetch('index.php?page=cart_action', {
      method: 'POST',
      credentials: 'include',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
        'Accept': 'application/json'
      },
      body: params.toString()
    })
      .then(r => r.json().catch(() => ({})))
      .then(() => {
        alert('Dodano do koszyka: ' + name);
      })
      .catch(err => {
        console.error('cart_action error:', err);
        alert('Błąd dodawania do koszyka.');
      });
  });

  // --- AUDIO ---
  document.addEventListener('click', (e) => {
    const btn = e.target.closest('.audio-btn');
    if (!btn) return;

    const audio = document.getElementById(btn.dataset.audio);
    if (!audio) return;

    // zatrzymaj wszystkie inne audio
    document.querySelectorAll('.audio-el').forEach(a => {
      if (a !== audio) a.pause();
    });
    document.querySelectorAll('.audio-btn').forEach(b => {
      if (b !== btn) b.classList.remove('playing');
    });

    // play / pause
    if (audio.paused) {
      audio.play();
      btn.classList.add('playing');
    } else {
      audio.pause();
      btn.classList.remove('playing');
    }

    audio.onended = () => btn.classList.remove('playing');
  });

}); // ✅ DOMContentLoaded domknięty poprawnie