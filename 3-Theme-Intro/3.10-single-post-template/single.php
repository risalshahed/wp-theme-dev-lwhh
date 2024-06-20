<!-- 3.10.1 copy everything from 'index.php' -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- ************** CALL wp_head() ************** -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="tagline">
            <?php bloginfo('description'); ?>
          </h3>
          <h1 class="align-self-center display-1 text-center heading">
            <?php bloginfo('name'); ?>
          </h1>
        </div>
      </div>
    </div>
  </div>

  <!-- 3.10.2, "posts" theke kono post ba post er title a, jeikhane hyperlink kra asey, oitay click korle, ei "single.php" FILE execute korbe! r "single.php" NAA thakle, 'index.php' execute korbe. This is called TEMPLATE HIERARCHY -->

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
            <!-- 3.10.4 column er size change kori for single view -->
            <div class="col-md-10 offset-md-1 text-center">
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
            <div class="col-md-10 offset-md-1">
              <p>
                <?php
                if( has_post_thumbnail() ) {
                  // the_post_thumbnail($size, $attr)
                  the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) );
                }
                ?>
              </p>
              <!-- 3.10.3 eta single post, so full content dekhao -->
              <?php the_content(); ?>
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

  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          &copy; LWHH - All Rights Reserved
        </div>
      </div>
    </div>
  </div>


  <!-- ************** CALL wp_footer() ************** -->
  <?php wp_footer(); ?>
</body>
</html>