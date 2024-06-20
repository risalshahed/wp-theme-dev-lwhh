<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php bloginfo('name'); ?>
  </title>
</head>
<body>

  <?php
  while (have_posts()) {
    // the_title(); // will create an INFINITE LOOP!
    the_post();   // Function the_post() checks whether the loop has started and then sets the current post by moving, each time, to the next post in the queue.

    echo '<h2>';
    the_title();
    echo '</h2>';

    // the_content();
  }
  ?>

</body>
</html>