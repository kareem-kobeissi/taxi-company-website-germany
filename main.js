// Mobile nav toggle
const btn = document.getElementById('menuBtn');
const mobile = document.getElementById('mobileNav');
const mainNav = document.getElementById('mainNav');
if (btn && mobile) {
  btn.addEventListener('click', () => {
    mobile.classList.toggle('hidden');
  });
}

// Parallax on hero image
const heroImg = document.querySelector('.parallax');
if (heroImg) {
  window.addEventListener('scroll', () => {
    const y = window.scrollY * 0.15;
    heroImg.style.transform = `translateY(${y}px)`;
  });
}

// Simple 3D tilt for elements with .tilt
document.querySelectorAll('.tilt').forEach(card => {
  const strength = 12;
  card.addEventListener('mousemove', (e) => {
    const r = card.getBoundingClientRect();
    const cx = e.clientX - r.left, cy = e.clientY - r.top;
    const rx = ((cy / r.height) - 0.5) * -2 * strength;
    const ry = ((cx / r.width) - 0.5) *  2 * strength;
    card.style.transform = `rotateX(${rx}deg) rotateY(${ry}deg) translateY(-4px)`;
    card.style.boxShadow = '0 18px 50px rgba(0,0,0,.35)';
  });
  card.addEventListener('mouseleave', () => {
    card.style.transform = 'rotateX(0) rotateY(0)';
    card.style.boxShadow = '0 12px 30px rgba(0,0,0,.25)';
  });
});

// Contact form validation
function validateForm(ev){
  const form = ev.target;
  const email = form.email.value.trim();
  const phone = form.phone.value.trim();
  const msg = form.message.value.trim();
  const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  const phoneOk = /^[\d+\-\s()]{6,}$/.test(phone);
  if(!emailOk){ alert('Please enter a valid email.'); return false; }
  if(!phoneOk){ alert('Please enter a valid phone number.'); return false; }
  if(msg.length < 10){ alert('Please write at least 10 characters.'); return false; }
  return true;
}
 (function () {
    const btn = document.getElementById('menuBtn');
    const drawer = document.getElementById('mobileNav');
    if (!btn || !drawer) return;

    btn.addEventListener('click', () => {
      const open = drawer.classList.toggle('hidden') === false; // now visible
      document.body.style.overflow = open ? 'hidden' : '';
    });

    // Close drawer on ESC
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && !drawer.classList.contains('hidden')) {
        drawer.classList.add('hidden');
        document.body.style.overflow = '';
      }
    });
  })();
  // Reveal + hero parallax + text/word animations
(function(){
  // Reveal on scroll
  const io = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
      if(e.isIntersecting){
        e.target.classList.add('in');
        io.unobserve(e.target);
      }
    });
  }, {threshold: 0.12});

  document.querySelectorAll('.reveal, .sparkle-text, .highlight-word, .highlight-glow, .sparkle-link').forEach(el => io.observe(el));

  // Hero parallax (mouse + scroll) for .hero-parallax
  const heroElems = document.querySelectorAll('.hero-parallax');
  if(heroElems.length){
    const applyMove = (heroImg, tx, ty) => heroImg.style.transform = `translate3d(${tx}px, ${ty}px, 0) scale(1.02)`;
    const onMove = (e) => {
      heroElems.forEach(heroImg=>{
        const rect = heroImg.getBoundingClientRect();
        const cx = rect.left + rect.width/2;
        const cy = rect.top + rect.height/2;
        const dx = (e.clientX - cx) / rect.width;
        const dy = (e.clientY - cy) / rect.height;
        const tx = dx * 8;
        const ty = dy * 8;
        applyMove(heroImg, tx, ty);
      });
    };
    document.addEventListener('mousemove', (e) => { if(window.innerWidth > 640) onMove(e); });

    const onScroll = () => {
      const sc = window.scrollY;
      const t = Math.min(Math.max(sc * 0.06, -12), 12);
      heroElems.forEach(heroImg => applyMove(heroImg, 0, t));
    };
    window.addEventListener('scroll', onScroll, {passive:true});
  }

  /* ---------------------------
     Per-letter and highlight logic
     ---------------------------*/
  function splitText(el){
    if(!el || el.dataset.splitted) return;
    const text = el.textContent.replace(/\s{2,}/g,' ').trim();
    if(!text) return;
    el.innerHTML = '';
    const frag = document.createDocumentFragment();
    for(let i=0;i<text.length;i++){
      const ch = text[i];
      const span = document.createElement('span');
      span.className = 'char';
      span.textContent = ch;
      frag.appendChild(span);
    }
    el.appendChild(frag);
    el.dataset.splitted = '1';
  }

  function setStaggerDelays(el, base=0.03){
    const chars = el.querySelectorAll('.char');
    chars.forEach((c,i)=>{
      c.style.transitionDelay = `${(i * base).toFixed(3)}s`;
    });
  }

  const textObserver = new IntersectionObserver((entries)=>{
    entries.forEach(entry=>{
      const el = entry.target;
      if(entry.isIntersecting){
        if(el.classList.contains('text-animate')){
          splitText(el);
          setStaggerDelays(el, 0.03);
        }
        el.classList.add('in');
        textObserver.unobserve(el);
      }
    });
  }, {threshold: 0.06});

  // Observe targets for per-letter/highlight/sparkle
  document.querySelectorAll('.text-animate, .highlight-word, .highlight-glow, .sparkle-link, .sparkle-text').forEach(t => textObserver.observe(t));

  // Auto-split existing known classes that should animate per-letter
  document.querySelectorAll('.text-animate').forEach(el => {
    splitText(el);
    setStaggerDelays(el, 0.03);
  });

  // Respect reduced motion
  if(window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches){
    document.querySelectorAll('.char').forEach(c => {
      c.style.transition = 'none';
      c.style.opacity = 1;
      c.style.transform = 'none';
    });
  }
})();