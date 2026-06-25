import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { ScrollSmoother } from 'gsap/ScrollSmoother';
import { SplitText } from 'gsap/SplitText';

gsap.registerPlugin(ScrollTrigger, ScrollSmoother, SplitText);

document.addEventListener('DOMContentLoaded', () => {
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || window.innerWidth < 768;

  gsap.config({ force3D: true });

  // Note: sticky header + mobile-menu toggle are owned by src/index.js (loaded site-wide).

  // --- REDUCED MOTION: show everything as-is, no entrance motion ---
  if (prefersReducedMotion) {
    return;
  }

  // --- MOBILE: native scroll, image reveals + typed hero (no ScrollSmoother) ---
  if (isMobile) {
    const wrapper = document.getElementById('smooth-wrapper');
    const content = document.getElementById('smooth-content');
    if (wrapper) {
      wrapper.style.position = 'relative';
      wrapper.style.height = 'auto';
      wrapper.style.overflow = 'visible';
    }
    if (content) content.style.transform = 'none';

    initHero(null);
    initImageReveals();
    return;
  }

  // --- DESKTOP: full experience ---
  const smoother = ScrollSmoother.create({
    wrapper: '#smooth-wrapper',
    content: '#smooth-content',
    smooth: 1.2,
    effects: true,
    smoothTouch: false,
    normalizeScroll: true,
  });

  // Smooth anchor scrolling through ScrollSmoother
  document.addEventListener('click', (e) => {
    const link = e.target.closest('a');
    if (link && link.href) {
      try {
        const linkUrl = new URL(link.href);
        const currentUrl = new URL(window.location.href);
        if (
          linkUrl.origin === currentUrl.origin &&
          linkUrl.pathname === currentUrl.pathname &&
          linkUrl.hash
        ) {
          const targetElem = document.querySelector(linkUrl.hash);
          if (targetElem) {
            e.preventDefault();
            smoother.scrollTo(targetElem, true, 'top 80px');
          }
        }
      } catch (error) {
        /* not a parseable URL — ignore */
      }
    }
  });

  initHero(smoother);
  initTimeline();
  initSectionReveals();
  initImageReveals();
});

// ===== HERO · AGENT CONSOLE =====
function initHero(smoother) {
  const hero = document.getElementById('hero');
  if (!hero) return;

  const typedEl = hero.querySelector('[data-typed]');
  const revealEls = gsap.utils.toArray('#hero [data-hero]');
  const title = hero.querySelector('h1');
  const meterFill = hero.querySelector('.ship-meter > span');

  // Initial hidden states (JS-only, so no-JS keeps everything visible)
  gsap.set(revealEls, { opacity: 0, y: 14 });

  let splitTitle = null;
  if (title) {
    splitTitle = new SplitText(title, { type: 'chars' });
    gsap.set(splitTitle.chars, { opacity: 0, yPercent: 60, rotateX: -55 });
  }
  if (meterFill) gsap.set(meterFill, { width: '0%' });

  const revealIdentity = () => {
    const tl = gsap.timeline({ defaults: { ease: 'power4.out' } });

    if (splitTitle) {
      tl.to(splitTitle.chars, {
        opacity: 1, yPercent: 0, rotateX: 0,
        duration: 0.6, stagger: 0.025,
      }, 0);
    }
    tl.to(revealEls, {
      opacity: 1, y: 0, duration: 0.7, stagger: 0.09,
    }, 0.15);

    if (meterFill) {
      tl.to(meterFill, { width: '100%', duration: 1.1, ease: 'power2.inOut' }, 0.5);
    }
  };

  // Type the prompt, then reveal. Fallback: if no typed element, reveal now.
  if (typedEl) {
    typeText(typedEl, revealIdentity);
  } else {
    revealIdentity();
  }
}

