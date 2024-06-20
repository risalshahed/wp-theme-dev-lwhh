<?php
// Get the Site Title with a WP Hook
// bloginfo('name');   // echo DIRECTLY

// V.V.V.V.I. "functions.php" the lekha function r ei 'index.php' te aladavabe include kra lagbe na, WP automatically eita include krbe!

$title = get_bloginfo('name');

echo change_case($title);