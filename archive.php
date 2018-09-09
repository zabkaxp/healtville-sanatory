<?php get_header(); ?>
<img src="http://healthville-sanatory.local/wp-content/themes/healthville-sanatory/images/background-single.jpg" class="header__background--single" width="100%" >
  <?php if(is_category()){
      single_cat_title();    }
    if(is_author()){
      echo 'Posts by '; the_author();   }
    the_archive_description();
?>

  
   </header>
    <main>
        <div class="container">
            <?php while(have_posts()){
                the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content();  } ?>

            
            
        </div>
    </main>
<?php get_footer(); ?>