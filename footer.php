<?php 
  if (is_single()) {
    $classBody = 'page-look';
  } else if (is_archive()) {
    $classBody = 'page-home';
  } else {
    $classBody = 'page-intro';
  }
  if ($classBody != 'page-intro'): 
?>
  
<!-- end main -->
</main>

 <!-- FOOTER -->

  <footer class="footer">
    
    <span class="footer-copyright">Copyright 2015</span>

    <nav class="footer-nav">
      <ul>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Archives</a></li>
      </ul>
    </nav>

  </footer>
  
  <?php endif ?>
</body>



  
  <!-- SCRIPTS -->

  <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/librairies/jquery.js"></script>
  <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/librairies/js.cookie.js"></script>
  <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/scripts/app.js"></script>


</html>