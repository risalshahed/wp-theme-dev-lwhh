  <div class="footer">
    <div class="container">
      <div class="row d-flex justify-content-between">
        <div>
          <!-- 3.18 check the registered sidebar with ID derived from 'functions.php' -->
          <?php
          if( is_active_sidebar('footer-left') ) {
            dynamic_sidebar('footer-left');
          }
          ?>
        </div>
        <div>
          <?php
          if( is_active_sidebar('footer-right') ) {
            dynamic_sidebar('footer-right');
          }
          ?>
        </div>
      </div>
    </div>
  </div>


  <!-- ************** CALL wp_footer() ************** -->
  <?php wp_footer(); ?>
</body>
</html>