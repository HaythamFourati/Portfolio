<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-[#0A192F] text-gray-100 font-sans'); ?>>
<?php wp_body_open(); ?>

<div id="smooth-wrapper">
    <div id="smooth-content">

                <header id="site-header" class="bg-[#0A192F] sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between items-center py-4">
                    <div>
                        <a href="<?php echo get_home_url(); ?>" class="text-xl md:text-2xl font-semibold text-white">Haytham<span class="text-blue-500">.</span></a>
                    </div>
                    <nav class="hidden md:block">
                        <ul class="flex space-x-8">
                            <li><a href="<?php echo get_home_url(); ?>" class="text-gray-300 hover:text-white transition duration-300">Home</a></li>
                            <li><a href="<?php echo get_home_url(); ?>#about" class="text-gray-300 hover:text-white transition duration-300">About</a></li>
                            <li><a href="<?php echo get_home_url(); ?>#skills" class="text-gray-300 hover:text-white transition duration-300">Skills</a></li>
                            <li><a href="<?php echo get_home_url(); ?>#projects" class="text-gray-300 hover:text-white transition duration-300">Projects</a></li>
                            <li><a href="<?php echo get_home_url(); ?>#contact" class="text-gray-300 hover:text-white transition duration-300">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- Social Icons -->
                    <div class="hidden md:flex items-center space-x-4 ml-8">
                        <a href="https://github.com/HaythamFourati" target="_blank" class="text-gray-300 hover:text-white transition duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.168 6.839 9.49.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.031-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.378.203 2.398.1 2.65.64.7 1.03 1.595 1.03 2.688 0 3.848-2.338 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.001 10.001 0 0022 12c0-5.523-4.477-10-10-10z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/haytham-fourati-983157180/" target="_blank" class="text-gray-300 hover:text-white transition duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="mailto:fourativisuals@gmail.com" class="text-gray-300 hover:text-white transition duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </a>
                    </div>
                    <div class="md:hidden">
                        <button id="mobile-menu-button" class="text-gray-300 hover:text-white focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile menu, show/hide based on menu state -->
            <div id="mobile-menu" class="md:hidden bg-[#0A192F] border-t border-gray-800">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="<?php echo get_home_url(); ?>" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700">Home</a>
                    <a href="<?php echo get_home_url(); ?>#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700">About</a>
                    <a href="<?php echo get_home_url(); ?>#skills" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700">Skills</a>
                    <a href="<?php echo get_home_url(); ?>#projects" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700">Projects</a>
                    <a href="<?php echo get_home_url(); ?>#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700">Contact</a>
                </div>
            </div>
        </header>