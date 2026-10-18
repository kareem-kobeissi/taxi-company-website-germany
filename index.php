<?php
  $page_title = "TaxiGo | Reliable Taxi in Germany | 24/7 Booking";
  $page_desc  = "Book airport transfers & city rides instantly. Modern fleet, pro drivers, fair prices.";
  $active = "home";
  include __DIR__ . "/includes/header.php";
?>
<main>
  <!-- Hero -->
<!-- Hero -->
<!-- Hero -->
<section class="relative isolate overflow-hidden min-h-[88vh] flex items-center">
  <!-- Background taxi image with fade+zoom -->
  <img src="assets/i.jpg" alt="TaxiGo fleet"
       class="absolute inset-0 w-full h-full object-cover brightness-75 animate-fadeZoomIn object-[center_35%]">

  <!-- Vignette + gradient edge -->
  <div class="hero-vignette absolute inset-0 pointer-events-none"></div>
  <div class="absolute inset-0 z-0 bg-gradient-to-r from-black/70 via-black/50 to-transparent"></div>

  <!-- Ambient blobs -->
  <div class="blob blob-1"></div>
  <div class="blob blob-2"></div>

  <!-- Grain texture -->
  <div class="noise-overlay absolute inset-0 pointer-events-none mix-blend-overlay opacity-[0.12]"></div>

  <!-- Light sweep -->
  <div class="light-sweep"></div>

  <div class="relative z-10 mx-auto w-[min(1200px,92%)] grid md:grid-cols-2 gap-8 items-center">
    <!-- Left text -->
    <div class="text-left">
      <h1 class="fade-up mb-4 text-4xl font-extrabold leading-tight md:text-6xl">
        <span class="glow">Your ride</span> is one tap away
      </h1>
      <p class="fade-up-200ms text-muted mb-6 max-w-md text-lg">
        24/7 taxis — airport, city, and long distance.
        Book now and arrive on time, every time.
      </p>

      <!-- Frosted CTA bar -->
    <div class="fade-up-400ms inline-flex flex-wrap items-center gap-3 rounded-2xl border border-white/10 bg-black/40 backdrop-blur-md p-3 shadow-card hero-btn-group">
  <!-- Book on WhatsApp -->
  <a href="https://wa.me/491234567890?text=Hi!%20I%20need%20a%20taxi."
     class="inline-flex items-center gap-2 px-5 py-3 font-semibold text-black btn-hero-gold">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
      <path d="M20.52 3.48A11.78 11.78 0 0012 0a12 12 0 00-10.5 17.72L0 24l6.45-1.64A12 12 0 0012 24a12 12 0 008.5-20.52zM12 21.82a9.75 9.75 0 01-4.97-1.36l-.36-.21-3.82 1L4.6 17l-.22-.37a9.76 9.76 0 0115.94-11 9.75 9.75 0 01-6.32 16.18z"/>
    </svg>
    Book on WhatsApp
  </a>

  <!-- See Services -->
  <a href="services.php"
     class="inline-flex items-center gap-2 px-5 py-3 font-semibold btn-hero-outline">
    <svg class="w-5 h-5 text-brand" fill="currentColor" viewBox="0 0 24 24">
      <path d="M12 4a8 8 0 018 8v1h2v2h-2v3a1 1 0 01-1 1h-2v-4H7v4H5a1 1 0 01-1-1v-3H2v-2h2v-1a8 8 0 018-8z"/>
    </svg>
    See Services
  </a>
</div>


      <!-- Trust badges -->
      <div class="mt-5 flex flex-wrap items-center gap-x-6 gap-y-2 text-sm text-muted">
        <div class="inline-flex items-center gap-2">
          <span class="i-dot"></span> Licensed drivers
        </div>
       
        <div class="inline-flex items-center gap-2">
          <span class="i-dot"></span> Fixed pricing
        </div>
      </div>
    </div>

 
  </div>

  <!-- Badge -->
 <div class="absolute top-6 left-6 md:left-12 z-10 service-badge">
  24/7 Service
</div>


  <!-- Curved separator -->
  <svg class="absolute bottom-[-1px] left-0 w-full" viewBox="0 0 1440 80" preserveAspectRatio="none" aria-hidden="true">
    <path fill="#0b0c10" d="M0,80 L0,40 C220,0 540,0 720,30 C900,60 1220,60 1440,30 L1440,80 Z"></path>
  </svg>
</section>

