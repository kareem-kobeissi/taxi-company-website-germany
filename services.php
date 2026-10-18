<?php
  $page_title = "Taxi Services | Airport, City, Business | TaxiGo";
  $page_desc  = "Airport transfers, city rides, hourly bookings, business accounts, parcel delivery.";
  $active = "services";
  include __DIR__ . "/includes/header.php";
?>
<main>
  <!-- ================================ -->
  <!-- Hero Section                     -->
  <!-- ================================ -->
  <section class="relative isolate overflow-hidden min-h-[70vh] flex items-center">
    <!-- Background Image (Fade + Zoom In) -->
    <img src="assets/q.jpg" alt="Taxi services in Germany" loading="eager"
         class="absolute inset-0 w-full h-full object-cover brightness-75 animate-fadeZoomIn" />

    <!-- Overlay Gradient -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent z-0"></div>

    <!-- Text Content -->
    <div class="relative z-10 mx-auto w-[min(1200px,92%)] grid gap-6 md:grid-cols-[1.2fr_.8fr] items-center">
      <div>
        <h1 class="text-4xl md:text-6xl font-extrabold mb-3 opacity-0 animate-[fadeText_1.2s_ease-out_0.4s_forwards]">
          <span class="glow">Our</span> Services
        </h1>
        <p class="text-lg text-muted max-w-xl opacity-0 animate-[fadeText_1.2s_ease-out_0.8s_forwards]">
          From airport transfers to corporate accounts — discover how TaxiGo keeps you moving 24/7 with safety,
          comfort, and precision.
        </p>

        <!-- Trust badges / USPs -->
       <!-- Features / Trust Badges -->

        <div class="mt-6 flex flex-wrap gap-3">
          <a href="#book" class="cta-order px-6 py-3 ring-1 ring-white/10 transition-transform duration-300">Book Now</a>
          <a href="#faq" class="px-5 py-3 rounded-xl border border-white/10 hover:border-white/20">FAQs</a>
        </div>
      </div>

      <!-- Hero mini-card -->
   
    </div>
  </section>

  <!-- ================================ -->
  <!-- Services Grid                     -->
  <!-- ================================ -->
  <section class="py-12" id="services">
    <div class="mx-auto w-[min(1200px,92%)]">
      <h2 class="sparkle-heading text-4xl md:text-5xl font-extrabold mb-3">
        <span class="sparkle-text">What We Offer</span>
      </h2>
      <p class="text-muted mb-6 max-w-2xl">Choose the service that fits your journey. All rides include clean vehicles, safe driving, and punctual pickups.</p>

      <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        <?php
          $cards = [
            ["img"=>"k.jpg","title"=>"Airport Transfers","desc"=>"Meet‑and‑greet, flight tracking, and fixed pricing to and from all major airports."],
            ["img"=>"l.jpg","title"=>"City Rides","desc"=>"On‑demand trips anywhere in the city—fast pickups and safe driving."],
            ["img"=>"o.jpg","title"=>"Business Accounts","desc"=>"Monthly invoicing, priority support, and dedicated corporate rates."],
            ["img"=>"p.jpg","title"=>"Hourly Booking","desc"=>"Book a driver by the hour for meetings, shopping, or events—full flexibility."],
            ["img"=>"a.jpg","title"=>"Long‑Distance","desc"=>"Comfortable inter‑city rides across Germany and neighboring countries."],
            ["img"=>"e.jpg","title"=>"Parcel & Document Delivery","desc"=>"Secure same‑day delivery for parcels, documents, and small items."]
          ];
          foreach($cards as $c): ?>
          <article class="overflow-hidden rounded-2xl border border-[#1f2230] bg-card shadow-card transition-transform hover:scale-[1.02] duration-200">
            <img src="assets/<?= $c['img'] ?>" alt="<?= htmlspecialchars($c['title']) ?>" loading="lazy" class="h-52 w-full object-cover" />
            <div class="p-4">
              <h3 class="text-lg font-semibold flex items-center justify-between">
                <span><?= htmlspecialchars($c['title']) ?></span>
              </h3>
              <p class="text-muted"><?= htmlspecialchars($c['desc']) ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>

      <!-- Quick Filters (anchor links) -->


      <!-- Primary CTA -->
      <div id="book" class="mt-8 flex flex-col sm:flex-row justify-center items-center gap-3">
        <?php $wa = "https://wa.me/491234567890?text=" . rawurlencode("Hello! I want to book a service with TaxiGo."); ?>
        <a href="<?= $wa ?>" class="cta-order px-6 py-3 ring-1 ring-white/10 transition-transform duration-300 inline-flex items-center gap-2">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 11h14l-1.5-4.5a1 1 0 00-.95-.65H7.45a1 1 0 00-.95.65L5 11zm16 1h-1.34l-1.6-4.8A2 2 0 0016.55 6h-9.1a2 2 0 00-1.51 1.2L4.34 12H3a1 1 0 00-1 1v6a2 2 0 002 2h1a2 2 0 002-2v-1h10v1a2 2 0 002 2h1a2 2 0 002-2v-6a1 1 0 00-1-1zm-13 5a1 1 0 11-2 0 1 1 0 012 0zm12 0a1 1 0 11-2 0 1 1 0 012 0z"/></svg>
          Order Now
        </a>
      </div>
    </div>
  </section>

  <!-- ================================ -->
  <!-- How it works                      -->
  <!-- ================================ -->
  <section id="how" class="py-12 border-t border-[#1d1f27]">
  <ul class="mt-8 grid grid-cols-2 sm:grid-cols-4 gap-4">
  <li class="group flex flex-col items-center justify-center rounded-2xl border border-white/10 bg-gradient-to-b from-[#11131a] to-[#0b0c10] p-4 text-center shadow-md hover:border-amber-400/40 hover:shadow-amber-400/10 transition-all duration-300">
    <div class="mb-2 rounded-full bg-amber-500/10 p-3 group-hover:bg-amber-500/20 transition">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-amber-400">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
      </svg>
    </div>
    <span class="font-semibold text-sm text-white">24/7 Support</span>
  </li>

  <li class="group flex flex-col items-center justify-center rounded-2xl border border-white/10 bg-gradient-to-b from-[#11131a] to-[#0b0c10] p-4 text-center shadow-md hover:border-amber-400/40 hover:shadow-amber-400/10 transition-all duration-300">
    <div class="mb-2 rounded-full bg-amber-500/10 p-3 group-hover:bg-amber-500/20 transition">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-amber-400">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
      </svg>
    </div>
    <span class="font-semibold text-sm text-white">Licensed & Insured</span>
  </li>

  <li class="group flex flex-col items-center justify-center rounded-2xl border border-white/10 bg-gradient-to-b from-[#11131a] to-[#0b0c10] p-4 text-center shadow-md hover:border-amber-400/40 hover:shadow-amber-400/10 transition-all duration-300">
    <div class="mb-2 rounded-full bg-amber-500/10 p-3 group-hover:bg-amber-500/20 transition">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-amber-400">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
      </svg>
    </div>
    <span class="font-semibold text-sm text-white">Instant Confirmation</span>
  </li>

  <li class="group flex flex-col items-center justify-center rounded-2xl border border-white/10 bg-gradient-to-b from-[#11131a] to-[#0b0c10] p-4 text-center shadow-md hover:border-amber-400/40 hover:shadow-amber-400/10 transition-all duration-300">
    <div class="mb-2 rounded-full bg-amber-500/10 p-3 group-hover:bg-amber-500/20 transition">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-amber-400">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 1.343-3 3 0 1.314.845 2.426 2 2.83V17h2v-3.17c1.155-.404 2-1.516 2-2.83 0-1.657-1.343-3-3-3z"/>
      </svg>
    </div>
    <span class="font-semibold text-sm text-white">Cash / Card Accepted</span>
  </li>
