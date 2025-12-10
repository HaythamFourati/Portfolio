<!-- Minimal Footer -->
<footer class="bg-[#FAFAFA] py-6 border-t border-gray-200">
  <div class="max-w-7xl mx-auto px-4 text-center">
    <p class="text-gray-400 text-sm">&copy; <?php echo date('Y'); ?> Haytham Fourati. All rights reserved.</p>
  </div>
</footer>

    </div> <!-- /#smooth-content -->
  </div> <!-- /#smooth-wrapper -->

<?php wp_footer(); ?>

<!-- Mobile menu toggle script -->
<script>
  document.getElementById('mobile-menu-button').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
  });
</script>

</body>
</html>
