<?php
// ...existing code...

  $page_title = "Contact TaxiGo | Book a Taxi or Get a Quote";
  $page_desc  = "Reach us by phone, email, or WhatsApp. Send your pickup details for a quick quote.";
  $active = "contact";
  include __DIR__ . "/includes/header.php";
?>
<main>
  <!-- Hero Section -->
  <section class="relative isolate overflow-hidden min-h-[60vh] flex items-center">
    <!-- Background Image -->
   <img src="assets/m.jpg" alt="Contact TaxiGo in Germany"
     class="absolute inset-0 w-full h-full object-cover brightness-75 animate-fadeZoomIn hero-parallax">

    <!-- Overlay Gradient -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent z-0"></div>

  <div class="relative z-10 mx-auto w-[min(1200px,92%)]">
    <h1 class="fade-up reveal delay-200 text-4xl md:text-6xl font-extrabold mb-3">
      <span class="glow">Contact</span> TaxiGo
    </h1>
    <p class="fade-up-delay reveal delay-350 text-lg text-muted max-w-xl">
      Get in touch with our team to book a ride, request a quote, or ask any questions.
      We’re always happy to assist — 24/7 across Germany.
    </p>
  </div>

  </section>

  <!-- Contact Info Section -->
  <section class="py-10">
    <div class="mx-auto w-[min(1200px,92%)]">
      <h2 class="sparkle-heading text-4xl md:text-5xl font-extrabold text-center mb-6">
        <span class="sparkle-text reveal delay-500">Get in Touch</span>
      </h2>

      <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-[#121317] via-[#0f1015] to-[#1a1c24] shadow-2xl border border-[#1f2230] p-8 md:p-14">
        <!-- Glow background circles -->
        <div class="absolute -top-20 -left-20 w-80 h-80 bg-brand/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -right-16 w-96 h-96 bg-emerald-400/10 rounded-full blur-3xl"></div>

        <div class="relative z-10 grid gap-10 md:grid-cols-2 items-center">
          <!-- Left text side -->
          <div class="space-y-5 reveal delay-500">
            <h2 class="text-3xl font-bold text-brand">We’re here to help</h2>
            <p class="text-lg text-muted leading-relaxed">
              Would you like to book a ride or have questions about our services?
              Just give us a call or send us an email.
              Our team is always here for you – <span class="text-brand font-semibold">friendly, reliable, and ready</span> to listen to your concerns.
            </p>

            <div class="space-y-3 mt-6">
              <p class="flex items-center gap-3 text-lg">
                <svg class="w-6 h-6 text-brand" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M6.6 10.8a15.6 15.6 0 006.6 6.6l2.2-2.2a1 1 0 011-.25c1.1.36 2.4.55 3.6.55a1 1 0 011 1v3.5a1 1 0 01-1 1A17.5 17.5 0 014 6.5a1 1 0 011-1h3.6a1 1 0 011 1c0 1.2.2 2.4.55 3.6a1 1 0 01-.25 1l-2.3 2.2z"/>
                </svg>
                <a href="tel:+491234567890" class="hover:text-brand transition-colors">+49 123 456 7890</a>
              </p>

              <p class="flex items-center gap-3 text-lg">
                <svg class="w-6 h-6 text-brand" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M2 6a2 2 0 012-2h16a2 2 0 012 2v.2L12 13 2 6.2V6zm0 3.25l9.6 5.8a1 1 0 001 0L22 9.25V18a2 2 0 01-2 2H4a2 2 0 01-2-2V9.25z"/>
                </svg>
                <a href="mailto:info@taxigo.de" class="hover:text-brand transition-colors">info@taxigo.de</a>
              </p>

              <p class="flex items-start gap-3 text-lg">
                <svg class="w-6 h-6 text-brand mt-1" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M12 2C8.1 2 5 5.1 5 9c0 5.3 7 13 7 13s7-7.7 7-13c0-3.9-3.1-7-7-7zM7 9a5 5 0 1110 0c0 2.5-2.4 6.3-5 9.9C9.4 15.3 7 11.5 7 9zm5-2a2 2 0 100 4 2 2 0 000-4z" clip-rule="evenodd"/>
                </svg>
                <span>Friedrichstraße 100<br>10117 Berlin, Germany</span>
              </p>
            </div>

        <div class="flex flex-wrap gap-4 pt-6">
  <a href="https://wa.me/491234567890?text=Hi!%20I%20want%20to%20book%20a%20ride."
     target="_blank"
     class="relative inline-flex items-center gap-2 rounded-xl bg-amber-400 px-6 py-3 font-semibold text-black shadow-lg hover:shadow-amber-400/40 hover:scale-[1.04] transition-transform duration-300 ease-out overflow-hidden animate-pulseGlow">
    <!-- Background subtle light pulse -->
    <span class="absolute inset-0 bg-amber-400/20 opacity-0 group-hover:opacity-100 blur-xl transition-opacity duration-700"></span>

    <!-- WhatsApp Icon -->
    <svg class="relative z-10 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
      <path d="M20.52 3.48A11.78 11.78 0 0012 0a12 12 0 00-10.5 17.72L0 24l6.45-1.64A12 12 0 0012 24a12 12 0 008.5-20.52zM12 21.82a9.75 9.75 0 01-4.97-1.36l-.36-.21-3.82 1L4.6 17l-.22-.37a9.76 9.76 0 0115.94-11 9.75 9.75 0 01-6.32 16.18zm5.55-7.44l-1.39-.68a.75.75 0 00-.85.15l-.61.63a.43.43 0 01-.48.1c-.43-.17-1.69-.78-2.7-1.92a7.84 7.84 0 01-1.64-2.69.43.43 0 01.1-.47l.53-.61a.75.75 0 00.14-.82l-.58-1.4a.75.75 0 00-.98-.4 3.65 3.65 0 00-1.8 1.63c-.38.7-.48 1.54-.28 2.34a9.59 9.59 0 002.27 4.27 10.32 10.32 0 004.49 2.93c.69.23 1.43.27 2.14.11a3.51 3.51 0 002.2-1.64.75.75 0 00-.29-.99z"/>
    </svg>

    <!-- Text -->
    <span class="relative z-10">Message on WhatsApp</span>
  </a>
</div>

          </div>

          <!-- Right image side -->
          <div class="relative reveal delay-350">
            <img src="assets/n.jpg" alt="Taxi contact" class="rounded-2xl shadow-card object-cover w-full h-80 md:h-[420px] hero-parallax float">
            <div class="absolute inset-0 rounded-2xl bg-gradient-to-t from-black/40 to-transparent"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- animations -->
<link rel="stylesheet" href="animations.css">
<script defer src="contact-animations.js"></script>

<?php include __DIR__ . "/includes/testimonials.php"; ?>

<?php include __DIR__ . "/includes/footer.php"; ?>
