<?php get_header(); ?>
<img src="http://healthville-sanatory.local/wp-content/themes/healthville-sanatory/images/background-single.jpg" class="header__background--single" width="100%" >
   </header>
    <main>
        
            <?php while(have_posts()){
                the_post(); ?>
                <h1 ><?php the_title(); ?></h1>
                <?php the_content();?><?php  } ?>

          
    </main>
<?php get_footer(); ?>