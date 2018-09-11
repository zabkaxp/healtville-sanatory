<?php get_header(); ?>
<img src="http://healthville-sanatory.local/wp-content/themes/healthville-sanatory/images/background-single.jpg" class="header__background--single" width="100%" >

   </header>
    <main class="single--post">

        <a href="<?php echo get_post_type_archive_link('treatment'); ?>">Go to all treatments</a>
       
          

                  <ul>
                    <?php  while(have_posts()) {
                    the_post(); ?>
                       <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
                      <?php }
                        echo paginate_links(); ?>
                    </ul>

        
    </main>
<?php get_footer(); ?>

