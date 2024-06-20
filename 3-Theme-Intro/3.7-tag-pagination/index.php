<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- <title>Hello Dolly</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
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
                <?php the_title(); ?>
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                <p>
                  <strong><?php the_author(); ?></strong><br/>
                  <?php the_date(); ?>
                </p>

                <!-- 3.7.1 get the tags -->
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
              
              <?php // the_content(); ?>
              <!-- 3.7.3 to display summary -->
              <?php the_excerpt(); ?>

            </div>
          </div>

        </div>
      </div>

      <?php
    // }
    endwhile;
    ?>

    <!-- ********** 3.7.2 Pagination ********** -->
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