<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php wp_head(); ?>  
   <meta charset= ”<?php bloginfo(‘charset’); ?>”>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Healthville Sanatory is a place where you will rediscover your enery, hapiness and youth.">
   <meta name="keywords" content="sanatory, retirement, place for older people, health, healing depression, spa, meeting elderly people, happy retirement">
   <meta name="author" content="Marta Wojno">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="style.css">
   <link rel="shortcut icon" type="image/png" href="images/logo.png">
   <title>Healthville Sanatory</title>
</head>
<body <?php body_class(); ?>>
   <header>
        
      <nav class="main-nav">
         <ul class="nav-list">
            <a href="<?php echo site_url('/about-us')?>"><li>About Us</li></a>
            <a href="<?php echo site_url('/treatments')?>"><li>Treatments</li></a>
            <a href="<?php echo site_url('/events')?>"><li>Events</li></a>
            <a href="<?php echo site_url()?>"><li class="header__logo--li" ><img src="http://healthvillesanatory1.local/wp-content/themes/healthville-sanatory/images/logo.png" alt="logo" class="header__logo"></li></a>
            <a href="<?php echo site_url('/blog')?>"><li>Blog</li></a>
            <a href="<?php echo site_url('/my-account')?>"><li>My account</li></a>
            <li class="search-trigger">Search</li>
         </ul>
      </nav>
     