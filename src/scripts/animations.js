import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { ScrollSmoother } from 'gsap/ScrollSmoother';

gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

document.addEventListener('DOMContentLoaded', () => {
  // create the smooth scroller
  const smoother = ScrollSmoother.create({
    wrapper: '#smooth-wrapper',
    content: '#smooth-content',
    smooth: 1.2, // how long (in seconds) it takes to "catch up" to the native scroll position
    effects: true, // looks for data-speed and data-lag attributes on elements
    smoothTouch: 0.1, // much shorter smoothing time on touch devices (default is NO smoothing on touch)
  });

  // Mobile menu toggle
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');

  if (mobileMenuButton && mobileMenu) {
    // Start with the menu hidden by setting its style directly
    mobileMenu.style.display = 'none';

    mobileMenuButton.addEventListener('click', () => {
      const isMenuHidden = mobileMenu.style.display === 'none';
      mobileMenu.style.display = isMenuHidden ? 'block' : 'none';
    });
  }

  // --- ANCHOR LINK SMOOTH SCROLLING ---
  // Intercept all clicks on anchor links and use ScrollSmoother to scroll smoothly.
  document.addEventListener('click', (e) => {
    const link = e.target.closest('a');

    // Check if the link exists and has an href attribute
    if (link && link.href) {
      try {
        const linkUrl = new URL(link.href);
        const currentUrl = new URL(window.location.href);

        // Check if it's an anchor link on the same page
        if (
          linkUrl.origin === currentUrl.origin &&
          linkUrl.pathname === currentUrl.pathname &&
          linkUrl.hash
        ) {
          const targetElem = document.querySelector(linkUrl.hash);
          if (targetElem) {
            e.preventDefault();
            smoother.scrollTo(targetElem, true);
          }
        }
      } catch (error) {
        // Not a valid URL, ignore
        console.error('Could not parse link href:', error);
      }
    }
  });

  // --- HERO SECTION ANIMATIONS ---
  const heroTimeline = gsap.timeline({ defaults: { ease: 'power3.out', duration: 0.8 } });

  heroTimeline
    .fromTo('#hero .text-left > p:first-of-type', { opacity: 0, y: 20 }, { opacity: 1, y: 0, delay: 0.2 }, 0)
    .fromTo('#hero h1', { opacity: 0, y: 20 }, { opacity: 1, y: 0 }, 0.2)
    .fromTo('#hero h2', { opacity: 0, y: 20 }, { opacity: 1, y: 0 }, 0.4)
    .fromTo('#hero .max-w-xl', { opacity: 0, y: 20 }, { opacity: 1, y: 0 }, 0.6)
    .fromTo('#hero .flex-wrap.gap-4', { opacity: 0, y: 20 }, { opacity: 1, y: 0 }, 0.8)
    .fromTo('#hero .mt-10', { opacity: 0, y: 20 }, { opacity: 1, y: 0 }, 1.0)
    .fromTo('#hero .group', { opacity: 0, scale: 0.9 }, { opacity: 1, scale: 1, ease: 'power3.out', duration: 1.2 }, 0.5);

  // --- GENERAL SECTION FADE-IN ANIMATIONS ---
  const sections = gsap.utils.toArray('section:not(#hero)');

  sections.forEach((section) => {
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: section,
        start: 'top 85%',
        toggleActions: 'play none none none',
      },
    });

    const sectionTitle = section.querySelector('h2');
    const sectionContent = section.querySelectorAll('h2 ~ *');

    if (sectionTitle) {
      tl.fromTo(sectionTitle, { opacity: 0, y: 50 }, { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out' });
    }

    if (sectionContent.length > 0) {
      tl.fromTo(sectionContent, 
        { opacity: 0, y: 20 }, 
        { opacity: 1, y: 0, duration: 0.6, stagger: 0.15, ease: 'power3.out' }, 
        '-=0.5'
      );
    }
  });
});
