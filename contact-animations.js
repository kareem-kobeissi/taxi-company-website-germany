// filepath: c:\xampp\htdocs\taxi\assets\js\contact-animations.js
// Lightweight reveal + hero parallax
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

  document.querySelectorAll('.reveal').forEach(el => io.observe(el));

  // Simple hero parallax (mouse + scroll) for elements with .hero-parallax
  const heroElems = document.querySelectorAll('.hero-parallax');
  if(heroElems.length){
    const onMove = (e) => {
      heroElems.forEach(heroImg=>{
        const rect = heroImg.getBoundingClientRect();
        const cx = rect.left + rect.width/2;
        const cy = rect.top + rect.height/2;
        const dx = (e.clientX - cx) / rect.width;
        const dy = (e.clientY - cy) / rect.height;
        const tx = dx * 8;
        const ty = dy * 8;
        heroImg.style.transform = `translate3d(${tx}px, ${ty}px, 0) scale(1.02)`;
      });
    };
    document.addEventListener('mousemove', (e) => { if(window.innerWidth > 640) onMove(e); });

    // scroll parallax subtle
    const onScroll = () => {
      const sc = window.scrollY;
      const t = Math.min(Math.max(sc * 0.06, -12), 12);
      heroElems.forEach(heroImg=>{
        // only vertical translate on scroll to avoid conflict with mouse move if used
        const current = heroImg.style.transform || '';
        heroImg.style.transform = `translate3d(0, ${t}px, 0) scale(1.02)`;
      });
    };
    window.addEventListener('scroll', onScroll, {passive:true});
  }
})();