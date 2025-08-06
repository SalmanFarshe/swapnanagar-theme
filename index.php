<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- calling wp head -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
        include_once('templates/global/header.php');
      
        include_once('templates/global/hero.php');
      
        include_once('templates/home/features.php');
      
        include_once('templates/home/buildings.php');
      
        include_once('templates/global/tolet.php');
      
        include_once('templates/global/owners.php');
      
        include_once('templates/global/markets.php');
      
        include_once('templates/global/tutors.php');
      
        include_once('templates/global/news.php');
      
        include_once('templates/global/notice.php');
      
        include_once('templates/home/reviews.php');
      
        include_once('templates/global/counters.php');
      
        include_once('templates/global/cta.php');
      
        include_once('templates/global/blogss.php');
      
        include_once('templates/global/contact.php');
      
        include_once('templates/global/footer.php');
    ?>
    <!-- calling wp foot -->
    <?php wp_footer(); ?>
</body>
</html>