<section class="relative z-10 -mt-6">
  <div class="mx-auto w-[min(1200px,92%)]">
    <div class="rounded-2xl bg-[#0f1015] border border-[#1f2230] shadow-card px-6 py-5 grid grid-cols-2 sm:grid-cols-4 gap-4 text-center">
      <div class="stat">
        <div class="stat-n" data-target="25000">0</div>
        <div class="stat-l">Rides Completed</div>
      </div>
      <div class="stat">
        <div class="stat-n" data-target="4.9">0</div>
        <div class="stat-l">Client Rating</div>
      </div>
      <div class="stat">
        <div class="stat-n" data-target="50">0</div>
        <div class="stat-l">Cities Covered</div>
      </div>
      <div class="stat">
        <div class="stat-n" data-target="24">0</div>
        <div class="stat-l">Support</div>
      </div>
    </div>
  </div>
</section>


  <!-- Fleet (3D tilt cards) -->
  <section class="py-10">
    <div class="mx-auto w-[min(1200px,92%)]">
      <h2 class="mb-4 text-2xl font-semibold">Featured Fleet</h2>

      <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        <?php
          // FIX: store only filenames; we'll prefix with /assets/ in the <img> tag
          $fleet = [
            ["img"=>"k.jpg","title"=>"Comfort Sedan","desc"=>"Daily city trips with style and comfort."],
            ["img"=>"l.jpg","title"=>"Airport Shuttle","desc"=>"On-time pickups & flight tracking."],
            ["img"=>"o.jpg","title"=>"Group Van","desc"=>"Up to 7 passengers + luggage."]
          ];
          foreach($fleet as $c): ?>
        <div class="card-tilt group overflow-hidden rounded-2xl border border-[#1f2230] bg-gradient-to-b from-[#171923] to-card shadow-card transition-transform">
  <img src="assets/<?= htmlspecialchars($c['img']) ?>" alt="<?= htmlspecialchars($c['title']) ?>" class="h-52 w-full object-cover">
  <div class="p-4">
    <h3 class="text-lg font-semibold"><?= htmlspecialchars($c['title']) ?></h3>
    <p class="text-muted"><?= htmlspecialchars($c['desc']) ?></p>
  </div>
</div>

        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section class="py-10">
    <div class="mx-auto w-[min(1200px,92%)]">
      <h2 class="mb-4 text-2xl font-semibold">Ride Gallery</h2>
      <div class="grid gap-2 sm:grid-cols-2 md:grid-cols-3">
        <?php
          $imgs = ["k.jpg","l.jpg","o.jpg","k.jpg","l.jpg","o.jpg"];
          foreach($imgs as $i): ?>
          <!-- FIX: ensure /assets/ + filename -->
<img src="assets/<?= htmlspecialchars($i) ?>" class="kenburns aspect-[4/3] w-full rounded-xl object-cover" alt="Taxi image">
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>
<?php include __DIR__ . "/includes/testimonials.php"; ?>

<?php include __DIR__ . "/includes/footer.php"; ?>
<script>
(function(){
  const els = document.querySelectorAll('.reveal');
  if(!('IntersectionObserver' in window)) { els.forEach(e=>e.classList.add('is-visible')); return; }
  const io = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{ if(e.isIntersecting){ e.target.classList.add('is-visible'); io.unobserve(e.target); }});
  }, { threshold: 0.12 });
  els.forEach(el=>io.observe(el));
})();
</script>
<script>
// Simple tilt on mouse for .card-tilt
(function(){
  const cards = document.querySelectorAll('.card-tilt');
  const clamp = (v, min, max) => Math.max(min, Math.min(max, v));
  cards.forEach(card => {
    let rect;
    function onMove(e){
      if(!rect) rect = card.getBoundingClientRect();
      const x = (e.clientX - rect.left) / rect.width;
      const y = (e.clientY - rect.top) / rect.height;
      const rx = clamp((0.5 - y) * 10, -8, 8);
      const ry = clamp((x - 0.5) * 12, -10, 10);
      card.style.transform = `rotateX(${rx}deg) rotateY(${ry}deg) translateZ(0)`;
    }
    function reset(){ card.style.transform = 'rotateX(0) rotateY(0) translateZ(0)'; rect = null; }
    card.addEventListener('mousemove', onMove);
    card.addEventListener('mouseleave', reset);
    card.addEventListener('mouseenter', ()=>{ rect = card.getBoundingClientRect(); });
  });
})();
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".stat-n");
  const speed = 200; // lower = faster

  const startCounting = (el) => {
    const target = parseFloat(el.getAttribute("data-target"));
    const isFloat = el.getAttribute("data-target").includes(".");
    let count = 0;
    const increment = target / speed;

    const updateCount = () => {
      count += increment;
      if (count < target) {
        el.textContent = isFloat ? count.toFixed(1) : Math.floor(count);
        requestAnimationFrame(updateCount);
      } else {
        el.textContent = isFloat ? target.toFixed(1) : target.toLocaleString();
      }
    };
    updateCount();
  };

  // Start when visible
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        startCounting(entry.target);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.4 });

  counters.forEach(counter => observer.observe(counter));
});
</script>