</ul>

  </section>
  <section id="how" class="py-12 border-t border-[#1d1f27]">

  <!-- ================================ -->
  <!-- Coverage & Airports               -->
  <!-- ================================ -->
  <section id="coverage" class="py-12">
    <div class="mx-auto w-[min(1200px,92%)] grid gap-6 md:grid-cols-2 items-start">
      <div>
        <h2 class="text-3xl md:text-4xl font-extrabold mb-3">Service Area</h2>
        <p class="text-muted mb-4">We operate across major German cities and beyond. Long‑distance requests welcome.</p>
        <ul class="grid grid-cols-2 gap-2 text-sm text-muted">
          <li>Berlin</li><li>Hamburg</li><li>Munich</li><li>Frankfurt</li><li>Cologne</li><li>Stuttgart</li><li>Düsseldorf</li><li>Leipzig</li>
        </ul>
      </div>
      <div class="rounded-2xl border border-[#1f2230] bg-card p-5">
        <h3 class="font-semibold mb-2">Airports We Serve</h3>
        <ul class="grid grid-cols-2 gap-2 text-sm text-muted">
          <li>BER – Berlin Brandenburg</li>
          <li>MUC – Munich</li>
          <li>FRA – Frankfurt</li>
          <li>HAM – Hamburg</li>
          <li>CGN – Cologne/Bonn</li>
          <li>DUS – Düsseldorf</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- ================================ -->
  <!-- Pricing teaser                     -->
  <!-- ================================ -->
  <section id="pricing" class="py-12 border-t border-[#1d1f27]">
    <div class="mx-auto w-[min(1200px,92%)]">
      <h2 class="text-3xl md:text-4xl font-extrabold mb-6">Transparent Pricing</h2>
      <div class="grid gap-4 md:grid-cols-3">
        <?php
          $tiers = [
            ["name"=>"City Ride","price"=>"from €1.90/km","features"=>["5‑minute average pickup","Sedan included","Cash / Card"]],
            ["name"=>"Airport Transfer","price"=>"from €39 fixed","features"=>["Meet‑&‑greet","Flight tracking","No surge pricing"]],
            ["name"=>"Hourly","price"=>"from €39/h","features"=>["Min. 2 hours","Business class optional","Flexible itinerary"]],
          ];
          foreach($tiers as $t): ?>
          <div class="rounded-2xl border border-[#1f2230] bg-card p-5 flex flex-col">
            <h3 class="text-lg font-semibold mb-1"><?= htmlspecialchars($t['name']) ?></h3>
            <div class="text-2xl font-extrabold mb-3"><?= htmlspecialchars($t['price']) ?></div>
            <ul class="text-sm text-muted mb-5 space-y-1">
              <?php foreach($t['features'] as $f): ?><li>• <?= htmlspecialchars($f) ?></li><?php endforeach; ?>
            </ul>
            <a href="<?= $wa ?>" class="mt-auto inline-block px-4 py-2 rounded-xl border border-white/10 hover:border-white/20">Get a quote</a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <section id="how" class="py-12 border-t border-[#1d1f27]">

  <!-- ================================ -->
  <!-- FAQ                               -->
  <!-- ================================ -->
  <section id="faq" class="py-12">
    <div class="mx-auto w-[min(900px,92%)]">
      <h2 class="text-3xl md:text-4xl font-extrabold mb-6">Frequently Asked Questions</h2>

      <?php
        $faqs = [
          [
            'q' => 'Do you monitor flights for delays?',
            'a' => 'Yes. We track your flight number and adjust pickup time accordingly at no extra charge.'
          ],
          [
            'q' => 'Can I pay by card?',
            'a' => 'Absolutely. We accept major cards and cash. Business clients can be invoiced monthly.'
          ],
          [
            'q' => 'What vehicles do you offer?',
            'a' => 'Sedan, estate, and minivan (up to 7 passengers). Child seats available on request.'
          ],
          [
            'q' => 'How do cancellations work?',
            'a' => 'Free cancellation up to 2 hours before pickup for city rides; 12 hours for airport transfers.'
          ],
        ];
      ?>

      <div class="space-y-3">
        <?php foreach ($faqs as $i => $f): $id = 'faq'.($i+1); ?>
          <details class="rounded-2xl border border-[#1f2230] bg-card p-5 group">
            <summary class="cursor-pointer font-semibold flex items-center justify-between">
              <span><?= htmlspecialchars($f['q']) ?></span>
              <span class="text-muted group-open:rotate-180 transition">▾</span>
            </summary>
            <div class="pt-2 text-muted"><?= htmlspecialchars($f['a']) ?></div>
          </details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ================================ -->
  <!-- CTA Banner                         -->
  <!-- ================================ -->
  <section class="py-12 border-t border-[#1d1f27]">
    <div class="mx-auto w-[min(1200px,92%)] rounded-2xl border border-[#1f2230] bg-gradient-to-r from-amber-500/10 via-transparent to-transparent p-6 md:p-10 flex flex-col md:flex-row items-center justify-between gap-4">
      <div>
        <h3 class="text-2xl md:text-3xl font-extrabold mb-1">Ready for pickup?</h3>
        <p class="text-muted">Message us on WhatsApp for an instant quote and confirmation.</p>
      </div>
      <a href="<?= $wa ?>" class="cta-order px-6 py-3 ring-1 ring-white/10 transition-transform duration-300">Chat on WhatsApp</a>
    </div>
  </section>
</main>

<?php include __DIR__ . "/includes/testimonials.php"; ?>
<?php include __DIR__ . "/includes/footer.php"; ?>

<!-- ================================ -->
<!-- JSON‑LD Schema                     -->
<!-- ================================ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "TaxiGo",
  "url": "<?php echo htmlspecialchars($base_url ?? ''); ?>",
  "logo": "<?php echo htmlspecialchars(($base_url ?? '') . '/assets/logo.png'); ?>",
  "sameAs": [
    "https://www.facebook.com/",
    "https://www.instagram.com/"
  ],
  "department": {
    "@type": "LocalBusiness",
    "name": "TaxiGo Services",
    "areaServed": "Germany",
    "openingHours": "Mo-Su 00:00-23:59",
    "telephone": "+49 123 456 7890",
    "serviceArea": {
      "@type": "AdministrativeArea",
      "name": "Germany"
    }
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Airport Transfer",
  "provider": {"@type": "Organization", "name": "TaxiGo"},
  "areaServed": "Germany",
  "availableChannel": {"@type": "ServiceChannel", "serviceUrl": "<?= $wa ?>"}
}
</script>
