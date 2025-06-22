<?php
/**
 * The front page template file
 *
 * @package Haytham-Fourati-Portfolio
 */

get_header(); ?>

<div class="bg-[#0A192F] text-gray-300 relative"> <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_right,_rgba(30,64,175,0.15)_0%,_transparent_60%)] pointer-events-none"></div>
  <!-- Hero Section -->
<section id="hero" class="max-w-7xl mx-auto px-4 py-12 md:py-16 flex items-center">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div class="text-left">
            <p class="inline-block bg-gray-800/50 border border-gray-700 rounded-md px-3 py-1 text-sm font-mono text-white mb-4 tracking-widest">AVAILABLE FOR FREELANCE WORK</p>
            <h1 class="text-3xl sm:text-4xl md:text-6xl font-bold text-white font-poppins">
                Hi, I'm <span class="text-blue-400">Haytham Fourati.</span>
            </h1>
            <h2 class="text-2xl sm:text-2xl md:text-4xl font-semibold text-gray-400 mt-2">
                WordPress & front-end developer.
            </h2>
            <p class="mt-6 text-lg text-gray-400 max-w-xl">
                I craft responsive web applications where technologies meet creativity. Building exceptional digital experiences with modern full stack frameworks.
            </p>
            <div class="flex flex-wrap gap-4 mt-8">
                <a href="#projects" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-md transition duration-300">
                    View My Work
                </a>
                <a href="#contact" class="border-2 border-blue-600 hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-md transition duration-300">
                    Contact Me
                </a>
            </div>
            <div class="mt-10">
                <p class="text-gray-400 mb-4">Skills and Tools I work with:</p>
                <div class="flex flex-wrap gap-4">
                    <span class="bg-gray-800 text-blue-400 px-4 py-2 rounded-full text-sm font-semibold">Github</span>
                    <span class="bg-gray-800 text-blue-400 px-4 py-2 rounded-full text-sm font-semibold">Windsearf AI</span>
                    <span class="bg-gray-800 text-blue-400 px-4 py-2 rounded-full text-sm font-semibold">WordPress</span>
                    <span class="bg-gray-800 text-blue-400 px-4 py-2 rounded-full text-sm font-semibold">Tailwind CSS</span>
                    <span class="bg-gray-800 text-blue-400 px-4 py-2 rounded-full text-sm font-semibold">AI Automation</span>
                </div>
            </div>
        </div>
        <div class="hidden md:flex justify-end items-center">
            <div class="relative w-80 h-80 lg:w-96 lg:h-96 group">
                <!-- Profile Image with Overlay -->
                <div class="relative w-full h-full">
                    <div class="absolute inset-0 bg-blue-500 rounded-full transform -translate-x-4 -translate-y-4"></div>
                    <div class="absolute inset-0 bg-gray-700 rounded-full transform translate-x-4 translate-y-4"></div>
                    <img src="<?php echo get_theme_file_uri('/images/profile-image.jpg'); ?>" alt="Haytham Fourati" class="relative object-cover w-full h-full rounded-full border-4 border-gray-800 z-10">
                </div>

                <!-- Orbiting Tech Icons -->
                <!-- WordPress Icon -->
                <div class="absolute top-[10%] left-[5%] w-16 h-16 bg-slate-800/40 backdrop-blur-lg border border-blue-500/30 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-lg z-20">
                     <svg class="w-8 h-8 text-white" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WordPress</title><path fill="white" d="M21.469 6.825c.84 1.537 1.318 3.3 1.318 5.175 0 3.979-2.156 7.456-5.363 9.325l3.295-9.527c.615-1.54.82-2.771.82-3.864 0-.405-.026-.78-.07-1.11m-7.981.105c.647-.03 1.232-.105 1.232-.105.582-.075.514-.93-.067-.899 0 0-1.755.135-2.88.135-1.064 0-2.85-.15-2.85-.15-.585-.03-.661.855-.075.885 0 0 .54.061 1.125.09l1.68 4.605-2.37 7.08L5.354 6.9c.649-.03 1.234-.1 1.234-.1.585-.075.516-.93-.065-.896 0 0-1.746.138-2.874.138-.2 0-.438-.008-.69-.015C4.911 3.15 8.235 1.215 12 1.215c2.809 0 5.365 1.072 7.286 2.833-.046-.003-.091-.009-.141-.009-1.06 0-1.812.923-1.812 1.914 0 .89.513 1.643 1.06 2.531.411.72.89 1.643.89 2.977 0 .915-.354 1.994-.821 3.479l-1.075 3.585-3.9-11.61.001.014zM12 22.784c-1.059 0-2.081-.153-3.048-.437l3.237-9.406 3.315 9.087c.024.053.05.101.078.149-1.12.393-2.325.609-3.582.609M1.211 12c0-1.564.336-3.05.935-4.39L7.29 21.709C3.694 19.96 1.212 16.271 1.211 12M12 0C5.385 0 0 5.385 0 12s5.385 12 12 12 12-5.385 12-12S18.615 0 12 0"/></svg>
                </div>
                <!-- JavaScript Icon -->
                <div class="absolute bottom-[10%] right-[5%] w-16 h-16 bg-slate-800/40 backdrop-blur-lg border border-yellow-500/30 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-lg z-20">
                    <svg class="w-8 h-8 text-yellow-400" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>JavaScript</title><path fill="#F7DF1E" d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"/></svg>
                </div>
                <!-- CSS Icon -->
                <div class="absolute bottom-[20%] left-[-5%] w-16 h-16 bg-slate-800/40 backdrop-blur-lg border border-purple-500/30 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-lg z-20">
                    <svg class="w-8 h-8 text-purple-500" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>CSS</title><path fill="#663399" d="M0 0v20.16A3.84 3.84 0 0 0 3.84 24h16.32A3.84 3.84 0 0 0 24 20.16V3.84A3.84 3.84 0 0 0 20.16 0Zm14.256 13.08c1.56 0 2.28 1.08 2.304 2.64h-1.608c.024-.288-.048-.6-.144-.84-.096-.192-.288-.264-.552-.264-.456 0-.696.264-.696.84-.024.576.288.888.768 1.08.72.288 1.608.744 1.92 1.296q.432.648.432 1.656c0 1.608-.912 2.592-2.496 2.592-1.656 0-2.4-1.032-2.424-2.688h1.68c0 .792.264 1.176.792 1.176.264 0 .456-.072.552-.24.192-.312.24-1.176-.048-1.512-.312-.408-.912-.6-1.32-.816q-.828-.396-1.224-.936c-.24-.36-.36-.888-.36-1.536 0-1.44.936-2.472 2.424-2.448m5.4 0c1.584 0 2.304 1.08 2.328 2.64h-1.608c0-.288-.048-.6-.168-.84-.096-.192-.264-.264-.528-.264-.48 0-.72.264-.72.84s.288.888.792 1.08c.696.288 1.608.744 1.92 1.296.264.432.408.984.408 1.656.024 1.608-.888 2.592-2.472 2.592-1.68 0-2.424-1.056-2.448-2.688h1.68c0 .744.264 1.176.792 1.176.264 0 .456-.072.552-.24.216-.312.264-1.176-.048-1.512-.288-.408-.888-.6-1.32-.816-.552-.264-.96-.576-1.2-.936s-.36-.888-.36-1.536c-.024-1.44.912-2.472 2.4-2.448m-11.031.018c.711-.006 1.419.198 1.839.63.432.432.672 1.128.648 1.992H9.336c.024-.456-.096-.792-.432-.96-.312-.144-.768-.048-.888.24-.12.264-.192.576-.168.864v3.504c0 .744.264 1.128.768 1.128a.65.65 0 0 0 .552-.264c.168-.24.192-.552.168-.84h1.776c.096 1.632-.984 2.712-2.568 2.688-1.536 0-2.496-.864-2.472-2.472v-4.032c0-.816.24-1.44.696-1.848.432-.408 1.146-.624 1.857-.63"/></svg>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- Technical Skills Section -->
  <section class="bg-[#0A192F] py-16">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-white">Technical Skills</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-gray-900/50 border border-gray-700 p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold mb-4 text-blue-400">WordPress Development</h3>
          <p class="text-gray-400 mb-4">Custom themes, Elementor, UX Builder, Flatsome Theme</p>
          <div class="w-full bg-gray-700 rounded-full h-2.5">
            <div class="bg-blue-500 h-2.5 rounded-full" style="width: 95%"></div>
          </div>
        </div>
        <div class="bg-gray-900/50 border border-gray-700 p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold mb-4 text-blue-400">Front-End Technologies</h3>
          <p class="text-gray-400 mb-4">HTML, CSS, JavaScript</p>
          <div class="w-full bg-gray-700 rounded-full h-2.5">
            <div class="bg-blue-500 h-2.5 rounded-full" style="width: 90%"></div>
          </div>
        </div>
        <div class="bg-gray-900/50 border border-gray-700 p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold mb-4 text-blue-400">SEO & Performance</h3>
          <p class="text-gray-400 mb-4">Yoast SEO, Rank Math, Page Speed Optimization</p>
          <div class="w-full bg-gray-700 rounded-full h-2.5">
            <div class="bg-blue-500 h-2.5 rounded-full" style="width: 85%"></div>
          </div>
        </div>
        <div class="bg-gray-900/50 border border-gray-700 p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold mb-4 text-blue-400">Website Maintenance & Security</h3>
          <p class="text-gray-400 mb-4">Backups, Updates, Troubleshooting</p>
          <div class="w-full bg-gray-700 rounded-full h-2.5">
            <div class="bg-blue-500 h-2.5 rounded-full" style="width: 90%"></div>
          </div>
        </div>
        <div class="bg-gray-900/50 border border-gray-700 p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold mb-4 text-blue-400">Hosting Management</h3>
          <p class="text-gray-400 mb-4">SiteGround, InMotion Hosting, Bluehost</p>
          <div class="w-full bg-gray-700 rounded-full h-2.5">
            <div class="bg-blue-500 h-2.5 rounded-full" style="width: 80%"></div>
          </div>
        </div>
        <div class="bg-gray-900/50 border border-gray-700 p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold mb-4 text-blue-400">Design Tools</h3>
          <p class="text-gray-400 mb-4">Adobe XD</p>
          <div class="w-full bg-gray-700 rounded-full h-2.5">
            <div class="bg-blue-500 h-2.5 rounded-full" style="width: 75%"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Experience Section -->
  <section class="bg-[#0A192F] py-16">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-white">Work Experience</h2>
      
      <div class="relative border-l-2 border-blue-500 pl-8 ml-4 mb-12">
        <div class="absolute w-4 h-4 bg-blue-500 rounded-full -left-[9px]"></div>
        <div class="mb-8">
          <h3 class="text-xl font-semibold text-white">WordPress Developer | Local Vocal Marketing</h3>
          <p class="text-gray-400 mb-2">Jan 2019 - Present | Baltimore County, Maryland, United States</p>
          <ul class="list-disc pl-5 text-gray-400 space-y-2 mt-4">
            <li>Built and maintained WordPress websites using the Flatsome theme.</li>
            <li>Enhanced website functionality using HTML, CSS, and JavaScript.</li>
            <li>Implemented SEO strategies to improve organic rankings.</li>
            <li>Provided website security updates, troubleshooting, and maintenance.</li>
            <li>Collaborated with clients to deliver customized web solutions.</li>
          </ul>
        </div>
      </div>

      <div class="relative border-l-2 border-blue-500 pl-8 ml-4 mb-12">
        <div class="absolute w-4 h-4 bg-blue-500 rounded-full -left-[9px]"></div>
        <div class="mb-8">
          <h3 class="text-xl font-semibold text-white">WordPress Expert | Fiverr</h3>
          <p class="text-gray-400 mb-2">Feb 2019 - May 2022</p>
          <ul class="list-disc pl-5 text-gray-400 space-y-2 mt-4">
            <li>Designed and developed WordPress Websites.</li>
            <li>Optimized websites for speed, SEO, and performance.</li>
            <li>Managed website migrations, security updates, and maintenance.</li>
            <li>Communicated effectively with international clients to meet project requirements.</li>
          </ul>
        </div>
      </div>

      <div class="relative border-l-2 border-blue-500 pl-8 ml-4 mb-12">
        <div class="absolute w-4 h-4 bg-blue-500 rounded-full -left-[9px]"></div>
        <div class="mb-8">
          <h3 class="text-xl font-semibold text-white">WordPress Developer | POLYSERVICE</h3>
          <p class="text-gray-400 mb-2">Mar 2018 - Nov 2019 | Tunis, Tunisia</p>
          <ul class="list-disc pl-5 text-gray-400 space-y-2 mt-4">
            <li>Developed and maintained business websites using WordPress.</li>
            <li>Optimized website performance and troubleshot technical issues.</li>
            <li>Implemented SEO best practices to increase website traffic.</li>
            <li>Provided continuous updates and improvements for client sites.</li>
          </ul>
        </div>
      </div>

      <div class="relative border-l-2 border-blue-500 pl-8 ml-4">
        <div class="absolute w-4 h-4 bg-blue-500 rounded-full -left-[9px]"></div>
        <div>
          <h3 class="text-xl font-semibold text-white">Data Entry Operator | Online Review Machine</h3>
          <p class="text-gray-400 mb-2">Mar 2016 - May 2018 | North Carolina, United States</p>
          <ul class="list-disc pl-5 text-gray-400 space-y-2 mt-4">
            <li>Assisted clients with online review management and data entry tasks.</li>
            <li>Provided customer support and ensured accurate documentation.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section class="bg-[#0A192F] py-16">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-white">Recent Projects</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <a href="https://precisionaestheticsmd.com" target="_blank" class="block group">
          <div class="bg-gray-900/50 border border-gray-700 rounded-lg overflow-hidden shadow-lg transition duration-300 group-hover:shadow-blue-500/20">
            <div class="h-48 bg-gray-800 flex items-center justify-center">
              <span class="text-gray-400">Project Image</span>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold mb-2 text-white group-hover:text-blue-400 transition duration-300">Precision Aesthetics MD</h3>
              <p class="text-gray-400">A custom WordPress website for a medical aesthetics practice featuring appointment booking, service information, and before/after galleries.</p>
              <div class="mt-4 flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-blue-900/50 text-blue-300 rounded-full text-sm">WordPress</span>
                <span class="px-3 py-1 bg-blue-900/50 text-blue-300 rounded-full text-sm">Flatsome</span>
                <span class="px-3 py-1 bg-blue-900/50 text-blue-300 rounded-full text-sm">SEO</span>
              </div>
            </div>
          </div>
        </a>
        <a href="https://kidzcreations.com" target="_blank" class="block group">
          <div class="bg-gray-900/50 border border-gray-700 rounded-lg overflow-hidden shadow-lg transition duration-300 group-hover:shadow-blue-500/20">
            <div class="h-48 bg-gray-800 flex items-center justify-center">
              <span class="text-gray-400">Project Image</span>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold mb-2 text-white group-hover:text-blue-400 transition duration-300">Kidz Creations</h3>
              <p class="text-gray-400">An e-commerce website for a children's products store with product catalog, shopping cart, and secure checkout functionality.</p>
              <div class="mt-4 flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-blue-900/50 text-blue-300 rounded-full text-sm">WordPress</span>
                <span class="px-3 py-1 bg-blue-900/50 text-blue-300 rounded-full text-sm">WooCommerce</span>
                <span class="px-3 py-1 bg-blue-900/50 text-blue-300 rounded-full text-sm">Custom Theme</span>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="text-center mt-10">
        <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition duration-300">View All Projects</a>
      </div>
    </div>
  </section>

  <!-- Languages Section -->
  <section class="bg-[#0A192F] py-16">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-white">Languages</h2>
      <div class="bg-gray-900/50 border border-gray-700 p-8 rounded-lg shadow-lg">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div class="space-y-6">
            <div>
              <div class="flex justify-between mb-1">
                <span class="font-medium text-white">English</span>
                <span class="text-gray-400">Fluent</span>
              </div>
              <div class="w-full bg-gray-700 rounded-full h-2.5">
                <div class="bg-blue-500 h-2.5 rounded-full" style="width: 95%"></div>
              </div>
            </div>
            <div>
              <div class="flex justify-between mb-1">
                <span class="font-medium text-white">Arabic</span>
                <span class="text-gray-400">Fluent</span>
              </div>
              <div class="w-full bg-gray-700 rounded-full h-2.5">
                <div class="bg-blue-500 h-2.5 rounded-full" style="width: 95%"></div>
              </div>
            </div>
            <div>
              <div class="flex justify-between mb-1">
                <span class="font-medium text-white">French</span>
                <span class="text-gray-400">Good</span>
              </div>
              <div class="w-full bg-gray-700 rounded-full h-2.5">
                <div class="bg-blue-500 h-2.5 rounded-full" style="width: 70%"></div>
              </div>
            </div>
            <div>
              <div class="flex justify-between mb-1">
                <span class="font-medium text-white">German</span>
                <span class="text-gray-400">Beginner</span>
              </div>
              <div class="w-full bg-gray-700 rounded-full h-2.5">
                <div class="bg-blue-500 h-2.5 rounded-full" style="width: 30%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Soft Skills Section -->
  <section class="bg-[#0A192F] py-16">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-white">Soft Skills</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-gray-900/50 border border-gray-700 p-6 rounded-lg shadow-lg flex items-start">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-900/50 flex items-center justify-center text-blue-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="ml-4">
            <h3 class="text-lg font-semibold text-white">Problem-Solving & Troubleshooting</h3>
            <p class="text-gray-400">Ability to identify issues and implement effective solutions.</p>
          </div>
        </div>
        <div class="bg-gray-900/50 border border-gray-700 p-6 rounded-lg shadow-lg flex items-start">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-900/50 flex items-center justify-center text-blue-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
            </svg>
          </div>
          <div class="ml-4">
            <h3 class="text-lg font-semibold text-white">Client Communication & Project Management</h3>
            <p class="text-gray-400">Effective communication and organization skills to manage projects from start to finish.</p>
          </div>
        </div>
        <div class="bg-gray-900/50 border border-gray-700 p-6 rounded-lg shadow-lg flex items-start">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-900/50 flex items-center justify-center text-blue-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="ml-4">
            <h3 class="text-lg font-semibold text-white">Time Management & Deadline Adherence</h3>
            <p class="text-gray-400">Consistently delivering high-quality work within agreed timeframes.</p>
          </div>
        </div>
        <div class="bg-gray-900/50 border border-gray-700 p-6 rounded-lg shadow-lg flex items-start">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-900/50 flex items-center justify-center text-blue-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
              <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
            </svg>
          </div>
          <div class="ml-4">
            <h3 class="text-lg font-semibold text-white">Adaptability & Continuous Learning</h3>
            <p class="text-gray-400">Staying updated with the latest web technologies and industry best practices.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="bg-blue-600 text-white py-16">
    <div class="max-w-5xl mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-6">Let's Work Together</h2>
      <p class="text-xl mb-8 max-w-2xl mx-auto">Looking for a WordPress developer to bring your website vision to life? Get in touch today!</p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="mailto:Fourattvisuals@gmail.com" class="bg-white text-blue-600 hover:bg-gray-100 px-6 py-3 rounded-lg transition duration-300 font-medium">Email Me</a>
        <a href="tel:+21629708027" class="bg-transparent hover:bg-blue-700 border-2 border-white px-6 py-3 rounded-lg transition duration-300 font-medium">+216 29708027</a>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
