(() => {
  const input = document.getElementById("smartSearch");
  const box   = document.getElementById("smartSearchResults");
  if (!input || !box) return;

  const page = new URLSearchParams(window.location.search).get("page") || "home"; // [1](https://stackoverflow.com/questions/9870512/how-to-obtain-the-query-string-from-the-current-url-with-javascript)[2](https://stackoverflow.com/questions/979975/get-the-values-from-the-get-parameters-javascript)
  const isShop = page === "shop";

  // UI
  input.placeholder = isShop ? "Szukaj rowerów..." : "Szukaj na stronie...";
  box.classList.remove("open");
  box.innerHTML = "";

  // ===== TRYB 1: SHOP -> delegujemy do shop.js (on ma deck/showCard)
  if (isShop) {
    // shop.js nasłuchuje na inputu (niżej w kroku 4 go dopniemy do smartSearch)
    return;
  }

  // ===== TRYB 2: GLOBAL -> szukamy w search-index.json
  let index = [];
  fetch("search-index.json")
    .then(r => r.json())
    .then(data => { index = data; })
    .catch(() => { /* brak indexu -> nic */ });

  const esc = (s="") => s.replace(/[&<>"']/g, m => ({ "&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;" }[m]));
  const snip = (body,q,len=140) => {
    const t = body.toLowerCase(), i = t.indexOf(q);
    if (i < 0) return body.slice(0,len) + (body.length>len?"…":"");
    const s = Math.max(0, i - (len>>1)), e = Math.min(body.length, s+len);
    return (s? "…" : "") + body.slice(s,e) + (e<body.length ? "…" : "");
  };

  function render(val) {
    const q = val.trim().toLowerCase();
    if (!q) { box.classList.remove("open"); box.innerHTML=""; return; }

    const hits = index
      .map(p => ({...p, pos: (p.title+" "+p.body).toLowerCase().indexOf(q)}))
      .filter(p => p.pos !== -1)
      .slice(0, 10);

    box.innerHTML = hits.length
      ? hits.map(p => `
          <a class="site-search-hit" href="${esc(p.url)}">
            <div class="site-search-title">${esc(p.title)}</div>
            <div class="site-search-snippet">${esc(snip(p.body, q))}</div>
          </a>`).join("")
      : `<div class="site-search-empty">Brak wyników</div>`;

    box.classList.add("open");
  }

  input.addEventListener("input", e => render(e.target.value));
  document.addEventListener("click", e => {
    const wrap = input.closest(".nav-search-wrap--smart");
    if (wrap && !wrap.contains(e.target)) box.classList.remove("open");
  });
})();