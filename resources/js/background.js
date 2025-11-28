// background.js
document.addEventListener("DOMContentLoaded", () => {
  // Crear las formas del fondo
  const shapes = [
    { class: "shape-1", gradient: "linear-gradient(135deg, #ffd89b 0%, #19547b 100%)", size: 300, top: "-100px", left: "-100px", delay: "0s" },
    { class: "shape-2", gradient: "linear-gradient(135deg, #a8edea 0%, #fed6e3 100%)", size: 200, bottom: "-50px", right: "-50px", delay: "5s" },
    { class: "shape-3", gradient: "linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%)", size: 150, top: "50%", right: "10%", delay: "10s" },
  ];

  shapes.forEach(s => {
    const el = document.createElement("div");
    el.className = `bg-shape ${s.class}`;
    el.style.width = `${s.size}px`;
    el.style.height = `${s.size}px`;
    el.style.position = "absolute";
    el.style.borderRadius = "50%";
    el.style.background = s.gradient;
    el.style.opacity = "0.15";
    el.style.animation = `floatShape 20s ease-in-out infinite`;
    el.style.animationDelay = s.delay;
    // el.style.zIndex = '-1'; // 👈 detrás del contenido
    // el.style.pointerEvents = 'none'; // 👈 no bloquea clics
    Object.assign(el.style, s);
    document.body.appendChild(el);
  });

  // Crear las huellitas 🐾
  const paws = [
    { top: "10%", left: "10%", delay: "0s" },
    { top: "20%", right: "15%", delay: "1s" },
    { bottom: "15%", left: "20%", delay: "2s" },
    { bottom: "25%", right: "10%", delay: "3s" },
    { top: "50%", left: "5%", delay: "4s" },
    { top: "60%", right: "8%", delay: "5s" },
  ];

  paws.forEach(p => {
    const paw = document.createElement("div");
    paw.className = "paw-print";
    paw.textContent = "🐾";
    paw.style.position = "absolute";
    paw.style.opacity = "0.08";
    paw.style.fontSize = "56px";
    paw.style.animation = `pawFloat 6s ease-in-out infinite`;
    paw.style.animationDelay = p.delay;
    // paw.style.zIndex = '-1'; // 👈 detrás del contenido
    // paw.style.pointerEvents = 'none'; // 👈 no bloquea clics
    Object.assign(paw.style, p);
    document.body.appendChild(paw);
  });
});

// Animaciones globales
const style = document.createElement("style");
style.textContent = `
@keyframes floatShape {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  33% { transform: translate(30px, -30px) rotate(120deg); }
  66% { transform: translate(-20px, 20px) rotate(240deg); }
}

@keyframes pawFloat {
  0%, 100% { transform: translateY(0) rotate(0deg); }
  50% { transform: translateY(-20px) rotate(10deg); }
}
`;
document.head.appendChild(style);
