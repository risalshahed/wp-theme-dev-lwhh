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
                <ul class="list-unstyled">
                    <li>dhaka</li>
                </ul>
            </div>
            <div class="col-md-8">
              <p>
                <!-- <img
                  class="img-fluid"
                  src="https://images.pexels.com/photos/301929/pexels-photo-301929.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=800"
                  alt="Post Title"
                > -->
                <?php
                if( has_post_thumbnail() ) {
                  // Add 'img-fluid' class according to the img tag mentioned above
                  // the_post_thumbnail($size, $attr)
                  the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) );
                }
                ?>
              </p>
              
              <?php the_content(); ?>
            </div>
          </div>

        </div>
      </div>

      <?php
    // }
    endwhile;
    ?>
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