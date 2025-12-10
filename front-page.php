<?php
/**
 * The front page template file
 *
 * @package Haytham-Fourati-Portfolio
 */

get_header(); ?>

<div class="bg-[#FAFAFA] text-gray-800 relative">
  <!-- Hero Section - Modern 2025/2026 Design -->
  <section id="hero" class="min-h-[90vh] flex items-center relative overflow-hidden">
    <!-- Subtle gradient background -->
    <div class="absolute inset-0 bg-gradient-to-br from-violet-50 via-white to-lime-50 opacity-70"></div>
    <!-- Floating shapes for visual interest -->
    <div class="absolute top-20 right-10 w-72 h-72 bg-lime-400/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-10 w-96 h-96 bg-violet-400/20 rounded-full blur-3xl"></div>
    
    <!-- Floating Profile Photo - follows cursor -->
    <div id="floating-photo" class="absolute w-32 h-32 md:w-48 md:h-48 lg:w-64 lg:h-64 rounded-full overflow-hidden opacity-30 pointer-events-none z-0 hidden md:block" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
      <img src="<?php echo get_theme_file_uri('/images/profile-image.jpg'); ?>" alt="Haytham Fourati" class="w-full h-full object-cover grayscale">
    </div>
    
        
    <div class="max-w-7xl mx-auto px-4 py-20 relative z-10 w-full">
      <!-- Main Hero Content -->
      <div class="text-center max-w-6xl mx-auto mb-16">
        <!-- Status Badge -->
        <div class="inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm border border-gray-200 rounded-full px-4 py-2 mb-8 shadow-sm">
          <span class="relative flex h-2 w-2">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-lime-500 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2 w-2 bg-lime-500"></span>
          </span>
          <span class="text-sm font-medium text-gray-700">Available for new opportunities</span>
        </div>
        
        <!-- Large Typography -->
        <h1 class="text-5xl sm:text-6xl md:text-8xl lg:text-9xl font-medium text-gray-900 tracking-tight leading-none mb-6 whitespace-nowrap" style="font-family: 'Outfit', sans-serif;">
          Haytham Fourat<span class="relative inline-block"><span class="inline-block text-[0.8em] align-baseline">I</span><svg class="absolute -top-[0.03em] left-1/2 -translate-x-1/2 w-[0.25em] h-[0.25em] text-violet-500 animate-spin-slow opacity-0" style="animation: fadeIn 0.6s ease-out 1.5s forwards, spin-slow 20s linear 2.1s infinite;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor"><path d="M54.1182 32.952L71.8189 15.2507L64.7472 8.17867L47.0464 25.88C46.2918 26.6373 44.9985 26.1013 44.9985 25.032V0H34.9988V30.2C34.9988 32.8507 32.8496 35 30.199 35H0V45H25.0312C26.1005 45 26.6364 46.2933 25.8791 47.048L8.18106 64.7493L15.2528 71.8213L32.9536 54.12C33.7082 53.3653 35.0015 53.8987 35.0015 54.968V80H45.0012V49.8C45.0012 47.1493 47.1504 45 49.801 45H80V35H54.9688C53.8995 35 53.3636 33.7067 54.1209 32.952H54.1182Z"></path></svg></span>
        </h1>
        <p class="text-xl sm:text-2xl md:text-3xl text-gray-500 font-light mb-8">
          <span class="bg-gray-100 hover:bg-lime-100 px-3 py-1 rounded-full transition-colors duration-300 cursor-default">WordPress</span> Developer & <span class="bg-gray-100 hover:bg-lime-100 px-3 py-1 rounded-full transition-colors duration-300 cursor-default">Front-End</span> Engineer
        </p>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-10 leading-relaxed">
          I craft <span class="bg-gray-100 hover:bg-lime-100 px-2 py-0.5 rounded-full transition-colors duration-300 cursor-default">high-performance</span> websites that convert visitors into customers. 
          Specializing in <span class="bg-gray-100 hover:bg-lime-100 px-2 py-0.5 rounded-full transition-colors duration-300 cursor-default">custom themes</span> with <span class="bg-gray-100 hover:bg-lime-100 px-2 py-0.5 rounded-full transition-colors duration-300 cursor-default">modern tech</span>.
        </p>
        
        <!-- CTA Buttons -->
        <div class="flex flex-wrap justify-center gap-4 mb-16">
          <a href="#projects" class="group bg-gray-900 hover:bg-gray-800 text-white font-semibold py-4 px-8 rounded-full transition-all duration-300 hover:shadow-2xl hover:shadow-gray-900/25 hover:-translate-y-1 flex items-center gap-2">
            View My Work
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
          </a>
          <a href="#contact" class="bg-white hover:bg-gray-50 text-gray-900 font-semibold py-4 px-8 rounded-full border border-gray-200 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
            Let's Talk
          </a>
        </div>
      </div>

      <!-- Bento Grid Stats & Info -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto">
        <!-- Stat Card 1 -->
        <div class="bg-white/80 backdrop-blur-sm border border-gray-200 rounded-2xl p-6 text-center hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
          <div class="text-3xl md:text-4xl font-bold text-gray-900 mb-1">5+</div>
          <div class="text-sm text-gray-500">Years Experience</div>
        </div>
        <!-- Stat Card 2 -->
        <div class="bg-white/80 backdrop-blur-sm border border-gray-200 rounded-2xl p-6 text-center hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
          <div class="text-3xl md:text-4xl font-bold text-gray-900 mb-1">50+</div>
          <div class="text-sm text-gray-500">Projects Delivered</div>
        </div>
        <!-- Stat Card 3 -->
        <div class="bg-white/80 backdrop-blur-sm border border-gray-200 rounded-2xl p-6 text-center hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
          <div class="text-3xl md:text-4xl font-bold text-gray-900 mb-1">100%</div>
          <div class="text-sm text-gray-500">Client Satisfaction</div>
        </div>
        <!-- Stat Card 4 - Tech Stack -->
        <div class="bg-gradient-to-br from-gray-900 to-gray-800 rounded-2xl p-6 text-center hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
          <div class="text-lime-400 font-bold mb-2">Tech Stack</div>
          <div class="flex flex-wrap justify-center gap-1">
            <span class="text-xs text-gray-300 bg-gray-700/50 px-2 py-1 rounded">WP</span>
            <span class="text-xs text-gray-300 bg-gray-700/50 px-2 py-1 rounded">React</span>
            <span class="text-xs text-gray-300 bg-gray-700/50 px-2 py-1 rounded">GSAP</span>
            <span class="text-xs text-gray-300 bg-gray-700/50 px-2 py-1 rounded">Tailwind</span>
          </div>
        </div>
      </div>

      <!-- Scroll Indicator -->
      <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
      </div>
    </div>
  </section>

  <!-- Recent Projects - Modern 2025 Design -->
  <section id="projects" class="bg-[#FAFAFA] py-24 relative overflow-hidden">
    <!-- Subtle background elements -->
    <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-white to-transparent"></div>
    <div class="absolute -top-40 -right-40 w-80 h-80 bg-violet-200/30 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-lime-200/30 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <span class="inline-block bg-gray-900 text-lime-400 text-sm font-semibold px-4 py-2 rounded-full mb-4">PORTFOLIO</span>
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-medium text-gray-900 mb-4" style="font-family: 'Outfit', sans-serif;">
          Recent Projects
        </h2>
        <p class="text-lg text-gray-500 max-w-2xl mx-auto">
          A selection of websites I've crafted for clients across various industries
        </p>
      </div>

      <!-- Bento Grid Layout -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Featured Project (Large) -->
        <div class="lg:col-span-2 lg:row-span-2 group relative bg-white rounded-3xl overflow-hidden border border-gray-200  transition-all duration-500 hover:shadow-xl">
          <div class="image-reveal-box w-full h-64 lg:h-full">
            <img src="https://precisionaestheticsmd.com/wp-content/uploads/2024/08/iStock-13201376081-1400x768.jpg" alt="Precision Aesthetics MD" class="reveal-img">
            <div class="uncover">
              <div class="uncover_slice"></div>
              <div class="uncover_slice"></div>
              <div class="uncover_slice"></div>
            </div>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          <div class="absolute bottom-0 left-0 right-0 p-8 translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
            <span class="inline-block bg-lime-400 text-gray-900 text-xs font-bold px-3 py-1 rounded-full mb-3 opacity-0 group-hover:opacity-100 transition-opacity duration-500">FEATURED</span>
            <h3 class="text-2xl lg:text-3xl font-bold text-white mb-2 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-75">Precision Aesthetics MD</h3>
            <p class="text-gray-300 mb-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">A sleek, professional website for a medical spa, focusing on clean design and user experience.</p>
            <a href="https://precisionaestheticsmd.com" target="_blank" class="inline-flex items-center gap-2 text-lime-400 font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-150 hover:gap-3">
              View Project <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="group relative bg-white rounded-3xl overflow-hidden border border-gray-200  transition-all duration-500 hover:shadow-lg">
          <div class="image-reveal-box w-full h-48">
            <img src="https://haythamfourati.com/wp-content/uploads/2025/06/Kidzz-Kreations.png" alt="Kidzz Kreations" class="reveal-img">
            <div class="uncover">
              <div class="uncover_slice"></div>
              <div class="uncover_slice"></div>
              <div class="uncover_slice"></div>
            </div>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-2 mb-3">
              <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">Entertainment</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-violet-600 transition-colors">Kidzz Kreations</h3>
            <p class="text-gray-500 text-sm mb-4 line-clamp-2">Turning your child's dream party into reality with memorable entertainment services.</p>
            <a href="https://kidzzkreations.com/" target="_blank" class="inline-flex items-center gap-2 text-sm font-semibold text-gray-900 hover:text-violet-600 transition-colors">
              View <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="group relative bg-white rounded-3xl overflow-hidden border border-gray-200  transition-all duration-500 hover:shadow-lg">
          <div class="image-reveal-box w-full h-48">
            <img src="https://haythamfourati.com/wp-content/uploads/2025/06/Local-Vocal-Marketing-Maryland-web-design.png" alt="Local Vocal Marketing" class="reveal-img">
            <div class="uncover">
              <div class="uncover_slice"></div>
              <div class="uncover_slice"></div>
              <div class="uncover_slice"></div>
            </div>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-2 mb-3">
              <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">Marketing</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-violet-600 transition-colors">Local Vocal Marketing</h3>
            <p class="text-gray-500 text-sm mb-4 line-clamp-2">A corporate website for a marketing agency, showcasing their services and portfolio.</p>
            <a href="https://localvocalmarketing.com" target="_blank" class="inline-flex items-center gap-2 text-sm font-semibold text-gray-900 hover:text-violet-600 transition-colors">
              View <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
          </div>
        </div>

        <!-- Project 4 -->
        <div class="group relative bg-white rounded-3xl overflow-hidden border border-gray-200  transition-all duration-500 hover:shadow-lg">
          <div class="image-reveal-box w-full h-48">
            <img src="https://haythamfourati.com/wp-content/uploads/2025/06/Caregiving-Angels-of-Maryland.png" alt="Care Giving Angels of MD" class="reveal-img">
            <div class="uncover">
              <div class="uncover_slice"></div>
              <div class="uncover_slice"></div>
              <div class="uncover_slice"></div>
            </div>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-2 mb-3">
              <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">Healthcare</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-violet-600 transition-colors">Care Giving Angels of MD</h3>
            <p class="text-gray-500 text-sm mb-4 line-clamp-2">A compassionate website for a home care agency, designed to build trust.</p>
            <a href="https://caregivingangelsofmd.com/" target="_blank" class="inline-flex items-center gap-2 text-sm font-semibold text-gray-900 hover:text-violet-600 transition-colors">
              View <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
          </div>
        </div>

        <!-- Project 5 -->
        <div class="group relative bg-white rounded-3xl overflow-hidden border border-gray-200  transition-all duration-500 hover:shadow-lg">
          <div class="image-reveal-box w-full h-48">
            <img src="https://haythamfourati.com/wp-content/uploads/2025/06/ADHD-Telehealth-Testing-Across-California.png" alt="ADHD Telehealth Testing" class="reveal-img">
            <div class="uncover">
              <div class="uncover_slice"></div>
              <div class="uncover_slice"></div>
              <div class="uncover_slice"></div>
            </div>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-2 mb-3">
              <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">Telehealth</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-violet-600 transition-colors">ADHD Telehealth Testing</h3>
            <p class="text-gray-500 text-sm mb-4 line-clamp-2">A user-friendly platform for accessible ADHD testing in California.</p>
            <a href="https://adhdtestcalifornia.com/" target="_blank" class="inline-flex items-center gap-2 text-sm font-semibold text-gray-900 hover:text-violet-600 transition-colors">
              View <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
          </div>
        </div>

        <!-- Project 6 -->
        <div class="group relative bg-white rounded-3xl overflow-hidden border border-gray-200  transition-all duration-500 hover:shadow-lg">
          <div class="image-reveal-box w-full h-48">
            <img src="https://haythamfourati.com/wp-content/uploads/2025/06/Ocean-City-Criminal-Defense-Lawyer-Cullen-Burke.png" alt="Cullen Burke" class="reveal-img">
            <div class="uncover">
              <div class="uncover_slice"></div>
              <div class="uncover_slice"></div>
              <div class="uncover_slice"></div>
            </div>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-2 mb-3">
              <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded-full">Legal</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-violet-600 transition-colors">Cullen Burke</h3>
            <p class="text-gray-500 text-sm mb-4 line-clamp-2">A strong and authoritative website for a criminal defense lawyer.</p>
            <a href="https://www.cullenburke.com/" target="_blank" class="inline-flex items-center gap-2 text-sm font-semibold text-gray-900 hover:text-violet-600 transition-colors">
              View <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
          </div>
        </div>

      </div>

      <!-- CTA Button -->
      <div class="text-center mt-16">
        <a href="#" class="group inline-flex items-center gap-3 bg-gray-900 hover:bg-gray-800 text-white font-semibold py-4 px-8 rounded-full transition-all duration-300 hover:shadow-2xl hover:shadow-gray-900/25 hover:-translate-y-1">
          View All Projects
          <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- Technical Skills Section - Modern 2025 Design -->
  <section id="skills" class="bg-white py-24 relative overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-r from-violet-100/50 to-lime-100/50 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <span class="inline-block bg-violet-100 text-violet-700 text-sm font-semibold px-4 py-2 rounded-full mb-4">EXPERTISE</span>
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-medium text-gray-900 mb-4" style="font-family: 'Outfit', sans-serif;">
          Technical Skills
        </h2>
        <p class="text-lg text-gray-500 max-w-2xl mx-auto">
          The tools and technologies I use to bring ideas to life
        </p>
      </div>

      <!-- Skills Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- WordPress Development -->
        <div class="group bg-[#FAFAFA] hover:bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 bg-gray-900 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-7 h-7 text-lime-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"/><path d="M12.001 6c-1.535 0-2.853.578-3.596 1.581l1.5 1.5C10.405 8.4 11.15 8 12.001 8c1.654 0 3 1.346 3 3s-1.346 3-3 3c-.851 0-1.596-.4-2.096-1.081l-1.5 1.5C9.148 15.422 10.466 16 12.001 16c2.757 0 5-2.243 5-5s-2.243-5-5-5z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">WordPress Development</h3>
          <p class="text-gray-500 mb-4">Custom themes, Elementor, UX Builder, Github</p>
          <div class="flex flex-wrap gap-2">
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">Custom Themes</span>
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">Elementor</span>
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">Github</span>
          </div>
        </div>

        <!-- Front-End Technologies -->
        <div class="group bg-[#FAFAFA] hover:bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 bg-gray-900 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-7 h-7 text-lime-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Front-End Technologies</h3>
          <p class="text-gray-500 mb-4">Modern web technologies for interactive experiences</p>
          <div class="flex flex-wrap gap-2">
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">React.js</span>
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">Tailwind</span>
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">GSAP</span>
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">JavaScript</span>
          </div>
        </div>

        <!-- SEO & Performance -->
        <div class="group bg-[#FAFAFA] hover:bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 bg-gray-900 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-7 h-7 text-lime-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">SEO & Performance</h3>
          <p class="text-gray-500 mb-4">Optimizing for search engines and speed</p>
          <div class="flex flex-wrap gap-2">
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">Yoast SEO</span>
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">Rank Math</span>
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">PageSpeed</span>
          </div>
        </div>

        <!-- Website Security -->
        <div class="group bg-[#FAFAFA] hover:bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 bg-gray-900 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-7 h-7 text-lime-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Website Security</h3>
          <p class="text-gray-500 mb-4">Protecting sites from threats and vulnerabilities</p>
          <div class="flex flex-wrap gap-2">
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">Wordfence</span>
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">Sucuri</span>
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">SSL</span>
          </div>
        </div>

        <!-- Hosting Management -->
        <div class="group bg-[#FAFAFA] hover:bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 bg-gray-900 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-7 h-7 text-lime-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">Hosting Management</h3>
          <p class="text-gray-500 mb-4">Server setup, migrations, and maintenance</p>
          <div class="flex flex-wrap gap-2">
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">SiteGround</span>
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">InMotion</span>
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">Hostinger</span>
          </div>
        </div>

        <!-- AI & Design Tools -->
        <div class="group bg-[#FAFAFA] hover:bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-lg transition-all duration-300">
          <div class="w-14 h-14 bg-gray-900 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-7 h-7 text-lime-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-3">AI & Design Tools</h3>
          <p class="text-gray-500 mb-4">Leveraging AI for design and automation</p>
          <div class="flex flex-wrap gap-2">
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">Figma</span>
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">ChatGPT</span>
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">Midjourney</span>
            <span class="bg-white border border-gray-200 text-gray-600 text-xs px-3 py-1 rounded-full">Make.com</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Experience Section - Interactive Timeline -->
  <section id="experience" class="bg-[#FAFAFA] py-24 relative overflow-hidden">
    <!-- Background elements -->
    <div class="absolute top-20 right-0 w-96 h-96 bg-lime-200/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-0 w-96 h-96 bg-violet-200/20 rounded-full blur-3xl"></div>
    
    <div class="max-w-6xl mx-auto px-4 relative z-10">
      <!-- Section Header -->
      <div class="text-center mb-20">
        <span class="inline-block bg-gray-900 text-lime-400 text-sm font-semibold px-4 py-2 rounded-full mb-4">JOURNEY</span>
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-medium text-gray-900 mb-4" style="font-family: 'Outfit', sans-serif;">
          Work Experience
        </h2>
        <p class="text-lg text-gray-500 max-w-2xl mx-auto">
          A timeline of my professional growth and achievements
        </p>
      </div>

      <!-- Interactive Timeline -->
      <div class="timeline-container relative">
        <!-- Timeline Line -->
        <div class="timeline-line absolute left-8 md:left-1/2 top-0 bottom-0 w-px bg-gray-200 md:-translate-x-1/2">
          <div class="timeline-progress absolute top-0 left-0 w-full bg-lime-400" style="height: 0%;"></div>
        </div>

        <!-- Timeline Items -->
        <div class="space-y-12 md:space-y-24">
          
          <!-- Experience 1: Local Vocal Marketing (Current) -->
          <div class="timeline-item relative flex flex-col md:flex-row md:items-center">
            <!-- Left Content (Desktop) -->
            <div class="hidden md:block md:w-1/2 md:pr-16 md:text-right">
              <div class="timeline-content">
                <span class="inline-block bg-lime-400 text-gray-900 text-xs font-bold px-3 py-1 rounded-full mb-3">CURRENT</span>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">WordPress Developer</h3>
                <p class="text-violet-600 font-semibold mb-3">Local Vocal Marketing</p>
                <p class="text-gray-500 text-sm mb-4">Baltimore County, Maryland</p>
                <ul class="text-gray-600 text-sm space-y-2">
                  <li>Built and maintained WordPress websites using Flatsome theme</li>
                  <li>Enhanced functionality with HTML, CSS, and JavaScript</li>
                  <li>Implemented SEO strategies for organic rankings</li>
                </ul>
              </div>
            </div>
            
            <!-- Timeline Node -->
            <div class="timeline-node absolute left-8 md:left-1/2 md:-translate-x-1/2 w-4 h-4 bg-lime-400 rounded-full border-4 border-white shadow-lg z-10">
              <div class="absolute -top-1 -left-1 w-6 h-6 bg-lime-400/30 rounded-full animate-ping"></div>
            </div>
            
            <!-- Year Badge -->
            <div class="timeline-year absolute left-0 md:left-1/2 md:-translate-x-1/2 -top-8 md:-top-10">
              <span class="bg-gray-900 text-white text-sm font-bold px-4 py-2 rounded-full">2019 - Present</span>
            </div>
            
            <!-- Right Content (Desktop) / Mobile Content -->
            <div class="md:w-1/2 md:pl-16 pl-20">
              <div class="timeline-content md:hidden">
                <span class="inline-block bg-lime-400 text-gray-900 text-xs font-bold px-3 py-1 rounded-full mb-3">CURRENT</span>
                <h3 class="text-xl font-bold text-gray-900 mb-2">WordPress Developer</h3>
                <p class="text-violet-600 font-semibold mb-2">Local Vocal Marketing</p>
                <p class="text-gray-500 text-sm mb-3">Baltimore County, Maryland</p>
                <ul class="text-gray-600 text-sm space-y-1">
                  <li>• Built and maintained WordPress websites</li>
                  <li>• Enhanced functionality with HTML, CSS, JS</li>
                  <li>• Implemented SEO strategies</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Experience 2: Fiverr -->
          <div class="timeline-item relative flex flex-col md:flex-row md:items-center">
            <!-- Left Content (empty on desktop for alternating) -->
            <div class="hidden md:block md:w-1/2 md:pr-16"></div>
            
            <!-- Timeline Node -->
            <div class="timeline-node absolute left-8 md:left-1/2 md:-translate-x-1/2 w-4 h-4 bg-gray-300 rounded-full border-4 border-white shadow-lg z-10 transition-colors duration-500"></div>
            
            <!-- Year Badge -->
            <div class="timeline-year absolute left-0 md:left-1/2 md:-translate-x-1/2 -top-8 md:-top-10">
              <span class="bg-gray-200 text-gray-700 text-sm font-bold px-4 py-2 rounded-full transition-colors duration-500">2019 - 2022</span>
            </div>
            
            <!-- Right Content -->
            <div class="md:w-1/2 md:pl-16 pl-20">
              <div class="timeline-content">
                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">WordPress Expert</h3>
                <p class="text-violet-600 font-semibold mb-3">Fiverr (Freelance)</p>
                <ul class="text-gray-600 text-sm space-y-2">
                  <li>Designed and developed custom WordPress websites</li>
                  <li>Optimized sites for speed, SEO, and performance</li>
                  <li>Managed migrations and security updates</li>
                  <li>Worked with international clients remotely</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Experience 3: POLYSERVICE -->
          <div class="timeline-item relative flex flex-col md:flex-row md:items-center">
            <!-- Left Content -->
            <div class="hidden md:block md:w-1/2 md:pr-16 md:text-right">
              <div class="timeline-content">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">WordPress Developer</h3>
                <p class="text-violet-600 font-semibold mb-3">POLYSERVICE</p>
                <p class="text-gray-500 text-sm mb-4">Tunis, Tunisia</p>
                <ul class="text-gray-600 text-sm space-y-2">
                  <li>Developed and maintained business websites</li>
                  <li>Optimized performance and troubleshot issues</li>
                  <li>Implemented SEO best practices</li>
                </ul>
              </div>
            </div>
            
            <!-- Timeline Node -->
            <div class="timeline-node absolute left-8 md:left-1/2 md:-translate-x-1/2 w-4 h-4 bg-gray-300 rounded-full border-4 border-white shadow-lg z-10 transition-colors duration-500"></div>
            
            <!-- Year Badge -->
            <div class="timeline-year absolute left-0 md:left-1/2 md:-translate-x-1/2 -top-8 md:-top-10">
              <span class="bg-gray-200 text-gray-700 text-sm font-bold px-4 py-2 rounded-full transition-colors duration-500">2018 - 2019</span>
            </div>
            
            <!-- Right Content (Mobile) -->
            <div class="md:w-1/2 md:pl-16 pl-20">
              <div class="timeline-content md:hidden">
                <h3 class="text-xl font-bold text-gray-900 mb-2">WordPress Developer</h3>
                <p class="text-violet-600 font-semibold mb-2">POLYSERVICE</p>
                <p class="text-gray-500 text-sm mb-3">Tunis, Tunisia</p>
                <ul class="text-gray-600 text-sm space-y-1">
                  <li>• Developed business websites</li>
                  <li>• Optimized performance</li>
                  <li>• Implemented SEO best practices</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Experience 4: Online Review Machine -->
          <div class="timeline-item relative flex flex-col md:flex-row md:items-center">
            <!-- Left Content (empty) -->
            <div class="hidden md:block md:w-1/2 md:pr-16"></div>
            
            <!-- Timeline Node -->
            <div class="timeline-node absolute left-8 md:left-1/2 md:-translate-x-1/2 w-4 h-4 bg-gray-300 rounded-full border-4 border-white shadow-lg z-10 transition-colors duration-500"></div>
            
            <!-- Year Badge -->
            <div class="timeline-year absolute left-0 md:left-1/2 md:-translate-x-1/2 -top-8 md:-top-10">
              <span class="bg-gray-200 text-gray-700 text-sm font-bold px-4 py-2 rounded-full transition-colors duration-500">2016 - 2018</span>
            </div>
            
            <!-- Right Content -->
            <div class="md:w-1/2 md:pl-16 pl-20">
              <div class="timeline-content">
                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-2">Data Entry Operator</h3>
                <p class="text-violet-600 font-semibold mb-3">Online Review Machine</p>
                <p class="text-gray-500 text-sm mb-4">North Carolina, United States</p>
                <ul class="text-gray-600 text-sm space-y-2">
                  <li>Assisted with online review management</li>
                  <li>Provided customer support</li>
                  <li>Ensured accurate documentation</li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- About Me Section - Modern 2025 Design -->
  <section id="about" class="bg-white py-24 relative overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute -top-40 -left-40 w-80 h-80 bg-violet-100/50 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 -right-40 w-80 h-80 bg-lime-100/50 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <span class="inline-block bg-violet-100 text-violet-700 text-sm font-semibold px-4 py-2 rounded-full mb-4">ABOUT</span>
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-medium text-gray-900 mb-4" style="font-family: 'Outfit', sans-serif;">
          Get to Know Me
        </h2>
      </div>

      <!-- Main Content Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        
        <!-- Left: Image with floating elements + Languages -->
        <div class="lg:col-span-5 space-y-8">
          <div class="relative">
            <!-- Main Image -->
            <div class="rounded-3xl overflow-hidden shadow-2xl">
              <img src="https://haythamfourati.com/wp-content/uploads/2025/06/profile-picture-number2.jpg" alt="Haytham Fourati" class="w-full h-auto rounded-3xl">
            </div>
            
            <!-- Floating Badge - Experience -->
            <div class="absolute -bottom-6 -right-6 bg-gray-900 text-white p-4 rounded-2xl shadow-xl">
              <div class="text-3xl font-bold text-lime-400">5+</div>
              <div class="text-sm text-gray-300">Years Exp.</div>
            </div>
            
            <!-- Floating Badge - Location -->
            <div class="absolute -top-4 -left-4 bg-white border border-gray-200 px-4 py-2 rounded-full shadow-lg flex items-center gap-2">
              <span class="text-lg">🌍</span>
              <span class="text-sm font-medium text-gray-700">Remote Worldwide</span>
            </div>
          </div>

          <!-- Languages (moved to left column for balance) -->
          <div class="bg-[#FAFAFA] p-6 rounded-3xl mt-10">
            <h4 class="font-semibold text-gray-900 mb-4 flex items-center gap-2">
              <svg class="w-5 h-5 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
              Languages I Speak
            </h4>
            <div class="flex flex-wrap gap-3">
              <div class="flex items-center gap-2 bg-white px-4 py-2 rounded-full border border-gray-200">
                <span class="text-lg">🇺🇸</span>
                <span class="font-medium text-gray-900">English</span>
                <span class="text-xs bg-lime-100 text-lime-700 px-2 py-0.5 rounded-full">Fluent</span>
              </div>
              <div class="flex items-center gap-2 bg-white px-4 py-2 rounded-full border border-gray-200">
                <span class="text-lg">🇹🇳</span>
                <span class="font-medium text-gray-900">Arabic</span>
                <span class="text-xs bg-lime-100 text-lime-700 px-2 py-0.5 rounded-full">Native</span>
              </div>
              <div class="flex items-center gap-2 bg-white px-4 py-2 rounded-full border border-gray-200">
                <span class="text-lg">🇫🇷</span>
                <span class="font-medium text-gray-900">French</span>
                <span class="text-xs bg-violet-100 text-violet-700 px-2 py-0.5 rounded-full">Good</span>
              </div>
              <div class="flex items-center gap-2 bg-white px-4 py-2 rounded-full border border-gray-200">
                <span class="text-lg">🇩🇪</span>
                <span class="font-medium text-gray-900">German</span>
                <span class="text-xs bg-gray-100 text-gray-600 px-2 py-0.5 rounded-full">Learning</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: Content -->
        <div class="lg:col-span-7 space-y-8">
          <!-- Intro -->
          <div>
            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
              Hi, I'm <span class="text-violet-600">Haytham Fourati</span>
            </h3>
            <p class="text-lg text-gray-600 leading-relaxed">
              A front-end WordPress developer crafting clean, responsive, and performance-driven websites. I specialize in custom theme development, blending elegant design with functional usability.
            </p>
          </div>

          <!-- Key Points -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="flex items-start gap-3 p-4 bg-[#FAFAFA] rounded-2xl">
              <div class="w-10 h-10 bg-lime-400 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">Fast & Optimized</h4>
                <p class="text-sm text-gray-500">SEO-friendly, lightning-fast sites</p>
              </div>
            </div>
            <div class="flex items-start gap-3 p-4 bg-[#FAFAFA] rounded-2xl">
              <div class="w-10 h-10 bg-violet-500 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">AI-Powered</h4>
                <p class="text-sm text-gray-500">Integrating smart automation</p>
              </div>
            </div>
            <div class="flex items-start gap-3 p-4 bg-[#FAFAFA] rounded-2xl">
              <div class="w-10 h-10 bg-gray-900 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-lime-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">Clear Communication</h4>
                <p class="text-sm text-gray-500">Long-term partnerships</p>
              </div>
            </div>
            <div class="flex items-start gap-3 p-4 bg-[#FAFAFA] rounded-2xl">
              <div class="w-10 h-10 bg-lime-400 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900">Clean Code</h4>
                <p class="text-sm text-gray-500">Scalable & maintainable</p>
              </div>
            </div>
          </div>

          <!-- Fun fact -->
          <div class="flex items-center gap-4 p-4 bg-gradient-to-r from-violet-50 to-lime-50 rounded-2xl border border-violet-100">
            <span class="text-3xl">☕</span>
            <p class="text-gray-600">
              <span class="font-semibold text-gray-900">Fun fact:</span> I might be quiet in meetings, but I deliver loud results. </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Epic CTA Section - The Grand Finale -->
  <section id="contact" class="relative bg-[#FAFAFA] py-32 overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-lime-200/40 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-violet-200/40 rounded-full blur-3xl translate-y-1/2 -translate-x-1/3"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
      <div class="text-center">
        
        <!-- Massive Typography - 2025 Trend -->
        <h2 class="text-6xl sm:text-7xl md:text-8xl lg:text-[10rem] xl:text-[12rem] font-medium text-gray-900 leading-[0.85] tracking-tight mb-8" style="font-family: 'Outfit', sans-serif;">
          Let's
          <span class="block text-violet-600">Talk</span>
        </h2>
        
        <!-- Subtext -->
        <p class="text-xl md:text-2xl text-gray-500 max-w-xl mx-auto mb-12">
          Have a project in mind? I'd love to hear about it.
        </p>
        
        <!-- CTA Button -->
        <div class="mb-16">
          <a href="mailto:fourativisuals@gmail.com" class="group inline-flex items-center gap-3 bg-gray-900 hover:bg-gray-800 text-white font-semibold text-lg px-10 py-5 rounded-full transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
            <span>Start a Conversation</span>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
          </a>
        </div>
        
        <!-- Contact methods -->
        <div class="flex flex-wrap items-center justify-center gap-6 md:gap-10">
          <a href="mailto:fourativisuals@gmail.com" class="flex items-center gap-2 text-gray-500 hover:text-violet-600 transition-colors text-sm md:text-base">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            <span>fourativisuals@gmail.com</span>
          </a>
          <a href="https://linkedin.com/in/haythamfourati" target="_blank" class="flex items-center gap-2 text-gray-500 hover:text-violet-600 transition-colors text-sm md:text-base">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            <span>LinkedIn</span>
          </a>
          <a href="https://github.com/haythamfourati" target="_blank" class="flex items-center gap-2 text-gray-500 hover:text-violet-600 transition-colors text-sm md:text-base">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
            <span>GitHub</span>
          </a>
        </div>
        
        <!-- Availability badge at bottom -->
        <div class="mt-16">
          <div class="inline-flex items-center gap-2 bg-white border border-gray-200 rounded-full px-5 py-3 shadow-sm">
            <span class="relative flex h-2 w-2">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-lime-500 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2 w-2 bg-lime-500"></span>
            </span>
            <span class="text-gray-600 text-sm font-medium">Available for new projects</span>
          </div>
        </div>
        
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
