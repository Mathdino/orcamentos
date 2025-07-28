// Rolagem suave para âncoras
const links = document.querySelectorAll('a[href^="#"]');
for (const link of links) {
  link.addEventListener("click", function (e) {
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: "smooth" });
    }
  });
}

// Feedback simples no envio do formulário
const form = document.getElementById("form-orcamento");
if (form) {
  form.addEventListener("submit", function (e) {
    // Apenas feedback visual, não impede envio real
    form.querySelector('button[type="submit"]').textContent = "Enviando...";
  });
}

// Menu Hamburguer
const hamburger = document.getElementById("hamburger-menu");
const mainNav = document.getElementById("main-nav");
const btnHeader = document.querySelector(".btn-header");

if (hamburger && mainNav) {
  hamburger.addEventListener("click", function () {
    const isOpen = mainNav.classList.toggle("open");
    hamburger.setAttribute("aria-expanded", isOpen);
    if (btnHeader) {
      btnHeader.classList.toggle("open", isOpen);
    }
  });
  // Fecha o menu ao clicar em um link
  mainNav.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      mainNav.classList.remove("open");
      hamburger.setAttribute("aria-expanded", false);
      if (btnHeader) btnHeader.classList.remove("open");
    });
  });
}

// Banner Pintura Animation
window.addEventListener("DOMContentLoaded", function () {
  var faixa = document.getElementById("faixa-colorida");
  var rolo = document.getElementById("rolo-svg");
  if (!faixa || !rolo) return;
  var maxWidth = 220; // largura máxima da faixa
  faixa.style.width = "0px";
  rolo.style.left = "0px";
  setTimeout(function () {
    faixa.style.width = maxWidth + "px";
    rolo.style.left = maxWidth - 20 + "px"; // -20 para alinhar o rolo ao final
  }, 400);
});

// Exibe o título 3D do banner após a animação das cores
window.addEventListener("DOMContentLoaded", function () {
  var bannerBg = document.querySelector(".bg");
  if (bannerBg) {
    setTimeout(function () {
      bannerBg.classList.add("show-title");
    }, 700); // Ajuste o tempo para 0.8s
  }
});

// Animação de entrada e saída para os diferenciais
(function () {
  const icones = document.querySelectorAll("#diferencial-hscolor .icone");
  icones.forEach((icone) => {
    icone.style.opacity = "0";
    icone.style.animation = "none";
  });

  function animarDiferenciais() {
    icones.forEach((icone, i) => {
      setTimeout(() => {
        icone.style.opacity = "1";
        icone.style.animation =
          "fadeInScale 1.3s cubic-bezier(.77,0,.18,1) forwards";
      }, 200 + i * 300); // efeito cascata mais suave
    });
  }

  // Usar IntersectionObserver para disparar animação ao entrar na tela
  const section = document.getElementById("diferencial-hscolor");
  if ("IntersectionObserver" in window && section) {
    let animado = false;
    const observer = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && !animado) {
            animarDiferenciais();
            animado = true;
            observer.unobserve(section);
          }
        });
      },
      { threshold: 0.3 }
    );
    observer.observe(section);
  } else {
    // Fallback: anima ao carregar
    window.addEventListener("DOMContentLoaded", animarDiferenciais);
  }
})();

// Animação de entrada para os itens do #home
window.addEventListener("DOMContentLoaded", () => {
  setTimeout(() => {
    document.querySelectorAll("#home .animated-slide-up").forEach((el) => {
      el.classList.add("start-animation");
    });
  }, 600); // 600ms de espera antes de começar a animar

  // Animação para .scroll-direita1 e .scroll-direita2 ao entrar na viewport individualmente
  [
    ...document.querySelectorAll(".scroll-direita1"),
    ...document.querySelectorAll(".scroll-direita2"),
  ].forEach((scrollDiv) => {
    if ("IntersectionObserver" in window && scrollDiv) {
      const animatedEls = scrollDiv.querySelectorAll(".animated-slide-up");
      animatedEls.forEach((el) => el.classList.remove("start-animation"));
      let animated = false;
      const observer = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting && !animated) {
              animatedEls.forEach((el) => el.classList.add("start-animation"));
              animated = true;
              observer.unobserve(scrollDiv);
            }
          });
        },
        { threshold: 0.2 }
      );
      observer.observe(scrollDiv);
    }
  });
});

//Carrossel Responsivo
(function () {
  const track = document.querySelector(".carousel-track");
  const prevBtn = document.querySelector(".carousel-btn.prev");
  const nextBtn = document.querySelector(".carousel-btn.next");
  const cards = document.querySelectorAll(".servicos-card");

  let index = 0;
  let cardsPerView = getCardsPerView();

  function getCardsPerView() {
    if (window.innerWidth <= 768) return 1;
    if (window.innerWidth <= 1024) return 2;
    return 3;
  }

  function updateCarousel() {
    cardsPerView = getCardsPerView();
    const cardWidth = cards[0].offsetWidth;
    const maxIndex = Math.max(0, Math.ceil(cards.length / cardsPerView) - 1);
    if (index > maxIndex) index = maxIndex;
    const moveX = cardWidth * cardsPerView * index;
    track.style.transform = `translateX(-${moveX}px)`;
    // Esconde botões se não há rolagem
    prevBtn.style.display = index === 0 ? "none" : "block";
    nextBtn.style.display = index === maxIndex ? "none" : "block";
  }

  nextBtn.addEventListener("click", () => {
    const totalPages = Math.ceil(cards.length / cardsPerView);
    if (index < totalPages - 1) {
      index++;
      updateCarousel();
    }
  });

  prevBtn.addEventListener("click", () => {
    if (index > 0) {
      index--;
      updateCarousel();
    }
  });

  window.addEventListener("resize", updateCarousel);
  window.addEventListener("DOMContentLoaded", updateCarousel);
})();

//Antes x Depois
$.fn.BeerSlider = function (options) {
  options = options || {};
  return this.each(function () {
    new BeerSlider(this, options);
  });
};
$(".beer-slider").each(function (index, el) {
  $(el).BeerSlider({ start: $(el).data("start") });
});
