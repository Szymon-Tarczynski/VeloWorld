  // --- KALKULATOR ROZMIARU RAMY ---
document.addEventListener("DOMContentLoaded", function () {
  var btn = document.getElementById("calcBtn");
  var input = document.getElementById("heightInput");
  var result = document.getElementById("calcResult");

  if (!btn || !input || !result) return;

  btn.addEventListener("click", function () {
    var h = parseInt(input.value, 10);

    if (!h || h < 140 || h > 220) {
      result.className = "frame-calc-result frame-calc-error";
      result.innerText = "Podaj wzrost 140–220 cm";
      return;
    }

    var size;
    if (h < 160) size = "XS";
    else if (h < 168) size = "S";
    else if (h < 175) size = "M";
    else if (h < 183) size = "L";
    else if (h < 190) size = "XL";
    else size = "XXL";

    result.className = "frame-calc-result frame-calc-ok";
    result.innerText = "Twój rozmiar ramy: " + size;
  });
});
