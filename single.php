<?php get_header(); ?>
<img src="http://healthvillesanatory1.local/wp-content/themes/healthville-sanatory/images/background-single.jpg" class="header__background--single" width="100%" >

   </header>
    <main class="single--post">

            <?php while(have_posts()){
                the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content();  } ?>
    </main>
<?php get_footer(); ?>


