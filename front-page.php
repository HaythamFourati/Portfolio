<?php
/**
 * The front page template file
 *
 * @package Haytham-Fourati-Portfolio
 */

get_header(); ?>

<div class="bg-white">
  <!-- Hero Section -->
  <section class="max-w-6xl mx-auto px-4 py-16 md:py-24">
    <div class="flex flex-col md:flex-row items-center justify-between">
      <div class="md:w-2/3 mb-8 md:mb-0">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Haytham Fourati</h1>
        <h2 class="text-xl md:text-2xl text-blue-600 mb-6">WordPress Developer & SEO Specialist</h2>
        <p class="text-gray-600 mb-8 text-lg">Self-taught web developer based in Sfax, Tunisia with experience in creating custom WordPress websites, implementing SEO strategies, and providing website maintenance services.</p>
        <div class="flex flex-wrap gap-3">
          <a href="mailto:Fourattvisuals@gmail.com" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition duration-300">Contact Me</a>
          <a href="https://fourativisuals.com" target="_blank" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-3 rounded-lg transition duration-300">View Portfolio</a>
        </div>
      </div>
      <div class="md:w-1/3 flex justify-center">
        <div class="w-48 h-48 md:w-64 md:h-64 overflow-hidden rounded-full border-4 border-blue-600 shadow-lg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/profile-image.jpg" alt="Haytham Fourati" class="w-full h-full object-cover">
        </div>
      </div>
    </div>
  </section>

  <!-- Technical Skills Section -->
  <section class="bg-gray-50 py-16">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Technical Skills</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-semibold mb-4 text-blue-600">WordPress Development</h3>
          <p class="text-gray-600 mb-4">Custom themes, Elementor, UX Builder, Flatsome Theme</p>
          <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 95%"></div>
          </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-semibold mb-4 text-blue-600">Front-End Technologies</h3>
          <p class="text-gray-600 mb-4">HTML, CSS, JavaScript</p>
          <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 90%"></div>
          </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-semibold mb-4 text-blue-600">SEO & Performance</h3>
          <p class="text-gray-600 mb-4">Yoast SEO, Rank Math, Page Speed Optimization</p>
          <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 85%"></div>
          </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-semibold mb-4 text-blue-600">Website Maintenance & Security</h3>
          <p class="text-gray-600 mb-4">Backups, Updates, Troubleshooting</p>
          <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 90%"></div>
          </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-semibold mb-4 text-blue-600">Hosting Management</h3>
          <p class="text-gray-600 mb-4">SiteGround, InMotion Hosting, Bluehost</p>
          <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 80%"></div>
          </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-semibold mb-4 text-blue-600">Design Tools</h3>
          <p class="text-gray-600 mb-4">Adobe XD</p>
          <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 75%"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Experience Section -->
  <section class="py-16">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Work Experience</h2>
      
      <div class="relative border-l-2 border-blue-500 pl-8 ml-4 mb-12">
        <div class="absolute w-4 h-4 bg-blue-500 rounded-full -left-[9px]"></div>
        <div class="mb-8">
          <h3 class="text-xl font-semibold text-gray-800">WordPress Developer | Local Vocal Marketing</h3>
          <p class="text-gray-500 mb-2">Jan 2019 - Present | Baltimore County, Maryland, United States</p>
          <ul class="list-disc pl-5 text-gray-600 space-y-2 mt-4">
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
          <h3 class="text-xl font-semibold text-gray-800">WordPress Expert | Fiverr</h3>
          <p class="text-gray-500 mb-2">Feb 2019 - May 2022</p>
          <ul class="list-disc pl-5 text-gray-600 space-y-2 mt-4">
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
          <h3 class="text-xl font-semibold text-gray-800">WordPress Developer | POLYSERVICE</h3>
          <p class="text-gray-500 mb-2">Mar 2018 - Nov 2019 | Tunis, Tunisia</p>
          <ul class="list-disc pl-5 text-gray-600 space-y-2 mt-4">
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
          <h3 class="text-xl font-semibold text-gray-800">Data Entry Operator | Online Review Machine</h3>
          <p class="text-gray-500 mb-2">Mar 2016 - May 2018 | North Carolina, United States</p>
          <ul class="list-disc pl-5 text-gray-600 space-y-2 mt-4">
            <li>Assisted clients with online review management and data entry tasks.</li>
            <li>Provided customer support and ensured accurate documentation.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section class="bg-gray-50 py-16">
    <div class="max-w-5xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Recent Projects</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <a href="https://precisionaestheticsmd.com" target="_blank" class="block group">
          <div class="bg-white rounded-lg overflow-hidden shadow-md transition duration-300 group-hover:shadow-xl">
            <div class="h-48 bg-gray-200 flex items-center justify-center">
              <span class="text-gray-500">Project Image</span>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold mb-2 text-gray-800 group-hover:text-blue-600 transition duration-300">Precision Aesthetics MD</h3>
              <p class="text-gray-600">A custom WordPress website for a medical aesthetics practice featuring appointment booking, service information, and before/after galleries.</p>
              <div class="mt-4 flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">WordPress</span>
                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Flatsome</span>
                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">SEO</span>
              </div>
            </div>
          </div>
        </a>
        <a href="https://kidzcreations.com" target="_blank" class="block group">
          <div class="bg-white rounded-lg overflow-hidden shadow-md transition duration-300 group-hover:shadow-xl">
            <div class="h-48 bg-gray-200 flex items-center justify-center">
              <span class="text-gray-500">Project Image</span>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-semibold mb-2 text-gray-800 group-hover:text-blue-600 transition duration-300">Kidz Creations</h3>
              <p class="text-gray-600">An e-commerce website for a children's products store with product catalog, shopping cart, and secure checkout functionality.</p>
              <div class="mt-4 flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">WordPress</span>
                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">WooCommerce</span>
                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Custom Theme</span>
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

  <!-- Languages & Soft Skills Section -->
  <section class="py-16">
    <div class="max-w-5xl mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <div>
          <h2 class="text-3xl font-bold mb-8 text-gray-800">Languages</h2>
          <div class="space-y-6">
            <div>
              <div class="flex justify-between mb-2">
                <span class="font-medium text-gray-700">English</span>
                <span class="text-gray-600">Fluent</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2.5">
                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 95%"></div>
              </div>
            </div>
            <div>
              <div class="flex justify-between mb-2">
                <span class="font-medium text-gray-700">Arabic</span>
                <span class="text-gray-600">Fluent</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2.5">
                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 95%"></div>
              </div>
            </div>
            <div>
              <div class="flex justify-between mb-2">
                <span class="font-medium text-gray-700">French</span>
                <span class="text-gray-600">Good</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2.5">
                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 70%"></div>
              </div>
            </div>
            <div>
              <div class="flex justify-between mb-2">
                <span class="font-medium text-gray-700">German</span>
                <span class="text-gray-600">Beginner</span>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2.5">
                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 30%"></div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <h2 class="text-3xl font-bold mb-8 text-gray-800">Soft Skills</h2>
          <div class="space-y-4">
            <div class="flex items-start">
              <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
                </svg>
              </div>
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-800">Problem-Solving & Troubleshooting</h3>
                <p class="text-gray-600">Ability to identify issues and implement effective solutions.</p>
              </div>
            </div>
            <div class="flex items-start">
              <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                </svg>
              </div>
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-800">Client Communication & Project Management</h3>
                <p class="text-gray-600">Effective communication and organization skills to manage projects from start to finish.</p>
              </div>
            </div>
            <div class="flex items-start">
              <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                </svg>
              </div>
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-800">Time Management & Deadline Adherence</h3>
                <p class="text-gray-600">Consistently delivering high-quality work within agreed timeframes.</p>
              </div>
            </div>
            <div class="flex items-start">
              <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                </svg>
              </div>
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-800">Adaptability & Continuous Learning</h3>
                <p class="text-gray-600">Staying updated with the latest web technologies and industry best practices.</p>
              </div>
            </div>
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
