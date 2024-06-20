<!-- header -->
<?php get_header(); ?>

  <!-- "posts" theke kono post ba post er title a, jeikhane hyperlink kra asey, oitay click korle, ei "single.php" FILE execute korbe! r "single.php" NAA thakle, 'index.php' execute korbe. This is called TEMPLATE HIERARCHY -->

  <!-- 3.17.1 Changes due to Sidebar -->
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="posts">
          <!-- Display Posts by Loop -->
          <?php
          // while( have_posts() ) {
          while( have_posts() ) :
            the_post();
            ?>
      
            <div class="post" <?php post_class(); ?>>
              <div class="container">
                <div class="row">
                  <!-- column er size change kori for single view -->
                  <div class="col-md-12">
                    <h2 class="post-title">
                      <?php the_title(); ?>
                    </h2>
                    <p>
                      <strong><?php the_author(); ?></strong><br/>
                      <?php
                      echo get_the_date('jS F, Y');
                      ?>
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <p>
                      <?php
                      if( has_post_thumbnail() ) {
                        // the_post_thumbnail($size, $attr)
                        the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) );
                      }
                      ?>
                    </p>
                    <!-- eta single post, so full content dekhao -->
                    <?php the_content(); ?>
                  </div>
                  <!-- comment -->
                  <!-- check if comments is open -->
                  <?php
                  if( comments_open() ) :
                  ?>
                    <div class="col-md-12">
                      <?php comments_template(); ?>
                    </div>
                  <?php endif; ?>
                  <!-- 3.16 previous & next post link -->
                  <?php
                  previous_post_link();
                  echo '&nbsp&nbsp&nbsp&nbsp&nbsp';
                  next_post_link();
                  ?>
      
                </div>
              </div>
            </div>
      
            <?php
          // }
          endwhile;
          ?>
      
          <!-- ********** Pagination ********** -->
          <div class="container post-pagination">
            <div class="row">
              <!-- Blank Column -->
              <div class="col-md-4"></div>
              <!-- END of Blank Column -->
              <div class="col-md-8">
                <?php
                the_posts_pagination();
                ?>
              </div>
            </div>
          </div>
      
        </div>
      </div>
      <!-- 3.17.2 Sidebar -->
      <div class="col-md-4">
        <!-- 3.17.3 check the registered sidebar with ID derived from 'functions.php' -->
         <?php
         if( is_active_sidebar('sidebar-1') ) {
          dynamic_sidebar('sidebar-1');
         }
         ?>
      </div>
    </div>
  </div>
  <!-- footer -->
  <?php get_footer(); ?>