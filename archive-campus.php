<?php get_header(); ?>
<img src="http://healthville-sanatory.local/wp-content/themes/healthville-sanatory/images/background-single.jpg" class="header__background--single" width="100%" >

   </header>
    <main class="single--post">

          

                  <ul>
                    <?php  while(have_posts()) {
                    the_post(); ?>
                      $mapLocation = get_field('map');   ?>
                      <div data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng']; ?>"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><?php echo $mapLocation['address']; ?></div>

                       <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
                      <?php }
                    </ul>

        
    </main>
<?php get_footer(); ?>