function typeText(el, onComplete) {
  const full = el.dataset.text || el.textContent;
  el.textContent = '';
  const speed = 26; // ms per char
  let i = 0;
  const tick = () => {
    el.textContent = full.slice(0, i);
    i += 1;
    if (i <= full.length) {
      setTimeout(tick, speed);
    } else if (onComplete) {
      setTimeout(onComplete, 250);
    }
  };
  setTimeout(tick, 350);
}

// ===== TIMELINE =====
function initTimeline() {
  const container = document.querySelector('.timeline-container');
  if (!container) return;

  const progress = container.querySelector('.timeline-progress');
  const items = gsap.utils.toArray('.timeline-item');

  if (progress) {
    gsap.to(progress, {
      height: '100%', ease: 'none',
      scrollTrigger: { trigger: container, start: 'top 60%', end: 'bottom 40%', scrub: 1 },
    });
  }

  items.forEach((item, index) => {
    const content = item.querySelectorAll('.timeline-content');
    const node = item.querySelector('.timeline-node');
    const year = item.querySelector('.timeline-year span');

    gsap.fromTo(content,
      { opacity: 0, x: index % 2 === 0 ? -40 : 40, y: 16 },
      {
        opacity: 1, x: 0, y: 0, duration: 0.8, ease: 'power3.out',
        scrollTrigger: { trigger: item, start: 'top 78%', toggleActions: 'play none none reverse' },
      }
    );

    if (node && index > 0) {
      ScrollTrigger.create({
        trigger: item, start: 'top 62%',
        onEnter: () => {
          gsap.to(node, { backgroundColor: '#b6f23d', scale: 1.25, duration: 0.3, ease: 'back.out(2)' });
          gsap.to(node, { scale: 1, duration: 0.2, delay: 0.3 });
        },
        onLeaveBack: () => gsap.to(node, { backgroundColor: '#2a2a36', duration: 0.3 }),
      });
    }

    if (year && index > 0) {
      ScrollTrigger.create({
        trigger: item, start: 'top 62%',
        onEnter: () => gsap.to(year, { backgroundColor: '#b6f23d', color: '#16210a', duration: 0.3 }),
        onLeaveBack: () => gsap.to(year, { backgroundColor: '#1c1c26', color: '#a7a7b4', duration: 0.3 }),
      });
    }
  });
}

// ===== SECTION REVEALS =====
function initSectionReveals() {
  const sections = gsap.utils.toArray('section:not(#hero):not(#experience)');

  sections.forEach((section) => {
    // Direct children of the inner container — predictable, never leaves content hidden.
    const blocks = gsap.utils.toArray(section.querySelectorAll(':scope > div > *')).slice(0, 8);
    if (!blocks.length) return;

    gsap.timeline({
      scrollTrigger: { trigger: section, start: 'top 82%', toggleActions: 'play none none none' },
    }).fromTo(blocks,
      { opacity: 0, y: 28 },
      { opacity: 1, y: 0, duration: 0.7, stagger: 0.1, ease: 'power3.out' }
    );
  });
}

// ===== SHARED =====
function initImageReveals() {
  const revealBoxes = gsap.utils.toArray('.image-reveal-box');

  revealBoxes.forEach((box) => {
    const slices = box.querySelectorAll('.uncover_slice');
    const img = box.querySelector('.reveal-img');
    const isHeroImage = box.closest('#hero') !== null;

    const tl = gsap.timeline({
      paused: !isHeroImage,
      scrollTrigger: isHeroImage ? null : {
        trigger: box, start: 'top 85%', end: 'bottom 15%',
        onEnter: () => tl.play(),
        onLeave: () => tl.reverse(),
        onEnterBack: () => tl.play(),
        onLeaveBack: () => tl.reverse(),
      },
      delay: isHeroImage ? 0.3 : 0,
    });

    tl.fromTo(slices, { height: '100%' }, { height: 0, duration: 1, ease: 'power4.inOut', stagger: { amount: 0.33 } })
      .fromTo(img, { scale: 1.3 }, { scale: 1, duration: 1.2, ease: 'power4.inOut' }, '<');
  });
}
