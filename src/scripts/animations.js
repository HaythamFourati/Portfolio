import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { ScrollSmoother } from 'gsap/ScrollSmoother';
import { SplitText } from 'gsap/SplitText';

gsap.registerPlugin(ScrollTrigger, ScrollSmoother, SplitText);

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
  const heroTimeline = gsap.timeline({ defaults: { ease: 'power4.out' } });
  
  // Get hero elements
  const heroBadge = document.querySelector('#hero .inline-flex');
  const heroTitle = document.querySelector('#hero h1');
  const heroSubtitle = document.querySelector('#hero h1 + p');
  const heroDescription = document.querySelector('#hero h1 + p + p');
  const heroButtons = document.querySelector('#hero .flex-wrap.gap-4');
  const heroStats = document.querySelectorAll('#hero .grid > div');
  const heroScrollIndicator = document.querySelector('#hero .animate-bounce');
  
  // Split text for character animation on title
  let splitTitle = null;
  if (heroTitle) {
    splitTitle = new SplitText(heroTitle, { type: 'chars, words' });
    // Set initial state for characters
    gsap.set(splitTitle.chars, { opacity: 0, y: 80, rotateX: -90 });
  }
  
  // Set initial states for other elements
  gsap.set([heroBadge, heroSubtitle, heroDescription, heroButtons], { opacity: 0, y: 30 });
  gsap.set(heroStats, { opacity: 0, y: 40, scale: 0.9 });
  if (heroScrollIndicator) gsap.set(heroScrollIndicator, { opacity: 0 });
  
  // Build the timeline
  heroTimeline
    // Badge fades in first
    .to(heroBadge, { opacity: 1, y: 0, duration: 0.6 }, 0.2)
    
    // Title characters animate in with stagger
    .to(splitTitle ? splitTitle.chars : [], { 
      opacity: 1, 
      y: 0, 
      rotateX: 0,
      duration: 0.6, 
      stagger: 0.03,
      ease: 'power4.out'
    }, 0.4)
    
    // Subtitle with bubble spans
    .to(heroSubtitle, { opacity: 1, y: 0, duration: 0.6 }, 1.0)
    
    // Description
    .to(heroDescription, { opacity: 1, y: 0, duration: 0.6 }, 1.2)
    
    // Buttons
    .to(heroButtons, { opacity: 1, y: 0, duration: 0.6 }, 1.4)
    
    // Stats cards stagger in
    .to(heroStats, { 
      opacity: 1, 
      y: 0, 
      scale: 1,
      duration: 0.5, 
      stagger: 0.1,
      ease: 'back.out(1.7)'
    }, 1.6)
    
    // Scroll indicator fades in last
    .to(heroScrollIndicator, { opacity: 1, duration: 0.5 }, 2.1);

  // --- FLOATING PHOTO CURSOR FOLLOW ---
  const floatingPhoto = document.getElementById('floating-photo');
  const heroSection = document.getElementById('hero');
  
  if (floatingPhoto && heroSection) {
    // Get hero section bounds
    let heroBounds = heroSection.getBoundingClientRect();
    
    // Mouse position with smooth lerp
    let mouseX = heroBounds.width / 2;
    let mouseY = heroBounds.height / 2;
    let currentX = mouseX;
    let currentY = mouseY;
    
    // Update bounds on scroll/resize
    const updateBounds = () => {
      heroBounds = heroSection.getBoundingClientRect();
    };
    window.addEventListener('resize', updateBounds);
    
    // Track mouse position within hero
    heroSection.addEventListener('mousemove', (e) => {
      const rect = heroSection.getBoundingClientRect();
      mouseX = e.clientX - rect.left;
      mouseY = e.clientY - rect.top;
    });
    
    // Reset to center when mouse leaves
    heroSection.addEventListener('mouseleave', () => {
      mouseX = heroBounds.width / 2;
      mouseY = heroBounds.height / 2;
    });
    
    // Smooth animation loop with GSAP ticker
    gsap.ticker.add(() => {
      // Lerp for smooth following (0.05 = very smooth/slow, 0.2 = faster)
      currentX += (mouseX - currentX) * 0.08;
      currentY += (mouseY - currentY) * 0.08;
      
      // Apply position
      gsap.set(floatingPhoto, {
        left: currentX,
        top: currentY,
        xPercent: -50,
        yPercent: -50
      });
    });
    
    // Fade in the photo after hero animation
    gsap.fromTo(floatingPhoto, 
      { opacity: 0, scale: 0.8 },
      { opacity: 0.3, scale: 1, duration: 1, delay: 1.5, ease: 'power2.out' }
    );
  }

  // --- INTERACTIVE TIMELINE ANIMATIONS ---
  const timelineContainer = document.querySelector('.timeline-container');
  
  if (timelineContainer) {
    const timelineProgress = timelineContainer.querySelector('.timeline-progress');
    const timelineItems = gsap.utils.toArray('.timeline-item');
    const timelineNodes = gsap.utils.toArray('.timeline-node');
    const timelineYears = gsap.utils.toArray('.timeline-year span');
    
    // Progress line animation on scroll
    if (timelineProgress) {
      gsap.to(timelineProgress, {
        height: '100%',
        ease: 'none',
        scrollTrigger: {
          trigger: timelineContainer,
          start: 'top 60%',
          end: 'bottom 40%',
          scrub: 1,
        }
      });
    }
    
    // Animate each timeline item
    timelineItems.forEach((item, index) => {
      const content = item.querySelectorAll('.timeline-content');
      const node = item.querySelector('.timeline-node');
      const year = item.querySelector('.timeline-year span');
      
      // Content reveal animation
      gsap.fromTo(content, 
        { 
          opacity: 0, 
          x: index % 2 === 0 ? -50 : 50,
          y: 20 
        },
        {
          opacity: 1,
          x: 0,
          y: 0,
          duration: 0.8,
          ease: 'power3.out',
          scrollTrigger: {
            trigger: item,
            start: 'top 75%',
            toggleActions: 'play none none reverse',
          }
        }
      );
      
      // Node activation animation
      if (node && index > 0) { // Skip first node (already active)
        ScrollTrigger.create({
          trigger: item,
          start: 'top 60%',
          onEnter: () => {
            gsap.to(node, { 
              backgroundColor: '#a3e635', // lime-400
              scale: 1.2,
              duration: 0.3,
              ease: 'back.out(2)'
            });
            gsap.to(node, { scale: 1, duration: 0.2, delay: 0.3 });
          },
          onLeaveBack: () => {
            gsap.to(node, { 
              backgroundColor: '#d1d5db', // gray-300
              duration: 0.3 
            });
          }
        });
      }
      
      // Year badge animation
      if (year && index > 0) {
        ScrollTrigger.create({
          trigger: item,
          start: 'top 60%',
          onEnter: () => {
            gsap.to(year, { 
              backgroundColor: '#1a1a1a',
              color: '#ffffff',
              duration: 0.3 
            });
          },
          onLeaveBack: () => {
            gsap.to(year, { 
              backgroundColor: '#e5e7eb',
              color: '#374151',
              duration: 0.3 
            });
          }
        });
      }
    });
  }

  // --- GENERAL SECTION FADE-IN ANIMATIONS ---
  const sections = gsap.utils.toArray('section:not(#hero):not(#experience)');

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

  // --- IMAGE REVEAL ANIMATIONS ---
  const revealBoxes = gsap.utils.toArray('.image-reveal-box');

  revealBoxes.forEach((box) => {
    const slices = box.querySelectorAll('.uncover_slice');
    const img = box.querySelector('.reveal-img');
    
    // Check if this image is in the hero section (should animate immediately)
    const isHeroImage = box.closest('#hero') !== null;
    
    const revealTl = gsap.timeline({
      paused: !isHeroImage, // Pause non-hero timelines initially
      scrollTrigger: isHeroImage ? null : {
        trigger: box,
        start: 'top 85%',
        end: 'bottom 15%',
        toggleActions: 'play reverse play reverse', // Play on enter, reverse on leave
        onEnter: () => revealTl.play(),
        onLeave: () => revealTl.reverse(),
        onEnterBack: () => revealTl.play(),
        onLeaveBack: () => revealTl.reverse(),
      },
      delay: isHeroImage ? 0.3 : 0, // Small delay for hero image
    });

    revealTl
      .fromTo(slices, 
        { height: '100%' },
        { 
          height: 0, 
          duration: 1, 
          ease: 'power4.inOut', 
          stagger: { amount: 0.33 } 
        }
      )
      .fromTo(img, 
        { scale: 1.3 },
        { 
          scale: 1, 
          duration: 1.2, 
          ease: 'power4.inOut' 
        }, 
        '<'); // Start at same time as slices
  });
});
