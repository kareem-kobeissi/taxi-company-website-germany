<section class="relative isolate overflow-hidden py-14">
  <!-- Background glow -->
  <div class="absolute inset-0 -z-10 bg-gradient-to-b from-[#14161e] via-[#0f1015] to-[#0b0c10]"></div>

  <div class="mx-auto w-[min(1200px,92%)] text-center">
    <span class="inline-block rounded-full border border-[#2a2d36] bg-black/30 px-3 py-1 text-xs tracking-wide text-muted">WHAT OUR CUSTOMERS SAY</span>
    <h2 class="sparkle-heading mt-3 text-3xl md:text-4xl font-extrabold">
  People love <span class="sparkle-gold">TaxiGo</span>
</h2>

    

    <!-- Testimonials Grid -->
<!-- Testimonials Grid -->
<div class="mt-10 grid gap-6 md:grid-cols-3">
  <?php
    // 1) Define reviews ONCE, before the loop
    $reviews = [
      ["name"=>"Lena S. (Berlin)","text"=>"“TaxiGo was on time even for my 4 AM airport ride. The driver was friendly and the car spotless!”"],
      ["name"=>"Marco R. (Munich)","text"=>"“Seamless WhatsApp booking and fair prices. Highly recommended for business trips.”"],
      ["name"=>"Sara K. (Hamburg)","text"=>"“Professional, polite, and reliable. Always my first choice for family rides.”"],
    ];

    // 2) Loop with a dedicated index variable
    $index = 0;
    foreach ($reviews as $r):
      // 3) Staggered delay per card
      $delay = 0.3 + ($index * 0.8); // tweak spacing if you want
  ?>
    <article
      class="testimonial-card relative rounded-2xl p-6 bg-gradient-to-b from-[#171923] to-card border border-[#1f2230] shadow-[0_18px_50px_rgba(0,0,0,.35)] hover:shadow-[0_25px_70px_rgba(0,0,0,.45)] transition-transform"
      style="animation-delay: <?= number_format($delay, 2) ?>s;"
    >
      <div class="flex justify-center mb-3">
        <?php for ($j = 0; $j < 5; $j++): ?>
          <svg class="w-5 h-5 fill-brand" viewBox="0 0 20 20">
            <path d="M10 1.5l2.7 5.5 6.1.9-4.4 4.3 1 6.1L10 15.6 4.6 18.3l1-6.1L1.2 7.9l6.1-.9L10 1.5z"/>
          </svg>
        <?php endfor; ?>
      </div>

    <p class="testimonial-text type-on-view italic text-[#d4d4d8] leading-relaxed">
  <?= htmlspecialchars($r['text']) ?>
</p>
<h3 class="testimonial-name name-on-view mt-4 text-brand font-semibold">
  <?= htmlspecialchars($r['name']) ?>
</h3>

    </article>
  <?php
      $index++;
    endforeach;
  ?>
</div>


    <!-- CTA -->
  <div class="mt-10">
  <a href="https://wa.me/491234567890?text=Hi!%20Can%20I%20book%20a%20ride%20with%20TaxiGo%3F"
     class="cta-animated inline-flex items-center gap-2 rounded-xl px-7 py-3 font-semibold text-black text-lg uppercase tracking-wide shadow-lg transition-transform duration-300">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
      <path d="M12 2a10 10 0 00-10 10v5a3 3 0 003 3h1v-2H5a1 1 0 01-1-1v-5a8 8 0 0116 0v5a1 1 0 01-1 1h-1v2h1a3 3 0 003-3v-5A10 10 0 0012 2z"/>
    </svg>
    Book your ride now
  </a>
</div>

  </div>
</section>


<script>
  // Lightweight slider logic (mobile only)
  (function(){
    const track = document.getElementById('tTrack');
    if(!track) return;
    let idx = 0;
    const cards = track.children.length;
    const prev = document.getElementById('tPrev');
    const next = document.getElementById('tNext');
    function go(i){
      idx = (i + cards) % cards;
      track.style.transform = 'translateX(' + (-idx * 100) + '%)';
    }
    // Normalize widths for each t-card to 100% of container
    Array.from(track.children).forEach(el => el.style.width = '100%');

    prev.addEventListener('click', ()=>go(idx-1));
    next.addEventListener('click', ()=>go(idx+1));
    // Auto-advance
    setInterval(()=>go(idx+1), 4500);
    go(0);
  })();
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const texts = document.querySelectorAll('.testimonial-text.type-on-view');
  const io = 'IntersectionObserver' in window
    ? new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (!entry.isIntersecting) return;

          const el = entry.target;
          // Compute steps and duration by visible character length
          const raw = (el.textContent || '').trim();
          // strip typical quotes so steps feel right (optional)
          const len = raw.replace(/^“|”$/g, '').length || 40;
          const steps = Math.min(60, Math.max(25, Math.round(len))); // clamp steps
          const duration = Math.min(7, Math.max(2.5, len / 18));     // 2.5s–7s

          el.style.setProperty('--steps', steps);
          el.style.setProperty('--typeDur', duration + 's');

          // Start typing
          el.classList.add('typing');

          // Reveal the name a bit after typing finishes
          const name = el.parentElement.querySelector('.testimonial-name.name-on-view');
          if (name) {
            setTimeout(() => name.classList.add('revealed'), duration * 1000 + 200);
          }

          // Run once per element
          io.unobserve(el);
        });
      }, { threshold: 0.3 })
    : null;

  if (io) {
    texts.forEach(t => io.observe(t));
  } else {
    // Fallback (no IntersectionObserver): just start everything
    texts.forEach(el => {
      const raw = (el.textContent || '').trim();
      const len = raw.replace(/^“|”$/g, '').length || 40;
      const steps = Math.min(60, Math.max(25, Math.round(len)));
      const duration = Math.min(7, Math.max(2.5, len / 18));
      el.style.setProperty('--steps', steps);
      el.style.setProperty('--typeDur', duration + 's');
      el.classList.add('typing');

      const name = el.parentElement.querySelector('.testimonial-name.name-on-view');
      if (name) {
        setTimeout(() => name.classList.add('revealed'), duration * 1000 + 200);
      }
    });
  }
});
</script>
