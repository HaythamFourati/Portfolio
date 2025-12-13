// Main javascript file for the theme.

document.addEventListener('DOMContentLoaded', function () {
    const header = document.getElementById('site-header');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    // Sticky header - only on desktop
    const isMobile = window.innerWidth < 768;
    if (!isMobile) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // Mobile menu toggle - menu starts hidden via HTML class
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });
    }
});

