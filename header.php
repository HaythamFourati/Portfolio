<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="bg-white shadow-sm sticky top-0 z-50">
      <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
          <div>
            <a href="<?php echo get_home_url(); ?>" class="text-xl md:text-2xl font-bold text-blue-600 hover:text-blue-700 transition duration-300">Haytham Fourati</a>
          </div>
          <nav class="hidden md:block">
            <ul class="flex space-x-8">
              <li><a href="#" class="text-gray-700 hover:text-blue-600 transition duration-300">Home</a></li>
              <li><a href="#" class="text-gray-700 hover:text-blue-600 transition duration-300">Skills</a></li>
              <li><a href="#" class="text-gray-700 hover:text-blue-600 transition duration-300">Experience</a></li>
              <li><a href="#" class="text-gray-700 hover:text-blue-600 transition duration-300">Projects</a></li>
              <li><a href="#" class="text-gray-700 hover:text-blue-600 transition duration-300">Contact</a></li>
            </ul>
          </nav>
          <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-700 hover:text-blue-600 focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
        </div>
      </div>
      <!-- Mobile menu, show/hide based on menu state -->
      <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-100">
        <div class="px-2 pt-2 pb-3 space-y-1">
          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Home</a>
          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Skills</a>
          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Experience</a>
          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Projects</a>
          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-50">Contact</a>
        </div>
      </div>
    </header>