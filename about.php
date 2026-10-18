<?php
  $page_title = "About TaxiGo | Professional Drivers & Modern Fleet";
  $page_desc  = "Learn about TaxiGo—licensed drivers, clean cars, and a safety-first culture.";
  $active = "about";
  include __DIR__ . "/includes/header.php";
?>
<main>
  <!-- Hero Section -->
  <section class="relative isolate overflow-hidden min-h-[60vh] flex items-center">
    <!-- Background Image (Cinematic Zoom Animation) -->
<img src="assets/x.jpg" alt="TaxiGo fleet in Germany"
     class="absolute inset-0 w-full h-full  brightness-75 ">


    <!-- Overlay Gradient -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent z-0"></div>

    <!-- Text Content -->
  <div class="relative z-10 mx-auto w-[min(1200px,92%)]">
  <h1 class="text-4xl md:text-6xl font-extrabold mb-3 fade-up">
    <span class="glow">About</span> TaxiGo
  </h1>
  <p class="text-lg text-muted max-w-xl fade-up-delay">
    Learn more about our story, our drivers, and how we keep your rides safe,
    comfortable, and on time — every single day.
  </p>
</div>

  </section>

  <!-- About Content -->
  <section class="relative overflow-hidden py-20 bg-gradient-to-b from-[#0e0f14] via-[#0b0c10] to-[#0a0a0d]">
  <!-- Decorative glow -->
  <div class="absolute -top-32 left-10 w-96 h-96 bg-brand/10 rounded-full blur-[150px]"></div>
  <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-emerald-400/10 rounded-full blur-[180px]"></div>

  <div class="relative z-10 mx-auto w-[min(1200px,92%)]">
    <!-- Header -->
    <div class="text-center mb-12">
      <h2 class="sparkle-text text-4xl md:text-5xl font-extrabold mb-3">
  Who We Are
</h2>

      <p class="text-muted max-w-2xl mx-auto text-lg leading-relaxed">
        Behind every ride is a story of precision, reliability, and passion for customer satisfaction.
      </p>
    </div>

    <!-- Content -->
    <div class="grid gap-10 md:grid-cols-[1.1fr_.9fr] items-center">
      <!-- Left Text Block -->
      <div class="space-y-6 fade-up">
        <p class="text-lg leading-relaxed text-[#e9eef5]/90">
          <span class="text-brand font-semibold">TaxiGo</span> is a modern taxi company based in Germany,
          dedicated to punctuality, safety, and comfort. Our professional, licensed drivers
          and clean, modern vehicles ensure a smooth experience every time you ride with us.
        </p>
        <p class="text-lg leading-relaxed text-[#e9eef5]/90">
          We integrate <span class="text-brand font-semibold">live traffic tracking, flight monitoring, and
          instant digital receipts</span> to make every journey smarter and more reliable.
        </p>
        <ul class="space-y-3 mt-6">
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-brand mt-1" fill="currentColor" viewBox="0 0 24 24">
              <path d="M20.285 2.857a1 1 0 011.428 1.4l-12 12a1 1 0 01-1.4 0l-5-5a1 1 0 111.4-1.4L9 13.586 20.285 2.857z"/>
            </svg>
            <span>Licensed, background-checked professional drivers</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-brand mt-1" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2a10 10 0 00-10 10v5a3 3 0 003 3h1v-2H5a1 1 0 01-1-1v-5a8 8 0 0116 0v5a1 1 0 01-1 1h-1v2h1a3 3 0 003-3v-5A10 10 0 0012 2z"/>
            </svg>
            <span>24/7 availability & responsive live support</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-brand mt-1" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 1a11 11 0 1011 11A11 11 0 0012 1zm1 17h-2v-2h2zm0-4h-2V6h2z"/>
            </svg>
            <span>Multiple payment options — cash or card</span>
          </li>
          <li class="flex items-start gap-3">
            <svg class="w-5 h-5 text-brand mt-1" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 3a9 9 0 100 18 9 9 0 000-18zM7 10h10v2H7zm0 4h6v2H7z"/>
            </svg>
            <span>Corporate accounts for business clients</span>
          </li>
        </ul>
      </div>

      <!-- Right Image Block -->
      <aside class="grid gap-5 relative">
        <div class="overflow-hidden rounded-2xl shadow-[0_18px_50px_rgba(0,0,0,.45)] group hover:scale-[1.03] transition-transform">
          <img src="assets/k.jpg" alt="Our drivers"
               class="w-full h-72 object-cover brightness-95 group-hover:brightness-105 transition-all duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
        </div>
        <div class="overflow-hidden rounded-2xl shadow-[0_18px_50px_rgba(0,0,0,.45)] group hover:scale-[1.03] transition-transform">
          <img src="assets/l.jpg" alt="TaxiGo in action"
               class="w-full h-72 object-cover brightness-95 group-hover:brightness-105 transition-all duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
        </div>
      </aside>
    </div>
  </div>
</section>

</main>
<?php include __DIR__ . "/includes/testimonials.php"; ?>

<?php include __DIR__ . "/includes/footer.php"; ?>
