// Hamburger menu toggle
document.querySelector(".hamburger").addEventListener("click", () => {
  document.querySelector(".navbar").classList.toggle("active");
});

// Three.js background animation
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(
  75,
  window.innerWidth / window.innerHeight,
  0.1,
  1000
);
const renderer = new THREE.WebGLRenderer({
  canvas: document.getElementById("bgCanvas"),
  alpha: true,
});
renderer.setSize(window.innerWidth, window.innerHeight);

const geometry = new THREE.BufferGeometry();
const vertices = [];
for (let i = 0; i < 1000; i++) {
  vertices.push(
    Math.random() * 200 - 100,
    Math.random() * 200 - 100,
    Math.random() * 200 - 100
  );
}
geometry.setAttribute(
  "position",
  new THREE.Float32BufferAttribute(vertices, 3)
);
const material = new THREE.PointsMaterial({
  color: 0x00f0ff,
  size: 0.5,
  transparent: true,
  opacity: 0.5,
});
const particles = new THREE.Points(geometry, material);
scene.add(particles);
camera.position.z = 100;

function animate() {
  requestAnimationFrame(animate);
  particles.rotation.y += 0.002;
  renderer.render(scene, camera);
}
animate();

window.addEventListener("resize", () => {
  renderer.setSize(window.innerWidth, window.innerHeight);
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
});

// Countdown timer
const targetDate = new Date("2025-12-31T20:00:00").getTime();
function updateCountdown() {
  const now = new Date().getTime();
  const distance = targetDate - now;
  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor(
    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("days").textContent = days
    .toString()
    .padStart(2, "0");
  document.getElementById("hours").textContent = hours
    .toString()
    .padStart(2, "0");
  document.getElementById("minutes").textContent = minutes
    .toString()
    .padStart(2, "0");
  document.getElementById("seconds").textContent = seconds
    .toString()
    .padStart(2, "0");
}
setInterval(updateCountdown, 1000);

// Testimonial carousel
let currentTestimonial = 0;
const testimonials = document.querySelectorAll(".testimonial");
function showTestimonial(index) {
  testimonials.forEach((t) => t.classList.remove("active"));
  testimonials[index].classList.add("active");
  currentTestimonial = (index + 1) % testimonials.length;
}
setInterval(() => showTestimonial(currentTestimonial), 5000);
showTestimonial(0);

// Ticket form submission to WhatsApp
document.getElementById("ticketForm").addEventListener("submit", (e) => {
  e.preventDefault();
  const formData = new FormData(e.target);
  const fullName = formData.get("full_name");
  const email = formData.get("email");
  const ticketType = formData.get("ticket_type");
  const quantity = formData.get("quantity");
  const promoCode = formData.get("promo_code") || "None";

  const message = `New Ticket Order:\nName: ${fullName}\nEmail: ${email}\nTicket Type: ${ticketType}\nQuantity: ${quantity}\nPromo Code: ${promoCode}`;
  const whatsappNumber = "6282314137274";
  const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(
    message
  )}`;

  document.getElementById(
    "modalMessage"
  ).textContent = `Thank you, ${fullName}! Your order for ${quantity} ${ticketType} ticket(s) will be sent via WhatsApp.`;
  document.getElementById("modal").style.display = "flex";

  setTimeout(() => {
    window.open(whatsappUrl, "_blank");
    document.getElementById("modal").style.display = "none";
    e.target.reset();
  }, 2000);
});

// Newsletter form submission
document.getElementById("newsletterForm").addEventListener("submit", (e) => {
  e.preventDefault();
  document.getElementById("modalMessage").textContent =
    "Thank you for subscribing!";
  document.getElementById("modal").style.display = "flex";
  e.target.reset();
});

// Modal close
function closeModal() {
  document.getElementById("modal").style.display = "none";
}

// Scroll animations
const sections = document.querySelectorAll(".section");
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = 1;
        entry.target.style.transform = "translateY(0)";
      }
    });
  },
  { threshold: 0.2 }
);

sections.forEach((section) => {
  section.style.opacity = 0;
  section.style.transform = "translateY(30px)";
  section.style.transition = "opacity 0.8s ease, transform 0.8s ease";
  observer.observe(section);
});

//dynamic gradient
function setGenreGradient(genre) {
  const gradients = {
    rock: "linear-gradient(45deg, #ff0000, #8b0000)",
    pop: "linear-gradient(45deg, #ff00ff, #9400d3)",
    jazz: "linear-gradient(45deg, #0000ff, #00ffff)",
    edm: "linear-gradient(45deg, #00ff00, #ffff00)",
  };
  document.documentElement.style.setProperty(
    "--main-gradient",
    gradients[genre] || gradients.rock
  );
}

//update tiket counter
// Update ticket counter
function updateTicketCounter() {
  document.querySelectorAll(".concert-card").forEach((card) => {
    const badge = card.querySelector(".status-badge");
    if (badge.classList.contains("available")) {
      const randomTickets = Math.floor(Math.random() * 50) + 5;
      badge.textContent = `${randomTickets} TICKETS LEFT`;
    }
  });
}
setInterval(updateTicketCounter, 5000);

// Floating button smooth scroll
document.querySelector(".floating-button").addEventListener("click", (e) => {
  e.preventDefault();
  const ticketsSection = document.getElementById("tickets");
  ticketsSection.scrollIntoView({ behavior: "smooth" });
});