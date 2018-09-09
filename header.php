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
            <li><a href="<?php echo site_url('/about-us')?>">About Us</a></li>
            <li><a href="<?php echo site_url('/treatments')?>">Treatments</a></li>
            <li><a href="<?php echo site_url('/events')?>">Events</a></li>
             <li class="header__logo--li" ><a href="<?php echo site_url()?>"><img src="http://healthville-sanatory.local/wp-content/themes/healthville-sanatory/images/logo.png" alt="logo" class="header__logo"></a></li>
            <li><a href="<?php echo site_url('/blog')?>">Blog</a></li>
            <li><a href="<?php echo site_url('/my-account')?>">My account</a></li>
            <li><a href="<?php echo site_url('/search')?>">Search</a></li>
         </ul>
      </nav>
     