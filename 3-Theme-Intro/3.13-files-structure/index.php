<!-- 3.13 -->
<?php get_header(); ?>
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
            <div class="col-md-12">
              <h2 class="post-title">
                <!-- Add Permalink for each post & wrap "the_title" -->
                <a href=<?php the_permalink(); ?>>
                  <?php the_title(); ?>
                </a>
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <p>
                <strong><?php the_author(); ?></strong><br/>
                <?php //the_date(); ?>
                <!-- ei "the_date" function a problem asey! ki??? jodi 'same date' a multiple posts thake, sudhu 1st post a date display hy UI te! -->
                <!-- SOLUTION -->
                <?php
                echo get_the_date('jS F, Y'); // date format can be passed here as well!
                ?>
                </p>

              <!-- get the tags -->
              <?php
              // get_the_tag_list($before, $sep, $after, $id)
              echo get_the_tag_list('<ul class="list-unstyled"><li>', '</li><li>', '</li></ul>');
              ?>

              <ul class="list-unstyled">
                <li>dhaka</li>
              </ul>
            </div>
            <div class="col-md-8">
              <p>
                <?php
                if( has_post_thumbnail() ) {
                  // the_post_thumbnail($size, $attr)
                  the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) );
                }
                ?>
              </p>
              
              <?php the_excerpt(); ?>
            </div>
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
  <!-- 3.13 -->
  <?php get_footer(); ?>