<?php
  if (!isset($page_title)) { $page_title = "Taxi Germany | Fast & Safe Rides"; }
  if (!isset($page_desc))  { $page_desc  = "Book reliable taxis 24/7. Airport transfers, city rides, corporate accounts."; }
  if (!isset($active))     { $active = "home"; }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_desc) ?>">
  <meta name="robots" content="index, follow">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">

  <!-- Tailwind (CDN JIT) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            bg: "#0b0c10",
            card: "#121317",
            muted: "#9aa0aa",
            brand: "#ffc107",
            brandDark: "#e0a800",
            text: "#e9eef5"
          },
          boxShadow: {
            'elev': '0 20px 60px rgba(0,0,0,.45)',
            'card': '0 12px 30px rgba(0,0,0,.25)',
            'card-lg': '0 18px 50px rgba(0,0,0,.35)'
          },
          keyframes: {
            floatBg: { to: { transform: 'translate3d(0,-30px,0) scale(1.03)' } }
          },
          animation: {
            floatBg: 'floatBg 12s ease-in-out infinite alternate'
          }
        }
      }
    }
  </script>

  <style>
    
    :root { color-scheme: dark; }
    html, body { background:#0b0c10; color:#e9eef5; font-family: Inter, system-ui, Arial, sans-serif; }
    .glow { text-shadow: 0 0 20px rgba(255,193,7,.35); }
    .parallax { will-change: transform; }

    /* === ANIMATIONS === */
    @keyframes fadeZoomIn {
      0% { opacity: 0; transform: scale(1.05); }
      100% { opacity: 1; transform: scale(1.12); }
    }
    .animate-fadeZoomIn {
      animation: fadeZoomIn 3.5s ease-out forwards;
      transform-origin: center top;
    }

    @keyframes fadeText {
      from { opacity: 0; transform: translateY(25px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .fade-up { opacity: 0; animation: fadeText 1.2s ease-out forwards; }
    .fade-up-delay { opacity: 0; animation: fadeText 1.2s ease-out 0.5s forwards; }
    .fade-up-200ms { opacity: 0; animation: fadeText 1s ease-out .2s forwards; }
    .fade-up-400ms { opacity: 0; animation: fadeText 1s ease-out .4s forwards; }

header a {
  transition: all 0.3s ease;
}
header a:hover {
  color: #ffc107;
  text-shadow: 0 0 10px rgba(255,193,7,.3);
}/* --- Testimonials styling & animations --- */
.testi-gradient {
  background:
    radial-gradient(800px 300px at 10% 10%, rgba(255,193,7,.08), transparent 60%),
    radial-gradient(700px 280px at 90% 80%, rgba(16,185,129,.06), transparent 60%),
    linear-gradient(180deg, #14161e 0%, #0f1015 100%);
}
.testi-card {
  background: linear-gradient(180deg, #171923 0%, #121317 100%);
  border: 1px solid #1f2230;
  box-shadow: 0 18px 50px rgba(0,0,0,.35);
}
.testi-quote {
  position: absolute; inset: -2px; border-radius: 18px; padding: 1px;
  background: linear-gradient(135deg, rgba(255,193,7,.35), transparent 40%, rgba(94,234,212,.25));
  -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
  -webkit-mask-composite: xor; mask-composite: exclude;
}
@keyframes shimmer {
  0% { transform: translateX(-60%); }
  100% { transform: translateX(160%); }
}
.shimmer:before{
  content:""; position:absolute; inset:0; border-radius:18px; pointer-events:none;
  background: linear-gradient(120deg, transparent 35%, rgba(255,255,255,.08), transparent 65%);
  transform: translateX(-60%); animation: shimmer 3.8s ease-in-out infinite;
}

/* Stars */
.star { width:18px; height:18px; fill:#ffc107; opacity:.95 }

/* Mobile slider */
.t-track { display:flex; gap:14px; transition: transform .5s ease; }
.t-card { min-width: 86%; }
@media (min-width: 768px){
  .t-card { min-width: auto; }
}
/* Testimonials enhancements */
.glow { text-shadow: 0 0 20px rgba(255,193,7,.35); }

article:hover .fill-brand {
  filter: drop-shadow(0 0 6px rgba(255,193,7,.5));
}
/* --- Sparkling Gold Gradient Animation --- */
.sparkle-text {
  background: linear-gradient(
    90deg,
    #d4af37 0%,
    #ffecb3 20%,
    #ffd700 40%,
    #ffecb3 60%,
    #d4af37 80%,
    #ffd700 100%
  );
  background-size: 300% auto;
  color: transparent;
  -webkit-background-clip: text;
  background-clip: text;
  animation: sparkleMove 5s linear infinite;
  text-shadow: 0 0 25px rgba(255,193,7,0.25);
  display: inline-block;
  position: relative;
}

/* shimmer sweep effect */
@keyframes sparkleMove {
  0% { background-position: 0% center; }
  100% { background-position: 300% center; }
}

/* optional sparkle twinkle */
.sparkle-text::after {
  content: "";
  position: absolute;
  top: 0;
  left: -75%;
  width: 50%;
  height: 100%;
  background: linear-gradient(
    120deg,
    transparent 0%,
    rgba(255,255,255,0.8) 50%,
    transparent 100%
  );
  transform: skewX(-20deg);
  animation: shimmer 3s infinite;
}
/* === Sparkling gold animation for headings === */
.sparkle-gold {
  background: linear-gradient(
    90deg,
    #d4af37 0%,
    #ffecb3 20%,
    #ffd700 40%,
    #ffecb3 60%,
    #d4af37 80%,
    #ffd700 100%
  );
  background-size: 300% auto;
  color: transparent;
  -webkit-background-clip: text;
  background-clip: text;
  animation: goldSparkle 5s linear infinite;
  position: relative;
  text-shadow: 0 0 15px rgba(255,193,7,0.25);
}

/* moving shimmer */
@keyframes goldSparkle {
  0%   { background-position: 0% center; }
  100% { background-position: 300% center; }
}

/* optional reflection sweep */
.sparkle-gold::after {
  content: "";
  position: absolute;
  top: 0;
  left: -80%;
  width: 50%;
  height: 100%;
  background: linear-gradient(
    120deg,
    transparent 0%,
    rgba(255,255,255,0.7) 50%,
    transparent 100%
  );
  transform: skewX(-20deg);
  animation: goldShine 3s infinite;
}

@keyframes goldShine {
  0%   { left: -80%; opacity: 0; }
  40%  { opacity: 1; }
  100% { left: 130%; opacity: 0; }
}
/* === Pulse / Pump animation === */
@keyframes cardPump {
  0%   { transform: scale(1); box-shadow: 0 18px 50px rgba(0,0,0,0.35); }
  50%  { transform: scale(1.04); box-shadow: 0 25px 70px rgba(255,193,7,0.25); }
  100% { transform: scale(1); box-shadow: 0 18px 50px rgba(0,0,0,0.35); }
}
/* === Professional subtle shimmer effect === */
.sparkle-text {
  background: linear-gradient(
    90deg,
    #d4af37 0%,
    #ffd700 25%,
    #fff4b0 50%,
    #ffd700 75%,
    #d4af37 100%
  );
  background-size: 200% auto;
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  font-weight: 800;
  animation: shimmerFlow 6s linear infinite;
  text-shadow: 0 0 20px rgba(255, 193, 7, 0.25);
}

/* shimmer motion */
@keyframes shimmerFlow {
  0%   { background-position: 0% center; }
  100% { background-position: 200% center; }
}

/* optional fade-in for smooth entrance */
.sparkle-heading {
  opacity: 0;
  transform: translateY(15px);
  animation: fadeInUp 1.3s ease-out forwards;
}
/* === Premium tagline styling === */
.premium-tagline {
  text-align: center;
  color: #d4d4d8;
  line-height: 1.7;
  font-weight: 500;
  letter-spacing: 0.4px;
  text-shadow: 0 0 15px rgba(255, 193, 7, 0.1);
  background: radial-gradient(circle at top, rgba(255,193,7,0.05) 0%, transparent 70%);
  padding: 1rem 1.5rem;
  border-radius: 1rem;
  animation: fadeInUp 1.5s ease-out forwards;
  opacity: 0;
}

/* shimmer word effect */
.highlight-word {
  background: linear-gradient(90deg, #ffc107, #fff1b8, #ffc107);
  -webkit-background-clip: text;
  color: transparent;
  font-weight: 700;
  background-size: 200% auto;
  animation: shimmerFlow 6s linear infinite;
}

.highlight-glow {
  color: #ffc107;
  text-shadow: 0 0 15px rgba(255, 193, 7, 0.5), 0 0 30px rgba(255, 215, 0, 0.2);
  font-weight: 700;
}
/* === Footer Links Styling === */
.footer-links {
  position: relative;
  padding: 1rem 0;
  animation: fadeInUp 1.2s ease-out forwards;
  opacity: 0;
}

.footer-heading {
  font-size: 1.2rem;
  font-weight: 700;
  color: #ffc107;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 1rem;
  background: linear-gradient(90deg, #ffd54f, #ffc107, #e0a800);
  -webkit-background-clip: text;
  color: transparent;
  animation: shimmerFlow 6s linear infinite;
}

/* Links list */
.footer-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-list li {
  position: relative;
  overflow: hidden;
}

.footer-list a {
  display: inline-block;
  color: #b0b4bd;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s ease, transform 0.3s ease;
}
.sparkle-logo {
  font-size: 3rem; /* ⬆️ Increased size */
  line-height: 1;
  font-weight: 900;
  letter-spacing: -0.5px;
  text-transform: uppercase;
  background: linear-gradient(90deg, #fff, #ffd54f, #ffc107, #fff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: shimmerFlow 6s linear infinite;
  position: relative;
  transition: transform 0.3s ease, text-shadow 0.3s ease;
}

.sparkle-logo:hover {
  transform: scale(1.05);
  text-shadow: 0 0 25px rgba(255, 215, 0, 0.5);
}

/* Golden underline animation */
.footer-list a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -2px;
  height: 2px;
  width: 0%;
  background: linear-gradient(90deg, #ffd54f, #ffc107, #e0a800);
  transition: width 0.3s ease;
  border-radius: 4px;
}

.footer-list a:hover {
  color: #ffc107;
  transform: translateX(4px);
}
/* === Sparkling Signature Link === */
.sparkle-link {
  background: linear-gradient(
    90deg,
    #ffd700 0%,
    #fff4b0 25%,
    #ffcc33 50%,
    #fff4b0 75%,
    #ffd700 100%
  );
  background-size: 200% auto;
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  font-weight: 700;
  text-transform: lowercase;
  letter-spacing: 0.5px;
  animation: sparkleFlow 5s linear infinite;
  position: relative;
  text-shadow: 0 0 18px rgba(255, 193, 7, 0.25);
  transition: transform 0.3s ease, text-shadow 0.3s ease;
}

@keyframes sparkleFlow {
  0%   { background-position: 0% center; }
  100% { background-position: 200% center; }
}

.sparkle-link:hover {
  transform: scale(1.07);
  text-shadow: 0 0 25px rgba(255, 215, 0, 0.7), 0 0 45px rgba(255, 255, 255, 0.3);
}

.footer-list a:hover::after {
  width: 100%;
}
/* === Elegant Sparkle Heading === */
.sparkle-text {
  display: inline-block;
  background: linear-gradient(
    90deg,
    #d4af37,
    #ffd700,
    #fff4b0,
    #ffd700,
    #d4af37
  );
  background-size: 200% auto;
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  text-shadow: 0 0 20px rgba(255, 193, 7, 0.25);
  animation: shimmerFlow 6s linear infinite;
  font-weight: 800;
  letter-spacing: 0.5px;
}

/* Soft fade-in motion */
.sparkle-heading {
  opacity: 0;
  transform: translateY(15px);
  animation: fadeInUp 1.2s ease-out forwards;
}

/* === Keyframes === */
@keyframes shimmerFlow {
  0%   { background-position: 0% center; }
  100% { background-position: 200% center; }
}

@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(25px); }
  to   { opacity: 1; transform: translateY(0); }
}

/* Animations */
@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(20px); }
  to   { opacity: 1; transform: translateY(0); }
}

@keyframes shimmerFlow {
  0% { background-position: 0% center; }
  100% { background-position: 200% center; }
}

/* shimmer animation */
@keyframes shimmerFlow {
  0%   { background-position: 0% center; }
  100% { background-position: 200% center; }
}

/* fade in animation */
@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(20px); }
  to   { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInUp {
  to { opacity: 1; transform: translateY(0); }
}

/* When hovering or viewed (optional reveal) */
.testimonial-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  animation: cardPump 5s ease-in-out infinite;
}
.testimonial-card:hover {
  transform: scale(1.06);
  box-shadow: 0 30px 80px rgba(255,193,7,0.35);
}
/* === GOLD CTA BUTTON === */
.cta-gold {
  background: linear-gradient(135deg, #ffcc33, #ffb300, #ffd54f);
  box-shadow: 0 0 20px rgba(255, 193, 7, 0.4), inset 0 0 10px rgba(255, 255, 255, 0.3);
  color: #1a1a1a;
  position: relative;
  overflow: hidden;
  border: none;
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

/* Glow border pulse */
.cta-gold::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: 0.75rem;
  padding: 2px;
  background: linear-gradient(120deg, #fff7b3, #ffd54f, #ffb300, #fff7b3);
  background-size: 300% 300%;
  -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  animation: borderGlow 4s linear infinite;
  z-index: 0;
}

/* 3D shine effect on hover */
.cta-gold:hover {
  transform: translateY(-2px) scale(1.03);
  box-shadow: 0 0 30px rgba(255, 215, 0, 0.6), 0 0 15px rgba(255, 193, 7, 0.4);
}

/* Shine reflection */
.cta-gold::after {
  content: "";
  position: absolute;
  top: 0;
  left: -80%;
  width: 60%;
  height: 100%;
  background: linear-gradient(120deg, rgba(255,255,255,0.4), transparent);
  transform: skewX(-20deg);
  transition: left 0.6s ease;
  z-index: 1;
}

.cta-gold:hover::after {
  left: 130%;
}

/* Pulse animation for attention */
@keyframes borderGlow {
  0%   { background-position: 0% 50%; }
  100% { background-position: 300% 50%; }
}
/* === HERO CTA BUTTONS === */

/* shared wrapper shimmer */
.hero-btn-group {
  animation: fadeInUp 1.3s ease-out forwards;
}

/* --- Golden animated button (Book on WhatsApp) --- */
.btn-hero-gold {
  background: linear-gradient(135deg, #ffcc33, #ffb300, #ffd54f);
  color: #1a1a1a;
  position: relative;
  overflow: hidden;
  border-radius: 0.75rem;
  font-weight: 600;
  letter-spacing: 0.3px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  box-shadow: 0 0 25px rgba(255, 193, 7, 0.4);
  animation: heroPulse 2.8s ease-in-out infinite;
}

/* glowing animated border */
.btn-hero-gold::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: inherit;
  padding: 2px;
  background: linear-gradient(120deg, #fff7b3, #ffd54f, #ffb300, #fff7b3);
  background-size: 300% 300%;
  -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  animation: borderFlow 4s linear infinite;
  z-index: 0;
}

/* shimmer reflection */
.btn-hero-gold::after {
  content: "";
  position: absolute;
  top: 0;
  left: -80%;
  width: 60%;
  height: 100%;
  background: linear-gradient(120deg, rgba(255,255,255,0.5), transparent);
  transform: skewX(-20deg);
  animation: heroShine 3s infinite;
  z-index: 1;
}

/* --- Transparent secondary button (See Services) --- */
.btn-hero-outline {
  position: relative;
  border: 1px solid rgba(255,193,7,0.35);
  background: rgba(0,0,0,0.4);
  color: #e9eef5;
  border-radius: 0.75rem;
  overflow: hidden;
  transition: all 0.3s ease;
  animation: heroPulseSoft 3.5s ease-in-out infinite;
}

.btn-hero-outline::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(120deg, transparent 30%, rgba(255,255,255,0.15) 50%, transparent 70%);
  transform: translateX(-100%);
  animation: heroShine 4s infinite;
}
/* optional: spin a bit when toggling */
#iconOpen, #iconClose { transform-origin: center; }
.menu-anim-open  { transform: rotate(90deg); }
.menu-anim-close { transform: rotate(-90deg); }

.btn-hero-outline:hover {
  transform: translateY(-3px);
  box-shadow: 0 0 25px rgba(255,215,0,0.4);
  border-color: #ffd54f;
}
/* === 24/7 Service Badge Animation === */
.service-badge {
  background: linear-gradient(90deg, #10b981, #34d399, #10b981);
  color: #022c22;
  font-weight: 700;
  padding: 0.5rem 1rem;
  border-radius: 0.75rem;
  position: relative;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(16, 185, 129, 0.4);
  animation: badgePulse 2.8s ease-in-out infinite, badgeFloat 5s ease-in-out infinite;
}

/* Subtle shimmer reflection */
.service-badge::after {
  content: "";
  position: absolute;
  top: 0;
  left: -60%;
  width: 40%;
  height: 100%;
  background: linear-gradient(120deg, transparent, rgba(255,255,255,0.5), transparent);
  transform: skewX(-20deg);
  animation: badgeShine 3.5s linear infinite;
}

/* Pulse glow */
@keyframes badgePulse {
  0%, 100% { box-shadow: 0 0 20px rgba(16,185,129,0.4), 0 0 40px rgba(16,185,129,0.1); transform: scale(1); }
  50% { box-shadow: 0 0 35px rgba(52,211,153,0.6), 0 0 60px rgba(16,185,129,0.25); transform: scale(1.05); }
}
/* === Animated "Order Now" CTA === */
.cta-order {
  position: relative;
  overflow: hidden;
  display: inline-flex;
  align-items: center;
  gap: .5rem;
  border: none;
  border-radius: .75rem;
  background: linear-gradient(135deg, #ffcc33, #ffb300, #ffd54f);
  color: #111;
  font-weight: 700;
  box-shadow: 0 10px 30px rgba(255,193,7,.28), inset 0 0 10px rgba(255,255,255,.25);
  transform: translateZ(0);
  animation: orderPulse 2.6s ease-in-out infinite;
}

/* glowing border path */
.cta-order::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: .75rem;
  padding: 2px;
  background: linear-gradient(120deg, #fff7b3, #ffd54f, #ffb300, #fff7b3);
  background-size: 300% 300%;
  -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  animation: orderBorder 4s linear infinite;
  z-index: 0;
}

/* shimmer sweep */
.cta-order::after {
  content: "";
  position: absolute;
  top: 0; left: -80%;
  width: 60%; height: 100%;
  background: linear-gradient(120deg, rgba(255,255,255,.35), transparent);
  transform: skewX(-20deg);
  animation: orderShine 3.2s infinite;
  z-index: 1;
}

/* icon nudge on hover */
.cta-order svg {
  transition: transform .25s ease;
}
.cta-order:hover svg {
  transform: translateX(2px);
}

/* hover lift */
.cta-order:hover {
  transform: translateY(-3px) scale(1.03);
  box-shadow: 0 16px 40px rgba(255,215,0,.45);
}

/* active press */
.cta-order:active {
  transform: translateY(0) scale(0.99);
}
/* === Footer Bar Animation === */
.footer-bar {
  position: relative;
  background: linear-gradient(90deg, #0f1015, #121317);
  border-top: 1px solid #1d1f27;
  box-shadow: 0 -2px 20px rgba(0, 0, 0, 0.4);
  overflow: hidden;
}

/* glowing animated top border */
.footer-bar::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 200%;
  height: 2px;
  background: linear-gradient(90deg, #ffd54f, #ffc107, #ffb300, #ffd54f);
  animation: footerGlow 5s linear infinite;
}

/* text animation */
.footer-text {
  color: #b0b4bd;
  font-size: 0.9rem;
  text-align: center;
  transition: color 0.3s ease;
}

.footer-text strong {
  background: linear-gradient(90deg, #ffd54f, #ffc107, #fff3b0);
  -webkit-background-clip: text;
  color: transparent;
  font-weight: 700;
  animation: shimmerText 4s linear infinite;
}

/* shimmer border motion */
@keyframes footerGlow {
  0% { left: -100%; }
  100% { left: 100%; }
}

/* moving gold shimmer */
@keyframes shimmerText {
  0% { background-position: 0% center; }
  100% { background-position: 200% center; }
}
/* === Typewriter Animation for Testimonials === */
.testimonial-card {
  overflow: hidden;
  position: relative;
}

.testimonial-text {
  display: inline-block;
  white-space: normal; /* ✅ allow wrapping */
  word-break: break-word; /* ✅ ensure long words don’t overflow */
  overflow: hidden;
  border-right: 3px solid #ffc107;
  width: 0;
  max-width: 100%; /* ✅ stay within card width */
  animation: typeText 4s steps(40, end) forwards, blinkCursor 0.8s step-end infinite;
}


@keyframes typeText {
  from { width: 0; }
  to { width: 100%; }
}

@keyframes blinkCursor {
  0%, 100% { border-color: transparent; }
  50% { border-color: #ffc107; }
}
/* Cursor blink */
@keyframes blinkCursor {
  0%, 100% { border-color: transparent; }
  50%      { border-color: #ffc107; }
}

/* Type animation keyframes (expands width) */
@keyframes typeText {
  from { width: 0; }
  to   { width: 100%; }
}

/* Base: paused, wraps lines */
.testimonial-text {
  display: inline-block;
  white-space: normal;           /* allow wrapping */
  word-break: break-word;        /* break long words safely */
  overflow: hidden;
  border-right: 3px solid #ffc107;
  width: 0;                      /* grows during typing */
  max-width: 100%;
  /* No animation until we add .typing */
  animation: none;
}

/* When intersecting: start typing with dynamic vars */
.testimonial-text.typing {
  animation:
    typeText var(--typeDur, 4s) steps(var(--steps, 40), end) forwards,
    blinkCursor .8s step-end infinite;
}
/* Footer tagline typing effect */
.typing-text {
  display: inline-block;
  white-space: normal;
  word-break: break-word;
  overflow: hidden;
  border-right: 3px solid #ffc107;
  width: 0;
  animation: none;
}
.typing-tagline {
  display: inline-block;
  overflow: hidden;
  white-space: normal;
  border-right: 3px solid #ffc107;
  width: 0;
  animation: typing 5s steps(60, end) forwards, blink 0.7s step-end infinite;
}

@keyframes typing {
  from { width: 0; }
  to { width: 100%; }
}

@keyframes blink {
  50% { border-color: transparent; }
}

.typing-text.typing {
  animation:
    typeText var(--typeDur, 4s) steps(var(--steps, 40), end) forwards,
    blinkCursor 0.8s step-end infinite;
}

@keyframes blinkCursor {
  0%, 100% { border-color: transparent; }
  50% { border-color: #ffc107; }
}

@keyframes typeText {
  from { width: 0; }
  to { width: 100%; }
}

/* Name: subtle reveal after text finishes */
@keyframes fadeUpSoft {
  from { opacity: 0; transform: translateY(6px); }
  to   { opacity: 1; transform: translateY(0); }
}

.testimonial-name {
  opacity: 0;                    /* hidden until started */
  animation: none;
}

.testimonial-name.revealed {
  animation: fadeUpSoft .45s ease-out forwards;
}

/* Reviewer name fade-in after typing */
.testimonial-name {
  opacity: 0;
  transform: translateY(5px);
  animation: fadeInName 0.8s ease-out forwards;
  animation-delay: 4.2s; /* appears after text finishes */
}

@keyframes fadeInName {
  from { opacity: 0; transform: translateY(5px); }
  to { opacity: 1; transform: translateY(0); }
}

/* keyframes */
@keyframes orderPulse {
  0%,100% { box-shadow: 0 10px 30px rgba(255,193,7,.28); }
  50%     { box-shadow: 0 16px 44px rgba(255,215,0,.5); }
}
@keyframes orderBorder {
  0% { background-position: 0% 50%; }
  100% { background-position: 300% 50%; }
}
@keyframes orderShine {
  0%,70%,100% { left: -80%; opacity: 0; }
  80% { left: 130%; opacity: 1; }
}

/* Floating motion */
@keyframes badgeFloat {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-5px); }
}

/* Shimmer movement */
@keyframes badgeShine {
  0% { left: -60%; opacity: 0; }
  50% { left: 120%; opacity: 1; }
  100% { left: 120%; opacity: 0; }
}

/* --- Animations --- */
@keyframes heroPulse {
  0%, 100% { transform: scale(1); box-shadow: 0 0 25px rgba(255,193,7,0.35); }
  50%      { transform: scale(1.05); box-shadow: 0 0 40px rgba(255,215,0,0.6); }
}
@keyframes heroPulseSoft {
  0%, 100% { transform: scale(1); box-shadow: 0 0 10px rgba(255,193,7,0.1); }
  50%      { transform: scale(1.03); box-shadow: 0 0 20px rgba(255,193,7,0.25); }
}
@keyframes heroShine {
  0%, 80%, 100% { left: -80%; opacity: 0; }
  90%           { left: 130%; opacity: 1; }
}
@keyframes borderFlow {
  0% { background-position: 0% 50%; }
  100% { background-position: 300% 50%; }
}

/* optional: subtle fade-in for the whole heading */
.sparkle-heading {
  animation: fadeIn 1.5s ease-out forwards;
  opacity: 0;
}
@keyframes fadeIn {
  to { opacity: 1; }
}

@keyframes shimmer {
  0%   { left: -75%; opacity: 0; }
  40%  { opacity: 1; }
  100% { left: 130%; opacity: 0; }
}
/* Vignette overlay */
.hero-vignette {
  background:
    radial-gradient(1200px 500px at 50% 110%, rgba(0,0,0,.65), transparent 60%),
    radial-gradient(800px 400px at -10% 10%, rgba(0,0,0,.35), transparent 60%),
    radial-gradient(800px 400px at 110% 10%, rgba(0,0,0,.35), transparent 60%);
}

/* Ambient blobs */
.blob {
  position: absolute; border-radius: 999px; filter: blur(40px);
  opacity: .25; z-index: 0; mix-blend: screen;
}
.blob-1 { width: 420px; height: 420px; background: #ffc10733; top: 8%; left: -6%; animation: floatBg 11s ease-in-out infinite alternate; }
.blob-2 { width: 480px; height: 480px; background: #00d2ff26; bottom: -6%; right: -8%; animation: floatBg 13s ease-in-out infinite alternate; }

/* Grain */
.noise-overlay {
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width=\"160\" height=\"160\" viewBox=\"0 0 160 160\"><filter id=\"n\"><feTurbulence type=\"fractalNoise\" baseFrequency=\"0.8\" numOctaves=\"2\" stitchTiles=\"stitch\"/></filter><rect width=\"100%\" height=\"100%\" filter=\"url(%23n)\" opacity=\"0.45\"/></svg>');
  background-size: 200px 200px;
}

/* Light sweep */
.light-sweep {
  position: absolute; inset:0; pointer-events:none; overflow:hidden;
}
.light-sweep::before{
  content:""; position:absolute; top:0; left:-40%;
  width:40%; height:100%;
  background: linear-gradient(120deg, transparent 20%, rgba(255,255,255,.18) 50%, transparent 80%);
  transform: skewX(-20deg);
  animation: sweep 3.2s ease-out 0.8s forwards;
}
@keyframes sweep { to { left: 120%; } }

/* Parallax card hover lift */
.parallax-card { transform: translateZ(0); transition: transform .6s ease, box-shadow .6s ease; }
.parallax-card:hover { transform: translateY(-6px); box-shadow: 0 30px 90px rgba(0,0,0,.45); }

/* Tiny info dot */
.i-dot { width:8px; height:8px; border-radius:999px; background:#22c55e; display:inline-block; box-shadow: 0 0 10px rgba(34,197,94,.6) }

/* Stats ribbon */
.stat-n { font-size: clamp(1.4rem, 2vw, 1.8rem); font-weight: 800; color:#fff }
.stat-l { color:#9aa0aa }

/* Tilt cards */
.card-tilt {
  position: relative;
  transform-style: preserve-3d;
  will-change: transform;
  transition: transform .15s ease, box-shadow .3s ease, border-color .3s ease;
}

.card-tilt:hover { box-shadow: 0 25px 70px rgba(0,0,0,.45); border-color: #2a2d36; }
.card-tilt::after{
  content:""; position:absolute; inset:0; border-radius:16px; pointer-events:none;
  background: linear-gradient(120deg, rgba(255,193,7,.25), transparent 40%, rgba(0,212,255,.18));
  opacity:.0; transition: opacity .3s ease;
}
.card-tilt:hover::after{ opacity:.5 }
.stat-n {
  font-size: clamp(1.6rem, 2vw, 2rem);
  font-weight: 800;
  color: #ffd54f;
  text-shadow: 0 0 20px rgba(255, 215, 0, 0.25);
  animation: popIn 1s ease-out;
}
@keyframes popIn {
  from { opacity: 0; transform: scale(0.9); }
  to   { opacity: 1; transform: scale(1); }
}
.stat-l {
  color: #9aa0aa;
  font-size: 0.95rem;
}
/* === Smooth bumping / pulsing animation === */
@keyframes bumpUp {
  0%, 100% { transform: translateY(0) scale(1); }
  50% { transform: translateY(-6px) scale(1.05); }
}
/* WhatsApp bump animation */
@keyframes bumpUp {
  0%, 100% { transform: translateY(0) scale(1); }
  50%      { transform: translateY(-6px) scale(1.07); }
}
/* === Animated CTA Button === */
.cta-animated {
  background: linear-gradient(135deg, #ffcc33, #ffb300, #ffd54f);
  position: relative;
  overflow: hidden;
  color: #1a1a1a;
  border-radius: 0.75rem;
  box-shadow: 0 0 25px rgba(255, 193, 7, 0.35), inset 0 0 10px rgba(255, 255, 255, 0.25);
  animation: pulseGlow 2.5s ease-in-out infinite;
}

/* glowing border animation */
.cta-animated::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: 0.75rem;
  padding: 2px;
  background: linear-gradient(120deg, #fff7b3, #ffd54f, #ffb300, #fff7b3);
  background-size: 300% 300%;
  -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  animation: borderFlow 4s linear infinite;
  z-index: 0;
}

/* shimmer reflection animation */
.cta-animated::after {
  content: "";
  position: absolute;
  top: 0;
  left: -80%;
  width: 60%;
  height: 100%;
  background: linear-gradient(120deg, rgba(255,255,255,0.4), transparent);
  transform: skewX(-20deg);
  animation: shinePass 3.5s infinite;
  z-index: 1;
}

/* pulse + hover effects */
@keyframes pulseGlow {
  0%, 100% { box-shadow: 0 0 25px rgba(255,193,7,0.3); transform: scale(1); }
  50%      { box-shadow: 0 0 35px rgba(255,215,0,0.6); transform: scale(1.04); }
}
@keyframes borderFlow {
  0% { background-position: 0% 50%; }
  100% { background-position: 300% 50%; }
}
@keyframes shinePass {
  0%, 70%, 100% { left: -80%; opacity: 0; }
  80% { left: 130%; opacity: 1; }
}

/* Hover lift */
.cta-animated:hover {
  transform: translateY(-4px) scale(1.05);
  box-shadow: 0 0 40px rgba(255,215,0,0.6);
}

.bumping {
  animation: bumpUp 2.3s ease-in-out infinite;
}

a[href*="wa.me"]:hover {
  box-shadow: 0 0 30px rgba(37, 211, 102, 0.6);
}

.bumping {
  animation: bumpUp 2.2s ease-in-out infinite;
  box-shadow: 0 0 20px rgba(255,193,7,0.35);
  transition: box-shadow 0.3s ease, transform 0.3s ease;
}

.bumping:hover {
  animation-play-state: paused; /* pause bump while hovered */
  transform: scale(1.1);
  box-shadow: 0 0 35px rgba(255,215,0,0.6);
}

#scrollTopBtn {
  box-shadow: 0 0 20px rgba(255,193,7,0.35);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
#scrollTopBtn:hover {
  transform: scale(1.1) translateY(-3px);
  box-shadow: 0 0 30px rgba(255,215,0,0.6);
}

#scrollTopBtn {
  box-shadow: 0 0 20px rgba(255,193,7,0.4);
}
#scrollTopBtn:hover {
  transform: scale(1.1);
  box-shadow: 0 0 25px rgba(255,215,0,0.6);
}
/* Subtle breathe + glow */
@keyframes callBreathe {
  0%,100% { transform: translateY(0) scale(1); box-shadow: 0 6px 18px rgba(255,193,7,.25); }
  50%     { transform: translateY(-2px) scale(1.06); box-shadow: 0 10px 28px rgba(255,215,0,.45); }
}
@keyframes callShine {
  0%, 90%, 100% { left: -70%; opacity: 0; }
  95%           { left: 120%; opacity: .85; }
}

/* Expanding ring pulse behind the button */
@keyframes callRing {
  0%   { transform: scale(1);   opacity: .35; }
  70%  { transform: scale(1.9); opacity: 0;   }
  100% { transform: scale(1.9); opacity: 0;   }
}

/* Apply animations */
.btn-call-anim {
  position: relative;
  animation: callBreathe 2.4s ease-in-out infinite;
  isolation: isolate; /* keep pseudo behind content */
}
/* === Disable all testimonial animations globally === */
.testimonial-card,
.testimonial-text,
.testimonial-name {
  animation: none !important;
  transform: none !important;
  transition: none !important;
}

.testimonial-card:hover {
  transform: none !important;
  box-shadow: 0 18px 50px rgba(0,0,0,.35) !important; /* static shadow */
}

@keyframes pulseGlow {
  0%, 100% {
    box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.4),
                0 0 15px rgba(255, 193, 7, 0.15);
    transform: scale(1);
  }
  50% {
    box-shadow: 0 0 25px rgba(255, 193, 7, 0.6),
                0 0 60px rgba(255, 193, 7, 0.3);
    transform: scale(1.05);
  }
}

.animate-pulseGlow {
  animation: pulseGlow 2.5s ease-in-out infinite;
}


.testimonial-text {
  border-right: none !important;
  width: auto !important;
  opacity: 1 !important;
}

.testimonial-name {
  opacity: 1 !important;
  transform: none !important;
}

.btn-call-anim::before {
  content: "";
  position: absolute; inset: 0;
  border-radius: 0.75rem;         /* match rounded-xl */
  background: radial-gradient(circle, rgba(255,193,7,.35), transparent 60%);
  filter: blur(4px);
  z-index: -1;
}

/* Ring pulse (soft) */
.btn-call-anim::after {
  content: "";
  position: absolute; inset: 0;
  border-radius: 0.75rem;         /* match rounded-xl */
  border: 2px solid rgba(255,193,7,.55);
  z-index: -2;
  animation: callRing 2.4s ease-out infinite;
}

/* Quick shine sweep on hover */
.btn-call-anim:hover { transform: translateY(-2px) scale(1.05); }
.btn-call-anim:hover svg { filter: drop-shadow(0 0 6px rgba(0,0,0,.3)); }
.btn-call-anim:hover::before {
  animation: callShine 1.6s ease;
  background: linear-gradient(120deg, transparent 20%, rgba(255,255,255,.5), transparent 80%);
}

/* Respect reduced motion */
@media (prefers-reduced-motion: reduce) {
  .btn-call-anim, .btn-call-anim::after { animation: none !important; }
}


/* Ken Burns subtle hover */
.kenburns { transition: transform 3.6s ease, filter .6s ease; }
.kenburns:hover { transform: scale(1.08); filter: saturate(1.05) }

/* Fleeting entrance you already have */
@keyframes fadeZoomIn { 0%{opacity:0;transform:scale(1.05)} 100%{opacity:1;transform:scale(1.12)} }
.animate-fadeZoomIn { animation: fadeZoomIn 3.5s ease-out forwards; transform-origin: center top; }
/* ===== Footer bottom strip ===== */
.footer-bottom{
  border-top:1px solid #1d1f27;
  background: linear-gradient(180deg, rgba(15,16,21,.9), rgba(12,13,18,.9));
  padding: .9rem 0;
}
.footer-bottom__inner{
  width:min(1200px,92%);
  margin-inline:auto;
  display:flex;
  gap:.75rem 1.25rem;
  align-items:center;
  justify-content:space-between;
  flex-wrap:wrap;
}

/* text */
.footer-bottom__copy{
  color:#9aa0aa; 
  font-size:.9rem;
  display:flex; 
  align-items:center; 
  gap:.5rem;
}

/* shimmering brand word */
.copy-brand{
  background:linear-gradient(90deg,#ffd54f,#ffc107,#fff3b0);
  -webkit-background-clip:text; background-clip:text; color:transparent;
  background-size:200% auto;
  animation: copyShimmer 6s linear infinite;
  font-weight:700;
}
@keyframes copyShimmer{ 0%{background-position:0%} 100%{background-position:200%} }

/* links to the right */
.footer-bottom__links{
  display:flex; align-items:center; gap:.75rem;
  list-style:none; margin:0; padding:0;
}
.footer-bottom__links li{
  position:relative; padding-left:.9rem;
}
.footer-bottom__links li::before{
  content:""; position:absolute; left:0; top:50%; transform:translateY(-50%);
  width:6px; height:6px; border-radius:999px; 
  background: radial-gradient(circle at 50% 50%, #ffd54f, #ffc107);
  opacity:.65;
}
.footer-bottom__links li:first-child{ padding-left:0; }
.footer-bottom__links li:first-child::before{ display:none; }

.footer-bottom__links a{
  color:#9aa0aa; text-decoration:none; font-size:.9rem; 
  transition: color .25s ease, transform .25s ease;
}
.footer-bottom__links a:hover{
  color:#ffc107; transform: translateY(-1px);
}

/* mobile stacking */
@media (max-width: 640px){
  .footer-bottom__inner{ flex-direction:column; align-items:center; text-align:center; }
  .footer-bottom__links{ gap:.6rem; }
}

  </style>
</head>

<body class="bg-bg text-text">

  <!-- WhatsApp Floating Button -->
  <a class="fixed right-4 bottom-4 z-50 grid h-14 w-14 place-items-center rounded-full bg-[#25D366] shadow-[0_10px_30px_rgba(0,0,0,.35)]"
     href="https://wa.me/491234567890?text=Hello%20Taxi!%20I%20want%20to%20book%20a%20ride." target="_blank" aria-label="Chat on WhatsApp">
    <svg viewBox="0 0 32 32" class="w-6 fill-white" aria-hidden="true">
      <path d="M19.1 17.6c-.3-.2-1.8-.9-2.1-1s-.5-.2-.7.2-.8 1-1 1.2-.4.2-.7 0c-.3-.2-1.1-.4-2.1-1.3-.8-.7-1.3-1.5-1.5-1.8-.2-.3 0-.5.1-.7s.3-.4.4-.5.2-.3.3-.5c.1-.2 0-.4 0-.5S11 10 10.8 9.5c-.2-.4-.5-.4-.7-.4h-.6c-.2 0-.5.1-.8.4s-1 1-1 2.4 1.1 2.8 1.3 3 .2.5 2.6 4c2.5 2.4 4.9 3.1 6.9 3.4.3 0 .7 0 1 .1.3 0 .7 0 1.1-.4.4-.4 1.3-1.2 1.5-2.3.2-1 .2-1.9.1-2.1-.1-.1-.3-.2-.6-.4zM16 3C8.8 3 3 8.8 3 16c0 2.3.6 4.5 1.8 6.4L3 29l6.8-1.8C11.6 28.4 13.8 29 16 29c7.2 0 13-5.8 13-13S23.2 3 16 3z"/>
    </svg>
  </a>

  <!-- Header -->
<header class="sticky top-0 z-50 bg-[#0b0c10]/60 backdrop-blur-lg border-b border-[#2a2d36] shadow-[0_4px_30px_rgba(0,0,0,0.25)] relative">
  <div class="mx-auto w-[min(1200px,92%)]">
    <div class="flex items-center justify-between gap-3 py-4">
      <!-- Left: Logo (never shrink) -->
 <p>
  <strong>Address:</strong><br>
  Taxi Platte Wülfrath<br>
  Goethestraße 38<br>
  42489 Wülfrath
</p>



      <!-- Center: Desktop Nav (hidden on mobile) -->
      <nav id="mainNav" class="hidden lg:flex items-center justify-center gap-5 min-w-0 flex-1">
        <a href="index.php" class="px-3 py-2 rounded-lg <?= $active==='home'?'bg-card':'' ?>">Home</a>
        <a href="about.php" class="px-3 py-2 rounded-lg <?= $active==='about'?'bg-card':'' ?>">About</a>
        <a href="services.php" class="px-3 py-2 rounded-lg <?= $active==='services'?'bg-card':'' ?>">Services</a>
        <a href="contact.php" class="px-3 py-2 rounded-lg <?= $active==='contact'?'bg-card':'' ?>">Contact Us</a>
      </nav>

      <!-- Right: Actions -->
      <div class="flex items-center gap-2 shrink-0">
        <!-- Mobile compact call button (icon only) -->
   <a href="tel:+491234567890"
   class="sm:hidden grid place-items-center h-10 w-10 rounded-xl bg-brand text-black shadow-md hover:bg-brandDark transition btn-call-anim"
   aria-label="Call TaxiGo">
  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
    <path d="M6.6 10.8a15.6 15.6 0 006.6 6.6l2.2-2.2a1 1 0 011-.25c1.1.36 2.4.55 3.6.55a1 1 0 011 1v3.5a1 1 0 01-1 1A17.5 17.5 0 014 6.5a1 1 0 011-1h3.6a1 1 0 011 1c0 1.2.2 2.4.55 3.6a1 1 0 01-.25 1L6.6 10.8z"/>
  </svg>
</a>


        <!-- Full CTA from small screens up -->
        <a href="tel:+491234567890"
           class="hidden sm:inline-flex items-center gap-2 whitespace-nowrap cta-gold rounded-xl px-4 py-2 font-semibold text-black shadow-lg transition-all duration-300">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M5 11h14l-1.5-4.5a1 1 0 00-.95-.65H7.45a1 1 0 00-.95.65L5 11zm16 1h-1.34l-1.6-4.8A2 2 0 0016.55 6h-9.1a2 2 0 00-1.51 1.2L4.34 12H3a1 1 0 00-1 1v6a2 2 0 002 2h1a2 2 0 002-2v-1h10v1a2 2 0 002 2h1a2 2 0 002-2v-6a1 1 0 00-1-1zm-13 5a1 1 0 11-2 0 1 1 0 012 0zm12 0a1 1 0 11-2 0 1 1 0 012 0z"/>
          </svg>
          <span>Taxi bestellen</span>
        </a>

        <!-- Hamburger (only on mobile) -->
  <button id="menuBtn"
  class="lg:hidden text-white text-2xl h-10 w-10 grid place-items-center rounded-lg hover:bg-white/5 transition"
  aria-label="Open menu" aria-expanded="false">
  <!-- Hamburger -->
  <svg id="iconOpen" class="w-6 h-6 transition-transform duration-200" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
    <path d="M3 6h18M3 12h18M3 18h18"/>
  </svg>
  <!-- X (close) -->
  <svg id="iconClose" class="w-6 h-6 transition-transform duration-200 hidden" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
    <path d="M6 6l12 12M18 6l-12 12"/>
  </svg>
</button>


      </div>
    </div>
  </div>

<!-- Mobile Drawer -->
<div id="mobileNav"
     class="absolute left-0 right-0 top-full hidden z-50 border-t border-[#1d1f27] bg-[#0b0c10]/95 backdrop-blur
            opacity-0 translate-y-2 transition-all duration-200">
  <div class="mx-auto w-[min(1200px,92%)]">
    <nav class="flex flex-col gap-2 py-3">
      <a href="index.php" class="px-3 py-2 rounded-lg <?= $active==='home'?'bg-card':'' ?>">Home</a>
      <a href="about.php" class="px-3 py-2 rounded-lg <?= $active==='about'?'bg-card':'' ?>">About</a>
      <a href="services.php" class="px-3 py-2 rounded-lg <?= $active==='services'?'bg-card':'' ?>">Services</a>
      <a href="contact.php" class="px-3 py-2 rounded-lg <?= $active==='contact'?'bg-card':'' ?>">Contact</a>

      <a href="tel:+491234567890"
         class="mt-2 inline-flex items-center gap-2 whitespace-nowrap cta-gold rounded-xl px-4 py-2 font-semibold text-black shadow-lg transition">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M6.6 10.8a15.6 15.6 0 006.6 6.6l2.2-2.2a1 1 0 011-.25c1.1.36 2.4.55 3.6.55a1 1 0 011 1v3.5a1 1 0 01-1 1A17.5 17.5 0 014 6.5a1 1 0 011-1h3.6a1 1 0 011 1c0 1.2.2 2.4.55 3.6a1 1 0 01-.25 1L6.6 10.8z"/>
        </svg>
        <span>Taxi bestellen</span>
      </a>
    </nav>
  </div>
</div>

<!-- Click-to-close overlay -->
<button id="mobileOverlay"
        class="hidden fixed inset-0 z-40 bg-black/50 backdrop-blur-sm"
        aria-hidden="true"></button>

</header>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const btn     = document.getElementById('menuBtn');
  const drawer  = document.getElementById('mobileNav');
  const overlay = document.getElementById('mobileOverlay');
  const iconOpen  = document.getElementById('iconOpen');
  const iconClose = document.getElementById('iconClose');

  if (!btn || !drawer || !overlay || !iconOpen || !iconClose) return;

  const open = () => {
    drawer.classList.remove('hidden');
    overlay.classList.remove('hidden');
    requestAnimationFrame(() => {
      drawer.classList.remove('opacity-0','translate-y-2');
    });
    document.body.classList.add('overflow-hidden');
    btn.setAttribute('aria-expanded', 'true');
    btn.setAttribute('aria-label', 'Close menu');

    // swap icons + optional spin
    iconOpen.classList.add('hidden');
    iconClose.classList.remove('hidden');
    iconClose.classList.add('menu-anim-open');
    setTimeout(() => iconClose.classList.remove('menu-anim-open'), 200);
  };

  const close = () => {
    drawer.classList.add('opacity-0','translate-y-2');
    setTimeout(() => drawer.classList.add('hidden'), 200);
    overlay.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
    btn.setAttribute('aria-expanded', 'false');
    btn.setAttribute('aria-label', 'Open menu');

    // swap icons + optional spin
    iconClose.classList.add('hidden');
    iconOpen.classList.remove('hidden');
    iconOpen.classList.add('menu-anim-close');
    setTimeout(() => iconOpen.classList.remove('menu-anim-close'), 200);
  };

  btn.addEventListener('click', () => {
    const isOpen = btn.getAttribute('aria-expanded') === 'true';
    isOpen ? close() : open();
  });

  overlay.addEventListener('click', close);

  // Close drawer if resizing to desktop
  window.addEventListener('resize', () => {
    if (window.innerWidth >= 1024) close();
  });
});
</script>
