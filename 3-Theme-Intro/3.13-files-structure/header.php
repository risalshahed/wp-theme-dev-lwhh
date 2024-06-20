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
            <!-- 3.13 -->
            <?php // echo site_url(); // URL of Home Page of a Website ?>
            <a href='<?php echo site_url(); ?>'>
              <?php bloginfo('name'); ?>
            </a>
          </h1>
        </div>
      </div>
    </div>
  </div>