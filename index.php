<?php get_header(); ?>
<img src="http://healthville-sanatory.local/wp-content/themes/healthville-sanatory/images/background-single.jpg" class="header__background--single" width="100%" >

   </header>
    <main>
       
            <?php while(have_posts()){
                the_post(); ?>
                <div class="blog-post"><h1 class="blog-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          
                <p class="blog-post-details">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
    
               <?php the_excerpt(); ?> 
                    <p><a  href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p></div>
                <?php }
            echo paginate_links();?>  
    </main>
<?php get_footer(); ?>